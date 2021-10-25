<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- w3school css alert -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- title icon -->
    <link rel="icon" href="img/kadek.png" type="image/png">
    <!-- unicorns -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- google fonts -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Personal website</title>
</head>

<body>
    <!-- header -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Kadek Mahesa</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">

                    <li class="nav__item">
                        <a href="#home" class="nav__link">
                            <i class="uil uil-estate nav__icon"></i> Home
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i> About
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class="uil uil-brackets-curly nav__icon"></i> Skills
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#" class="nav__link" onclick="alertService()">
                            <i class="uil uil-briefcase nav__icon"></i> Services
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#portfolio" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i> Portofolio
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-message nav__icon"></i> Contactme
                        </a>
                    </li>

                </ul>

                <i class="uil uil-times nav__close nav__icon" id="nav-close"></i>
            </div>

            <div class="nav__btns">

                <!-- darktema -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-bars"></i>
                </div>
            </div>
        </nav>
    </header>


    <!-- main -->
    <main class="main">
        <!-- HOME -->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="#" target="_blank" class="home__social-icon">
                            <i class="uil uil-linkedin"></i>
                        </a>

                        <a href="https://instagram.com/deksa.69" target="_blank" class="home__social-icon">
                            <i class="uil uil-instagram"></i>
                        </a>

                        <a href="https://github.com/youngPabloo" target="_blank" class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                    </div>

                    <div class="home__img">
                        <svg viewBox="0 0 200 187" class="home__blob" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<mask id="mask0" mask-type="alpha">
										<path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
										130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
										97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
										0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
									</mask>
								<g mask="url(#mask0)">
									<path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
									165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
									129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
									-0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>

									<image class="home__blob-img" x='12' y='18' href="img/prefil.png"/>
								</g>
							</svg>
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">
                            Hi, i'am Kadek Mahesa
                        </h1>
                        <h3 class="home__subtitle">
                            A Python Developer and Mobile App Dev
                        </h3>
                        <p class="home__description">
                            Masih belajar sih ngab, keknya bisa nih yuk bisa yuk doain aja gan, bismillah kaya raya
                        </p>
                        <a href="" class="button button--flex">
							Contact aja bossqu <i class="uil uil-message button__icon"></i>
						</a>
                    </div>
                </div>
                <div class="home__scroll">
                    <a href="#about" class="home__scroll--button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Scroll Down!</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <h2 class="section__title">Tentang gweh</h2>
            <span class="section__subtitle">
							Perkenalan bosqu
						</span>
            <div class="about__container container grid">
                <img src="img/about.png" alt="" class="about__img">

                <div class="about__data">
                    <p class="about__description">
                        Sedang bersemangat untuk belajar hal baru sih bos, kuharap dengan saya belajar dapat memperkaya diri, lesgoo
                    </p>

                    <div class="about__info">
                        <div>
                            <span class="about__info-title">1</span>
                            <span class="about__info-name">Years <br> experience</span>
                        </div>

                        <div>
                            <span class="about__info-title">5+</span>
                            <span class="about__info-name">Project <br> Completed</span>
                        </div>

                        <div>
                            <span class="about__info-title">1</span>
                            <span class="about__info-name">Companies <br> worked</span>
                        </div>
                    </div>

                    <div class="about__buttons">
                        <a href="https://github.com/youngPabloo" class="button button-flex">
									See Portofolio!<i class="uil uil-eye button__icon"></i>
								</a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
            <h2 class="section__title">Skills gweh</h2>
            <span class="section__subtitle">Sedang belajar bossqu</span>

            <div class="skills__container container grid">
                <div>
                    <!-- skills 1 -->
                    <div class="skills__content skills__open">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Programming and Framework</h1>
                                <span class="skills__subtitle">Sedang belajar</span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>


                        <div class="skills__list">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Python</h3>
                                    <span class="skills__number"><img src="https://img.icons8.com/color/40/000000/python--v1.png"/></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__number"><img src="https://img.icons8.com/dusk/40/000000/php-logo.png"/></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Flutter</h3>
                                    <span class="skills__number"><img src="https://img.icons8.com/fluency/40/000000/flutter.png"/></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- skill 2 -->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-cloud-database-tree skills__icon"></i>
                            <div>
                                <h1 class="skills__title">Cloud database Experience</h1>
                                <span class="skills__subtitle">Sedang belajar</span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>


                        <div class="skills__list">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Firebase</h3>
                                    <span class="skills__number"><img src="https://img.icons8.com/color/48/000000/firebase.png"/></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Github Pages</h3>
                                    <span class="skills__number"><img src="https://img.icons8.com/doodle/48/000000/github.png"/></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section" id="portfolio">
            <h2 class="section__title">Portofolio</h2>
            <span class="section__subtitle">Project terakhir gweh</span>

            <div class="portofolio__container container swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- porto 1 -->
                    <div class="portofolio__content grid swiper-slide">
                        <img src="img/Portofolio/1.png" alt="" class="portofolio__img">

                        <div class="portofolio__data">
                            <h3 class="portofolio__title">Login Apps</h3>
                            <p class="portfolio__description">
                                Multiple login authentication, integrated with google sign in
                            </p>
                            <a href="#" class="button button--flex button--small portfolio__button" onclick="alertPorto()">
										Source code <i class="uil uil-eye button__icon"></i>
									</a>
                        </div>
                    </div>
                    <!-- porto 2 -->
                    <div class="portofolio__content grid swiper-slide">
                        <img src="img/Portofolio/2.png" alt="" class="portofolio__img">

                        <div class="portofolio__data">
                            <h3 class="portofolio__title">Youtube Downloader</h3>
                            <p class="portfolio__description">
                                Software Youtuber downloader with Python
                            </p>
                            <a href="#" class="button button--flex button--small portfolio__button" onclick="alertPorto()">
										Source code <i class="uil uil-eye button__icon"></i>
									</a>
                        </div>
                    </div>
                    <!-- porto 3 -->
                    <div class="portofolio__content grid swiper-slide">
                        <img src="img/Portofolio/3.png" alt="" class="portofolio__img">

                        <div class="portofolio__data">
                            <h3 class="portofolio__title">Simple e-Wallet Apps</h3>
                            <p class="portfolio__description">
                                Simple UI Design with attractive color palate, designed and build with Flutter Framework
                            </p>
                            <a href="#" class="button button--flex button--small portfolio__button" onclick="alertPorto()">
										Source code <i class="uil uil-eye button__icon"></i>
									</a>
                        </div>
                    </div>
                </div>

                <!-- arrow -->
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right swiper-portofolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left swiper-portofolio-icon"></i>
                </div>

                <!-- pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--==================== PROJECT IN MIND ====================-->
        <section class="project section">
            <div class="project__bg">
                <div class="project__container container grid">
                    <div class="project__data">
                        <h2 class="project__title">Partnership and Collaboration</h2>
                        <p class="project__description">
                            Hubungi saya aja ngabers
                        </p>

                        <a href="#" class="button button--flex button--white">
									Contact
									<i class="uil uil-message project__icon button__icon"></i>
								</a>
                    </div>

                    <img src="img/masterpiace.png" alt="" class="project__img">
                </div>
            </div>
        </section>


        <!--==================== CONTACT ME ====================-->
        <section class="contact section" id="contact">
            <h2 class="section__title">Contact Me</h2>
            <span class="section__subtitle">Hubungi disini!</span>

            <div class="contact__container container grid">
                <div>
                    <div class="contact__information">
                        <i class="uil uil-phone contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Wassaf samya</h3>
                            <span class="contact__subtitle">0851-6153-1157</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Email</h3>
                            <span class="contact__subtitle">theijatsakit@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-map-marker contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Location</h3>
                            <span class="contact__subtitle">Based on Denpasar</span>
                        </div>
                    </div>
                </div>
                
                <!-- error message -->
                <?php 
                    $Msg = '';

                    // if user not input the fill in column
                    if(isset($_GET['error'])){
                        $Msg = 'Masukkan form yang kosong!';

                        echo '<div class="w3-panel w3-yellow w3-card-4">'. $Msg .'</div>';
                    }

                    // user succes fill in all column
                    if(isset($_GET['succes'])){
                        $Msg = 'Pesan anda telah dikirim';

                        echo '<div class="w3-panel w3-yellow w3-card-4">'. $Msg .'</div>';

                    }
                ?>

                <!-- form -->
                <form action="process.php" method="post" class="contact__form grid">
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <label for="" class="contact__label">Nama</label>
                            <input type="text" name="Uname" class="contact__input">
                        </div>

                        <div class="contact__content">
                            <label for="" class="contact__label" required>Email</label>
                            <input type="email" name="email" class="contact__input">
                        </div>

                        <div class="contact__content">
                            <label for="" class="contact__label">Pesan</label>
                            <textarea name="msg" id="" cols="0" rows="7" class="contact__input"></textarea>
                        </div>

                        <div>
                            <button class="button--flex" name="btn-send" id="btn-send" style="  
                            background-color: #4CAF50; /* Green */
                            border: none;
                            color: white;
                            padding: 15px 32px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 20px;
                            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
                            ">
                                kirim
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>


    <!-- alas kaki -->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">
                        Kadek Mahesa
                    </h1>

                    <span class="footer__title">
						Makhluk perkasa
					</span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#portfolio" class="footer__link">Portofolio</a>
                    </li>
                    <li>
                        <a href="#home" class="footer__link">Home</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">contact</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href="https://instagram.com/deksa.69" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>

                    <a href="t.me/SEXYPABLOO" class="footer__social">
                        <i class="uil uil-telegram"></i>
                    </a>
                </div>
            </div>

            <p class="footer__copy">
                &#169;Build with SwiperJs and Iconscout
            </p>
        </div>
    </footer>

    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-angle-double-up scrollup__icon"></i>
    </a>
    <!-- swiper -->
    <script src="js/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/swal.js"></script>
    <script>
        swal({
            title: 'PERHATIAN',
            icon: 'warning',
            text: 'Web dalam pengembangan!, dilarang mengirim link web ini sembarangan, agar tidak memenuhi traffic!'
        });

        function alertService() {
            swal({
                title: 'Oopsiee',
                text: 'Fitur service belum tersedia, sedang dalam pengembangan',
                button: 'okay..'
            });
        }

        function alertPorto() {
            swal({
                title: 'Sorry',
                text: 'Source code belum tersedia :D',
                button: 'Okay..'
            });
        }
    </script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

</html>