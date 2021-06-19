<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @include('includes.head')
   <style>
        body {
            padding: 0;
            margin: 0;
        }

        #card {
            position: fixed;
            top: 50%;
            left: 70%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    @include('includes.header')
    <div class="row row justify-content-md-center mt-3">
        <div class="col-md-6">
            <div class="row justify-content-md-center">
                <label style="font-size: xx-large;">Creator - Sign Up</label>
            </div>
            <div class="row justify-content-md-center mb-5">
                <label style="font-size:medium;">Create and sell your unique digital creations.</label>
            </div>
            <form action="registration" method="post">
                @csrf
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <input autocomplete="off" class="form-control" id="FullName" name="name" placeholder="Full name" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <input autocomplete="off" class="form-control" id="Email" name="email" placeholder="Email address" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <input autocomplete="off" class="form-control" id="Password" name="password" placeholder="Password" type="password" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <input autocomplete="off" class="form-control" id="ConPassword" name="conpassword" placeholder="Confirm password" type="password" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <input type="submit" class="btn btn-block" value="Signup" style="background:black; color: white; font-weight:bold">
                    </div>
                </div>
            </form>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>