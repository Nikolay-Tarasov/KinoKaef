<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Кинокаф - фильмы и сериалы в HD качестве</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">
    <link href="css/main.css?t=<?= time()?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">КиноКайф</a>
            </div>
            <div class="collapse navbar-collapse" style="">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Главная</a></li>
                    <li><a href="#about">Инфо</a></li>
					<li><a href="#contact">Контакты</a></li>
                            <!-- Выпадающий список -->
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Категории <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="#">Все категории</a></li>
						<li><a href="#">Новинки</a></li>
						<li><a href="#">Боевики</a></li>
						<li><a href="#">Комедии</a></li>
						<li><a href="#">Мелодраммы</a></li>
						<li><a href="#">Русские сериалы</a></li>
						<li><a href="#">Топ кинопоиска</a></li>
						<li><a href="#">Актеры</a></li>
						<li><a href="#">Режиссеры</a></li>
						<li><a href="#">Студии</a></li>
						<li><a href="#">Подборки</a></li>
					  </ul>
					</li>
					<li><a href="#about">Вход</a></li>
                    <li><a href="#contact">Регистрация</a></li>
                </ul>
				<!--
				<ul class="nav navbar-nav menu-login">
                    <li><a href="#about">Вход</a></li>
                    <li><a href="#contact">Регистрация</a></li>
                </ul>-->
            </div>
            <!-- /.nav-collapse -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.navbar -->

    <div class="container">
				<!--
		        <p class="pull-right visible-xs">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                </p>-->
				<div class="row"><div class="col-12 page-title"><h1>КиноКайф - смотрите новые фильмы и сериалы в хорошем качестве бесплатно</h1></div></div>
                <div class="hidden-sm hidden-xs">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="./upload/images/slider/aladdin_1920x460new.jpg" alt="First slide">
                                <!--
								<div class="container">
                                    <div class="carousel-caption">
                                        <h1>Example headline.</h1>
                                        <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                                    </div>
                                </div>
								-->
                            </div>
                            <div class="item">
                                <img src="./upload/images/slider/MIB-Int_1920x460.jpg" alt="Second slide">
                                <!--
								<div class="container">
									<div class="carousel-caption">
                                        <h1>Another example headline.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                                    </div>
                                </div>
								-->
                            </div>
                            <div class="item">
                                <img src="./upload/images/slider/annabel3_1920x460.jpg" alt="Third slide">
                                <!--
								<div class="container">
                                    <div class="carousel-caption">
                                        <h1>One more for good measure.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                                    </div>
                                </div>
								-->
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <!-- /.carousel -->
                </div>
		
        <div class="row row-offcanvas row-offcanvas-right">
			
            <div class="hidden-xs hidden-sm col-md-3 col-lg-3 sidebar-offcanvas" id="sidebar" role="navigation">
			<div class="col-12 category-title"><h3>Меню</h3></div>
                <div class="list-group">
					<a href="#" class="list-group-item">Все категории<!--<span class="menu-icons"><img src="./upload/images/menu-icons/icons8-new-50.png"></span>--></a>
                    <a href="#" class="list-group-item">Новинки<!--<span class="menu-icons"><img src="./upload/images/menu-icons/icons8-new-50.png"></span>--></a>
                    <a href="#" class="list-group-item active">Боевики<!--<span class="menu-icons"><img src="./upload/images/menu-icons/icons8-assault-rifle-50.png"></span>--></a>
                    <a href="#" class="list-group-item">Комедии<!--<span class="menu-icons"><img src="./upload/images/menu-icons/icons8-smiling-50.png"></span>--></a>
                    <a href="#" class="list-group-item">Мелодраммы<!--<span class="menu-icons"><img src="./upload/images/menu-icons/icons8-heart-50.png"></span>--></a>
                    <a href="#" class="list-group-item">Русские сериалы<!--<span class="menu-icons"><img src="./upload/images/menu-icons/icons8-dragon-fruit-50.png"></span>--></a>
                    <a href="#" class="list-group-item">Сериалы<!--<span class="menu-icons"><img src="./upload/images/menu-icons/icons8-dragon-fruit-50.png"></span>--></a>
                    <a href="#" class="list-group-item">Топ кинопоиска<!--<span class="menu-icons"><img src="./upload/images/menu-icons/icons8-rating-50.png"></span>--></a>
                    <a href="#" class="list-group-item">Актеры<!--<span class="menu-icons"><img src="./upload/images/menu-icons/icons8-human-head-50.png"></span>--></a>
                    <a href="#" class="list-group-item">Режиссеры<!--<span class="menu-icons"><img src="./upload/images/menu-icons/icons8-school-director-50.png"></span>--></a>
                    <a href="#" class="list-group-item">Студии<!--<span class="menu-icons"><img src="./upload/images/menu-icons/icons8-movie-projector-50.png"></span>--></a>
					<a href="#" class="list-group-item">Подборки<!--<span class="menu-icons"><img src="./upload/images/menu-icons/icons8-good-quality-50.png"></span>--></a>
                </div>
            </div>
            <!--/span-->
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 video-panel">
                <div class="row">
					<div class="col-12 category-title"><h3>Новинки</h3></div>
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/pingvini.png" alt="Смотреть Пингвины Мадагаскара Full-HD" title="Смотреть Пингвины Мадагаскара Full-HD">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png" alt="Смотреть Пингвины Мадагаскара Full-HD" title="Смотреть Пингвины Мадагаскара Full-HD">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating">
						<span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png" alt="Рейтинг Кинопоиска" title="Рейтинг Кинопоиска"> 6.9</span>
						<span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png" alt="Рейтинг IMDB" title="Рейтинг IMDB"> 7.9</span>
						<span class="video-see-later"><img src="./upload/images/timer_logo.png" alt="Продолжительность" title="Продолжительность"> 2:31</span>
						<span class="video-see-later watch-later"><img src="./upload/images/heart.png" alt="В избранное" title="В избранное"></span>
						</div>
						<!--
						<div class="video-rating">
						<span class="video-cart-share cart-bottom-button"><img src="./upload/images/icons8-share-24.png" alt="Поделиться" title="Поделиться"></span>
						<span class="video-cart-heart"><img src="./upload/images/icons8-heart-outline-64.png" alt="Поделиться" title="Поделиться"></span>
						<span class="video-cart-heart"><img src="./upload/images/icons8-comments-30.png" alt="Поделиться" title="Поделиться"></span>
						</div>-->
                    </div>
                    <!--/span-->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/50_ottenkov_serogo.png">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating"><span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png"> 6.9</span><span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png"> 7.9</span><span class="video-see-later"><img src="./upload/images/timer_logo.png"> 2:31</span></div>
                    </div>
                    <!--/span-->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/amerikanec.png">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating"><span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png"> 6.9</span><span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png"> 7.9</span><span class="video-see-later"><img src="./upload/images/timer_logo.png"> 2:31</span></div>
                    </div>
                    <!--/span-->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/opasniy_bangog.png">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating"><span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png"> 6.9</span><span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png"> 7.9</span><span class="video-see-later"><img src="./upload/images/timer_logo.png"> 2:31</span></div>
                    </div>
                    <!--/span-->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/russian_kratkoe.png">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating"><span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png"> 6.9</span><span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png"> 7.9</span><span class="video-see-later"><img src="./upload/images/timer_logo.png"> 2:31</span></div>
                    </div>
                    <!--/span-->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/van_gogi.png">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating"><span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png"> 6.9</span><span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png"> 7.9</span><span class="video-see-later"><img src="./upload/images/timer_logo.png"> 2:31</span></div>
                    </div>
                    <!--/span-->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/50_ottenkov_serogo.png">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating"><span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png"> 6.9</span><span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png"> 7.9</span><span class="video-see-later"><img src="./upload/images/timer_logo.png"> 2:31</span></div>
                    </div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/opasniy_bangog.png">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating"><span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png"> 6.9</span><span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png"> 7.9</span><span class="video-see-later"><img src="./upload/images/timer_logo.png"> 2:31</span></div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
            </div>
            <!--/span-->
			
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 video-panel">
                <div class="row">
					<div class="col-12 category-title"><h3>Рекомендуемые</h3></div>
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/pingvini.png" alt="Смотреть Пингвины Мадагаскара Full-HD" title="Смотреть Пингвины Мадагаскара Full-HD">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png" alt="Смотреть Пингвины Мадагаскара Full-HD" title="Смотреть Пингвины Мадагаскара Full-HD">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating">
						<span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png" alt="Рейтинг Кинопоиска" title="Рейтинг Кинопоиска"> 6.9</span>
						<span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png" alt="Рейтинг IMDB" title="Рейтинг IMDB"> 7.9</span>
						<span class="video-see-later"><img src="./upload/images/timer_logo.png" alt="Продолжительность" title="Продолжительность"> 2:31</span>
						</div>
						<!--
						<div class="video-rating">
						<span class="video-cart-share cart-bottom-button"><img src="./upload/images/icons8-share-24.png" alt="Поделиться" title="Поделиться"></span>
						<span class="video-cart-heart"><img src="./upload/images/icons8-heart-outline-64.png" alt="Поделиться" title="Поделиться"></span>
						<span class="video-cart-heart"><img src="./upload/images/icons8-comments-30.png" alt="Поделиться" title="Поделиться"></span>
						</div>-->
                    </div>
                    <!--/span-->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/50_ottenkov_serogo.png">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating"><span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png"> 6.9</span><span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png"> 7.9</span><span class="video-see-later"><img src="./upload/images/timer_logo.png"> 2:31</span></div>
                    </div>
                    <!--/span-->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/amerikanec.png">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating"><span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png"> 6.9</span><span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png"> 7.9</span><span class="video-see-later"><img src="./upload/images/timer_logo.png"> 2:31</span></div>
                    </div>
                    <!--/span-->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/opasniy_bangog.png">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating"><span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png"> 6.9</span><span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png"> 7.9</span><span class="video-see-later"><img src="./upload/images/timer_logo.png"> 2:31</span></div>
                    </div>
                    <!--/span-->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/russian_kratkoe.png">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating"><span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png"> 6.9</span><span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png"> 7.9</span><span class="video-see-later"><img src="./upload/images/timer_logo.png"> 2:31</span></div>
                    </div>
                    <!--/span-->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/van_gogi.png">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating"><span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png"> 6.9</span><span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png"> 7.9</span><span class="video-see-later"><img src="./upload/images/timer_logo.png"> 2:31</span></div>
                    </div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/russian_kratkoe.png">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating"><span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png"> 6.9</span><span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png"> 7.9</span><span class="video-see-later"><img src="./upload/images/timer_logo.png"> 2:31</span></div>
                    </div>
                    <!--/span-->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 video-cart">
                        <div class="video-img-main">
                            <img class="img-responsive main" src="./upload/images/video/russian_kratkoe.png">
                            <img class="img-responsive mask" src="./upload/images/video-play-mask.png">
                        </div>
                        <span class="video-title"><a href="#">Пингвины Мадагаскара</a></span>
                        <div class="video-info">2014, Комедии</div>
                        <div class="video-rating"><span class="video-rating-kinopoisk"><img src="./upload/images/kinopoisk_logo.png"> 6.9</span><span class="video-rating-imdb"><img src="./upload/images/imdb_logo.png"> 7.9</span><span class="video-see-later"><img src="./upload/images/timer_logo.png"> 2:31</span></div>
                    </div>
                    <!--/span-->
                    <!--/span-->
                </div>
                <!--/row-->
            </div>
            <!--/span-->

            <!--
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <a href="#" class="list-group-item active">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
          </div>
        </div>-->
            <!--/span-->
        </div>
        <!--/row-->

        <hr>

        <footer>
        
		<div class="footer video-panel container-fluid">
		<div class="row">
		<div class="col-12 category-title"><ul><h3>Информация</h3></ul></div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<ul><span class="footer-blog-title"><h5>Пользователям и партнёрам</h5></span>
			<li><a href="#">Все о подписках</a></li>
			<li><a href="#">Бонусы и подарки</a></li>
			<li><a href="#">Ввести промокод</a></li>
			<li><a href="#">Соглашение</a></li>
			<li><a href="#">Политика обработки ПД</a></li>
		</ul>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<ul><span class="footer-blog-title"><h5>Пользователям и партнёрам</h5></span>
			<li><a href="#">О проекте</a></li>
			<li><a href="#">Обратная связь</a></li>
			<li><a href="#">Партнерам</a></li>
			<li><a href="#">Приложения</a></li>
			<li><a href="#">MoviesChain</a></li>
		</ul>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<ul><span class="footer-blog-title"><h5>Пользователям и партнёрам</h5></span>
			<li><a href="#">Вакансии</a></li>
			<li><a href="#">FAQ</a></li>
			<li><a href="#">Правообладателям</a></li>
			<li><a href="#">Соглашение</a></li>
			<li><a href="#">Политика</a></li>
		</ul>
		</div>
		</div>
		</div>
		
        </footer>

    </div>
    <!--/.container-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/offcanvas.js"></script>
	<script>
	$(document).ready(function () {
	$(".navbar-toggle").on("click", function () {
		$(this).toggleClass("active");
	  });
	});
	</script>
</body>

</html>