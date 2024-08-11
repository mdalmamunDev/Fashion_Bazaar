@extends('frontend.layouts.master')
@section('page', 'Products')
@section('content')
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our <span>products</span>
                </h2>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="{{ route('pro.show', $product->id) }}" class="option1">
                                        Details
                                    </a>
                                    <a href="" class="option2">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
{{--                                <img src="{{ asset('frontend/images/p'. ($loop->index % 12 + 1) .'.png') }}" alt="">--}}
                                <img src="{{ asset('storage/' . $product->img) }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{ $product->name }}
                                </h5>
                                <h6 class="text-muted mb-0">
                                    @if($product->dis_rate > 0)
                                        <span>
                                        <span class="text-danger" style="text-decoration: line-through; font-size: 10px">${{ $product->price }}</span><span class="text-success" style="font-size: 8px">({{ '-'.$product->dis_rate_frm.'%' }})</span>
                                    </span>
                                        <br>
                                        ${{ $product->finalPrice}}
                                    @else
                                        ${{ $product->price }}
                                    @endif
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>
            <div class="btn-box">
                <a href="{{ url('/') }}">
                    Go Back
                </a>
            </div>
        </div>
    </section>
@endsection