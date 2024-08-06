{{--        required: $categories         --}}


<section class="layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Top <span>categories</span>
            </h2>
        </div>
        <div class="row mb-3">
            @foreach($categories as $cat)
                <a href="{{ route('cat.pros', $cat->id) }}" class="col-md-4 mb-4 cat-box">
                    <div class="d-flex align-items-center p-2 bg-danger bg-gradient rounded">
                        <div class="box-md box-bg-red-light p-1 rounded">
                            <img src="{{ asset('storage/' . $cat->products[0]->img) }}" class="img-cover" alt="Category Image">
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