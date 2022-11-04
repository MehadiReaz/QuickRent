<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <meta name="description" content="">
		
        <link rel="icon" type="image/png" href="uploads/favicon.png">

        @include('customer.layout.styles')
        @include('customer.layout.scripts')

        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="page-top">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Sign Up</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <form action="{{ route('customer_signup_submit') }}" method="post">
                            @csrf
                            <div class="login-form">
                                <div class="mb-3">
                                    <label for="" class="form-label" >Full Name</label>
                                    <input type="text" class="form-control" name="name">
                                    @if($errors->has('name'))
                                    <span class="text-danger">{{ $errors -> first('name') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label" >Email Address</label>
                                    <input type="text" class="form-control" name="email">
                                    @if($errors->has('email'))
                                    <span class="text-danger">{{ $errors -> first('email') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label" >Password</label>
                                    <input type="password" class="form-control" name="password">
                                    @if($errors->has('password'))
                                    <span class="text-danger">{{ $errors -> first('password') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="retype_password">
                                    @if($errors->has('retype_password'))
                                    <span class="text-danger">{{ $errors -> first('retype_password') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary bg-website">Submit</button>
                                </div>
                                <div class="mb-3">
                                    <a href="{{ route('customer_login') }}" class="primary-color">Existing User? Login Now</a>
                                </div>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
		
        <script src="js/custom.js"></script>        
		
   </body>
</html>