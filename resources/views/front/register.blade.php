@include('front.includes.header')

    <!-- <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- start of banner -->
    <!-- Hero Section Begin -->

    <div class="limiters">
        <div class="container-login100" >
            <div class="wrap-login100 col-md-4" style="margin-top: 5px;">
                <form class="login100-form validate-form">
                    <span class="login100-form-title">
                        Register Form
                    </span><br>
                    <span class="login100-form-title p-b-26 logos">
                        <img src="{{asset('assets/front/img/logo.jpg')}}"  class="img img-circle">
                    </span>

                    <div class="wrap-input100 validate-input" >
                        <input class="input100" type="text" name="full_name">
                        <span class="focus-input100" data-placeholder="Enter Your Full Name"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <input class="input100" type="text" name="phone">
                        <span class="focus-input100" data-placeholder="Enter Your Phone"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <select name="country" class="form-control selectpicker" >
                            <option disabled="disabled" selected="selected">Select Country</option>
                        </select>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="referee">
                        <span class="focus-input100" data-placeholder="Enter Your Referee Id"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <select name="gender" class="form-control selectpicker" >
                            <option disabled="disabled" selected="selected">Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Enter Your Email"></span>
					</div>


                    <div class="wrap-input100 validate-input">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100" data-placeholder="Enter Your Password"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="confirm_password">
                        <span class="focus-input100" data-placeholder="ReEnter Password"></span>
                    </div>
                    <input type="checkbox" name="checkbox" value="check" id="agree" /> I have read and agree to the Terms and Conditions and Privacy Policy
                    <input type="submit" name="submit" value="submit" />
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Hero Section End -->
    <!-- end of banner -->

@include('front.includes.footer')