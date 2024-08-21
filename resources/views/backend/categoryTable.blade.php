{{--    $categories needed, first define $categories    --}}

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
            <tbody id="categoryTableArea">
                <tr v-for="(category, key) in categories" :key="category.id">
                    <td>
                        <div class="ms-3">
                            @{{ key + 1 }}
                        </div>
                    </td>
                    <td>
                        <p class="text-sm font-weight-bold mb-0">@{{ category.category_name }}</p>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">@{{ category.details }}</span>
                    </td>
                    <td class="align-middle text-center">
                        <p class="text-sm mb-0">@{{ category.status ? 'Available' : 'Unavailable' }}</p>
                    </td>
                    <td class="align-middle text-center">
                        @if(auth()->user()->type == 1)
                            <a :href="`{{ route('cat.edit', '') }}/${category.id}`" class="btn btn-warning p-2 mb-0">Update</a>
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