<div class="row mt-4">
    <div class="container card mb-4">
        <div class="card-header pb-0 d-flex justify-content-between">
            <h6>User testimonials</h6>
            <a href="{{ route('admin.pro.list') }}" type="button" class="btn btn-primary">All Testimonials</a>
        </div>
        <div class="row" id="testimonialArea">
            <div class="col-6" v-for="(test, index) in testList" :key="index">
                <div class="box-bg-red-light rounded-2 m-2 p-3 w-100">
                    <div class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                            <img :src="'{{ asset('storage/') }}/' + test.user.img" alt="User Image" class="border-radius-lg shadow img-cover">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">@{{ test.user ? test.user.name : 'NA'}}</h6>
                            <p class="mb-0 text-xs">@{{ test.user ? userTypeStr(test.user.type) : '' }}</p>
                        </div>
                    </div>
                    <div class="m-2 ms-4">
                        <p>@{{ test.content }}</p>
                    </div>
                    <div class="font-weight-bold">
                            <span @click="doLike(test, {{ auth()->id() }})">
                                <i :class="['cursor-pointer', 'fa', userHasLiked(test, '{{ auth()->id() }}') ? 'fa-heart' : 'fa-heart-o']"></i>@{{ test.likes.length }}
                            </span>
                        <span class="ms-2">
                            <i class="fa fa-reply"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>