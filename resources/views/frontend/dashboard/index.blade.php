@extends('layouts.app')

@section('content')





                                            <div class="row">
                                                <div class="col-sm-12">



    <div class="row ">
        <div class="col-md-12">
            <div class="col-md-4 col-sm-6 col-xs-12 service-column text-center">
                <a href="withdraw">
                    <span class="icons service-energyicon"></span>
                    <h2>$0</h2>
                    <p class="line-height26 marbtm20">Account Balance</p>
                    <a class="read-more-link" href="withdraw">Read More</a>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 service-column text-center type-2">
                <a href="deposits">
                    <span class="icons service-manufactureicon"></span>
                    <h2>$0</h2>
                    <p class="line-height26 marbtm20">Active Deposits</p>
                    <a class="read-more-link" href="deposits">Read More</a>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 service-column text-center">
                <a href="transactions">
                    <span class="icons service-manufactureicon"></span>
                    <h2>$0</h2>
                    <p class="line-height26 marbtm20">Total Earnings</p>
                    <a class="read-more-link" href="transactions">Read More</a>
                </a>
            </div>
        </div>
    </div>

    <hr/>

<div class="head-section wdt-100">
    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
        <h3 class="marbtm0">
            <small>Your Financial Information</small>
            <br/> In Details
        </h3>
        <a data-animation="animated fadeInUp" class="btn btn-md btn-warning hvr-bounce-to-right martop20"
           href="new_deposit">New Deposit +
        </a>
        <a data-animation="animated fadeInUp" class="btn btn-md btn-danger hvr-bounce-to-right martop20"
           href="withdraw">Withdraw -
        </a>
    </div>
    <div class="col-lg-8 col-md-6 col-sm-8 col-xs-12" style="border-left: 3px double #555;">


        <div class="row" style="margin-left: 0; ">
            <div class="col-md-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th colspan="2"><h4>Deposit Information</h4></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Total Deposits</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td>Active Deposits</td>
                            <td>$0</td>

                        </tr>
                        <tr>
                            <td>Last Deposit</td>
                            <td>
                                                                    --
                                                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th colspan="2"><h4>Withdrawal Information</h4></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Total Withdrawals</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td>Pending Withdrawals</td>
                            <td>
                                $0
                            </td>
                        </tr>
                        <tr>
                            <td>Last Withdrawal</td>
                            <td>
                                                                    --
                                                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>



            </div>
        </div>
        </div>



@endsection
