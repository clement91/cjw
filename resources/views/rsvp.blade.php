@extends('layouts.app')

@section('content')
<!-- page content -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="s-contact">
    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">RSVP</h3>
            <h1 class="display-2 display-2--light">répondez s'il vous plaît</h1>
        </div>
    </div>

    <div class="row contact-content" data-aos="fade-up">

        <div class="contact-primary">

            <h3 class="h6">Send Us Your RSVP</h3>

            <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                <fieldset>

                <div class="form-field">
                    <input name="contactName" type="text" id="contactName" placeholder="Your Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                </div>
                <div class="form-field">
                    <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value="" required="" aria-required="true" class="full-width">
                </div>
                <div class="form-field">
                    <input name="contactNo" type="text" id="contactNo" placeholder="Your Contact" value="" class="full-width">
                </div>
                <div class="form-field">
                    <select name="noOfPax" id="noOfPax" class="selectpicker" title="No. of Pax Attend" data-width="300px">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-field">
                    <select name="babyChair" id="babyChair" class="selectpicker" title="Baby Chair?" data-width="300px">
                      <option>No</option>
                      <option>Yes</option>
                    </select>
                </div>
                <div class="form-field">
                    <select name="halalFood" id="halalFood" class="selectpicker" title="Halal Food?" data-width="300px">
                      <option>No</option>
                      <option>Yes</option>
                    </select>
                </div>
                <div class="form-field">
                    <textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                </div>
                <div class="form-field">
                    <button id="btnSubmit" class="full-width btn--primary">Submit</button>
                    <div class="submit-loader">
                        <div class="text-loader">Sending...</div>
                        <div class="s-loader">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </div>
                </div>

                </fieldset>
            </form>

            <!-- contact-warning -->
            <div class="message-warning">
                Something went wrong. Please try again.
            </div>

            <!-- contact-success -->
            <div class="message-success">
                Your message was sent, thank you!<br>
            </div>

        </div> <!-- end contact-primary -->

        <div class="contact-secondary">
            <div class="contact-info">

                <h3 class="h6 hide-on-fullwidth">Contact Info</h3>

                <div class="cinfo">
                    <h5>Where to Find Us</h5>
                    <p>
                        Somewhere<br>
                        between Singapore<br>
                        and Penang
                    </p>
                </div>

                <div class="cinfo">
                    <h5>Contact Us At</h5>
                    <p>
                        clejacweds@gmail.com
                    </p>
                </div>

                <div class="hide cinfo">
                    <h5>Call Us At</h5>
                    <p>
                        Mobile: (+65) 9144 8953<br>
                        Mobile: (+65) 9860 2155<br>
                    </p>
                </div>

                <ul class="hide contact-social">
                    <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end contact-social -->

            </div> <!-- end contact-info -->
        </div> <!-- end contact-secondary -->

    </div> <!-- end contact-content -->

</section> <!-- end s-contact -->

<!-- /page content -->
@endsection
