@extends('backend.layouts.master')


@section('title', 'Products')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Products table</h6>
                    @if(auth()->user()->type == 3)
                        <a href="{{ route('toast.wa') }}" type="button" class="btn btn-secondary">Add Product</a>
                    @else
                        <a href="{{ route('admin.pro.add') }}" type="button" class="btn btn-primary">Add Product</a>
                    @endif
                </div>
                @include('backend.product.ProductTable')
            </div>
        </div>
    </div>
@endsection