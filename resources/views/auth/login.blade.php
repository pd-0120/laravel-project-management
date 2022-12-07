@extends('layouts.master-blank')

@section('contents')
    <div class="login-body d-flex flex-column-fluid align-items-stretch justify-content-center">
        <div class="container row">
            <div class="col-lg-6 d-flex align-items-center">
                <!--begin::Signin-->
                <div class="login-form login-signin">
                    <!--begin::Form-->
                    {!! Form::open(['class' =>"form w-xxl-550px rounded-lg p-20", 'id' => 'kt_login_signin_form', 'novalidate' => 'novalidate' , 'url' => route('login')]) !!}
                        <!--begin::Title-->
                        <div class="pb-13 pt-lg-0 pt-5">
                            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Please Login Here</h3>
                        </div>
                        <!--begin::Title-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                            <input class="form-control form-control-solid h-auto p-6 rounded-lg @error('email') is-invalid @enderror" type="text" name="email" autocomplete="off" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                <a href="{{ route('password.request') }}" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">Forgot Password ?</a>
                            </div>
                            <input class="form-control form-control-solid h-auto p-6 rounded-lg @error('password') is-invalid @enderror" type="password" name="password" autocomplete="off" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Form group-->
                        <!--begin::Action-->
                        <div class="pb-lg-0 pb-5">
                            <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
                        </div>
                    {!! Form::close() !!}
                    <!--end::Form-->
                </div>
                <!--end::Signin-->

                <!--begin::Forgot-->
                <div class="login-form login-forgot">
                    <!--begin::Form-->
                    <form class="form w-xxl-550px rounded-lg p-20" novalidate="novalidate" id="kt_login_forgot_form">
                        <!--begin::Title-->
                        <div class="pb-13 pt-lg-0 pt-5">
                            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Forgotten
                                Password ?</h3>
                            <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your
                                password</p>
                        </div>
                        <!--end::Title-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="email"
                                placeholder="Email" name="email" autocomplete="off" />
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-wrap pb-lg-0">
                            <button type="button" id="kt_login_forgot_submit"
                                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                            <button type="button" id="kt_login_forgot_cancel"
                                class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
                        </div>
                        <!--end::Form group-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Forgot-->
            </div>
            <div class="col-lg-6 bgi-size-contain bgi-no-repeat bgi-position-y-center bgi-position-x-center min-h-150px mt-10 m-md-0" style="background-image: url(assets/media/svg/illustrations/accomplishment.svg)"></div>
        </div>
    </div>
@endsection
