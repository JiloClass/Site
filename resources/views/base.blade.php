<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield("title")</title>
        <meta name="google-site-verification" content="XmGCt7d0P0TvD3Gizk7eZgFxcw36rkb-Qub96Od6Egw" />
	    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <!-- Meta (SEO) -->
        <meta property="og:site_name" content="Nokaji Portfolio" />
        <meta property="og:type" content="portfolio" />
        <meta property="og:title" content="Nokaji | My portfolio" />
        <meta name="description" content="Its my portfolio, me its Nokaji :)">
        <meta property="og:description" content="Its my portfolio, me its Nokaji :)">
        <meta property="og:url" content="{{ url()->current() }}" />
        <!-- End Meta(SEO) -->
    </head>
    <body>
        @yield("content")
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="{{ asset("js/main.js" )}}"></script>
    </body>
</html>
