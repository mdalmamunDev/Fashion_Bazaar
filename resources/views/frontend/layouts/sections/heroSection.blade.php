{{--        required: disProducts        --}}


<div class="hero_area">
    <!-- slider section -->
    <section class="slider_section ">
        <div class="slider_bg_box">
            <img src="{{asset('frontend/images/slider-bg.jpg')}}" alt="">
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($disProducts as $idx => $pro)
                    <div class="carousel-item {{ $idx == 0 ? 'active' : '' }}">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        <span>
                                            Sale {{ $pro->dis_rate_frm}}% Off
                                        </span>
                                        <br>
                                        On {{ $pro->name }}
                                    </h1>
                                    <h3>Price:
                                        <span class="text-danger" style="text-decoration: line-through; font-size: 16px">
                                            {{ $pro->price }}$
                                        </span>
                                        <span class="text-success" style="margin-left: 10px">
                                            {{ $pro->finalPrice }}$
                                        </span>
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi viverra, est eget posuere scelerisque, purus tellus venenatis elit, ac dignissim enim turpis id ipsum. Donec id velit et ex blandit luctus quis eleifend nibh. Donec sed egestas ligula. Fusce ac nisl ex.
                                    </p>
                                    <a href="{{ route('pro.show', $pro->id) }}" class="btn-box btn1">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="container">
                <ol class="carousel-indicators">
                    @foreach($disProducts as $idx => $pro)
                        <li data-target="#customCarousel1" data-slide-to="{{ $idx }}" class="{{ $idx == 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>
    <!-- end slider section -->
</div>