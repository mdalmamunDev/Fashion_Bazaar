@extends('backend.layouts.master')

@section('title', isset($product) ? 'Edit Product' : 'Add Product')
@section('content')
    <div class="page-header min-vh-75">
        <div class="container">
            <div class="d-flex flex-column mx-auto">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left bg-transparent">
                        <h3 class="font-weight-bolder text-info text-gradient">{{isset($product) ? 'Edit Product' : 'Add Product'}}</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                    <div class="card-body">
                        <form role="form" method="POST" action="{{isset($product) ? route('admin.pro.update') : route('admin.pro.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>
                            <span class="text-danger">{{Session::has('error') ? Session::get('error') : ''}}</span>
                            <br/>

                            @if(isset($product))
                                <input type="hidden" name="id" value="{{$product->id}}">
                            @endif

                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ isset($product) ? $product->name : "" }}" placeholder="Name" aria-label="Name" aria-describedby="name-addon" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="brand">Brand</label>
                                    <input type="text" id="brand" name="brand" class="form-control" value="{{ isset($product) ? $product->brand : "" }}" placeholder="Brand" aria-label="Brand" aria-describedby="name-addon" required>
                                </div>
                            </div>

                            <label for="details">Details</label>
                            <div class="mb-3">
                                <textarea id="mytextarea" name="details" class="form-control" placeholder="Details" aria-label="Details" aria-describedby="details-addon" rows="4">{{ isset($product) ? $product->details : "" }}</textarea>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label for="price">Price</label>
                                    <input type="number" step="0.01" id="price" name="price" class="form-control" value="{{ isset($product) ? $product->price : "" }}" placeholder="Price" aria-label="Price" aria-describedby="price-addon" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="brand">Offer</label>
                                    <input type="number" step="0.01" id="dis-rate" name="dis_rate" class="form-control" value="{{ isset($product) ? $product->dis_rate : "" }}" placeholder="Set discount rate" aria-label="Offer" aria-describedby="dis_rate-addon" required>
                                </div>
                            </div>

                            <label for="category">Category</label>
                            <div class="mb-3">
                                <select id="category_id" name="category_id" class="form-control category_select" aria-label="Category" aria-describedby="category-addon" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                                {{ isset($product) && $category->id == $product->category_id ? 'selected' : '' }}>
                                                {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <label for="image">Product Image</label>
                            <div class="mb-3">
                                <input type="file" id="img" name="img" class="form-control" aria-label="Image" aria-describedby="image-addon">
                            </div>

                            <div class="text-center">
                                <input type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" value="{{isset($product) ? 'Update' : 'Post'}} Now"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('head')
    <!-- Include CSS for Select2 -->
    <link href="{{ asset('plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />


    <script src="{{ asset('plugins/tinymce/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            menubar:false,
            statusbar: false,
            plugins: "powerpaste advcode searchreplace autolink directionality code visualblocks visualchars image link media mediaembed codesample table charmap pagebreak nonbreaking anchor tableofcontents insertdatetime advlist lists checklist wordcount tinymcespellchecker editimage help formatpainter permanentpen charmap linkchecker emoticons advtable export autosave",
            toolbar: "undo redo print spellcheckdialog formatpainter | blocks fontfamily fontsize | bold italic underline forecolor backcolor | link image | alignleft aligncenter alignright alignjustify lineheight | checklist bullist numlist indent outdent | removeformat | code",
        });
    </script>
@endsection

@section('script')
    <!-- Include JS for Select2 -->
    <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>

    <script>
        $('.category_select').select2({
            width: '100%'
        });
    </script>
@endsection