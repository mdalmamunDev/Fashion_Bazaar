@extends('frontend.layouts.master')
@section('page', $product->name)
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row gx-5">
                <aside class="col-lg-6">
                    <div class="border rounded-4 mb-3 d-flex justify-content-center p-3 box-bg-red-light shadow-sm">
                        <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="{{ asset('storage/'. $product->img) }}">
                    </div>
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            {{ $product->name }}
                        </h4>
                        <div class="d-flex flex-row my-3">
                            <div class="text-warning mb-1 mr-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="text-danger {{ $i <= $averageRating ? 'fa-solid fa-star' : ($i - 0.5 <= $averageRating ? 'fa-solid fa-star-half-stroke' : 'fa-regular fa-star') }}"></i>
                                @endfor
                            </div>
                            <span class="text-success ml-2">{{ __('product.in_stock') }}</span>
                        </div>

                        <div class="row">
                            <dt class="col-3">{{ __('product.price') }}</dt>
                            <dd class="col-9">
                                @if($product->dis_rate > 0)
                                    <span class="text-danger" style="text-decoration: line-through; font-size: 14px">
                                            {{ $product->price }}$
                                        </span>
                                    <span class="text-success" style="margin-left: 10px">
                                            {{ $product->finalPrice }}$
                                        </span>
                                @else
                                    {{ $product->price }}$
                                @endif
                            </dd>

                            @if($product->dis_rate > 0)
                                <dt class="col-3">Offer</dt>
                                <dd class="col-9">{{ $product->dis_rate_frm }}% off, save {{ $product->price - $product->final_price }}$</dd>
                            @endif

                            <dt class="col-3">{{ __('product.brand') }}</dt>
                            <dd class="col-9">{{ $product->brand }}</dd>

                            <dt class="col-3">{{ __('product.sales') }}</dt>
                            <dd class="col-9">{{ $product->sales }}</dd>
                        </div>
                        <div class="my-2">
                            <h5>{{ __('product.details') }}</h5>
                            <div>
                                {!! $product->details !!}
                            </div>
                        </div>

                        <hr>

                        <a href="#" class="btn btn-warning shadow-0"> {{ __('product.buy_now') }} </a>
                        <a href="#" class="btn btn-danger shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> {{ __('product.add_to_cart') }} </a>
                        <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> {{ __('product.save') }} </a>
                    </div>
                </main>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="col-md-12">
            <div class="offer-dedicated-body-left">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                        <div class="bg-white rounded shadow-sm p-4 mb-4 clearfix graph-star-rating">
                            <h5 class="mb-0 mb-4">{{ __('product.ratings_and_reviews') }}</h5>
                            @if($reviewCount == 0)
                                <h6 class="text-danger text-center py-5">No review yet!</h6>
                            @else
                                <div class="graph-star-rating-header">
                                    <div class="star-rating">
                                        <!-- Display average star rating dynamically -->
                                        @for ($i = 1; $i <= 5; $i++)
                                            <a href="#">
                                                <i class="text-danger {{ $i <= $averageRating ? 'fa-solid fa-star' : ($i - 0.5 <= $averageRating ? 'fa-solid fa-star-half-stroke' : 'fa-regular fa-star-o') }}"></i>
                                            </a>
                                        @endfor
                                        <b class="text-black ml-2">{{ $reviewCount }}</b>
                                    </div>
                                    <p class="text-black mb-4 mt-2">
                                        <!-- set average number of review stars -->
                                        Rated {{ round($averageRating, 1) }} out of 5
                                    </p>
                                </div>
                                <div class="graph-star-rating-body">
                                    @foreach ($starDistribution as $stars => $percentage)
                                        <div class="rating-list">
                                            <div class="rating-list-left text-black">
                                                {{ $stars }} Star
                                            </div>
                                            <div class="rating-list-center">
                                                <div class="progress">
                                                    <div style="width: {{ $percentage }}%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-danger">
                                                        <span class="sr-only">{{ $percentage }}% Complete (danger)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating-list-right text-black">{{ round($percentage, 2) }}%</div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="bg-white rounded shadow-sm mb-1 restaurant-detailed-ratings-and-reviews" id="review-area">
                            <h5 class="mb-1 px-4">{{ __('product.all_ratings_and_reviews') }}</h5>
                            @if($reviewCount == 0)
                                <h6 class="text-danger text-center py-5">No review yet!</h6>
                            @else
                                @foreach ($reviews as $review)
                                    @if($review->status == 0 && !(auth()->user()->type == 1 || auth()->id() == $review->user_id))
                                        {{--    hidden review   --}}
                                        @continue
                                    @endif
                                    <div class="reviews-members px-4 py-3 border rounded {{ $review->status == 0 && auth()->id() == $review->user_id && auth()->user()->type != 1 ? 'bg-hidden' : '' }}">
                                        <div class="media">
                                            <a href="#">
                                                <img alt="{{ $review->user->name }}" src="{{ asset('storage/' . $review->user->img) ?? 'http://bootdey.com/img/Content/avatar/avatar1.png' }}" class="mr-3 rounded-pill">
                                            </a>
                                            <div class="media-body">
                                                <div class="reviews-members-header">
                                                    <span class="star-rating float-right">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <i class="text-danger {{ $i <= $review->stars ? 'fa-solid fa-star' : 'fa-regular fa-star-o' }}"></i>
                                                        @endfor
                                                    </span>
                                                    <h6 class="mb-1"><a class="text-black" href="{{ route('profile', $review->user->id) }}">{{ $review->user->name }}</a></h6>
                                                    <p class="text-gray">{{ $review->relative_time }}</p>
                                                </div>
                                                <div class="reviews-members-body">
                                                    <p class="comment-text">{{ $review->comment }}</p>
                                                </div>
                                                <div class="reviews-members-footer d-flex justify-content-between">
                                                    <div>
                                                        <a class="text-black" style="font-size: 20px" onclick="doLike({{ $review->id }}, {{ auth()->check() ? auth()->user()->id : null}})">
                                                            <i class="{{ (auth()->check() && $review->likes->contains('user_id', auth()->id())) ? 'fa-solid' : 'fa-regular' }} fa-thumbs-up" id="like-icon-{{ $review->id }}"></i>
                                                        </a>
                                                        <span id="like-count-{{ $review->id }}">{{ count($review->likes) }}</span>
                                                        <span class="total-like-user-main ml-2" dir="rtl">
                                                            @foreach($review->likes->take(3) as $like)
                                                                <a data-toggle="tooltip" data-placement="top" title="{{ $like->user->name }}" href="#"><img alt="User" src="{{ $like->user->img? asset('storage/' . $like->user->img) : 'http://bootdey.com/img/Content/avatar/avatar2.png' }}" class="total-like-user rounded-pill"></a>
                                                            @endforeach
                                                        </span>
                                                    </div>
                                                    @if(auth()->user() && (auth()->user()->type == 1 || $review->user->id == auth()->user()->id))
                                                        <div>
                                                            @if($review->status == 0 && auth()->id() == $review->user_id && auth()->user()->type != 1)
                                                                <span class="text-hidden">[Not visible]</span>
                                                            @endif
                                                            @if(auth()->user()->type == 1)
    {{--                                                            <span onclick="checkVisibility()" class="text-black ml-3 cursor-pointer" style="font-size: 20px"><i class="fa fa-eye-slash"></i></span>--}}
                                                                <form id="hide-review-{{ $review->id }}" action="{{ route('review.update', $review->id) }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <input type="hidden" name="status" value="{{ $review->status == 0 ? 1 : 0 }}">
                                                                    <input type="hidden" name="preUrl" value="{{ url()->current().'#review-area' }}">
                                                                </form>
                                                                <span onclick="event.preventDefault();
                                                                        if (confirm('Do you really want to hide this review?')) {
                                                                        document.getElementById('hide-review-{{ $review->id }}').submit();
                                                                        }"
                                                                      class="text-black ml-3 cursor-pointer" style="font-size: 20px">
                                                                    <i class="fa fa-eye{{ $review->status == 1 ? '-slash' : ''}}"></i>
                                                                </span>
                                                            @endif
                                                            @if($review->user->id == auth()->user()->id)
                                                                <span class="text-black ml-3 cursor-pointer edit-comment" onclick="window.location.href = '#leave-review-area';" style="font-size: 20px"><i class="fa fa-edit"></i></span>
                                                            @endif
                                                            <form id="delete-review-{{ $review->id }}" action="{{ route('review.destroy', $review) }}" method="POST" style="display: none;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="hidden" name="preUrl" value="{{ url()->current().'#review-area' }}">
                                                            </form>

                                                            <a href="#"
                                                               onclick="event.preventDefault();
                                                                       if (confirm('Do you really want to delete this review?')) {
                                                                       document.getElementById('delete-review-{{ $review->id }}').submit();
                                                                       }"
                                                               class="text-black ml-3 cursor-pointer" style="font-size: 20px">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if($reviewCount > env('REVIEW_LIM'))
                                <div class="d-flex justify-content-center mt-4">
                                    {{ $reviews->links('pagination::bootstrap-4') }}
                                </div>
                            @endif
                        </div>
                        <div class="bg-white rounded shadow-sm p-4 mb-5 rating-review-select-page" id="leave-review-area">
                            @if(Auth::check())
                                <div>
                                    <h5 class="mb-4">{{ $crrUserRev ?  __('product.update_your_review') : __('product.leave_your_review') }}</h5>
                                    <p class="mb-2"> {{ __('product.rate_the_product') }}</p>


                                    <form id="reviewForm" action="{{ $crrUserRev ? route('review.update', $crrUserRev->id) : route('review.store') }}" method="post">
                                        {{ csrf_field() }}
                                        @if($crrUserRev)
                                            @method('PUT')
                                        @endif
                                        <div class="mb-4">
                                            <span class="star-rating">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <i class="text-danger {{ $i <= ($crrUserRev->stars ?? 1) ? 'fa-solid fa-star' : 'fa-regular fa-star-o' }}" data-value="{{ $i }}"></i>
                                                @endfor
                                            </span>
                                            <input type="hidden" id="star_count" name="stars" value="{{ $crrUserRev->stars ?? 1 }}">
                                            <input type="hidden" id="product_id" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                                            <input type="hidden" name="preUrl" value="{{ url()->current().'#leave-review-area' }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="comment">{{ __('product.your_comment') }}</label>
                                            <textarea class="form-control txt-trans-none" id="comment" name="comment">{{ $crrUserRev->comment ?? '' }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-danger btn-sm" type="submit">{{ __('product.submit_review') }}</button>
                                        </div>
                                    </form>
                                </div>
                            @else
                                @component('frontend.layouts.noLoginAlert')
                                    @slot('motive', 'comment')
                                    @slot('preUrl', urlencode(url()->current().'#leave-review-area')) {{-- Encode the current URL --}}
                                @endcomponent
                            @endif
                        </div>
                        <div class="bg-white rounded shadow-sm p-4 mb-5 rating-review-select-page">
                            <div class="social-share d-flex justify-content-between">
                                <h3 class="text-center">{{ __('product.share_this_page') }}</h3>
                                {!!
                                    Share::page(url()->current(), 'Check out this awesome content!')
                                        ->facebook()
                                        ->twitter()
                                        ->linkedin()
                                        ->telegram()
                                        ->whatsapp()
                                        ->reddit();

                                !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css" integrity="sha384-jbCTJB16Q17718YM9U22iJkhuGbS0Gd2LjaWb4YJEZToOPmnKDjySVa323U+W7Fv" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/css/product.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/social-share.css') }}">
@endsection

@section('script')
    <script>

        // make/update review
        $(document).ready(function() {
            // Handle star clicking
            $('.star-rating i').on('click', function() {
                var starValue = $(this).data('value'); // Get the star value
                $('#star_count').val(starValue); // Set the value in the hidden input

                // Reset all stars to empty
                $('.star-rating i').removeClass('fa-solid fa-star').addClass('fa-regular fa-star-o');

                // Highlight the selected stars
                for (var i = 1; i <= starValue; i++) {
                    $('.star-rating i[data-value="' + i + '"]').removeClass('fa-regular fa-star-o').addClass('fa-solid fa-star');
                }
            });
        });
    </script>

{{--  like review--}}
    <script>
        function doLike(reviewId, userId) {
            if (userId) {
                // Send AJAX request to the server to register the like
                $.ajax({
                    url: "{{ route('review.like') }}", // Your route for liking a review
                    type: 'POST',
                    data: {
                        review_id: reviewId,
                        user_id: userId,
                        _token: '{{ csrf_token() }}' // Include CSRF token for security
                    },
                    success: function (response) {
                        if (response.success) {
                            // Update count and btn
                            $('#like-count-' + reviewId).text(response.likeCount);
                            $('#like-icon-' + reviewId).toggleClass('fa-solid', response.isLiked).toggleClass('fa-regular', !response.isLiked);
                        } else {
                            alert('Something went wrong. Please try again.');
                        }
                    },
                    error: function (e) {
                        console.log(e.error());
                        alert('An error occurred. Please try again.');
                    }
                });
            } else {
                if (confirm('Please login first to like.')) {
                    window.location.href = "{{ route('login', ['preUrl' => urlencode(url()->current().'#review-area')]) }}";
                }
            }
        }
    </script>

{{--    social share    --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>
@endsection
