@extends('frontend.layouts.master')
@section('page', $user->name)
@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/profile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
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
                                @if($isAuthUser)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="activities-tab" data-bs-toggle="tab" data-bs-target="#activities-tab-pane" type="button" role="tab" aria-controls="activities-tab-pane" aria-selected="false">Activities</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications-tab-pane" type="button" role="tab" aria-controls="notifications-tab-pane" aria-selected="false">Notification</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="edit-tab" data-bs-toggle="tab" data-bs-target="#edit-tab-pane" type="button" role="tab" aria-controls="edit-tab-pane" aria-selected="false">Edit</button>
                                    </li>
                                @endif
                            </ul>
                            <div class="tab-content pt-4" id="profileTabContent">
                                @include('frontend.layouts.profile.profileOverview')
                                @if($isAuthUser)
                                    @include('frontend.layouts.profile.profileActivities')
                                    @include('frontend.layouts.profile.profileNotifications')
                                    @include('frontend.layouts.profile.profileEdit')
                                @endif
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
