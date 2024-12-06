@include('layouts.header')
<section class="custom-section-card">
    <img src="{{asset('web-template/images/sign-graduates.png')}}" alt="">
    <div class="custom-student-card-show text-white">
        <h1 class="text-3xl w-3/4">MƏZUN TƏLƏBƏYƏM</h1>
        <p class="w-7/12 text-xl lg:text-2xl py-2 lg:py-6">
            Qeydiyyatdan keçərək iş elanlarına müraciət edə bilərsiniz.
        </p>
        <button class="bg-transparent border border-white h-10 w-28 text-md lg:h-12 lg:w-36 lg:text-lg rounded-lg">
            <a href="https://unec-mis.netlify.app/register-student">Qeydiyyat</a>
        </button>
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

                    <p class="mb-4">The right messaging can make or break a deal in a competitive industry. At R. Copywriting & Co., we specialize in creating targeted, impactful content for real estate agents and financial professionals.
                        Whether you want to increase property inquiries, secure more clients, or amplify your online presence, we deliver copy that gets results. </p>

                    <div class="heroLinks d-flex flex-wrap align-items-center">
                        <a class="custom-link me-4" href="{{route('booking')}}" data-hover="Book">Book a consultation</a>

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
                        <<svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
                            <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.5 2.5 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354z"/>
                            <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708z"/>
                        </svg>
                    </div>
                    <div class="detail-box">
                        <h5>Real Estate Specialists</h5>
                        <p>Expertly written property listings and targeted marketing materials.</p>
                    </div>
                </div>

                <!-- İkinci Kutu (Asimetrik - İkon Sağda) -->
                <div class="box active">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
                        </svg>
                    </div>
                    <div class="detail-box">
                        <h5>Finance-Focused Copy</h5>
                        <p>Engaging web pages and email campaigns tailored for financial professionals.</p>
                    </div>
                </div>

                <!-- Üçüncü Kutu -->
                <div class="box">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
                            <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
                        </svg>
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
                    Brand &  <br> Growth</h2>
                <p class="svc-desc">
                    Boost your visibility with persuasive, search-friendly content that connects with your ideal audience.
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
@include('layouts.footer')
