@extends('backend.layouts.master')


@section('title', 'Categories')

@section('content')
    <div class="row" id="categoryTableArea">
{{--        @{{ message }}--}}
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Categories table</h6>
                    @if(auth()->user()->type == 1)
{{--                        <a href="{{route('cat.add')}}" type="button" class="btn btn-primary">Add Category</a>--}}
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" @click="openModal">
                            Add Category
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="categoryModalLabel">Category</h5>
                                        <button type="button" class="close"  @click="closeModal">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
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
                        </div>
                    @else
                        <a href="{{ route('toast.wa') }}" type="button" class="btn btn-secondary">Add Category</a>
                    @endif
                </div>
                @include('backend.categoryTable')
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('backend/assets/js/vue/categoryListVue.js') }}"></script>
@endsection