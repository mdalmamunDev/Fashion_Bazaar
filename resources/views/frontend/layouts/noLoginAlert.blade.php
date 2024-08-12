<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.6/lottie.min.js"></script>

<div class="my-5">
    <div>
        <a class="d-flex justify-content-center ml-5" href="{{ route('login', ['preUrl' => $preUrl]) }}">
            <div id="lottie-container" style="width: 50%;"></div>
        </a>
    </div>
    <h3 class="text-center mt-3 text-danger">Please <a href="{{ route('login', ['preUrl' => $preUrl]) }}">login</a> first to {{ $motive }}.</h3>
</div>


<script>
    let animation = lottie.loadAnimation({
        container: document.getElementById('lottie-container'), // the DOM element that will contain the animation
        renderer: 'svg', // 'svg', 'canvas', or 'html'
        loop: true, // whether to loop the animation
        autoplay: true, // whether to start playing the animation immediately
        path: '{{ asset('assets/anim/no-login.json') }}' // the path to the Lottie JSON file
    });
</script>



