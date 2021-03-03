<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <title>Solitaire</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/main.css" />
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/popper.min.js"></script>
  
</head>
<body id="top">
<main>
<!-- <div class="header">
  <a href="contact-us.php">Contact us</h2>
  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>
</div> -->
<div class="slider__contact">
    <div class="progressContainer">
        <div id="progress" class="progress">
            
        </div>
    </div>
    <a href="contact-us.php">Contact Us</a>
</div>
<div class="hdr-navList is-closed">
    <div class="container">
        <div class="hdr__hover col-md-12">
            <div class="row">
                <div class="logo-box col-md-6">
                    <div class="logo__inr">
                        <a href="index.php">
                            <img src="img/logo.png" alt="logo" />
                        </a>
                    </div>
                </div>
                <div class="cross-box col-md-6">
                    <div class="cross__inr">
                        <svg class="cross__icon--hover" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <g fill="none" fill-rule="evenodd" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                <path d="M1 1l18 18M19 1L1 19"></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="about-us.php">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="solution.php">Solution</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="partners.php">Partners</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="success-stories.php">Success Stories</a>
            </li>
        </ul>
        <div class="hdr__footer col-md-12">
            <div class="row">
                <div class="hdr__footer--lft col-md-8">
                    <ul>
                        <li>
                            <a href="news-and-events.php">News & Events</a>
                        </li>
                        <li>
                            <a href="career.php">Career</a>
                        </li>
                        <li>
                            <a href="contact-us.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="hdr__footer--rgt col-md-4">
                    <ul>
                        <li>
                            <a href="https://www.behance.net" target="_blank">
                                <i class="fab fa-behance"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="pos-rel">
    <section class="top-area">
        <div class="container">
            <div class="row">
                <div class="topbar__lft col-md-8">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo.png" alt="logo" />
                    </a>
                </div>
                <div class="topbar__box col-md-4">
                    <ul>
                        <li>
                            <div class="topbar__lang form-group">
                                <div class="dropdown">
                                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                        EN
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">EN</a>
                                        <a class="dropdown-item" href="#">AR</a>
                                    </div>
                                </div>
                            </div> 
                        </li>
                        <li class="topbar__box__searchList">
                            <button class="btn topbar__search__btn is-active" type="submit"><i class="fas fa-search"></i></button>
                        </li>
                        <li class="menu-area">
                            <nav class="navbar navbar-expand-md navbar-dark hdr-navbar">
                                <!-- Toggler/collapsibe Button -->
                                <button class="navbar-toggler menu-button" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            
                            <!-- Links -->
                            </nav>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="search-area--top is-hidden">
        <div class="container">
            <div class="top__search">
                <form action="/action_page.php">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <i class="top__search__btn--bar fas fa-times"></i>
                    </div>
                </form>
                <span>Hit enter to search or ESC to close</span>
            </div>
        </div>
    </section>
</header>