<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Best Tour Plan - Hotel Booking</title>
</head>
<body>
    <header class="navbar navbar__mobile--fixed">
        <div class="container">
            <div class="navbar-top">
                <a href="#" target="_blank" class="logo">
                    <img src="src/img/ico/logo-horizontal.svg" alt="site logo: horizontal" class="logo__horizontal">
                </a>
                <form action="#" class="search navbar__search navbar__search--mobile--hidden">
                    <input type="text" class="search__input" placeholder="Search Location">
                    <button class="button search__button">
                        <img src="src/img/ico/search.svg" alt="icon search">
                    </button>
                </form>
                <a href="" class="user navbar__user navbar__user--mobile--hidden">
                    <img src="src/img/avatar-nathan.jpg" alt="avatar: user" class="user__avatar">
                    <span class="user__name">Nathan</span>
                </a>
                <!-- /.user -->
                <button class="menu-button navbar-top__menu-button">
                    <span class="menu-button__line"></span>
                    <span class="menu-button__line"></span>
                    <span class="menu-button__line"></span>
                </button>
            </div>
            <!-- /.navbar-top -->
        </div>
        <!-- /.container -->
        <div class="navbar-bottom">
            <div class="container">
                <div class="navbar-nav">
                    <ul class="navbar-menu">
                        <li class="navbar-menu__item navbar-menu__item--mobile--visible">
                            <a href="" class="user navbar__user navbar__user--mobile--visible">
                                <img src="src/img/avatar-nathan.jpg" alt="avatar: user" class="user__avatar">
                                <span class="user__name user__name--light">Nathan</span>
                            </a>
                        </li>
                        <li class="navbar-menu__item navbar-menu__item--mobile--visible">
                            <form action="#" class="search navbar__search navbar__search--mobile--visible">
                                <input type="text" class="search__input" placeholder="Search Location">
                                <button class="button search__button">
                                <img src="src/img/ico/search.svg" alt="icon search">
                                 </button>
                            </form>
                        </li>
                        <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">All deals</a></li>
                        <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Hotels</a></li>
                        <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Activities</a></li>
                        <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Hotel Day Packages</a></li>
                        <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Restaurants</a></li>
                        <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Events</a></li>
                    </ul>
                </div>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.navbar-bottom -->
    </header>