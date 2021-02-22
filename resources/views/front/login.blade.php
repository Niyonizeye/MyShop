@include('front.includes.header')

    <!-- <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- start of banner -->
    <!-- Hero Section Begin -->


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 col-md-4">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-26">
                        Login Form
                    </span>
                    <span class="login100-form-title p-b-26 logos">
                        <img src="{{asset('assets/front/img/logo.jpg')}}"  class="img img-circle">
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100" data-placeholder="Enter Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100" data-placeholder="Enter Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>
                    <br>
                    <div class="text-center ">
                        <span class="txt">
                            Don’t have an account?
                        </span>

                        <a  href="{{route('front.register')}}" class="signuping">
                            Register Here
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
    <!-- end of banner -->

@include('front.includes.footer')