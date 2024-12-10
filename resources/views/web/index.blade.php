@section('title', 'Home page')
@include('web.layouts.header')
<section class="home-main-section">
    <div class="home-main-container">
        <div class="home-main-content-left">
            <!-- Fotoğraf, HTML'de arka plan olarak kullanılacak -->
        </div>
        <div class="home-main-content-right">
            <h1>Copywriting Services Company in India for Effective Sales Copy Writing</h1>
            <a href="#" class="home-main-contact-btn">Contact Us</a>
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
                        Your words matter.
                    </h1>

                    <p class="mb-4">The right messaging can make or break a deal in a competitive industry. At R.
                        Copywriting & Co., we specialize in creating targeted, impactful content for real estate agents
                        and financial professionals.
                        Whether you want to increase property inquiries, secure more clients, or amplify your online
                        presence, we deliver copy that gets results. </p>

                    <div class="heroLinks d-flex flex-wrap align-items-center">
                        <a class="custom-link me-4" href="{{route('booking')}}" data-hover="Book">Book a
                            consultation</a>

                        <p class="contact-email mb-0"><i class="bi-email"></i> r.copywritingco@gmail.com</p>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section>

<section class="service_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Why Choose Us?
            </h2>
            <img src="images/plug.png" alt="">
        </div>

        <div class="section-3">
            <div class="service_container">
                <!-- İlk Kutu -->
                <div class="box">
                    <div class="icon-box">

                        <img src="{{ asset('web-template/images/svg/house-fill.svg') }}" alt="House Icon" width="75" height="75">

                    </div>
                    <div class="detail-box">
                        <h5>Real Estate Specialists</h5>
                        <p>Expertly written property listings and targeted marketing materials.</p>
                    </div>
                </div>

                <!-- İkinci Kutu (Asimetrik - İkon Sağda) -->
                <div class="box active">
                    <div class="icon-box">
                        <img src="{{ asset('web-template/images/svg/cash-coin.svg') }}" alt="Cash Coin Icon" width="75" height="75">

                    </div>
                    <div class="detail-box">
                        <h5>Finance-Focused Copy</h5>
                        <p>Engaging web pages and email campaigns tailored for financial professionals.</p>
                    </div>
                </div>

                <!-- Üçüncü Kutu -->
                <div class="box">
                    <div class="icon-box">
                        <img src="{{ asset('web-template/images/svg/newspaper.svg') }}" alt="House Icon" width="75" height="75">

                    </div>
                    <div class="detail-box">
                        <h5>SEO Expertise</h5>
                        <p>Optimized content to rank higher and attract more clients online.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="btn-box">
            <a href="{{route('service')}}">
                Read More
            </a>
        </div>
    </div>
</section>
<section class="section-4">
    <div class="svc-sec-wrapper">
        <div class="svc-container">
            <div class="svc-card">
                <img src="https://placehold.co/150x150"
                     alt="Illustration of document pages with text blocks and small icons, drawn in a simple line style with mint green accent color"
                     class="svc-icon">
                <h2 class="svc-title">Real Estate &<br> Finance Copywriting</h2>
                <p class="svc-desc">
                    At R. Copywriting & Co., we craft compelling, SEO-optimized content to drive business growth.
                </p>
                <a href="#" class="svc-btn">See content rates</a>
            </div>

            <div class="svc-card">
                <img src="https://placehold.co/150x150"
                     alt="Illustration of a computer screen with gear icons above it, drawn in a simple line style with mint green accent color"
                     class="svc-icon">
                <h2 class="svc-title">Targeted Lead Generation</h2>
                <p class="svc-desc">
                    Our copywriting services help real estate agents increase property inquiries and close more deals.
                </p>
                <a href="#" class="svc-btn">Dive into SEO copy</a>
            </div>

            <div class="svc-card">
                <img src="https://placehold.co/150x150"
                     alt="Illustration of a computer screen with search results and a magnifying glass, drawn in a simple line style with mint green accent color"
                     class="svc-icon">
                <h2 class="svc-title">
                    Brand & <br> Growth</h2>
                <p class="svc-desc">
                    Boost your visibility with persuasive, search-friendly content that connects with your ideal
                    audience.
                </p>
                <a href="#" class="svc-btn">Unlock SEO opportunities</a>
            </div>
        </div>
    </div>
</section>

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

@include('web.testimonial')

</main>
@include('web.layouts.footer')
