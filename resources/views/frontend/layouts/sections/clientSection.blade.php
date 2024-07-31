{{--        required: $testimonials         --}}

<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Customer's Testimonial
            </h2>
        </div>
        <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($testimonials as $key => $test)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="{{asset('storage/' . $test->user->img)}}" class="img-cover" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{ $test->user->name }}
                                </h5>
                                <h6>
                                    {{ $test->user->type_str }}
                                </h6>
                                <p>
                                    {{ $test->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="carousel_btn_box">
                <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>