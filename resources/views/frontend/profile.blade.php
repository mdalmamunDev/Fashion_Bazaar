@extends('frontend.layouts.master')
@section('page', $user->name)
@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/profile.css') }}">
@endsection

@section('content')
    <!-- Profile 1 - Bootstrap Brain Component -->
    <section class="bg-light">
        <div class="container">
            <div class="row gy-4 gy-lg-0">
                <div class="col-12 col-lg-4 col-xl-3">
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="card widget-card border-light shadow-sm">
                                <div class="card-header text-bg-danger">Welcome, {{ $user->name }}</div>
                                <div class="card-body">
                                    <div class="text-center mb-3">
                                        <img src="{{ asset('storage/' . $user->img) }}" class="img-fluid" alt="Luna John">
                                    </div>
                                    <h5 class="text-center mb-1">{{ $user->name }}</h5>
                                    <p class="text-center text-secondary mb-4">{{ $user->type_str }}</p>
                                    <ul class="list-group list-group-flush mb-4">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <h6 class="m-0">Rank</h6>
                                            <span>52</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <h6 class="m-0">Purchases</h6>
                                            <span>5,987</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <h6 class="m-0">Points</h6>
                                            <span>4,620</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card widget-card border-light shadow-sm">
                                <div class="card-header text-bg-danger">Tags</div>
                                <div class="card-body">
                                    <span class="badge text-bg-danger">Top bayer</span>
                                    <span class="badge text-bg-danger">VIP Member</span>
                                    <span class="badge text-bg-danger">Loyal Customer</span>
                                    <span class="badge text-bg-danger">New Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="card widget-card border-light shadow-sm">
                        <div class="card-body p-4">
                            <ul class="nav nav-tabs" id="profileTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview-tab-pane" type="button" role="tab" aria-controls="overview-tab-pane" aria-selected="true">Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="activities-tab" data-bs-toggle="tab" data-bs-target="#activities-tab-pane" type="button" role="tab" aria-controls="activities-tab-pane" aria-selected="false">Activities</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages-tab-pane" type="button" role="tab" aria-controls="messages-tab-pane" aria-selected="false">Messages</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="edit-tab" data-bs-toggle="tab" data-bs-target="#edit-tab-pane" type="button" role="tab" aria-controls="edit-tab-pane" aria-selected="false">Edit</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-4" id="profileTabContent">
                                <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
                                    <h5 class="mb-3">About</h5>
                                    <p class="lead mb-3">Ethan Leo is a seasoned and results-driven Project Manager who brings experience and expertise to project management. With a proven track record of successfully delivering complex projects on time and within budget, Ethan Leo is the go-to professional for organizations seeking efficient and effective project leadership.</p>
                                    <h5 class="mb-3">Profile</h5>
                                    <div class="row g-0">
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Full Name</div>
                                        </div>
                                        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $user->name }}</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Type</div>
                                        </div>
                                        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $user->type_str }}</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Function</div>
                                        </div>
                                        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $user->function }}</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Email</div>
                                        </div>
                                        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $user->email }}</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Mobile</div>
                                        </div>
                                        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $user->mobile }}</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Location</div>
                                        </div>
                                        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $user->location }}</div>
                                        </div>
                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                            <div class="p-2">Joined since</div>
                                        </div>
                                        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                            <div class="p-2">{{ $user->created_at }}</div>
                                        </div>
                                    </div>

                                    <form action="{{ route('logout') }}" method="post">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger mt-4">Logout</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="activities-tab-pane" role="tabpanel" aria-labelledby="activities-tab" tabindex="0">
                                    <h2>All activities will available here</h2>
                                </div>
                                <div class="tab-pane fade" id="messages-tab-pane" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">
                                    <h2>All messages will available here</h2>
                                </div>
                                <div class="tab-pane fade" id="edit-tab-pane" role="tabpanel" aria-labelledby="edit-tab" tabindex="0">
                                    <form action="#!" class="row gy-3 gy-xxl-4">
                                        {{ csrf_field() }}

                                        <div class="col-12 col-md-6">
                                            <label for="inputFirstName" class="form-label">Full name</label>
                                            <input type="name" class="form-control" id="inputFirstName" value="{{ $user->name }}">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="inputEmail" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail" value="{{ $user->email }}">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="inputPhone" class="form-label">Mobile</label>
                                            <input type="tel" name="mobile" class="form-control" id="inputPhone" value="{{ $user->mobile }}">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="inputLocation" class="form-label">Location</label>
                                            <input type="text" name="location" class="form-control" id="inputLocation" value="{{ $user->location }}">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAbout" class="form-label">Bio</label>
                                            <textarea class="form-control" name="bio" id="inputAbout">{{ $user->bio }}</textarea>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputImg" class="form-label">Profile image</label>
                                            <input type="file" name="img" class="form-control" id="inputImg" aria-label="Image">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputOldPassword" class="form-label">Old Password</label>
                                            <input type="password" name="old_password" class="form-control" id="inputOldPassword">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputNewPassword" class="form-label">New Password</label>
                                            <input type="password" name="password" class="form-control" id="inputNewPassword">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputConfirmPass" class="form-label">Confirm password</label>
                                            <input type="password" name="confirm_password" class="form-control" id="inputConfirmPass">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-danger">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection


@section('script')
    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
