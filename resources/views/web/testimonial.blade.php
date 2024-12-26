<section class="section-padding pb-0" id="reviews">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="text-center mb-lg-5 mb-4">Our Patients</h2>

                <div class="owl-carousel reviews-carousel">
                    @foreach($testimonials as $testimonial)
                    <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                        <div class="reviews-stars">
                            @for($i=1;$i<=5 ; $i++)
                                @if($i<=$testimonial->stars)
                                    <i class="bi-star-fill"></i>
                                @else
                                    <i class="bi-star"></i>
                                @endif

                            @endfor
                        </div>


                        <p class="text-primary d-block mt-2 mb-0 w-100"><strong> {{$testimonial->title}}</strong></p>

                        <p class="reviews-text w-100">{{$testimonial->description}}</p>

                        <img
                            src="{{asset($testimonial->image)}}"
                            class="img-fluid reviews-image" alt="">

                        <figcaption class="ms-4">
                            <strong>{{$testimonial->name}}</strong>

                            <span class="text-muted">{{$testimonial->position}}</span>
                        </figcaption>
                    </figure>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</section>

