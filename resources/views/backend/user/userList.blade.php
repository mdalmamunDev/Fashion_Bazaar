{{--    required: $users    --}}

@extends('backend.layouts.master')


@section('title', 'Users')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0  d-flex justify-content-between">
                    <h6>Users table</h6>
                </div>
                @include('backend.user.userTable')
            </div>
        </div>
    </div>
@endsection