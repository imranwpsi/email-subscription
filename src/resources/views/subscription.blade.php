<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Email Subscription</title>
</head>
<body>

<div style="width: 500px; margin: 0 auto; margin-top: 90px;">
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <h3>Email Subscription</h3>

    <form action="{{ route('subscription') }}" method="POST">
        @csrf

        <div class="form-group">
            <div class="input-group">
                <input type="email" name="email" class="form-control" placeholder="Enter your email" />
                <div class="input-group-append">
                    <button class="input-group-text btn border" type="submit" style="border-radius: 0"><i class="fa fa-envelope"></i></button>
                </div>
            </div>
            @if($errors->has('email'))
                <p class="text-danger">{{ $errors->first('email') }}</p>
            @endif
        </div>
    </form>
</div>
</body>
</html>
