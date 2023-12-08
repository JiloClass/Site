<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield("title")</title>
        <meta name="google-site-verification" content="JGHu17umjt-JUnaK954NxXpaIOSt5QmSoqYBJmGWXHM"/>
        <meta hid="title" name="title" content ="@yield("title")">
        <meta hid="description" name="description" content="JiloClass pour apprendre et pour partager vos connaissances">
        <meta hid="author" name="author" content="JiloClass">
        <meta hid="keywords" name="keywords" content="HTML, CSS, JAVASCRIPT, PHP, WEB, INFORMATIQUE, HTML5, HTML4, CSS3, CONNAISSANCE, APPRENDRE, LEARN, SCIENCES, DOMAINES D'APPRENTISSAGE, RUBY, PERLE, C#, C++, C, WEB DEVELOPMENT, DEVELOPPERS">
        <meta hid="theme-color" name="theme-color" content="#3431d4d9">
        <meta hid="robots" name="robots" content="index, follow">
        <meta hid="og:type" property="og:type" content="website">
        <meta hid="og:local" property="og:local" content="fr_FR">
        <meta hid="og:site_name" property="og:site_name" content="JiloClass">
        <meta hid="og:url" property="og:url" content="{{ url()->current() }}">
        <meta hid="og:image" property="og:image" content="{{ asset("img/jiloclass.png") }}">
        <!-- } END SEO -->
        <!-- Link -->
        <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("css/style.css") }}">
        <link rel="shortcut icon" href="{{ asset("img/jiloclass.png") }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset("css/footer.css") }}">
        <link rel="stylesheet" href="{{ asset("fontawesome/css/all.css") }}">
        @yield("link")
    </head>
    <body data-theme="dark">
        @include("includes.navbar")
        @yield("content")
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="{{ asset("js/main.js" )}}"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    </body>
    <footer>
        <div class="footer-top">
            <div class="box">
                <h4>JiloClass</h4>
                <a href="forum.php">Forum</a>
            </div>
            <div class="box">
                <h4>Nos réseaux sociaux</h4>
                <a href="https://discord.gg/GYdXcUaZHe" target="_blank" class="btn-social discord"><i class="fa-brands fa-discord fa-1x"></i></a>
            </div>
            <div class="box">
                <h4>Nos réseaux sociaux</h4>
                <a href="https://discord.gg/GYdXcUaZHe" target="_blank" class="btn-social discord"><i class="fa-brands fa-discord fa-1x"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-left">
            <p>Developped by Nokaji</p>
            </div>
            <div class="footer-bottom-right">
                <p>Copyright &copy; JiloClass 2022 - <?= date("Y") ?></p>
            </div>
        </div>
    </footer>
</html>
