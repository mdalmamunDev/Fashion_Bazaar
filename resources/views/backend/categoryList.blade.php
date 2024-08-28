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