@extends('frontend.main-pages.app_main')

@section('content')



                        <div class="inner-pages-bnr">
                        <img src="{{ asset('nestla/images/about-banner.jpg')}}" class="img-responsive" alt="about-banner-image">
                <div class="banner-caption">
                    <h1>Contact</h1>
                    <ul class="breadcumb">
                        <li class="breadcrumb-item"><a href="#">Home</a> -</li>
                                                                                                            <li class="active breadcrumb-item">Contact us</li>

                    </ul>
                </div>
            </div>

            <!--=========Start============-->
                                            <section class="pad95-100-top-bottom">
                        <div class="container">
                                                                                    <!--=========End============-->




<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact-info-column text-center">
        <img src="{{ asset('nestla/images/contact-address-icon.png')}}" alt="address-icon">
        <h4>Location</h4>
        <p class="fnt-17">44 Ludgate Hill Fleet Street,
                          London, UK, EC4M 7AA</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  contact-info-column text-center">
        <img src="{{ asset('nestla/images/contact-phn-icon.png')}}" alt="phone-icon">
        <h4>Phone</h4>
        <p class="fnt-17">+44 7700 900077</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  contact-info-column text-center">
        <img src="{{ asset('nestla/images/contact-msg-icon.png')}}" alt="message-icon">
        <h4>Email</h4>
        <p class="fnt-17">support@nastla.com</p>
    </div>
</div>
<div class="row text-center">
    <h3 class="mar-btm30">Leave us your query information</h3>
    <p class="fnt-18">and we will get back to you.</p>
    <div class="contact-form">
        <form class="form" method="post" name="contactForm">
            <div class="col-lg-12 col-md-12 form-field">




            </div>

            @csrf

            <div class="col-md-6 form-field input-halfrght">
                <input class="form-input" id="name" name="name" value="" required type="text"
                       placeholder="Your Name*">
            </div>
            <div class="col-md-6 form-field input-halflft">
                <input class="form-input" id="email" name="email" value="" required type="email"
                       placeholder="Your Email*">
            </div>
            <div class="col-lg-12 col-md-12 form-field">
                <input class="form-input" id="subject" name="subject" value="" required
                       type="text" placeholder="Subject*">
            </div>
            <div class="col-lg-12 col-md-12 form-field">
                <textarea class="form-comment" name="description" required id="description" rows="2" cols="1"
                          placeholder="Description*"></textarea>
            </div>


            <div class="col-md-12 form-field no-margin">
                <button type="submit" class="form-submit-btn">Send Message</button>
            </div>
        </form>
    </div>
</div>

            </div>
        </section>

            <div class="contact_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.7399040776495!2d-6.261147484122739!3d53.34791197997939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!3m2!1sen!2sus!4v1462581622087"></iframe>
        </div>




@endsection
