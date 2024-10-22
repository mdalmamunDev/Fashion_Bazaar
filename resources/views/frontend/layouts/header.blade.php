<!-- header section strats -->

<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{url('/')}}"><img width="120" src="{{asset('frontend/images/logo.png')}}" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item {{ (trim($__env->yieldContent('page')) == 'Home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown {{ (trim($__env->yieldContent('page')) == 'Pages') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                            <span class="nav-label">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="testimonial.html">Testimonial</a></li>
                        </ul>
                    </li>
                    <li class="nav-item {{ (trim($__env->yieldContent('page')) == 'Products') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('pro.list') }}">Products</a>
                    </li>
                    <li class="nav-item {{ (trim($__env->yieldContent('page')) == 'Blog') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                    </li>
                    <li class="nav-item {{ (trim($__env->yieldContent('page')) == 'Contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link user-ico-con" href="{{ route('login') }}">
                            @if(Auth::check() && auth()->user()->img) <!--    Logged in with user image    -->
                                <div class="box-sm-x rounded-circle overflow-hidden">
                                    <img src="{{ asset('storage/'.auth()->user()->img) }}" class="img-cover" alt="user" >
                                </div>
                            @elseif(Auth::check())  <!--    Logged in without user image    -->
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14 19.2857L15.8 21L20 17M16.5 14.4018C16.2052 14.2315 15.8784 14.1098 15.5303 14.0472C15.4548 14.0337 15.3748 14.024 15.2842 14.0171C15.059 14 14.9464 13.9915 14.7961 14.0027C14.6399 14.0143 14.5527 14.0297 14.4019 14.0723C14.2569 14.1132 13.9957 14.2315 13.4732 14.4682C12.7191 14.8098 11.8817 15 11 15C10.1183 15 9.28093 14.8098 8.52682 14.4682C8.00429 14.2315 7.74302 14.1131 7.59797 14.0722C7.4472 14.0297 7.35983 14.0143 7.20361 14.0026C7.05331 13.9914 6.94079 14 6.71575 14.0172C6.6237 14.0242 6.5425 14.0341 6.46558 14.048C5.23442 14.2709 4.27087 15.2344 4.04798 16.4656C4 16.7306 4 17.0485 4 17.6841V19.4C4 19.9601 4 20.2401 4.10899 20.454C4.20487 20.6422 4.35785 20.7951 4.54601 20.891C4.75992 21 5.03995 21 5.6 21H10.5M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            @else   <!--    No logged in    -->
                                <svg class="no-user-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4.54601 20.891L5 20H5L4.54601 20.891ZM4.10899 20.454L5 20H5L4.10899 20.454ZM4.04798 16.4656L5.03199 16.6437H5.03199L4.04798 16.4656ZM6.46558 14.048L6.64372 15.032H6.64372L6.46558 14.048ZM8.52682 14.4682L8.11418 15.3791L8.52682 14.4682ZM7.59797 14.0722L7.86945 13.1098L7.59797 14.0722ZM6.71575 14.0172L6.63976 13.0201L6.71575 14.0172ZM7.20361 14.0026L7.2779 13.0054L7.20361 14.0026ZM12.1655 15.9033C12.7101 15.8119 13.0776 15.2963 12.9862 14.7516C12.8948 14.2069 12.3792 13.8394 11.8345 13.9308L12.1655 15.9033ZM14 22C14.5523 22 15 21.5523 15 21C15 20.4477 14.5523 20 14 20V22ZM17.29 17.2929C16.8994 17.6834 16.8994 18.3166 17.29 18.7071C17.6805 19.0976 18.3137 19.0976 18.7042 18.7071L17.29 17.2929ZM15.0916 14.7507C14.954 15.2856 15.2759 15.8308 15.8108 15.9684C16.3457 16.1061 16.8908 15.7841 17.0285 15.2493L15.0916 14.7507ZM17.9971 20C17.4448 20 16.9971 20.4477 16.9971 21C16.9971 21.5523 17.4448 22 17.9971 22V20ZM18.0071 22C18.5594 22 19.0071 21.5523 19.0071 21C19.0071 20.4477 18.5594 20 18.0071 20V22ZM14 7C14 8.65685 12.6569 10 11 10V12C13.7614 12 16 9.76142 16 7H14ZM11 10C9.34315 10 8 8.65685 8 7H6C6 9.76142 8.23858 12 11 12V10ZM8 7C8 5.34315 9.34315 4 11 4V2C8.23858 2 6 4.23858 6 7H8ZM11 4C12.6569 4 14 5.34315 14 7H16C16 4.23858 13.7614 2 11 2V4ZM11 14C10.2634 14 9.5665 13.8413 8.93945 13.5573L8.11418 15.3791C8.99535 15.7783 9.97313 16 11 16V14ZM5 19.4V17.6841H3V19.4H5ZM5.6 20C5.30347 20 5.14122 19.9992 5.02463 19.9897C4.91972 19.9811 4.94249 19.9707 5 20L4.09202 21.782C4.36344 21.9203 4.63318 21.9644 4.86177 21.9831C5.07869 22.0008 5.33648 22 5.6 22V20ZM3 19.4C3 19.6635 2.99922 19.9213 3.01695 20.1382C3.03562 20.3668 3.07969 20.6366 3.21799 20.908L5 20C5.0293 20.0575 5.01887 20.0803 5.0103 19.9754C5.00078 19.8588 5 19.6965 5 19.4H3ZM5 20H5L3.21799 20.908C3.40973 21.2843 3.7157 21.5903 4.09202 21.782L5 20ZM5 17.6841C5 17.0048 5.00403 16.7982 5.03199 16.6437L3.06398 16.2874C2.99597 16.6631 3 17.0921 3 17.6841H5ZM6.63976 13.0201C6.52094 13.0291 6.40482 13.0427 6.28744 13.064L6.64372 15.032C6.68018 15.0254 6.72646 15.0192 6.79174 15.0143L6.63976 13.0201ZM5.03199 16.6437C5.18058 15.8229 5.82295 15.1806 6.64372 15.032L6.28744 13.064C4.6459 13.3612 3.36116 14.6459 3.06398 16.2874L5.03199 16.6437ZM8.93945 13.5573C8.46856 13.344 8.10859 13.1772 7.86945 13.1098L7.3265 15.0347C7.32059 15.033 7.33175 15.0359 7.36967 15.0506C7.40596 15.0646 7.45555 15.0851 7.52413 15.1147C7.66296 15.1747 7.84942 15.2591 8.11418 15.3791L8.93945 13.5573ZM6.79174 15.0143C7.02942 14.9962 7.06668 14.9952 7.12932 14.9999L7.2779 13.0054C7.03995 12.9877 6.85217 13.0039 6.63976 13.0201L6.79174 15.0143ZM7.86945 13.1098C7.65428 13.0491 7.50084 13.022 7.2779 13.0054L7.12932 14.9999C7.18838 15.0043 7.2134 15.0079 7.22908 15.0106C7.24475 15.0134 7.26949 15.0186 7.3265 15.0347L7.86945 13.1098ZM11.8345 13.9308C11.5638 13.9762 11.285 14 11 14V16C11.3964 16 11.7858 15.967 12.1655 15.9033L11.8345 13.9308ZM14 20H5.6V22H14V20ZM18.997 15.5C18.997 15.6732 18.9516 15.8053 18.6776 16.0697C18.5239 16.218 18.3429 16.3653 18.0919 16.574C17.8536 16.7723 17.5741 17.0087 17.29 17.2929L18.7042 18.7071C18.92 18.4913 19.1405 18.3033 19.3709 18.1116C19.5887 17.9305 19.8452 17.7223 20.0665 17.5087C20.5426 17.0493 20.997 16.4314 20.997 15.5H18.997ZM17.997 14.5C18.5493 14.5 18.997 14.9477 18.997 15.5H20.997C20.997 13.8431 19.6539 12.5 17.997 12.5V14.5ZM17.0285 15.2493C17.1396 14.8177 17.5325 14.5 17.997 14.5V12.5C16.5978 12.5 15.4246 13.457 15.0916 14.7507L17.0285 15.2493ZM17.9971 22H18.0071V20H17.9971V22Z" fill="#000000"></path> </g></svg>
                            @endif
                        </a>
                    </li>
                    @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">
                                <svg fill="#000000" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M25.229,14.5l-16.003,0c-0.828,-0 -1.5,0.672 -1.5,1.5c-0,0.828 0.672,1.5 1.5,1.5l16.038,0l-3.114,3.114c-0.585,0.585 -0.585,1.536 0,2.121c0.586,0.586 1.536,0.586 2.122,0c-0,0 2.567,-2.567 4.242,-4.242c1.367,-1.367 1.367,-3.583 0,-4.95l-4.242,-4.243c-0.586,-0.585 -1.536,-0.585 -2.122,0c-0.585,0.586 -0.585,1.536 0,2.122l3.079,3.078Z"></path><path d="M20,24l-0,-4.5l-10.774,0c-1.932,-0 -3.5,-1.568 -3.5,-3.5c-0,-1.932 1.568,-3.5 3.5,-3.5l10.774,0l-0,-4.5c-0,-2.761 -2.239,-5 -5,-5c-2.166,-0 -4.834,0 -7,-0c-1.326,-0 -2.598,0.527 -3.536,1.464c-0.937,0.938 -1.464,2.21 -1.464,3.536c-0,4.439 -0,11.561 0,16c-0,1.326 0.527,2.598 1.464,3.536c0.938,0.937 2.21,1.464 3.536,1.464c2.166,0 4.834,0 7,0c1.326,0 2.598,-0.527 3.536,-1.464c0.937,-0.938 1.464,-2.21 1.464,-3.536Z"></path></g></svg>
                            </a>
                        </li>
                    @endif
                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- end header section -->