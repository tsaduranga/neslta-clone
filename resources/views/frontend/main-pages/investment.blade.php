@extends('frontend.main-pages.app_main')

@section('content')



                        <div class="inner-pages-bnr">
                        <img src="{{ asset('nestla/images/about-banner.jpg')}}" class="img-responsive" alt="about-banner-image">
                <div class="banner-caption">
                    <h1>Investment</h1>
                    <ul class="breadcumb">
                        <li class="breadcrumb-item"><a href="#">Home</a> -</li>
                                                                                                            <li class="active breadcrumb-item">Investment</li>

                    </ul>
                </div>
            </div>

            <!--=========Start============-->
                                        <!--=========End============-->





<style>

    h3.h-title {
        font-weight: 600;
        font-size: 27px;
    }

    .static-section.home3-static li label {
        cursor: pointer;
    }

    .static-section.home3-static label {
        font-weight: normal;
    }

</style>


<section class="home6 bestthing-section text-center martop60 marbtm80" style="height: auto">
    <div class="container">
        <div class="bestthing-text-column home4-bestthing-txt" style="padding-top: 75px">
            <h2>Nastla <span class="color-1">Profit Calculator</span> <br/>
            </h2>
            <p class="fnt-17">Calculate your profits by choosing your desired plan either Stable, Conservative, Moderate
                              or Aggressive <br>& invest accordingly to reap benefits.</p>
        </div>
        <div class="static-section home3-static home4-static-section home5-static-section " style="padding-top: 50px">
            <ul>
                <li>
                    <label for="plan1">
                        <h3 class="h-title"><span class="color-1">Basic</span> Plan</h3>
                        <p style="font-size: 20px"> 117% Total Return</p>
                        <p style="padding-top: 5px;font-size: 14px">After 3 days</p>
                        <h4 class="text-center">
                            <input type="radio" name="inv_plan" id="plan1" value="plan1" style="margin-top: 39px"
                                   onclick="change_plan()" checked/> Select This Plan
                        </h4>
                    </label>

                </li>
                <li>
                    <label for="plan2">
                        <h3 class="h-title"><span class="color-1">Conservative</span> Plan</h3>
                        <p style="font-size: 20px"> 137% Total Return</p>
                        <p style="padding-top: 5px;font-size: 14px">After 5 days</p>
                        <h4 class="text-center">
                            <input type="radio" name="inv_plan" id="plan2" value="plan2" style="margin-top: 39px"
                                   onclick="change_plan()"/> Select This Plan
                        </h4>
                    </label>

                </li>
                <li>
                    <label for="plan3">
                        <h3 class="h-title"><span class="color-1">Moderate</span> Plan</h3>
                        <p style="font-size: 20px"> 165% Total Return</p>
                        <p style="padding-top: 5px;font-size: 14px">After 7 days</p>
                        <h4 class="text-center">
                            <input type="radio" name="inv_plan" id="plan3" value="plan3" style="margin-top: 39px"
                                   onclick="change_plan()" /> Select This Plan
                        </h4>
                    </label>
                </li>
                <li>
                    <label for="plan4">
                        <h3 class="h-title"><span class="color-1">Aggressive</span> Plan</h3>
                        <p style="font-size: 20px"> 193% Total Return</p>
                        <p style="padding-top: 5px;font-size: 14px">After 9 days</p>
                        <h4 class="text-center">
                            <input type="radio" name="inv_plan" id="plan4" value="plan4" style="margin-top: 39px"
                                   onclick="change_plan()" /> Select This Plan
                        </h4>
                    </label>
                </li>
            </ul>
        </div>

        <div class="col-xs-12 text-center pad30-top-bottom calculator">
            <h3>~ Calculator Details ~</h3>
            <div class="input-group">

                <span class="input-group-addon">Deposit Amount</span>
                <input type="text" class="form-control" style="display: inline-block; width: auto"  placeholder="Enter Deposit Amount"
                       name="inv_amount" id="inv_amount" value="20"
                       onkeyup="calc()">
                <span class="input-group-addon">No. of Deposit Days</span>
                <input type="text" class="form-control" style="display: inline-block; width: auto" placeholder="Enter Investment Days"
                       name="inv_days" id="inv_days" value="3"
                       onkeyup="calc()">
                <span class="input-group-addon"><strong>Total Return:</strong> <b id="total_return">$0.00</b></span>
                <span class="input-group-addon"><strong>Net Profit:</strong> <b id="total_profit">$0.00</b></span>
            </div>
        </div>

    </div>

</section>

            </div>
        </section>




@endsection
