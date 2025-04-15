<!DOCTYPE html>
<html lang="en">

<head>
    <title> آنی بورس</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--    FontAwesome-->
    <link rel="stylesheet" href="css/fontawesome.min.css">

    <link rel="stylesheet" href="css/regular.min.css">


    <!--   Site Css-->
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='css/uikit.min.css'>
    <link rel="stylesheet" href="css/responsive.css">


</head>

<body>


<section class="container-fluid section-one">
    <header class=" bg-color-two">
        <nav class="container-fluid navbar navbar-expand-sm justify-content-between" role="navigation">

            <div class="uk-offcanvas-content">
                <!-- menu position. delete .uk-light to change black navbar to white (also you should change logo to dark one)-->
                <nav class="uk-navbar-container uk-light" uk-navbar="mode: click"
                     uk-sticky="animation: uk-animation-slide-top; show-on-up: true">
                    <!-- logo or title-->
                    <div class="uk-navbar-left nav-overlay">
                        <a class="uk-navbar-item uk-logo" href="#">
                            <!--h3 Site Name-->
                            <img src="image/logo.png" alt="anibourse.ir" width="60" height="60">

                        </a>
                        <div class="logo-text">
                            <div class="en-text">
                                ANI
                            </div>
                            <div class="pe-text">
                                آنی بورس
                            </div>
                        </div>
                    </div>
                    <!-- end logo or title-->
                    <!-- menu-->
                    <div class="uk-navbar-right nav-overlay">
                        <div class="uk-navbar-flip">
                            <ul class="navbar-nav hidden-sm hidden-xs uk-visible@s ">
                                <li class=" nav-item "><a href="#" class="nav-link active" style="padding: 0;">

                                        <div class="technical">
                                            <div class="float-right">
                                                آموزش
                                            </div>
                                            <div class="float-right">
                                                تکنیکال
                                            </div>
                                        </div>


                                    </a></li>
                                <li class="nav-item"><a href="#" class="nav-link"> درباره ما</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">ارتباط با ما</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">
                                        <i class="far fa-search"></i>
                                    </a></li>
                            </ul>

                            <ul class="uk-navbar-nav uk-hidden@s">
                                <li><a class="uk-navbar-toggle" uk-navbar-toggle-icon
                                       uk-toggle="target: #mobile-navbar"></a></li>
                                <li class="nav-item"><a href="#" class="nav-link">
                                        <i class="far fa-search"></i>
                                    </a></li>

                            </ul>
                        </div>
                    </div>
                    <!-- endmenu-->

                </nav>
                <!-- end menu position-->
                <!-- off-canvas menu-->
                <div id="mobile-navbar" uk-offcanvas="mode: slide; flip: false">
                    <div class="uk-offcanvas-bar">
                        <!-- off-canvas close button-->
                        <button class="uk-offcanvas-close" type="button" uk-close></button>
                        <!-- off-canvas close button-->
                        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                            <!-- logo or title-->
                            <li class="uk-text-center" style="padding: 0 0 25px 0"><a href="#">
                                    <!--h3 Site Name--> <img src="image/logo.png" alt="ersalchi.ir" width="64"
                                                             height=""></a>
                            </li>
                            <!-- end logo or title-->
                            <!-- menu-->
                            <li>
                                <hr>
                            </li>
                            <li class="uk-text-center">
                                <h3>Menu</h3>
                            </li>
                            <li class="uk-active"><a href="#">Item 1
                                    <!--span.uk-light(uk-icon="icon: pencil")-->
                                    <!--| #{" "}Item 1--></a></li>
                            <li><a href="#">Item 2
                                    <!--span.uk-light(uk-icon="icon: code")-->
                                    <!--| #{" "}Item #{i}#{j}--></a></li>
                            <li><a href="#">Item 3
                                    <!--span.uk-light(uk-icon="icon: code")-->
                                    <!--| #{" "}Item #{i}#{j}--></a></li>
                            <li><a href="#">Item 4
                                    <!--span.uk-light(uk-icon="icon: code")-->
                                    <!--| #{" "}Item #{i}#{j}--></a></li>
                            <li><a href="#">Item 5
                                    <!--span.uk-light(uk-icon="icon: code")-->
                                    <!--| #{" "}Item #{i}#{j}--></a></li>
                            <li><a href="#">Item 6
                                    <!--span.uk-light(uk-icon="icon: code")-->
                                    <!--| #{" "}Item #{i}#{j}--></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end off-canvas menu-->
            </div>

        </nav>
    </header>

    <div class="row justify-content-around">
        <div class="col-md-3 hidden-sm hidden-xs mt-5">
            <div class="info">
                <h2>
                    تحلیل سریع و رایگان

                </h2>
                <h3>
                    سهام های بورس ،

                </h3>
                <h4>
                    شاخص ها ،

                </h4>
                <h5>
                    فارکس

                </h5>
            </div>

        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">

            <form name="frmContact" id=""
                  method="post"
                  action="" enctype="multipart/form-data"
                  onsubmit="return validateContactForm()">
                <div class="box-form">
                    <div>
                        <label>
                            ایمیل
                        </label>
                        <input type="text" class="input-field" name="userEmail" id="userEmail"/>
                        <span id="userEmail-info"
                              class="info"></span>
                    </div>
                    <div>
                        <label>
                            شماره تماس
                        </label>
                        <input type="text" class="input-field" name="userPhone"
                               id="userPhone"/>
                        <span
                                id="userPhone-info" class="info"></span>
                    </div>
                    <div>
                        <label>
                            سهام مورد نظر
                        </label>
                        <input type="text" class="input-field" name="stock" id="stock"/>
                        <span id="stock-info"
                              class="info"></span>
                    </div>
                    <div>
                        <label>
                            توضیحات (اختیاری)
                        </label>
                        <textarea name="content" id="content"
                                  class="input-field" cols="60" rows="6"></textarea>
                        <span id="userMessage-info"
                              class="info"></span>
                    </div>
                    <div>
                        <button>
                            ثبت
                        </button>
                    </div>
                    <div id="statusMessage">
                        <?php
                        if (!empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                            <?php
                        }
                        ?>
                    </div>
                </div>

            </form>
            <div class="social">
                <div class="insta"></div>
                <div class="twitter"></div>
                <div class="facebook"></div>
                <div class="whatsup"></div>

            </div>

        </div>
        <div class="col-md-3 hidden-sm hidden-xs mt-5">
            <div class="items">
                <ul>
                    <li> تکنیکال کلاسیک
                    </li>
                    <li> تکنیکال پیشرفته
                    </li>
                    <li> پرایس اکشن
                    </li>
                    <li> الیوت
                    </li>
                    <li> هارمونیک
                    </li>
                    <li> فیبوناچی
                    </li>
                </ul>

            </div>
        </div>

    </div>


</section>


<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Popper JS -->
<script src="js/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>


<script src='js/uikit.min.js'></script>
<script src='js/uikit-icons.min.js'></script>
<script src="js/script.js"></script>

</body>

</html>
