

 @extends('layouts.app')

@section('content')





                                            <div class="row">
                                                <div class="col-sm-12">


<style type="text/css">
    label {
        width: 100%;
    }
</style>

<div class="row">


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <div class="col-sm-12">
            <form class="form" method="post" action="{{ route('frontend.confirm.new_deposit')}}">


                @csrf

                    <div class="form-group">
                        <label>Select Package</label>
                        <div class="row">


                            @foreach ($packages as $package)


                                <div class="col-sm-4">
                                    <label for="package-4">

                                        <ul class="list-group package">
                                            <li class="list-group-item list-group-item-secondary text-center">

                                                <input class="float-right mt-1" type="radio" name="package"
                                                       onchange="check_compounding()"
                                                       required id="{{ $package['id']}}"
                                                       value="4" />

                                                {{ $package['name']}}
                                            </li>
                                            <li class="list-group-item text-center">
                                                <h1 class="text-primary mb-0">{{ (100+ $package['interest_rate']) }}<sup>%</sup>
                                                </h1>
                                                <span>After {{ $package['no_of_days']}} days</span>
                                            </li>
                                            <li class="list-group-item plan px-3 text" style="font-size: 90%">Amount Range <span class="float-right pull-right">Interest Rate</span></li>
                                            <li class="list-group-item ">${{ $package['amount_min']}} -${{ $package['amount_max']}}<span class="float-right pull-right text-primary">{{ (100+ $package['interest_rate']) }}%</span></li>

                                            <li class="list-group-item">
                                                <a class="btn btn-primary btn-sm btn-block" href="javascript:void(0)" onclick="window.open('https://localhost:8000/calculator/4','Calculator','width=350,height=330,left='+(screen.width/2-350/2)+',top='+(screen.height/2-330/2))">Calculate Profit</a>
                                            </li>

                                        </ul>

                                    </label>
                                </div>





                            @endforeach



                        </div>

                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" name="amount" class="form-control" value="{{old('amount')}}" required/>
                    </div>





                    <div class="form-group">
                        <label>Pay from</label> <br/>

                        <table class="table table-bordered table-striped">
                            <tbody>


                                                            <tr>
                                    <td width="1%">
                                        <input type="radio" name="processor" required value="perfectmoney">
                                    </td>
                                    <td width="1%"><img src="{{ asset('nestla/images/processors/pm.png')}}"/></td>
                                    <td>
                                        PerfectMoney
                                    </td>
                                </tr>
                                <tr>
                                    <td width="1%">
                                        <input type="radio" name="processor" required value="payeer">
                                    </td>
                                    <td width="1%"><img src="{{ asset('nestla/images/processors/pr.png') }}"/></td>
                                    <td>
                                        Payeer
                                    </td>
                                </tr>
                                <tr>
                                    <td width="1%">
                                        <input type="radio" name="processor" required value="bitcoin">
                                    </td>
                                    <td width="1%"><img src="{{ asset('nestla/images/processors/btc.png') }}"/></td>
                                    <td>
                                        Bitcoin
                                    </td>
                                </tr>


                            </tbody>
                        </table>

                    </div>
                    <div class="form-group">
                        <button type="submit" class="button learn-more-btn home-link hvr-bounce-to-right">Submit</button>
                    </div>

            </form>

    </div>
</div>

<script type="text/javascript">

    function check_compounding() {

        var package_obj = document.querySelector('input[name="package"]:checked');

        if (package_obj !== null) {
            var package_id = package_obj.value;

            var package_compoundings = document.querySelectorAll('.package-compounding'),
                i = 0,
                l = package_compoundings.length;

            if (package_compoundings !== null) {
                for (i; i < l; i++) {
                    package_compoundings[i].style.display = 'none';
                }

                var package_compounding = document.getElementById("package-compounding-" + package_id);

                if (package_compounding !== null) {
                    package_compounding.style.display = "block";
                }
            }


        }


    }

    function check_balances() {
        var proc_obj = document.querySelector('input[name="processor"]:checked');

        if (proc_obj !== null) {
            var proc_id = proc_obj.value;

            var processor_balances = document.querySelectorAll('.processor_balances'),
                i = 0,
                l = processor_balances.length;

            for (i; i < l; i++) {
                processor_balances[i].style.display = 'none';
            }

            var processor_balance = document.getElementById('balance-' + proc_id);
            if (typeof (processor_balance) !== 'undefined' && processor_balance !== null) {
                processor_balance.style.display = "block";
            }
        }
    }

    window.addEventListener("DOMContentLoaded", function () {
        check_compounding();
        check_balances();
    }, false);

</script>



            </div>
        </div>
        </div>












@endsection













