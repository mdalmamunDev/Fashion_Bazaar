@extends('backend.layouts.master')


@section('title', 'Dashboard')
@section('content')
    <div class="content">
        @include('backend.layouts.dashboard.quickInfosDashboard')
        @include('backend.layouts.dashboard.testimonialsDashboard')
        @include('backend.layouts.dashboard.buildByDevsDashboard')
        @include('backend.layouts.dashboard.overviewsDashboard')
        @include('backend.layouts.dashboard.productsTableDashboard')
        @include('backend.layouts.dashboard.categoriesTableDashboard')
        @include('backend.layouts.dashboard.projectsDashboard')
    </div>
@endsection

@section('script')
    <script src="{{ asset('backend/assets/js/vue/testimonialVue.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vue/categoryListVue.js') }}"></script>
@endsection