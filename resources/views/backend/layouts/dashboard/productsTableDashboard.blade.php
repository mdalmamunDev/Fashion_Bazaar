<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Products table</h6>
                <a href="{{ route('admin.pro.list') }}" type="button" class="btn btn-primary">All Product</a>
            </div>
            @include('backend.product.ProductTable')
        </div>
    </div>
</div>