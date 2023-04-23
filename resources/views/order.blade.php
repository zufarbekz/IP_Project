<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Payment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">Order Panel</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="tab-content">
                        <div class="tab-pane fade show active pt-3">
                            <form action="{{ route('basket-confirm') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <p>
                                        If you want to add another email or phone number, fill in the form below to let our manager to contact with you. If not, fill in the registered ones.
                                    </p>
                                    <div>
                                        <label><h5>Total price: ${{ $order->getFullPrice() }}</h5></label>
                                    </div><br>
                                    <label for="email"><h6>Your registered email: {{Auth::user()->email}}</h6></label>
                                    <input type="text" id="email" name="email" placeholder="example@gmail.com" required class="form-control">
                                    @error('email')
                                    <div class="inline_error" style="color: red; font-size: small">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phoneNumber"><h6>Your registered phone number: {{ Auth::user()->phoneNumber }}</h6></label>
                                    <input type="text" id="phoneNumber" name="phoneNumber" placeholder="9989xyyyyyyy" required class="form-control">
                                    @error('phoneNumber')
                                    <div class="inline_error" style="color: red; font-size: small">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-block shadow-sm"> Confirm Order </button>
                                </div>
                            </form>
                            <div class="card-footer">
                                <a href="{{ route('index') }}">
                                    <button class="btn btn-danger btn-primary btn-block shadow-sm"> Decline Order </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./resources/js/app.js"></script>
</body>

</html>
