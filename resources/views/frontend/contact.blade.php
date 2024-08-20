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
                            @component('frontend.layouts.noLoginAlert')
                                @slot('motive', 'contact')
                                @slot('preUrl', url()->current())
                            @endcomponent
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end why section -->

    @include('frontend.layouts.sections.arrivalSection')
@endsection