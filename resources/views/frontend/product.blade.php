@extends('frontend.layouts.master')
@section('page', $product->name)
@section('content')
{{--    <section data-bs-version="5.1" class="container pt-5 pb-5 bg-danger features4 stepm5 cid-tw2LyYgLR1 rounded" id="afeatures4-4">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row justify-content-start align-items-stretch">--}}
{{--                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">--}}
{{--                    <div class="image-wrapper">--}}
{{--                        <img src="{{ asset('storage/'. $product->img) }}" alt="Product Image" class="img-fluid">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card col-12 col-lg-7 p-3 rounded">--}}
{{--                    <div class="card-wrapper">--}}
{{--                        <h1 class="card-title mbr-fonts-style display-3 mb-0"><strong>{{ $product->name }}</strong></h1>--}}
{{--                        <h4 class="text-muted" style="margin-top: -15px;">{{ $product->category->category_name }}</h4>--}}
{{--                        <div>--}}
{{--                            {!! $product->details !!}--}}
{{--                        </div>--}}
{{--                        <div class="price mt-3">--}}
{{--                            <h4>Brand: {{ $product->brand }}</h4>--}}
{{--                        </div>--}}
{{--                        <div class="price mt-3">--}}
{{--                            <h4>Sales: {{ $product->sales }}</h4>--}}
{{--                        </div>--}}
{{--                        @if($product->dis_rate > 0)--}}
{{--                            <div class="price mt-3">--}}
{{--                                <h4>Offer: {{ $product->dis_rate_frm }}% off, save {{ $product->price - $product->final_price }}$</h4>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                        <div class="price mt-3">--}}
{{--                            <h4 class="">Price:--}}
{{--                                @if($product->dis_rate > 0)--}}
{{--                                    <span class="text-danger" style="text-decoration: line-through; font-size: 14px">--}}
{{--                                        {{ $product->price }}$--}}
{{--                                    </span>--}}
{{--                                    <span class="text-success" style="margin-left: 10px">--}}
{{--                                        {{ $product->finalPrice }}$--}}
{{--                                    </span>--}}
{{--                                @else--}}
{{--                                    {{ $product->price }}$--}}
{{--                                @endif--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                        <div class="action-buttons mt-4">--}}
{{--                            <a href="#" class="btn btn-primary">Add to Cart</a>--}}
{{--                            <a href="#" class="btn btn-secondary">Go Back</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <section class="py-5">
        <div class="container">
            <div class="row gx-5">
                <aside class="col-lg-6">
                    <div class="border rounded-4 mb-3 d-flex justify-content-center">
                        <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big.webp">
                            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="{{ asset('storage/'. $product->img) }}">
                        </a>
                    </div>
                    <!-- thumbs-wrap.// -->
                    <!-- gallery-wrap .end// -->
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            {{ $product->name }}
                        </h4>
                        <div class="d-flex flex-row my-3">
                            <div class="text-warning mb-1 mr-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="fa {{ $i <= $averageRating ? 'fa-star text-danger' : ($i - 0.5 <= $averageRating ? 'fa-star-half text-danger' : 'fa-star-o text-danger') }}"></i>
                                @endfor
                            </div>
                            <span class="text-success ml-2">In stock</span>
                        </div>

                        <div class="row">
                            <dt class="col-3">Price</dt>
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

                            <dt class="col-3">Brand</dt>
                            <dd class="col-9">{{ $product->brand }}</dd>

                            <dt class="col-3">Sales</dt>
                            <dd class="col-9">{{ $product->sales }}</dd>
                        </div>
                        <div class="my-2">
                            <h5>Details</h5>
                            <div>
                                {!! $product->details !!}
                            </div>
                        </div>

                        <hr>

                        <a href="#" class="btn btn-warning shadow-0"> Buy now </a>
                        <a href="#" class="btn btn-danger shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
                        <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a>
                    </div>
                </main>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="col-md-12">
            <div class="offer-dedicated-body-left">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-order-online" role="tabpanel" aria-labelledby="pills-order-online-tab">
                        <div id="#menu" class="bg-white rounded shadow-sm p-4 mb-4 explore-outlets">
                            <h5 class="mb-4">Recommended</h5>
                            <form class="explore-outlets-search mb-4">
                                <div class="input-group">
                                    <input type="text" placeholder="Search for dishes..." class="form-control">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-link">
                                            <i class="icofont-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <h6 class="mb-3">Most Popular  <span class="badge badge-success"><i class="icofont-tags"></i> 15% Off All Items </span></h6>
                            <div class="owl-carousel owl-theme owl-carousel-five offers-interested-carousel mb-3 owl-loaded owl-drag owl-hidden">

                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(-682px, 0px, 0px); transition: all 0s ease 0s; width: 2183px;">
                                        <div class="owl-item cloned" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/2.png">
                                                        <h6>Sandwiches</h6>
                                                        <small>8 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/3.png">
                                                        <h6>Soups</h6>
                                                        <small>2 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/4.png">
                                                        <h6>Pizzas</h6>
                                                        <small>56 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/5.png">
                                                        <h6>Pastas</h6>
                                                        <small>10 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/6.png">
                                                        <h6>Chinese</h6>
                                                        <small>25 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/1.png">
                                                        <h6>Burgers</h6>
                                                        <small>5 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/2.png">
                                                        <h6>Sandwiches</h6>
                                                        <small>8 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/3.png">
                                                        <h6>Soups</h6>
                                                        <small>2 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/4.png">
                                                        <h6>Pizzas</h6>
                                                        <small>56 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/5.png">
                                                        <h6>Pastas</h6>
                                                        <small>10 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/6.png">
                                                        <h6>Chinese</h6>
                                                        <small>25 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/1.png">
                                                        <h6>Burgers</h6>
                                                        <small>5 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/2.png">
                                                        <h6>Sandwiches</h6>
                                                        <small>8 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/3.png">
                                                        <h6>Soups</h6>
                                                        <small>2 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/4.png">
                                                        <h6>Pizzas</h6>
                                                        <small>56 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 136.4px;">
                                            <div class="item">
                                                <div class="mall-category-item">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/list/5.png">
                                                        <h6>Pastas</h6>
                                                        <small>10 ITEMS</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev"><i class="icofont-thin-left"></i></button>
                                    <button type="button" role="presentation" class="owl-next"><i class="icofont-thin-right"></i></button>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="mb-4 mt-3 col-md-12">Best Sellers</h5>
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                    <div class="list-card-image">
                                        <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                        <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="icofont-heart"></i></a></div>
                                        <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                        <a href="#">
                                            <img src="img/list/7.png" class="img-fluid item-img">
                                        </a>
                                    </div>
                                    <div class="p-3 position-relative">
                                        <div class="list-card-body">
                                            <h6 class="mb-1"><a href="#" class="text-black">Bite Me Sandwiches</a></h6>
                                            <p class="text-gray mb-2">North Indian • Indian</p>
                                            <p class="text-gray time mb-0"><a class="btn btn-link btn-sm pl-0 text-black pr-0" href="#">$550 </a> <span class="badge badge-success">NEW</span> <span class="float-right">
                                                 <a class="btn btn-outline-secondary btn-sm" href="#">ADD</a>
                                                 </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                    <div class="list-card-image">
                                        <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                        <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="icofont-heart"></i></a></div>
                                        <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                        <a href="#">
                                            <img src="img/list/8.png" class="img-fluid item-img">
                                        </a>
                                    </div>
                                    <div class="p-3 position-relative">
                                        <div class="list-card-body">
                                            <h6 class="mb-1"><a href="#" class="text-black">Famous Dave's Bar-B
                                                </a>
                                            </h6>
                                            <p class="text-gray mb-2">Hamburgers • Indian</p>
                                            <p class="text-gray time mb-0"><a class="btn btn-link btn-sm pl-0 text-black pr-0" href="#">$250 </a> <span class="badge badge-primary">NEW</span> <span class="float-right">
                                                 <span class="count-number">
                                                 <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                                                 <input class="count-number-input" type="text" value="1" readonly="">
                                                 <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                                                 </span>
                                            </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                    <div class="list-card-image">
                                        <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                        <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="icofont-heart"></i></a></div>
                                        <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                        <a href="#">
                                            <img src="img/list/9.png" class="img-fluid item-img">
                                        </a>
                                    </div>
                                    <div class="p-3 position-relative">
                                        <div class="list-card-body">
                                            <h6 class="mb-1"><a href="#" class="text-black">Bite Me Sandwiches</a></h6>
                                            <p class="text-gray mb-2">North Indian • Indian</p>
                                            <p class="text-gray time mb-0"><a class="btn btn-link btn-sm pl-0 text-black pr-0" href="#">$250 </a> <span class="badge badge-info">NEW</span> <span class="float-right">
                                                 <a class="btn btn-outline-secondary btn-sm" href="#">ADD</a>
                                                 </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="mb-4 mt-3 col-md-12">Quick Bites <small class="h6 text-black-50">3 ITEMS</small></h5>
                            <div class="col-md-12">
                                <div class="bg-white rounded border shadow-sm mb-4">
                                    <div class="gold-members p-3 border-bottom">
                                        <a class="btn btn-outline-secondary btn-sm  float-right" href="#">ADD</a>
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-ui-press text-danger food-item"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Chicken Tikka Sub</h6>
                                                <p class="text-gray mb-0">$314 - 12" (30 cm)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gold-members p-3 border-bottom">
                                    <span class="count-number float-right">
                                           <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                                           <input class="count-number-input" type="text" value="1" readonly="">
                                           <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                                           </span>
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-ui-press text-danger food-item"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Cheese corn Roll <span class="badge badge-danger">BESTSELLER</span></h6>
                                                <p class="text-gray mb-0">$600</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gold-members p-3">
                                    <span class="count-number float-right">
                                           <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                                           <input class="count-number-input" type="text" value="1" readonly="">
                                           <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                                           </span>
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-ui-press text-success food-item"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Cheese Spinach corn Roll <span class="badge badge-success">Pure Veg</span></h6>
                                                <p class="text-gray mb-0">$600</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="mb-4 mt-3 col-md-12">Starters <small class="h6 text-black-50">3 ITEMS</small></h5>
                            <div class="col-md-12">
                                <div class="bg-white rounded border shadow-sm mb-4">
                                    <div class="menu-list p-3 border-bottom">
                                    <span class="count-number float-right">
                                           <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                                           <input class="count-number-input" type="text" value="1" readonly="">
                                           <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                                           </span>
                                        <div class="media">
                                            <img class="mr-3 rounded-pill" src="img/5.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h6 class="mb-1">Veg Spring Roll</h6>
                                                <p class="text-gray mb-0">$314 - 12" (30 cm)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-list p-3 border-bottom">
                                    <span class="count-number float-right">
                                           <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                                           <input class="count-number-input" type="text" value="1" readonly="">
                                           <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                                           </span>
                                        <div class="media">
                                            <img class="mr-3 rounded-pill" src="img/2.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h6 class="mb-1">Stuffed Mushroom <span class="badge badge-danger">BESTSELLER</span></h6>
                                                <p class="text-gray mb-0">$600</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-list p-3">
                                    <span class="count-number float-right">
                                           <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                                           <input class="count-number-input" type="text" value="1" readonly="">
                                           <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                                           </span>
                                        <div class="media">
                                            <img class="mr-3 rounded-pill" src="img/3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h6 class="mb-1">Honey Chilli Potato
                                                    <span class="badge badge-success">Pure Veg</span>
                                                </h6>
                                                <p class="text-gray mb-0">$600</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="mb-4 mt-3 col-md-12">Soups <small class="h6 text-black-50">8 ITEMS</small></h5>
                            <div class="col-md-12">
                                <div class="bg-white rounded border shadow-sm">
                                    <div class="gold-members p-3 border-bottom">
                                        <a class="btn btn-outline-secondary btn-sm  float-right" href="#">ADD</a>
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-ui-press text-danger food-item"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Tomato Dhania Shorba</h6>
                                                <p class="text-gray mb-0">$314 - 12" (30 cm)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gold-members p-3 border-bottom">
                                        <a class="btn btn-outline-secondary btn-sm  float-right" href="#">ADD</a>
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-ui-press text-danger food-item"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Veg Manchow Soup</h6>
                                                <p class="text-gray mb-0">$600</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gold-members p-3 border-bottom">
                                    <span class="count-number float-right">
                                           <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                                           <input class="count-number-input" type="text" value="1" readonly="">
                                           <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                                           </span>
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-ui-press text-success food-item"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Lemon Coriander Soup</h6>
                                                <p class="text-gray mb-0">$600</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gold-members p-3 border-bottom">
                                        <a class="btn btn-outline-secondary btn-sm  float-right" href="#">ADD</a>
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-ui-press text-danger food-item"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Tomato Dhania Shorba</h6>
                                                <p class="text-gray mb-0">$314 - 12" (30 cm)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gold-members p-3 border-bottom">
                                        <a class="btn btn-outline-secondary btn-sm  float-right" href="#">ADD</a>
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-ui-press text-danger food-item"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Veg Manchow Soup</h6>
                                                <p class="text-gray mb-0">$600</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gold-members p-3">
                                        <a class="btn btn-outline-secondary btn-sm  float-right" href="#">ADD</a>
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-ui-press text-success food-item"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Lemon Coriander Soup</h6>
                                                <p class="text-gray mb-0">$600</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab">
                        <div id="gallery" class="bg-white rounded shadow-sm p-4 mb-4">
                            <div class="restaurant-slider-main position-relative homepage-great-deals-carousel">
                                <div class="owl-carousel owl-theme homepage-ad owl-loaded owl-drag owl-hidden">

                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-1364px, 0px, 0px); transition: all 0s ease 0s; width: 8184px;">
                                            <div class="owl-item cloned" style="width: 682px;">
                                                <div class="item">
                                                    <img class="img-fluid" src="img/gallery/1.png">
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 682px;">
                                                <div class="item">
                                                    <img class="img-fluid" src="img/gallery/2.png">
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 682px;">
                                                <div class="item">
                                                    <img class="img-fluid" src="img/gallery/3.png">
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 682px;">
                                                <div class="item">
                                                    <img class="img-fluid" src="img/gallery/1.png">
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 682px;">
                                                <div class="item">
                                                    <img class="img-fluid" src="img/gallery/2.png">
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 682px;">
                                                <div class="item">
                                                    <img class="img-fluid" src="img/gallery/3.png">
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 682px;">
                                                <div class="item">
                                                    <img class="img-fluid" src="img/gallery/1.png">
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 682px;">
                                                <div class="item">
                                                    <img class="img-fluid" src="img/gallery/2.png">
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 682px;">
                                                <div class="item">
                                                    <img class="img-fluid" src="img/gallery/3.png">
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 682px;">
                                                <div class="item">
                                                    <img class="img-fluid" src="img/gallery/1.png">
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 682px;">
                                                <div class="item">
                                                    <img class="img-fluid" src="img/gallery/2.png">
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 682px;">
                                                <div class="item">
                                                    <img class="img-fluid" src="img/gallery/3.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav">
                                        <button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                                <div class="position-absolute restaurant-slider-pics bg-dark text-white">2 of 14 Photos</div>
                                <div class="position-absolute restaurant-slider-view-all">
                                    <button type="button" class="btn btn-light bg-white">See all Photos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-restaurant-info" role="tabpanel" aria-labelledby="pills-restaurant-info-tab">
                        <div id="restaurant-info" class="bg-white rounded shadow-sm p-4 mb-4">
                            <div class="address-map float-right ml-5">
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <iframe width="300" height="170" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-4">Restaurant Info</h5>
                            <p class="mb-3">Jagjit Nagar, Near Railway Crossing,
                                <br> Near Model Town, Ludhiana, PUNJAB
                            </p>
                            <p class="mb-2 text-black"><i class="icofont-phone-circle text-primary mr-2"></i> +91 01234-56789, +91 01234-56789</p>
                            <p class="mb-2 text-black"><i class="icofont-email text-primary mr-2"></i> iamosahan@gmail.com, osahaneat@gmail.com</p>
                            <p class="mb-2 text-black"><i class="icofont-clock-time text-primary mr-2"></i> Today 11am – 5pm, 6pm – 11pm
                                <span class="badge badge-success"> OPEN NOW </span>
                            </p>
                            <hr class="clearfix">
                            <p class="text-black mb-0">You can also check the 3D view by using our menue map clicking here &nbsp;&nbsp;&nbsp; <a class="text-info font-weight-bold" href="#">Venue Map</a></p>
                            <hr class="clearfix">
                            <h5 class="mt-4 mb-4">More Info</h5>
                            <p class="mb-3">Dal Makhani, Panneer Butter Masala, Kadhai Paneer, Raita, Veg Thali, Laccha Paratha, Butter Naan</p>
                            <div class="border-btn-main mb-4">
                                <a class="border-btn text-success mr-2" href="#"><i class="icofont-check-circled"></i> Breakfast</a>
                                <a class="border-btn text-danger mr-2" href="#"><i class="icofont-close-circled"></i> No Alcohol Available</a>
                                <a class="border-btn text-success mr-2" href="#"><i class="icofont-check-circled"></i> Vegetarian Only</a>
                                <a class="border-btn text-success mr-2" href="#"><i class="icofont-check-circled"></i> Indoor Seating</a>
                                <a class="border-btn text-success mr-2" href="#"><i class="icofont-check-circled"></i> Breakfast</a>
                                <a class="border-btn text-danger mr-2" href="#"><i class="icofont-close-circled"></i> No Alcohol Available</a>
                                <a class="border-btn text-success mr-2" href="#"><i class="icofont-check-circled"></i> Vegetarian Only</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-book" role="tabpanel" aria-labelledby="pills-book-tab">
                        <div id="book-a-table" class="bg-white rounded shadow-sm p-4 mb-5 rating-review-select-page">
                            <h5 class="mb-4">Book A Table</h5>
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" type="text" placeholder="Enter Full Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input class="form-control" type="text" placeholder="Enter Email address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Mobile number</label>
                                            <input class="form-control" type="text" placeholder="Enter Mobile number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Date And Time</label>
                                            <input class="form-control" type="text" placeholder="Enter Date And Time">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-danger" type="button"> Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                        <div class="bg-white rounded shadow-sm p-4 mb-4 clearfix graph-star-rating">
                            <h5 class="mb-0 mb-4">Ratings and Reviews</h5>
                            <div class="graph-star-rating-header">
                                <div class="star-rating">
                                    <!-- Display average star rating dynamically -->
                                    @for ($i = 1; $i <= 5; $i++)
                                        <a href="#">
                                            <i class="fa {{ $i <= $averageRating ? 'fa-star text-danger' : ($i - 0.5 <= $averageRating ? 'fa-star-half text-danger' : 'fa-star-o text-danger') }}"></i>
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
                        </div>
                        <div class="bg-white rounded shadow-sm p-4 mb-4 restaurant-detailed-ratings-and-reviews">
                            <h5 class="mb-1">All Ratings and Reviews</h5>
                            @foreach ($reviews as $review)
                                <div class="reviews-members pt-4 pb-4">
                                    <div class="media">
                                        <a href="#">
                                            <img alt="{{ $review->user->name }}" src="{{ asset('storage/' . $review->user->img) ?? 'http://bootdey.com/img/Content/avatar/avatar1.png' }}" class="mr-3 rounded-pill">
                                        </a>
                                        <div class="media-body">
                                            <div class="reviews-members-header">
                                                <span class="star-rating float-right">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <i class="fa {{ $i <= $review->stars ? 'fa-star text-danger' : 'fa-star-o text-danger' }}"></i>
                                                    @endfor
                                                </span>
                                                <h6 class="mb-1"><a class="text-black" href="#">{{ $review->user->name }}</a></h6>
                                                <p class="text-gray">{{ $review->relative_time }}</p>
                                            </div>
                                            <div class="reviews-members-body">
                                                <p class="comment-text">{{ $review->comment }}</p>
                                                <form action="{{ route('review.update', $review->id) }}" method="POST" class="edit-comment-form d-none">
                                                    @csrf
                                                    @method('PUT')
                                                    <textarea name="comment" class="form-control txt-trans-none">{{ $review->comment }}</textarea>
                                                    <button type="submit" class="btn btn-danger btn-sm mb-3">Save</button>
                                                    <button type="button" class="btn btn-secondary btn-sm mb-3 cancel-edit">Cancel</button>
                                                </form>
                                            </div>
                                            <div class="reviews-members-footer d-flex justify-content-between">
                                                <div>
                                                    <a class="text-black" href="#" style="font-size: 20px"><i class="fa fa-thumbs-o-up"></i></a> 856M
                                                    <span class="total-like-user-main ml-2" dir="rtl">
                                                    <!-- You can add logic here to display users who liked the comment -->
                                                    <a data-toggle="tooltip" data-placement="top" title="User 1" href="#"><img alt="User 1" src="http://bootdey.com/img/Content/avatar/avatar5.png" class="total-like-user rounded-pill"></a>
                                                    <a data-toggle="tooltip" data-placement="top" title="User 2" href="#"><img alt="User 2" src="http://bootdey.com/img/Content/avatar/avatar2.png" class="total-like-user rounded-pill"></a>
                                                </span>
                                                </div>
                                                @if(auth()->user()->type == 1 || $review->user->id == auth()->user()->id)
                                                    <div>
                                                        @if(auth()->user()->type == 1)
                                                            <span class="text-black ml-3" style="font-size: 20px"><i class="fa fa-eye-slash"></i></span>
                                                        @endif
                                                        @if($review->user->id == auth()->user()->id)
                                                            <span class="text-black edit-comment" style="font-size: 20px"><i class="fa fa-edit"></i></span>
                                                        @endif
                                                        <span class="text-black ml-3" style="font-size: 20px"><i class="fa fa-trash-o"></i></span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <hr>
                            <div class="d-flex justify-content-center mt-4">
                                {{ $reviews->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                        <div class="bg-white rounded shadow-sm p-4 mb-5 rating-review-select-page">
                            @if(Auth::check())
                                <div>
                                    <h5 class="mb-4">Leave Comment</h5>
                                    <p class="mb-2">Rate the Product</p>

                                    <form id="reviewForm" action="{{ route('review.store') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="mb-4">
                                            <span class="star-rating">
                                                <i class="fa fa-star text-danger" data-value="1"></i>
                                                <i class="fa fa-star-o text-danger" data-value="2"></i>
                                                <i class="fa fa-star-o text-danger" data-value="3"></i>
                                                <i class="fa fa-star-o text-danger" data-value="4"></i>
                                                <i class="fa fa-star-o text-danger" data-value="5"></i>
                                            </span>
                                            <input type="hidden" id="star_count" value="1">
                                            <input type="hidden" id="product_id" value="{{ $product->id }}">
                                            <input type="hidden" id="user_id" value="{{ auth()->user()->id }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="comment">Your Comment</label>
                                            <textarea class="form-control" id="comment"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-danger btn-sm" type="submit">Submit Review</button>
                                        </div>
                                    </form>
                                </div>
                            @else
                                @component('frontend.layouts.noLoginAlert')
                                    @slot('motive', 'comment')
                                @endcomponent
                            @endif
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
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Handle star clicking
            $('.star-rating i').on('click', function() {
                var starValue = $(this).data('value'); // Get the star value
                $('#star_count').val(starValue); // Set the value in the hidden input

                // Reset all stars to empty
                $('.star-rating i').removeClass('fa-star').addClass('fa-star-o');

                // Highlight the selected stars
                for (var i = 1; i <= starValue; i++) {
                    $('.star-rating i[data-value="' + i + '"]').removeClass('fa-star-o').addClass('fa-star');
                }
            });


            // Handle form submission via AJAX
            $('#reviewForm').on('submit', function (e){
                e.preventDefault();

                let formData = {
                    _token: $('input[name="_token"]').val(),
                    product_id: $('#product_id').val(),
                    user_id: $('#user_id').val(),
                    stars: $('#star_count').val(),
                    comment: $('#comment').val()
                };

                $.ajax({
                    url: $('#reviewForm').attr('action'),
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // alert(' submitted successfully!');
                        location.reload();
                    },
                    error: function(response) {
                        console.log(response.responseText);
                        alert('Failed to submit comment.');
                    }
                });
            });
        });
    </script>

    <script>
        // Handle the click on the edit icon
        $('.edit-comment').on('click', function() {
            let $review = $(this).closest('.reviews-members');
            $review.find('.comment-text').hide();
            $review.find('.edit-comment-form').removeClass('d-none').show();
        });

        // Handle canceling the edit
        $('.cancel-edit').on('click', function() {
            var $review = $(this).closest('.reviews-members');
            $review.find('.comment-text').show();
            $review.find('.edit-comment-form').hide();
        });
    </script>
@endsection
