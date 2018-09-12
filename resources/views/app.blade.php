<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Julie Cawood Books</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- SEO
    <meta name="description" content="Enter Description Here">
    <meta name="keywords" content="Construction, East, Lansing, Corbett">
    -->

    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="view view-js" data-page='home'>
        <div class="page">
            @include('partials.nav')
            
            <div class="page-content page-content-js home home-content-js active">@include('pages.home')</div>
            <div class="page-content page-content-js story story-content-js">@include('pages.story')</div>
            <div class="page-content page-content-js books books-content-js">@include('pages.books')</div>
            <div class="page-content page-content-js connect connect-content-js">@include('pages.connect')</div>
        </div>
    </div>

    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>
