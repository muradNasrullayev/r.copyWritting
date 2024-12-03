@include('layouts.header')
<section class="hero" id="hero">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img
                                src="{{asset('web-template/images/slider/slider-4.jpg')}}"
                                class="img-fluid" alt="">
                        </div>

                        <div class="carousel-item">
                            <img
                                src="{{asset('web-template/images/slider/young-asian-female-dentist-white-coat-posing-clinic-equipment.jpg')}}"
                                class="img-fluid" alt="">
                        </div>

                        <div class="carousel-item">
                            <img
                                src="{{asset('web-template/images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg')}}"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

                <div class="heroText d-flex flex-column justify-content-center">

                    <h1 class="mt-auto mb-2">
                        We
                        <div class="animated-info">
                            <span class="animated-item">define </span>
                            <span class="animated-item">deliver</span>
                        </div>
                        your vision
                    </h1>

                    <p class="mb-4">At R. Copywriting & Co., we transform ideas into powerful messages that inspire action.
                        We help bridge the gap between your brand’s goals and your audience’s needs, refining your communication with clarity, purpose, and precision.
                    </p>

                    <div class="heroLinks d-flex flex-wrap align-items-center">
                        <a class="custom-link me-4" href="{{route('booking')}}" data-hover="Book">Book a consultation</a>

                        <p class="contact-email mb-0"><i class="bi-email"></i> r.copywritingco@gmail.com</p>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section>
<section class="hero" id="hero">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img
                                src="{{asset('web-template/images/slider/slider-4.jpg')}}"
                                class="img-fluid" alt="">
                        </div>

                    </div>
                </div>

                <div class="heroText2 d-flex flex-column justify-content-center">

                    <h1 class="mt-auto mb-2">
                        For Visionary Professionals and Growing Businesses
                    </h1>

                    <p class="mb-4">We create targeted, high-converting copy designed to resonate with your audience.
                    </p>
                    <div class="heroLinks d-flex flex-wrap align-items-center">
                        <a class="custom-link me-4" href="{{route('booking')}}" data-hover="Book">Book a consultation</a>

                        <p class="contact-phone mb-0"><i class="bi-phone"></i> r.copywritingco@gmail.com</p>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section>
<!-- service section -->
<section class="service_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                For Visionary Professionals and Growing Businesses
            </h2>
            <img src="images/plug.png" alt="">
        </div>

        <div class="service_container">
            <div class="box">
                <div class="img-box">
                    <img src="images/s1.png" class="img1" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Building Bridges Through Words
                    </h5>
                    <p>
                        At R. Copywriting & Co., we transform ideas into powerful messages that inspire action.
                        </p>
                </div>
            </div>
            <div class="box active">
                <div class="img-box">
                    <img src="images/s2.png" class="img1" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Crafted for Results
                    </h5>
                    <p>
                        Whether it’s expertly written property listings, dynamic social ads, or search-optimised
                        service pages, our content aligns with your business goals and drives measurable impact.
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="images/s3.png" class="img1" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Turning Strategy Into Action
                    </h5>
                    <p>
                        We’re here for real estate agents ready to stand out, tax accountants seeking persuasive
                        messaging, and professionals eager to amplify their brand.
                    </p>
                </div>
            </div>
            <div class="box ">
                <div class="img-box">
                    <img src="images/s4.png" class="img1" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Words That Work
                    </h5>
                    <p>
                        Our team specialises in professional, results-driven content designed to build trust,
                        boost engagement, and deliver results.
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="images/s5.png" class="img1" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Competitive Edge
                    </h5>
                    <p>
                        From start to finish, we ensure every word serves a purpose,
                        helping your business thrive in a competitive market.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-box">
            <a href="">
                Read More
            </a>
        </div>
    </div>
</section>
<!-- end service section -->
<!-- Contact Us Section -->
<section class="contact-us-section">
    <div class="container">
        <div class="contact-text">
            <p>Let’s craft your next success story.</p>
            <p class="highlighted-text">Contact us today.</p>
        </div>
        <div class="btn-container">
            <a href="#contact" class="contact-btn">Contact Us Today</a>
        </div>
    </div>
</section>
<!-- End Contact Us Section -->
@include('web.testimonial')

</main>
@include('layouts.footer')
