<div class="my-5">
    <div class="d-flex justify-content-center">
        <a href="{{ route('login', ['preUrl'=> $preUrl]) }}">
            <img src="{{ asset('frontend/animations/do-login.gif') }}" alt="do login">
        </a>
    </div>
    <h3 class="text-center mt-3 text-danger">Please <a href="{{ route('login') }}">login</a> first to {{ $motive }}.</h3>
</div>