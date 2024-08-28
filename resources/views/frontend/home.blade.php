@extends('frontend.layouts.master')
@section('page', 'Home')
@section('content')
    @include('frontend.layouts.sections.heroSection')
    @include('frontend.layouts.sections.categoriesSection')
    @include('frontend.layouts.sections.whySection')
    @include('frontend.layouts.sections.arrivalSection')
    @include('frontend.layouts.sections.productsSection')
    @include('frontend.layouts.sections.subscribeSection')
    @include('frontend.layouts.sections.clientSection')
@endsection

@section('styles')
    <link href="{{asset('frontend/css/cat-card.css')}}" rel="stylesheet" />
@endsection