{{--        required: $categories         --}}


{{--{{ $categories }}--}}
<section class="layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Top <span>categories</span>
            </h2>
        </div>

{{--        https://uiverse.io/gharsh11032000/slimy-wolverine-10--}}
{{--        <div class="cat-card">--}}
{{--            <div class="cat-card-content">--}}
{{--                <p class="cat-card-title">cat-card hover effect</p>--}}
{{--                <p class="cat-card-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="row mb-3">
            @foreach($categories as $cat)
                <a href="{{ route('cat.pros', $cat->id) }}" class="col-md-4 mb-4">
                    <div class="cat-card d-flex align-items-center p-2 rounded">
                        <div class="box-md box-bg-red-light p-1 rounded">
                            @if($cat->products->isNotEmpty())
                                <img src="{{ asset('storage/' . $cat->products->first()->img) }}" class="img-cover" alt="Category Image">
                            @else
                                <img src="{{ asset('backend/assets/img/defaults/category.png') }}" class="img-cover" alt="Default Category Image">
                            @endif
                        </div>
                        <div class="ml-1 text-white">
                            <h6 class="mb-1">#{{ $cat->category_name }}</h6>
                            <div class="ml-1">
                                <p class="m-0 txt-md">{{ count($cat->products) }} products</p>
                                <p class="m-0 txt-md">{{ count($cat->products) }} Sales</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>