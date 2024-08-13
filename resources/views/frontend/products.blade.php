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
                    @include('frontend.layouts.productCard')
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