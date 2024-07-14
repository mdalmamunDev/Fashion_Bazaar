@extends('backend.layouts.master')

@section('title', isset($product) ? 'Edit Product' : 'Add Product')
@section('content')
    <div class="page-header min-vh-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">{{isset($product) ? 'Edit Product' : 'Add Product'}}</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="{{isset($product) ? route('admin.pro.update') : route('admin.pro.store')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>
                                <br/>

                                @if(isset($product))
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                @endif

                                <label for="name">Name</label>
                                <div class="mb-3">
                                    <input type="text" id="name" name="name" class="form-control" value="{{ isset($product) ? $product->name : "" }}" placeholder="Name" aria-label="Name" aria-describedby="name-addon" required>
                                </div>

                                <label for="details">Details</label>
                                <div class="mb-3">
                                    <textarea id="details" name="details" class="form-control" placeholder="Details" aria-label="Details" aria-describedby="details-addon" rows="4" required>{{ isset($product) ? $product->details : "" }}</textarea>
                                </div>

                                <label for="brand">Brand</label>
                                <div class="mb-3">
                                    <input type="text" id="brand" name="brand" class="form-control" value="{{ isset($product) ? $product->brand : "" }}" placeholder="Brand" aria-label="Brand" aria-describedby="name-addon" required>
                                </div>

                                <label for="price">Price</label>
                                <div class="mb-3">
                                    <input type="number" id="price" name="price" class="form-control" value="{{ isset($product) ? $product->price : "" }}" placeholder="Price" aria-label="Price" aria-describedby="price-addon" required>
                                </div>

                                <label for="category">Category</label>
                                <div class="mb-3">
                                    <select id="category" name="category" class="form-control" aria-label="Category" aria-describedby="category-addon" required>
                                        <option value="">Select Category</option>
                                        <option value="Category 1">Category 1</option>
                                        <option value="Category 2">Category 2</option>
                                        <option value="Category 3">Category 3</option>
                                        <option value="Category 4">Category 4</option>
                                        <option value="Category 5">Category 5</option>
                                        <!-- Add more categories as needed -->
                                    </select>
                                </div>

                                <label for="image">Product Image</label>
                                <div class="mb-3">
                                    <input type="file" id="img" name="img" class="form-control" aria-label="Image" aria-describedby="image-addon" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">{{isset($product) ? 'Update' : 'Post'}} Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                        <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('{{ asset('backend/assets/img/curved-images/curved6.jpg') }}')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
