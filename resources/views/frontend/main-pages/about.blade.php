@extends('frontend.main-pages.app_main')

@section('content')


                        <div class="inner-pages-bnr">
                <img src="{{ asset('nestla/images/about-banner.jpg')}}" class="img-responsive" alt="about-banner-image">
                <div class="banner-caption">
                    <h1>About Us</h1>
                    <ul class="breadcumb">
                        <li class="breadcrumb-item"><a href="#">Home</a> -</li>
                                                                                                            <li class="active breadcrumb-item">About</li>

                    </ul>
                </div>
            </div>

            <!--=========Start============-->
                                        <!--=========End============-->




<section class="bestthing-section why-choose-section why-choose-section_01">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 bestthing-text-column">

                <h2>Reputable investment source
                </h2>
                <p class="fnt-14">Nastla LTD consists of professional traders that manage your brokerage account on your
                                  behalf. Whether you are a small or large investor, we can assist you with your
                                  investment goals. </p>

                <div class="row martop30">
                    <div class="col-md-6">
                        <h4>Why choose us?</h4>
                        <p class="fnt-14">Furthermore, you will have access to our streamlined service and ongoing
                                          support. We provide a service that is based on integrity and is fully
                                          transparent. Our investment methods are unique. We utilize cutting edge
                                          technology and trade a diverse range of currency pairs. </p>
                    </div>
                    <div class="col-md-6">
                        <h4>Our strengths</h4>
                        <p class="fnt-14"> With the simple and logical investment plans accompanied by high and stable
                                           profit, it will simplify everyone's thinking about the online investment
                                           world and help people make money more easily in that. </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bestthing-img whychoos-img">
        <img src="{{ asset('nestla/images/why-choose-bg.png')}}" alt="choose-image">
    </div>
</section>

<section class="history-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Company Timeline</h2>
            </div>
            <div class="col-md-3 col-sm-6 history-list text-center">
                <span class="top-img"><img src="{{ asset('nestla/images/humble-begin-img.png')}}" class="img-responsive" alt="humble-image"></span>
                <div class="history-list-middle">
                    <div class="white-circle">
                        <div class="white-circle-border">
                            <div class="yellow-circle">2007</div>
                        </div>
                    </div>
                    <span class="year-circle"></span>
                </div>
                <h5>Humble beginnings</h5>
                <p class="line-height26">A group of commercial traders initiated trading in financial markets.</p>
            </div>
            <div class="col-md-3 col-sm-6 history-list text-center">
                <span class="top-img"><img src="{{ asset('nestla/images/headquarter-img.png')}}" class="img-responsive"
                                           alt="headquarter-image"></span>
                <div class="history-list-middle">
                    <div class="white-circle">
                        <div class="white-circle-border">
                            <div class="yellow-circle">2012</div>
                        </div>
                    </div>
                    <span class="year-circle"></span>
                </div>
                <h5>Bigger opportunities</h5>
                <p class="line-height26">Profits generated were reused to generate even better margins of profits.</p>
            </div>
            <div class="col-md-3 col-sm-6 history-list text-center">
                <span class="top-img"><img src="{{ asset('nestla/images/opening-loc-img.png')}}" class="img-responsive" alt="location-image"></span>
                <div class="history-list-middle">
                    <div class="white-circle">
                        <div class="white-circle-border">
                            <div class="yellow-circle">2018</div>
                        </div>
                    </div>
                    <span class="year-circle"></span>
                </div>
                <h5>Company formation</h5>
                <p class="line-height26">Nastla LTD is fully legit and officially registered company in United
                                         Kingdom.</p>
            </div>
            <div class="col-md-3 col-sm-6 history-list text-center">
                <span class="top-img"><img src="{{ asset('nestla/images/coverage-img.png')}}" class="img-responsive"
                                           alt="worldwide-image"></span>
                <div class="history-list-middle">
                    <div class="white-circle">
                        <div class="white-circle-border">
                            <div class="yellow-circle">2019</div>
                        </div>
                    </div>
                    <span class="year-circle"></span>
                </div>
                <h5>World wide coverage</h5>
                <p class="line-height26">Our vision is to grow along with our clients and expand globally. </p>
            </div>
        </div>
    </div>
</section>

<section class="hight-level-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>In <span>quality assurance a constant effort </span> is made to enhance the quality practices in the
                    organization.</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-xs-12">
                <p class="fnt-17">The most important aspect of our investments, which range from low, middle and high
                                  income are based on the fact that our core investment is always guaranteed, and now we
                                  welcome everyone with Internet access and an account.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-xs-12 text-center">
                <ul class="icon_size">
                    <li class="vision-icon"><i class="fa fa-eye"></i>Vision</li>
                    <li class="value-icon"><i class="fa fa-line-chart"></i>Values</li>
                    <li class="mission-icon"><i class="fa fa-rocket"></i> Mission</li>
                </ul>
            </div>
        </div>
    </div>
</section>



@endsection
