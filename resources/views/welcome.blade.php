<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title></title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="/css/fontawesome-all.css" rel="stylesheet">
    <link href="/css/swiper.css" rel="stylesheet">
    <link href="/css/magnific-popup.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<?php $menus = [['name' => 'Басты бет', 'href' => '#header', 'dropdown' => null], ['name' => 'Таныстыру', 'href' => '#intro', 'dropdown' => null], ['name' => 'Қызметтер', 'href' => '#services', 'dropdown' => null], ['name' => 'Кері байланыс', 'href' => '#callMe', 'dropdown' => null], ['name' => 'Жобалар', 'href' => '#projects', 'dropdown' => null], ['name' => 'Біз туралы', 'href' => '#about', 'dropdown' => [['name' => 'Шарттар', 'href' => 'terms-conditions'], ['name' => 'Қауіпсіздік', 'href' => 'privacy-policy']]], ['name' => 'Байланыс', 'href' => '#contact', 'dropdown' => null]]; ?>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <a class="navbar-brand logo-text page-scroll" href="index.html">TravelQaz</a>
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                @foreach ($menus as $link)
                    @if ($link['dropdown'])
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown"
                                role="button" aria-haspopup="true" aria-expanded="false">{{ $link['name'] }}</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($link['dropdown'] as $item)
                                    <a class="dropdown-item" href="{{ route($item['href']) }}"><span
                                            class="item-text">
                                            {{ $item['name'] }}</span></a>
                                @endforeach
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="{{ $link['href'] }}">{{ $link['name'] }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>Бізбен бірге <span id="js-rotating">саяхаттау</span></h1>
                            <p class="p-heading p-large">Егер әлемді шарлағың келсе бізбен бірге баста!</p>
                            <a class="btn-solid-lg page-scroll" href="#intro">ТАНЫСУ</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">ТАНЫСТЫРУ</div>
                        <h2>Біз Қазақстандағы ең жоғарғы сапалы қызметтерді ұсынамыз!</h2>
                        <p>Жолға шығар алдында немесе саяхаттау барысында қаншалықты қызық болса да, оның соңғы кезеңі –
                            үйге оралуыңыз керектігін түсінесіз. Бұл шынында да сіздің саяхатыңыздың кульминациялық
                            сәті!</p>
                        <p class="testimonial-text">"Ең басты назарда ұстайтын жәйт – саяхаттаудан сіз өмірлік сабақ
                            аласыз, көзқарас қалыптастырасыз, жаңа әлем көресіз. Өміріңізде өзгеріс болады."</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container" style="height: 100%">
                        <div id="carouselExampleIndicators" class="carousel slide" style="height: 100%"
                            data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner " style="height: 100%">
                                @foreach ($latestPlaces->take(3) as $index => $item)
                                    <div style="height: 100%"
                                        class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <img style="height: 100%; object-fit: cover" src="{{ $item->image }}"
                                            class="d-block w-100" alt="...">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->


    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card text-center">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-binoculars fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Әлемнің барлық елдері</h4>
                            <p>Бізде сіз әлемнің кез келген еліне барып саяхаттай аласыз!</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card text-center">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-list-alt fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Қолжетімді баға</h4>
                            <p>Саяхатта және қаражат үнемде, бізде клиенттер үшін барлық мүмкіндіктер жасалған!</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card text-center">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-binoculars fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Әлемнің барлық елдері</h4>
                            <p>Бізде сіз әлемнің кез келген еліне барып саяхаттай аласыз!</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->


    <!-- Services -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title"></div>
                    <h2>Саяхаттағың келетін жерді таңда!<br></h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    @foreach ($latestPlaces as $item)
                        <div class="card">
                            <div class="card-image">
                                <img class="img-fluid" src="{{ $item->image }}" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">{{ $item->name }}</h3>
                                <p>{{ $item->description }}</p>
                                <p class="price">Starting at <span>${{ $item->price }}</span></p>
                            </div>
                            <div class="button-container">
                                <a class="btn-solid-reg page-scroll" href="#callMe">ТОЛЫҒЫРАҚ</a>
                            </div> <!-- end of button-container -->
                        </div>
                    @endforeach

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->




    <!-- Call Me -->
    <div id="callMe" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container mt-0">
                        <div class="section-title">Байлнысу</div>
                        <h2 class="white">Егер форманы толтырсаңыз біз сізбен байланысамыз!</h2>
                        <p class="white">Сіз әлемді аралаудың бір қадам алдындасыз. Егер ең тиімді бағада
                            сапалы әрі жылдам саяхаттағын келсе форманы толтыр!</p>
                        <ul class="list-unstyled li-space-lg white">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Бұл өте оңай, тек форманы толтыру жеткілікті!</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Байланыс кезінде компанияға байланысты толық ақпаратты
                                    аласыз
                                </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Саяхаттау әрқашын қызық, қызықты бізбен бірге баста
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Call Me Form -->
                    <form action="{{ route('connect') }}" method="POST"
                        class="justify-content-center d-flex flex-column">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="lname" name="name" required>
                            <label class="label-control" for="lname">Атыңыз</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="lphone" name="number">
                            <label class="label-control" for="lphone">Телефон номері</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="lemail" name="email" required>
                            <label class="label-control" for="lemail">Почта</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <select class="form-control-select" id="lselect" name="interest">
                                <option class="select-option" value="" disabled selected>Қызығушылық...</option>
                                <option class="select-option" value="Off The Ground">Саяхаттау туралы кеңкс</option>
                                <option class="select-option" value="Accelerated Growth">Төлемдер туралы</option>
                                <option class="select-option" value="Market Domination">Басқа</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox white d-flex align-items-center">
                            <input type="checkbox" id="lterms" value="Agreed-to-Terms" name="lterms" required>Мен осы
                            сайттың барлық талаптарына келісемін!
                            <div class="help-block with-errors"></div>
                        </div>
                        <button type="submit" class="form-control-submit-button">Байланыс</button>
                    </form>
                    <!-- end of call me form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of call me -->


    <!-- Projects -->
    <div id="projects" class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">Галерея</div>
                    <h2>Қайда саяхаттауды таңда!</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="grid">
                        @foreach ($places as $place)
                            <div class="element-item development">
                                <div class="element-item-overlay"><span>{{ $place->name }}</span></div><img
                                    src="{{ $place->image }}" alt="alternative"
                                    style="height: 100%; object-fit: cover">
                            </div>
                        @endforeach
                    </div>
                </div> <!-- end of grid -->
                <!-- end of filter -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->


    <!-- Team -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Біздің команда!</h2>
                    <p class="p-heading">Біздің компанияда тек өз қызметтерін жауапкершілікпен қарайтын адамдар
                        жұмыс істейді!</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-1.png" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large">John Whitelong</p>
                        <p class="job-title">Менежер</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-2.png" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Veronique Smith</p>
                        <p class="job-title">Директор</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-3.png" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Chris Zimerman</p>
                        <p class="job-title">Маркетолог</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-4.png" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Mary Villalonga</p>
                        <p class="job-title">Бағдарламалаушы</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of team -->


    <!-- About -->
    <div id="about" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/about.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7 col-xl-6">
                    <div class="text-container">
                        <div class="section-title">Біз туралы</div>
                        <h2>Біз қызмет көрсетуге әрдайым дайынбыз!</h2>
                        <p>Our goal is to provide the right business growth services at the appropriate time so
                            companies can benefit from the created momentum and thrive for a long period of time</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Everything we recommend has direct positive impact</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">You will become an important partner of our company</div>
                            </li>
                        </ul>

                        <!-- Counter -->
                        <div id="counter">
                            <div class="cell">
                                <div class="counter-value number-count" data-count="231">1</div>
                                <div class="counter-info">NO.1.<br></div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="121">1</div>
                                <div class="counter-info">Мәселелер<br>Шешілген</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="159">1</div>
                                <div class="counter-info">Жақсы<br>Пікірлер</div>
                            </div>
                        </div>
                        <!-- end of counter -->

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of about -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">Байланыс</div>
                        <h2>Форманы толтыру арқылы байланысқа шық!</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>Абылай Хан даңғылы 45,
                                Нұр-Сұлтан қаласы, Қазақстан</li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+7 720 224 4126</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+7 720 224 1428</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:office@aria.com">merei@aria.com</a>
                            </li>
                        </ul>
                        <h3>Әлеуметтік желелерде жазылыңыз!</h3>

                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-pinterest fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-behance fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Contact Form -->
                    <form action="{{ route('connect') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="name" id="cname" required>
                            <label class="label-control" for="cname">Атыңыз</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Почта</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea name="question" class="form-control-textarea" id="cmessage"></textarea>
                            <label class="label-control" for="cmessage">Сұрақ</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox d-flex align-items-center">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>Мен осы сайттың барлық
                            талаптарына келісемін!
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Байланыс</button>
                        </div>

                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>Бір ауыз сөз!</h4>
                        <p class="white">Біз әрдайым көмектесуге дайынбыз!</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-6 d-flex justify-content-end">
                    <div class="text-container">
                        <h4>Сілтемелер</h4>
                        <ul class="list-unstyled li-space-lg white">
                            <li>
                                <a class="white" href="#">startupguide.com</a>
                            </li>
                            <li>
                                <a class="white" href="#">Terms & Conditions</a>
                            </li>
                            <li>
                                <a class="white" href="#">Privacy Policy</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2022 <a href="#">TravelQaz</a>
                    </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="bootstrap/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>
