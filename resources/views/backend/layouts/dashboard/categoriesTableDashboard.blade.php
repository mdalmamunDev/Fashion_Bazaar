<div class="row" id="categoryTableApp">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Categories table</h6>
                <a href="{{route('cat.list')}}" type="button" class="btn btn-primary">All Category</a>
            </div>
            @include('backend.categoryTable')
        </div>
    </div>
</div>