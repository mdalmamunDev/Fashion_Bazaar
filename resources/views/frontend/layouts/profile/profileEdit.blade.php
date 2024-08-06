<div class="tab-pane fade" id="edit-tab-pane" role="tabpanel" aria-labelledby="edit-tab" tabindex="0">
    <form action="{{ route('user.update') }}" method="post" class="row gy-3 gy-xxl-4">
        {{ csrf_field() }}

        <input type="hidden" name="id" value="{{ $user->id }}">

        <div class="col-12 col-md-6">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="inputName" value="{{ $user->name }}">
        </div>
        <div class="col-12 col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail" value="{{ $user->email }}">
        </div>
        <div class="col-12 col-md-6">
            <label for="inputPhone" class="form-label">Mobile</label>
            <input type="tel" name="mobile" class="form-control" id="inputPhone" value="{{ $user->mobile }}">
        </div>
        <div class="col-12 col-md-6">
            <label for="inputLocation" class="form-label">Location</label>
            <input type="text" name="location" class="form-control" id="inputLocation" value="{{ $user->location }}">
        </div>
        <div class="col-12">
            <label for="inputAbout" class="form-label">Bio</label>
            <textarea class="form-control" name="bio" id="inputAbout">{{ $user->bio }}</textarea>
        </div>
        <div class="col-12">
            <label for="inputImg" class="form-label">Profile image</label>
            <input type="file" name="img" class="form-control" id="inputImg" aria-label="Image">
        </div>
        <div class="col-12">
            <label for="inputOldPassword" class="form-label">Old Password</label>
            <input type="password" name="old_password" class="form-control" id="inputOldPassword">
        </div>
        <div class="col-12">
            <label for="inputNewPassword" class="form-label">New Password</label>
            <input type="password" name="password" class="form-control" id="inputNewPassword">
        </div>
        <div class="col-12">
            <label for="inputConfirmPass" class="form-label">Confirm password</label>
            <input type="password" name="password_confirmation" class="form-control" id="inputConfirmPass">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-danger">Save Changes</button>
        </div>
    </form>
</div>