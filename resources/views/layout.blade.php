<!DOCTYPE html>
<html lang="en" dir={{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('content.name') }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('imgs/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('imgs/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('imgs/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('imgs/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('imgs/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/main.css') }}>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    @include('partials.navbar')
    <div class="container-fluid">
        @include('partials.home')
    </div>
    <div class="container-fluid">
        @include('partials.invest_with_us')
    </div>
    <div class="container-fluid">
        @include('partials.investment_timeline')
    </div>
    <div class="container-fluid">
        @include('partials.palm_investment')
    </div>
    <div class="container-fluid">
        @include('partials.bannner_one')
    </div>
    <div class="container-fluid">
        @include('partials.faqs')
    </div>
    <div class="container-fluid">
        @include('partials.customer_review')
        @include('partials.contact_us_footer')
    </div>
    @include('partials.investor_guide_modal')
</body>

</html>
