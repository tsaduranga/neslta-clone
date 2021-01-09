@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card">
             <form action="{{ route('frontend.confirm.new_deposit')}}" method="post">
                 @csrf
                <div class="card-header">New Deposites</div>

                <div id="package_error"></div>



                @foreach ($packages as $package)

                <div class="m-4">
                <input type="radio" class="package" id="package"  name="package" value="{{ $package['id'] }}">
                <h3>Package name :  {{ $package['name'] }}</h3>
                <p>Amount Range: ${{ $package['amount_min']}} to  ${{ $package['amount_max']}}  </p>
                <p>After {{ $package['no_of_days']}} days</p>
                <p>Interest Rate {{ $package['interest_rate'] +100 }} %</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" onclick="calculate('{{ $package }}')" data-toggle="modal" data-target="#exampleModal">
                        Load the Model
                </button>
                {{-- <a class="btn btn-primary btn-sm btn-block" href="javascript:void(0)" onclick="window.open('http://localhost:8000/deposite_model/{{ $package['id'] }}','Calculator','width=350,height=330,left='+(screen.width/2-350/2)+',top='+(screen.height/2-330/2))">Calculate Profit</a> --}}

                </div>

                @endforeach

                <div class="row ml-3">
                    <div class="col-6">
                        <label for="amount">Amount</label>
                        <input type="numbers" name="amount" id="amount" class="form-control" required>
                    </div>

                    <div class="col-6">
                        <label for="pay">Pay from</label>
                        <select name="method" id="" class="form-control" required>
                            <option value="perfectmoney">PerfectMoney</option>
                            <option value="payeer">Payeer</option>
                            <option value="bitcoin">Bitcoin</option>
                        </select>

                    </div>
                </div>



                 <input type="submit" class="btn btn-primary m-3" value="sumbit">


            </div>





            </form>
        </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}


            <div id="print_error"></div>




        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th colspan="4" class="text-center">Calculator - <span id="package_name"></span></th>
    </tr>
  </thead>
  <tbody>
    <tr>

        <input type="hidden" id="model-amount-min">
        <input type="hidden" id="model-amount-max">
        <input type="hidden" id="model-no-of-days">
        <input type="hidden" id="model-interest-rate">

      <td class="text-center">Deposit Amount ($)</td>
      <td class="text-center" >
          <input type="number" class="form-control" id="deposit-amount" >
        </td>
    </tr>
    <tr>

      <td class="text-center">Total Return</td>
      <td class="text-center" >
          <input type="text" class="form-control" id="total-return" disabled>
      </td>
    </tr>
    <tr>

      <td class="text-center">Net Profit</td>
      <td class="text-center" >
            <input type="text" class="form-control" id="net-total" disabled>
      </td>
    </tr>
  </tbody>
</table>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="modelCal()">culculate</button>
      </div>
    </div>
  </div>
</div>





</div>


<script>




    $(document).ready(function(){

        $("input[ type = 'submit']").click(function(){
            var select_package = $("input[name = 'package']:checked").val();

            if(select_package){
                return true;
            }else{
                $("#package_error").append('<div class="alert alert-danger"><ul>Plase Select A Deposit Package</ul></div>');
                return false;
            }
        });

    });



    function calculate(package){

       document.getElementById('print_error').innerHTML= "";
       document.getElementById('deposit-amount').value= "";
       document.getElementById('net-total').value ="";
       document.getElementById('total-return').value ="";

        var package = JSON.parse(package);


        var name = package.name;
        var amount_min = package.amount_min;
        var amount_max = package.amount_max;
        var no_of_days = package.no_of_days;
        var interest_rate = package.interest_rate;

        document.getElementById('package_name').innerHTML = name;

        document.getElementById('model-amount-min').value = amount_min;
        document.getElementById('model-amount-max').value = amount_max;
        document.getElementById('model-no-of-days').value = no_of_days;
        document.getElementById('model-interest-rate').value = interest_rate;



    }



    function modelCal(){

        document.getElementById('print_error').innerHTML= "";

        var amount_min_m =  parseInt(document.getElementById('model-amount-min').value) ;
        var amount_max_m = parseInt(document.getElementById('model-amount-max').value) ;
        var no_of_days_m = parseInt(document.getElementById('model-no-of-days').value)  ;
        var interest_rate_m = parseInt(document.getElementById('model-interest-rate').value) ;

        var deposit_amount_m =   parseInt(document.getElementById('deposit-amount').value);

        console.log( amount_min_m);
        console.log( amount_max_m);
        console.log( no_of_days_m);
        console.log( interest_rate_m);
        console.log( deposit_amount_m);

        if(! (isNaN(deposit_amount_m))){
            if(  deposit_amount_m >= amount_min_m &&  deposit_amount_m <= amount_max_m){

                $net_profit = (( deposit_amount_m * interest_rate_m)/100) ;

                $total_returns = deposit_amount_m  + $net_profit;

                document.getElementById('net-total').value = '$ '+$net_profit;
                document.getElementById('total-return').value = '$ '+$total_returns;



            }else{
                $("#print_error").append('<div class="alert alert-danger"><ul>Amount is not within allowed amount ranges of the package</ul></div>');

            }

        }



    }


</script>



@endsection
