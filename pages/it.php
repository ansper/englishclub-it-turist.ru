<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/it.css">
    <title>Englishclub.ru</title>
</head>
<body>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Написать отзыв</h3>
            <form id="feedbackForm" class="feedbackForm" method="POST" action="../scripts/php/addReview.php">
                <label for="surname">Фамилия*</label><br>
                <input type="text" id="surname" name="surname" required><br>    
                <label for="name">Имя*</label><br>
                <input type="text" id="name" name="name" required><br>
                <label for="patronymic">Отчество</label><br>
                <input type="text" id="patronymic" name="patronymic" required><br>
                <label for="email">Электронная почта</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="review">Отзыв*</label><br>
                <textarea id="review" name="review" required></textarea><br>
                <input type="hidden" name="page" value="it">
                <div class="submit">
                    <input type="submit" value="Отправить">
                </div>
            </form>
        </div>
    </div>
    <div id="myModalSend" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Отправить заявку</h3>
            <form id="feedbackFormSend" class="feedbackForm" method="POST" action="../scripts/php/addApp.php">
                <input type="hidden" name="page" value="it">
                <label for="surname">Фамилия</label><br>
                <input type="text" id="surname" name="surname" required><br>    
                <label for="name">Имя</label><br>
                <input type="text" id="name" name="name" required><br>
                <label for="patronymic">Отчество</label><br>
                <input type="text" id="patronymic" name="patronymic" required><br>
                <label for="email">Электронная почта</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="select">Направление</label><br>
                <select name="select" id="select" required>
                    <option value="english">Английский</option>
                    <option value="IT">IT</option>
                    <option value="turism">Туризм</option>
                </select>
                <div class="submit">
                    <input type="submit" value="Отправить">
                </div>
            </form>
        </div>
    </div>
    <header>
        <div class="header__container _container">
            <a href="/">
                <img src="../assets/img/logo.png" alt="logo">
            </a>
            <nav>
                <ul>
                    <li><a href="#about-us">О нас</a></li>
                    <li><a href="#sections">Разделы</a></li>
                    <li><a href="#why">Почему нас выбирают</a></li>
                    <li><a href="#directions">Направления</a></li>
                    <li><a href="#reviews">Отзывы</a></li>
                    <li><a href="#contacts">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="intro _container">
            <div class="intro__container">
                <h1 style="line-height: 1.5; max-width: 700px">Добро пожаловать в мир IT с "English Club"</h1>
                <p>Развивайте свой потенциал в сфере информационных технологий вместе с нами. <br> Присоединяйтесь к нашему сообществу и станьте частью будущего цифровой эпохи!</p>
                <button id="openModalBtnSend">Отправить заявку</button>
            </div>
            <img src="../assets/img/intro.png" alt="intro">
        </section>
        <section class="about _container" >
            <div class="about__container">
                <div>
                    <h2 id="about-us">“IT клуб”</h2>
                </div>
                <p>Команда "IT клуб" - школа информационных технологий для юных талантов. Мы развиваем навыки, интеллект, и творческие способности через изучение Web-разработки, Интернета вещей, Геймдизайна, VR моделирования и Робототехники. Наша программа помогает формировать интерес к разработке сайтов, игр, виртуальной реальности и робототехнике, развивает логическое мышление и умение учиться. Мы способствуем развитию понимания компьютерных технологий, работы в команде и обмену опытом.</p>
            </div>
            <img src="../assets/img/logo.png" alt="about">
        </section>
        <div class="blocks__wrapper" style="margin-top: 150px;" id="sections">
            <div class="bsection" onclick="redirectToPage('english.php')">
                <img src="../assets/img/bsection_english.png" alt="english">
                <div class="bsection__text">
                    <h2>Английский</h2>
                </div>
            </div>
            <div class="bsection" onclick="redirectToPage('turist.php')">
                <img src="../assets/img/bsection_turism.png" alt="turism">
                <div class="bsection__text">
                    <h2>Туризм</h2>
                </div>
            </div>
        </div>
        <section class="why _container">
            <div class="why__container">
                <h2 id="why"><span>Почему</span> стоит выбрать нашу школу</h2>
                <button id="openModalBtnSend2">Отправить заявку</button>
                <div class="why__but__slider">
                    <button class="prev" onclick="prevSlide()">&uarr;</button>
                    <button class="next" onclick="nextSlide()">&darr;</button>
                </div>
            </div>
            <div class="why__slider">
                <div class="why__slides slides">
                    <div class="slide slide__active fade-in" style="background: #FFE5EA;">
                        <img class="slide__text__img" src="../assets/img/it/heart.svg" alt="heart">
                        <p>Создали для вас уютные аудитории в которых хочется жить — откажетесь уходить.</p>
                    </div>
                    <div class="slide" style="background: #E4F6FF;">
                        <img class="slide__text__img" src="../assets/img/it/book.svg" alt="heart">
                        <p>Создали эффективный учебник упражнений. Все аудиозаписи от насителей языка из Америки, Австралии, Великобритании.</p>
                    </div>
                    <div class="slide" style="background: #FFF8E5;">
                        <img class="slide__text__img" src="../assets/img/it/achive.svg" alt="heart">
                        <p>По окончанию выдаем сертификат. У нас вы можете подтвердить знания </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="steps _container">
            <h2>Три шага до начала обучения</h2>
            <div class="steps__container">
                <div class="step">
                    <span id="step1">1</span>
                </div>
                <span class="line"></span>
                <div class="step">
                    <span>2</span>
                </div>
                <span class="line"></span>
                <div class="step">
                    <span>3</span>
                </div>
            </div>
            <div class="steps__text">
                <p>Оставьте <br> заявку на <br> сайте</p>
                <p>Получите <br> инструкции и <br> пройдите <br> регистрацию</p>
                <p>Приступайте к <br> обучению</p>
            </div>
        </section>
        <section class="direction _container" id="directions">
            <h2>Направления обучения</h2>
            <div class="accordion" id="accordionExample">
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Web-разработка
						</button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
                            От основ HTML и CSS до создания интерактивных веб-приложений с использованием JavaScript и фреймворков
						</div>
					</div>
				</div>
				<div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Интернет вещей (IoT)
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Исследуйте мир смарт-устройств и создавайте собственные умные устройства, управляемые через интернет
                        </div>
                    </div>
				</div>
				<div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Геймдизайн
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Погрузитесь в мир создания игр от идеи до реализации, изучая аспекты дизайна, геймплея и взаимодействия с пользователем
                        </div>
                    </div>
				</div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Робототехника
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Познайте мир роботов, создавайте своих собственных роботов и программируйте их для различных задач и сценариев
                        </div>
                    </div>
				</div>
			</div>
        </section>
        </section>
        <section class="reviews _container" id="reviews">
            <div class="reviews__container">
                <h2><span>Что говорят</span> про “Английский клуб” </h2>
                <?php 
                    include("../scripts/php/connect.php");
                    $result = $conn -> query("select * from review");
                ?>
                <span class="all">Всего отзывов: <?= $result -> num_rows?></span><br>
                <button class="write" id="openModalBtn">Написать отзыв</button>
                <div class="but__slider">
                    <button class="prev" onclick="reviewPrevSlide()">&larr;</button>
                    <button class="next" onclick="reviewNextSlide()">&rarr;</button>
                </div>
            </div>
            <div class="reviews__slider">
                <div class="reviews__slides slides">
                    <?php
                        while ($row = $result -> fetch_assoc()) {
                    ?>
                    <div class="reviews__slide slide__active fade-in">
                        <div class="slide__header">
                            <h4><?= $row['name']?> <?= substr($row['surname'], 0, 2);?>.</h4>
                        </div>
                        <p><?= $row['review']?></p>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
        <section class="contacts _container">
            <div class="contacts__container">
                <h2 id="contacts">Контакты</h2>
                <div class="list__container">
                    <div class="list first__list">
                        <img src="../assets/img/it/phone.svg" alt="">
                        <span>Тел: +7 (800) 350 53 74 <br>8 (3462) 55-07-51</span>
                    </div>
                    <div class="list">
                        <img src="../assets/img/it/home.svg" alt="">
                        <span>Сургут, ул. 30 лет <br> Победы, 44/3</span>
                    </div>
                    <div class="list">
                        <img src="../assets/img/it/email.svg" alt="">
                        <span>712517@mail.ru</span>
                    </div>
                </div>
            </div>
            <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/973/surgut/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Сургут</a><a href="https://yandex.ru/maps/973/surgut/house/ulitsa_30_let_pobedy_44_3/Y0oYcgRiS0YCQFhrfX50c3hhZQ==/services/?ll=73.401255%2C61.241444&source=serp_navig&tab=services&utm_medium=mapframe&utm_source=maps&z=12.79" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица 30 лет Победы, 44/3 — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=73.401255%2C61.241444&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NzU2MTU3MxKEAdCg0L7RgdGB0LjRjywg0KXQsNC90YLRiy3QnNCw0L3RgdC40LnRgdC60LjQuSDQsNCy0YLQvtC90L7QvNC90YvQuSDQvtC60YDRg9CzLCDQodGD0YDQs9GD0YIsINGD0LvQuNGG0LAgMzAg0LvQtdGCINCf0L7QsdC10LTRiywgNDQvMyIKDU7dkkIVewJ1Qg%2C%2C&source=serp_navig&tab=services&z=12.79" width="700" height="450" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
        </section>
    </main>
    <footer>
        <div class="footer__top _container">
            <div class="footer__logo">
                <img src="../assets/img/logo.png" style="max-width: 341px; height: auto" alt="">
            </div>
            <div class="footer__text">
                <h3>ИНОСТРАННЫЕ ЯЗЫКИ,<br>IT, Курсы,<br>ОБУЧЕНИЕ</h3>
                <a class="politika" data-action="file" href="../assets/resources/politika.pdf" target="_blank">Политика Кондифиденциальности</a>
            </div>
            <ul>
                <li>
                    <img src="../assets/img/map.png" alt="">
                    <span>Сургут, ул. 30 лет Победы, 44/3</span>
                </li>
                <li>
                    <img src="../assets/img/phone.png" alt="">
                    <span>8 (800) 350-53-74</span>
                </li>
                <li>
                    <img src="../assets/img/mail.png" alt="">
                    <span>712517@mail.ru</span>
                </li>
            </ul>
        </div>
        <div class="footer__bot _container">
            <span>© ООО «Английский клуб» 2024</span>
            <a href="./admin-login.php">Админ панель</a>
        </div>
    </footer>
    <script src="../scripts/js/slider.js"></script>
    <script src="../scripts/js/dropdown.js"></script>
    <script src="../scripts/js/reviewsModal.js"></script>
    <script src="../scripts/js/bootstrap.js"></script>
</body>
</html>

<script>
    function redirectToPage(url) {
        window.location.href = url;
    }
</script>