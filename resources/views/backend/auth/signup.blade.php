<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up - FashionBazaar</title>
    @include('backend.layouts.links.upperLinks')
</head>

<body>
<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-info text-gradient">Sign Up</h3>
                                @if(Session::has('failed'))
                                    <p class="text-danger mb-0">{{Session::get('failed') }}</p>
                                @else
                                    <p class="mb-0">Please provide your information to continue with us.</p>
                                @endif
                            </div>
                            <div class="card-body">
                                <form role="form" action="{{ route('doSignup') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <label for="name">Name</label>
                                    <div class="mb-3">
                                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name" aria-label="Name" aria-describedby="name-addon" required>
                                    </div>

                                    <label for="email">Email</label>
                                    <div class="mb-3">
                                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email" aria-label="Email" aria-describedby="email-addon" required>
                                    </div>

                                    <label for="mobile">Mobile</label>
                                    <div class="mb-3">
                                        <input type="tel" id="mobile" name="mobile" class="form-control" value="{{ old('mobile') }}" placeholder="Mobile" aria-label="Mobile" aria-describedby="mobile-addon" required>
                                    </div>

                                    <label for="function">Function</label>
                                    <div class="mb-3">
                                        <input type="text" id="function" name="function" class="form-control" value="{{ old('function') }}" placeholder="Function" aria-label="Function" aria-describedby="function-addon">
                                    </div>

                                    <label for="bio">Bio</label>
                                    <div class="mb-3">
                                        <textarea id="bio" name="bio" class="form-control" placeholder="Bio" aria-label="bio" aria-describedby="bio-addon" rows="4">{{ old('bio') }}</textarea>
                                    </div>

                                    <label for="location">Location</label>
                                    <div class="mb-3">
                                        <input type="text" id="location" name="location" class="form-control" value="{{ old('location') }}" placeholder="Location" aria-label="Location" aria-describedby="location-addon">
                                    </div>

                                    <label for="img">Profile Photo</label>
                                    <div class="mb-3">
                                        <input type="file" id="img" name="img" class="form-control" aria-label="Image" aria-describedby="image-addon">
                                    </div>

                                    <label for="password">Set Password</label>
                                    <div class="mb-3">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required>
                                    </div>

                                    <label for="password_confirmation">Confirm Password</label>
                                    <div class="mb-3">
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="password-addon" required>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Already have an account?
                                    <a href="{{ route('login') }}" class="text-info text-gradient font-weight-bold">Sign In</a>
                                </p>
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
    </section>
</main>

@include('backend.layouts.links.lowerLinks')
</body>

</html>
