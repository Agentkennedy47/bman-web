<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bman Digital Services - Login </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- Toastr css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="h-100 bg-light">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="text-center mt-0">
                        <div class="mb-4">
                            <img src="{{ asset('backend/assets/images/BMan-v2-Green.png') }}" width="40%" class="mx-auto" alt="">
                        </div>
                    </div>
                    <div class="authincation-content">
                        <div class="row no-gutters mb-3">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>

                                    <form action="{{ route('login') }}" method="POST">

                                        @csrf

                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="hello@example.com">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2 alert alert-danger text-white" />
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2 alert alert-danger text-white" />
                                        </div>
                                        {{-- <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div> --}}
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="text-center mt-0">
                                    <p>Copyright &copy; 2023 Bman Digital Services - All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('backend/assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.min.js') }}"></script>

    <!-- Toastr js -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
           case 'info':
           toastr.info(" {{ Session::get('message') }} ");
           break;

           case 'success':
           toastr.success(" {{ Session::get('message') }} ");
           break;

           case 'warning':
           toastr.warning(" {{ Session::get('message') }} ");
           break;

           case 'error':
           toastr.error(" {{ Session::get('message') }} ");
           break; 
        }
        @endif 
    </script>
</body>
</html>