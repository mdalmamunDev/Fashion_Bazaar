@extends('backend.layouts.master')


@section('title', 'Categories')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Categories table</h6>
                    @if(auth()->user()->type == 1)
                        <a href="{{route('cat.add')}}" type="button" class="btn btn-primary">Add Category</a>
                    @else
                        <a href="{{ route('toast.wa') }}" type="button" class="btn btn-secondary">Add Category</a>
                    @endif
                </div>
                @include('backend.categoryTable')
            </div>
        </div>
    </div>
@endsection