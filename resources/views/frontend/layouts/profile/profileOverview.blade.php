<div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
    <h5 class="mb-3">About</h5>
    <p class="lead mb-3">{{ $user->bio }}</p>
    <h5 class="mb-3">Profile</h5>
    <div class="row g-0">
        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
            <div class="p-2">Full Name</div>
        </div>
        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
            <div class="p-2">{{ $user->name }}</div>
        </div>
        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
            <div class="p-2">Type</div>
        </div>
        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
            <div class="p-2">{{ $user->type_str }}</div>
        </div>
        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
            <div class="p-2">Function</div>
        </div>
        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
            <div class="p-2">{{ $user->function }}</div>
        </div>
        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
            <div class="p-2">Email</div>
        </div>
        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
            <div class="p-2">{{ $user->email }}</div>
        </div>
        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
            <div class="p-2">Mobile</div>
        </div>
        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
            <div class="p-2">{{ $user->mobile }}</div>
        </div>
        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
            <div class="p-2">Location</div>
        </div>
        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
            <div class="p-2">{{ $user->location }}</div>
        </div>
        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
            <div class="p-2">Joined since</div>
        </div>
        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
            <div class="p-2">{{ $user->created_at->format('Y-m-d') }}</div>
        </div>
    </div>

    @if($isAuthUser)
        <a href="{{ route('logout') }}" class="btn btn-danger mt-4">Logout</a>
    @endif
</div>