<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Customer Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    @include('customer.layout.styles')
    @include('customer.layout.scripts')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <section class="section">
                <div class="container container-login">
                    <div class="row">
                        <div
                            class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                            <div class="card card-primary border-box">
                                <div class="card-header card-header-auth">
                                    <h4 class="text-center">Customer Panel Login</h4>
                                </div>
                                <div class="card-body card-body-auth">

                                    @if(session()->get('success'))
                                                <div class="text-success">{{ session()->get('success') }}</div>
                                            @endif


                                    <form method="POST" action="{{ route('customer_login_submit') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text"
                                                class="form-control @error('email') is-invalid @enderror "
                                                name="email" placeholder="Email Address" value="<?php if(isset($_COOKIE['remember_me'])) {echo Cookie::get('remember_me');} ?>" autofocus>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            @if(session()->get('error'))
                                                <div class="text-danger">{{ session()->get('error') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="remember_me" id="remember_me" <?php if(isset($_COOKIE['remember_me'])){echo "checked";}?>/> Remember me
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                Login
                                            </button>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <a href="{{ route('customer_forget_password') }}">
                                                    Forget Password?
                                                </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <a href="{{ route('customer_signup') }}">
                                                    Create an Account!
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @include('customer.layout.scripts_footer')

</body>

</html>
