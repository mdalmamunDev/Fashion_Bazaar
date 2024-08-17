{{--        required: resentProducts         --}}

<section class="arrival_section">
    <div class="container">
        <div class="box">
            <div class="arrival_bg_box" style="z-index: 0">
                <img src="{{asset('frontend/images/arrival-bg.png')}}" alt="">
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto">
                    <div class="heading_container remove_line_bt">
                        <h2>
                            #NewArrivals
                        </h2>
                    </div>
                    <div>
                        @foreach($resentProducts as $pro)
                            <div class="d-flex">
                                <div class="d-flex align-items-center" style="margin-right: 10px">
                                    <img src="{{asset('storage/'.$pro->img)}}" width="60px"/>
                                </div>
                                <div>
                                    <a href="{{ route('pro.show', $pro->id) }}" class="border-0 text-dark m-0 p-0 font-weight-bold pe-auto" style="background: none; font-size: 20px; cursor: pointer">{{ $pro->name }}</a>
                                    <div class="mb-1" style="font-size: 14px">{!! truncateHtml($pro->details, 150) !!}</div>
                                    <p class="font-weight-light" style="font-size: 12px">{{ $pro->relative_time }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>