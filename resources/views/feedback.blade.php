<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Feedback</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">Feedback Panel</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="tab-content">
                        <div class="tab-pane fade show active pt-3">
                            <form action="{{ route('feedback-confirm') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <p>
                                        Leave your feedback in a form below. It will help us to improve:)
                                    </p>

                                    <label for="subject"><h6>Subject of your message </h6></label>
                                    <input type="text" id="subject" name="subject" required class="form-control">

                                    <label for="name"><h6>Your name </h6></label>
                                    <input type="text" id="name" name="name" required class="form-control">

                                    <label for="email"><h6>Your email</h6></label>
                                    <input type="text" id="email" name="email" placeholder="example@gmail.com" required class="form-control">
                                    @error('email')
                                    <div class="inline_error" style="color: red; font-size: small">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message" class="fcf-label">Your message</label>
                                    <textarea class="form-control" id="message" name="message" rows="6" maxlength="3000" required></textarea>
                                    @error('message')
                                    <div class="inline_error" style="color: red; font-size: small">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-block shadow-sm"> Submit Feedback </button>
                                </div>
                            </form>
                            <div class="card-footer">
                                <a href="{{ route('index') }}">
                                    <button class="btn btn-danger btn-primary btn-block shadow-sm"> Return to Main </button>
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

