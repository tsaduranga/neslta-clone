
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
    <div class="col-sm-12">
                    <form class="form" method="post" action="https://perfectmoney.is/api/step1.asp">


                                    <h4>Confirm deposit details</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th colspan="2">Deposit Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Package</td>
                            <td>{{ $payment['package_name'] }}</td>
                        </tr>
                        <tr>
                            <td>Deposit Amount</td>
                            <td>{{ $payment['payment_amount']}} $</td>
                        </tr>
                                                    <tr>
                                <td>Payment Amount</td>
                                <td><b>{{ $payment['payment_amount']}} USD</b></td>
                            </tr>
                                                <tr>
                            <td>Pay from</td>
                            <td>PerfectMoney </td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="form-group">


                    <input type="hidden" name="PAYEE_ACCOUNT" value="{{ $payment['payee_account'] }}">
                    <input type="hidden" name="PAYEE_NAME" value="{{ $payment['company_name'] }}">
                    <input type="hidden" name="PAYMENT_AMOUNT" value="{{ $payment['payment_amount'] }}">
                    <input type="hidden" name="PAYMENT_UNITS" value="{{ $payment['payment_unit'] }}">
                    <input type="hidden" name="STATUS_URL" value="{{ $payment['status_url'] }}">
                    <input type="hidden" name="PAYMENT_URL" value="{{ $payment['payment_url'] }}">
                    <input type="hidden" name="NOPAYMENT_URL" value="{{ $payment['no_payment_url'] }}">
{{--
                    <input type="hidden" name="ORDER_NUM" value="9801121">
                    <input type="hidden" name="CUST_NUM" value="2067609"> --}}

                    <input type="hidden" name="PAYMENT_ID" value="{{ $payment['payment_id'] }}">

                    <input type="submit" name="PAYMENT_METHOD" value="PerfectMoney account">


                    </div>

            </form>

    </div>
</div>

{{-- <script type="text/javascript">

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

</script> --}}



            </div>
        </div>
        </div>


@endsection
