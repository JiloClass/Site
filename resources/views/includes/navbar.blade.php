<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KT9M6X3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<nav class="navbar navbar-expand-lg navbar-base" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="src/img/jiloclass.gif" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-xl fa-bars burger-navbar"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="nav-link-home" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-link-docs" href="#">Docs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-link-cours" href="#">Cours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-link-forum" href="forum.php">Forum</a>
                </li>
            </ul>
            <div class="navbar-right">
                <ul class="navbar-nav">
                    <?php if($usersession == true){ ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="dropdownProfil" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $display_user =
                            (isset($_SESSION['prenom']) && isset($_SESSION['nom']) && !empty($_SESSION['prenom']) && !empty($_SESSION['nom']))
                            ? "".$_SESSION['prenom']." ".$_SESSION['nom'].""
                            : $_SESSION['pseudo'];
                            ?>
                            <?= '<img style="border: 1px solid var(--secondary);border-radius: 250px;" width="40px" height="40px" class="noselect" alt="Mon Profil" src="data:image/png;base64,' . base64_encode($_SESSION['image']) . '"/>' ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownProfil">
                                <?php
                                if($accesspanel == true){
                                    echo "<li><a class='dropdown-item' href='admin'>Panel Admin</a></li>";
                                }
                                ?>
                                <li><a class="dropdown-item" href="/dashboard/index.php">Panel Creator</a></li>
                                <li><a class="dropdown-item" href="/dashboard/profil.php">Profil</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="logout.php">Déconnexion</a></li>
                            </ul>
                        </li>
                        <?php }else{ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="signup.php">Inscription</a>
                            </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- <a class="button-changeTheme" onclick="changecolorTheme()"><i class="fas fa-sun" id="icon-changeTheme"></i></a> -->
<link rel="stylesheet" href="src/css/navbar.css">
<!--Start of Tawk.to Script-->
<script type="text/javascript">var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();(function(){var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];s1.async=true;s1.src='https://embed.tawk.to/63f602dc31ebfa0fe7eeb047/1gpsfmbdq';s1.charset='UTF-8';s1.setAttribute('crossorigin','*');s0.parentNode.insertBefore(s1,s0);})();</script>
<!--End of Tawk.to Script-->
<script src="src/js/jquery.min.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TZCN3LPT83"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-TZCN3LPT83');
</script>
