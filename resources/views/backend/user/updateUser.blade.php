@extends('backend.layouts.master')

@section('title', isset($user) ? 'Edit User' : 'Add User')

@section('content')
    <div class="page-header min-vh-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">{{ isset($user) ? 'Update User' : 'Sign Up' }}</h3>
                            <p class="mb-0">Please provide your information to continue with us</p>
                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="{{ isset($user) ? route('user.update') : route('user.store') }}" enctype="multipart/form-data">
                                @csrf
                                @if(isset($user))
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                @endif

                                <span class="text-success">{{ session('success') }}</span>
                                <br/>

                                <label for="name">Name</label>
                                <div class="mb-3">
                                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name ?? '') }}" placeholder="Name" aria-label="Name" aria-describedby="name-addon" required>
                                </div>

                                <label for="email">Email</label>
                                <div class="mb-3">
                                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}" placeholder="Email" aria-label="Email" aria-describedby="email-addon" required>
                                </div>

                                <label for="mobile">Mobile</label>
                                <div class="mb-3">
                                    <input type="tel" id="mobile" name="mobile" class="form-control" value="{{ old('mobile', $user->mobile ?? '') }}" placeholder="Mobile" aria-label="Mobile" aria-describedby="mobile-addon" required>
                                </div>

                                <label for="function">Function</label>
                                <div class="mb-3">
                                    <input type="text" id="function" name="function" class="form-control" value="{{ old('function', $user->function ?? '') }}" placeholder="Function" aria-label="Function" aria-describedby="function-addon">
                                </div>

                                <label for="bio">Bio</label>
                                <div class="mb-3">
                                    <textarea id="bio" name="bio" class="form-control" placeholder="Bio" aria-label="bio" aria-describedby="bio-addon" rows="4">{{ old('bio', $user->bio ?? '') }}</textarea>
                                </div>

                                <label for="location">Location</label>
                                <div class="mb-3">
                                    <input type="text" id="location" name="location" class="form-control" value="{{ old('location', $user->location ?? '') }}" placeholder="Location" aria-label="Location" aria-describedby="location-addon">
                                </div>

                                <label for="img">Profile Photo</label>
                                <div class="mb-3">
                                    <input type="file" id="img" name="img" class="form-control" aria-label="Image" aria-describedby="image-addon">
                                </div>

                                <label for="type">Type</label>
                                <div class="mb-3">
                                    <select id="type" name="type" class="form-control" aria-label="User Type" aria-describedby="type-addon">
                                        <option value="">Select Type</option>
                                        @foreach($types as $key => $type)
                                            <option value="{{ $key }}" {{ isset($user) && $key == $user->type ? 'selected' : '' }}>
                                                {{ $type }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <label for="old_password">Old Password</label>
                                <div class="mb-3">
                                    <input type="password" id="old_password" name="old_password" class="form-control" placeholder="Old Password" aria-label="Old Password" aria-describedby="old-password-addon">
                                </div>

                                <label for="password">New Password</label>
                                <div class="mb-3">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="New Password" aria-label="Password" aria-describedby="password-addon">
                                </div>

                                <label for="password_confirmation">Confirm New Password</label>
                                <div class="mb-3">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm New Password" aria-label="Confirm Password" aria-describedby="password-addon">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">{{ isset($user) ? 'Update User' : 'Sign Up' }}</button>
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
