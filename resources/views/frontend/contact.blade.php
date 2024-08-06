@extends('frontend.layouts.master')
@section('page', 'Contact')
@section('content')
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Contact us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
    <!-- why section -->
    <section class="why_section layout_padding">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="full">
                        @if(Auth::check())
                            <form action="{{ route('testimonial.store') }}" method="post">
                                <fieldset>
                                    {{ csrf_field() }}
                                    <textarea name="content" placeholder="Leave your message or review :)" required></textarea>
                                    <input type="submit" value="Submit" />
                                </fieldset>
                            </form>
                        @else
                            <div class="my-5">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('login') }}">
                                        <img src="{{ asset('frontend/animations/do-login.gif') }}" alt="do login">
                                    </a>
                                </div>
                                <h3 class="text-center mt-3 text-danger">Please <a href="{{ route('login') }}">login</a> first to contact us.</h3>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end why section -->

    @include('frontend.layouts.sections.arrivalSection')
@endsection