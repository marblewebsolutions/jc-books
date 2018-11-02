<!doctype html>
<?php 
    $page = (session()->has('page') ? session('page') : 'home');
?>

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
    <div class="view view-js" data-page='{{ $page }}'>
        <div class="page">
            @include('partials.nav')
            
            <div class="page-content page-content-js home home-content-js {{ $page == 'home' ? 'active' : '' }}">@include('pages.home')</div>
            <div class="page-content page-content-js story story-content-js {{ $page == 'story' ? 'active' : '' }}">@include('pages.story')</div>
            <div class="page-content page-content-js books books-content-js {{ $page == 'books' ? 'active' : '' }}">@include('pages.books')</div>
            <div class="page-content page-content-js connect connect-content-js {{ $page == 'connect' ? 'active' : '' }}">@include('pages.connect')</div>
        </div>
        
        <div class="alert {{ ((session('status') && session('status') == 'success') ? 'active' : '') }}">
            <p class="alert-title">Successfully Placed Order!</p>
            <p class="alert-description">Thank you for purchasing Ants in the Pants Dance.</p>
        </div>
    </div>

    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>
