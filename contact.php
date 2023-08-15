<?php include('./common/header.php'); ?>
<div class="inner-banner inner-banner-bg">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Contact us</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Contact us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Contact Info Area -->
<div class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4  col-12 col-sm-8">
                <div class="contact-info-card">
                    <i class="ri-map-pin-fill"></i>
                    <h3>Our location </h3>
                    <p>Ca 560 Bush St & 20th Ave, Apt 5</p>
                    <p>San Francisco,230909, Canada</p>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="contact-info-card">
                    <i class="ri-mail-fill"></i>
                    <h3>Email us</h3>
                    <p><a href="mailto:hello@ledu.com">hello@ledu.com</a></p>
                    <p><a href="mailto:info@ledu.com">info@ledu.com</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="contact-info-card">
                    <i class="ri-phone-fill"></i>
                    <h3>Phone</h3>
                    <p><a href="tel:+44587154756">+44 587 154756</a></p>
                    <p><a href="tel:+44555514574">+44 5555 14574</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Info Area End -->

<!-- Contact Widget Area -->
<div class="contact-widget-area pb-70">
    <div class="container">
        <div class="section-title text-center mb-45">
            <span>SEND MESSAGE</span>
            <h2>Ready to get started?</h2>
        </div>
        <div class="contact-form">
            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required
                                data-error="Please Enter Your Name" placeholder="Name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required
                                data-error="Please Enter Your Email" placeholder="Email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required
                                data-error="Please Enter Your number" class="form-control" placeholder="Phone Number">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                data-error="Please Enter Your Subject" placeholder="Your Subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="7" required
                                data-error="Write your message" placeholder="Your Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="agree-label">
                            <input type="checkbox" id="chb1">
                            <label for="chb1">
                                Accept <a href="terms-condition.html">Terms & Conditions</a> And <a
                                    href="privacy-policy.html">Privacy Policy.</a>
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">
                            Send Message
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Contact Widget Area End -->

<!-- Contact Map Area -->
<div class="contact-map-area pb-100">
    <div class="container">
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.972641599872!2d-122.40869708532713!3d37.790680919018435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808bfb7cb35b%3A0x9b649f6a7d9c50e8!2s560%20Bush%20St%20%235%2C%20San%20Francisco%2C%20CA%2094108%2C%20USA!5e0!3m2!1sen!2sbd!4v1641381557316!5m2!1sen!2sbd"></iframe>
        </div>
    </div>
</div>
<!-- Contact Map Area End -->
<?php include('./common/footer.php'); ?>