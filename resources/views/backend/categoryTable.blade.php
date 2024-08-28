{{--    $categories needed, first define $categories    --}}

<!-- Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModalLabel">Category</h5>
                <button type="button" class="close"  @click="closeModal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" @submit.prevent="handleSubmit" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <input type="hidden" name="id" v-model="form.id">

                    <label for="name">Name</label>
                    <div class="mb-3">
                        <input type="text" id="name" v-model="form.category_name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon" required>
                    </div>

                    <label for="details">Details</label>
                    <div class="mb-3">
                        <textarea id="details" v-model="form.details" class="form-control" placeholder="Details" aria-label="Details" aria-describedby="details-addon" rows="4" required></textarea>
                    </div>


                    <label for="available">Available?</label>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="available" id="available_yes" value="1" v-model="form.status">
                            <label class="form-check-label" for="available_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="available" id="available_no" value="0" v-model="form.status">
                            <label class="form-check-label" for="available_no">No</label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
        <table class="table align-items-center justify-content-center mb-0">
            <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">sn</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Details</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Status</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Actions</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="(category, key) in categories" :key="category.id">
                    <td>
                        <div class="ms-3">
                            @{{ key + 1 }}
                        </div>
                    </td>
                    <td>
                        <a :href="`{{ route('cat.pros','') }}/${category.id}`" target="_blank" class="text-sm font-weight-bold mb-0">@{{ category.category_name }}</a>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">@{{ category.details }}</span>
                    </td>
                    <td class="align-middle text-center">
                        <p class="text-sm mb-0">@{{ category.status ? 'Available' : 'Unavailable' }}</p>
                    </td>
                    <td class="align-middle text-center">
                        @if(auth()->user()->type == 1)
                            <a @click="onClickUpdate(category)" class="btn btn-warning p-2 mb-0">Update</a>
                            <a @click="deleteCat(category.id)" class="btn btn-danger p-2 mb-0">Delete</a>
                        @else
                            <a href="{{ route('toast.wa') }}" class="btn btn-secondary p-2 mb-0">Update</a>
                            <a href="{{ route('toast.wa') }}" class="btn btn-secondary p-2 mb-0">Delete</a>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>