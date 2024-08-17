
@extends('backend.layouts.master')

@section('title', isset($category) ? 'Edit Category' : 'Add Category')
@section('head')
    <script>
        window.catId = "{{ isset($category) ? $category->id : null }}";
    </script>
@endsection

@section('content')
    <div class="page-header min-vh-75">
        <div class="container" id="app">
            <div class="row">
                <div class="col-xl-6 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">{{isset($category) ? 'Edit Category' : 'Add Category'}}</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                        <div class="card-body">
                            <form role="form" @submit.prevent="handleSubmit" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <input type="hidden" name="id" v-model="form.id">

                                <label for="name">Name</label>
                                <div class="mb-3">
                                    <input type="text" id="name" v-model="form.category_name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon" required>
                                </div>

                                <label for="details">Details</label>
                                <div class="mb-3">
                                    <textarea id="details" v-model="form.details" class="form-control" placeholder="Details" aria-label="Details" aria-describedby="details-addon" rows="4" required></textarea>
                                </div>


                                <label for="available">Available?</label>
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="available" id="available_yes" value="1" v-model="form.status">
                                        <label class="form-check-label" for="available_yes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="available" id="available_no" value="0" v-model="form.status">
                                        <label class="form-check-label" for="available_no">No</label>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Submit</button>
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

@section('script')
    <script src="{{ asset('backend/assets/js/vue/addEditCatVue.js') }}"></script>
@endsection
