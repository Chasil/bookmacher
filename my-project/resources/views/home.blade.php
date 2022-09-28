<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('HOMEPAGE') }}</div>

                    <div class="card-body">
                        WELCOME!
                    </div>
                    <div class="card-body">
                        <a href="/login">LOGIN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
