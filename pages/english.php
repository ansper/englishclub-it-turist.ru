<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/english.css">
    <title>Englishclub.ru</title>
</head>
<body>
<div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Написать отзыв</h3>
            <form id="feedbackForm" class="feedbackForm" method="POST" action="../scripts/php/addReview.php">
                <label for="surname">Фамилия *</label><br>
                <input type="text" id="surname" name="surname" required><br>    
                <label for="name">Имя *</label><br>
                <input type="text" id="name" name="name" required><br>
                <label for="patronymic">Отчество</label><br>
                <input type="text" id="patronymic" name="patronymic"><br>
                <label for="email">Электронная почта</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="review">Отзыв *</label><br>
                <textarea id="review" name="review" required></textarea><br>
                <input type="hidden" name="page" value="english">
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
                <input type="hidden" name="page" value="english">
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
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
            <nav>
                <ul>
                    <li><a href="#about-us">О нас</a></li>
                    <li><a href="#sections">Разделы</a></li>
                    <li><a href="#whom">Для кого школа</a></li>
                    <li><a href="#reviews">Отзывы</a></li>
                    <li><a href="#contacts">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="intro _container">
            <div class="intro__container">
                <h1 style="line-height: 1.5; max-width: 700px">Добро пожаловать в "English Club" в раздел английского</h1>
                <p>Освойте новые языки и развивайте свои навыки с нами. <br> Отправьте заявку сегодня и сделайте первый шаг к успешному будущему!</p>
                <button id="openModalBtnSend">Отправить заявку</button>
            </div>
            <img src="../assets/img/intro.png" alt="intro">
        </section>
        <section class="about _container">
            <div class="about__container">
                <div>
                    <h2 id="about-us">“Английский клуб”</h2>
                </div>
                <p>Мы "English Club" – школа иностранных языков и развивающих предметов. Здесь дети развивают интеллект, творческие способности и полезные навыки. Наши выпускники успешнее учатся и сдают экзамены. English Club помогает подготовиться к ВУЗу и получить образование за границей. Для взрослых доступны курсы английского, китайского, французского и чешского языков. Мы также организуем образовательные поездки за рубеж.</p>
            </div>
            <img src="../assets/img/logo.png" alt="about">
        </section>
        <div class="blocks__wrapper" style="margin-top: 150px;" id="sections">
            <div class="bsection" onclick="redirectToPage('it.php')">
                <img src="../assets/img/bsection_it.png" alt="it">
                <div class="bsection__text">
                    <h2>IT</h2>
                </div>
            </div>
            <div class="bsection" onclick="redirectToPage('turist.php')">
                <img src="../assets/img/bsection_turism.png" alt="turism">
                <div class="bsection__text">
                    <h2>Туризм</h2>
                </div>
            </div>
        </div>
        <section class="whom _container">
            <div class="whom__left">
                <h2 id="whom">
                    <span>Для кого</span><br>
                    наша школа?
                </h2>
                <div class="filter">
                    <button class="filter__button filter__button__active" data-target="whom1">Детей и Подростков</button><br>
                    <button class="filter__button" data-target="whom2">Взрослых</button><br>
                    <button class="filter__button" data-target="whom3">Компаний</button><br>
                </div>
            </div>
            <div class="whom__center">
                <div id="whom1" class="whom__center__container whom__active fade-in">
                    <h3>Курс для детей и подростков</h3>
                    <span>Для тех, кто хочет:</span>
                    <div class="list">
                        <img src="../assets/img/english/children/1.svg" alt=""> Сделать первые успешные шаги перед начальной школой
                    </div>
                    <div class="list">
                        <img src="../assets/img/english/children/2.svg" alt=""> Подтянуть знания в школе
                    </div>
                    <div class="list">
                        <img src="../assets/img/english/children/3.svg" alt=""> Сдать вступительные экзамены
                    </div>
                    <div class="list">
                        <img src="../assets/img/english/children/4.svg" alt=""> Развивать память
                    </div>
                </div>
                <div id="whom2" class="whom__center__container">
                    <h3>Курс для взрослых</h3>
                    <span>Для тех, кто хочет:</span>
                    <div class="list">
                        <img src="../assets/img/english/adult/1.svg" alt=""> Общаться в путешествиях
                    </div>
                    <div class="list">
                        <img src="../assets/img/english/adult/2.svg" alt=""> Для работы, бизнеса, учебы 
                    </div>
                    <div class="list">
                        <img src="../assets/img/english/adult/3.svg" alt=""> Самосовершенствоваться
                    </div>
                    <div class="list">
                        <img src="../assets/img/english/adult/4.svg" alt=""> Переехать в новую страну
                    </div>
                </div>
                <div id="whom3" class="whom__center__container">
                    <h3>Корпоративное обучение</h3>
                    <span>Для тех, кто хочет:</span>
                    <div class="list">
                        <img src="../assets/img/english/company/1.svg" alt=""> Выйти на международный рынок, внедрять успешные стратегии
                    </div>
                    <div class="list">
                        <img src="../assets/img/english/company/2.svg" alt=""> Повысить самодисциплину сотрудников 
                    </div>
                    <div class="list">
                        <img src="../assets/img/english/company/3.svg" alt=""> Сплотить коллектив, снизить текучесть кадров 
                    </div>
                </div>
            </div>
            <div class="whom__right">
                Результат виден уже после первых занятий
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
        <section class="reviews _container">
            <div class="reviews__container">
                <h2 id="reviews"><span>Что говорят</span> про “Английский клуб” </h2>
                <?php 
                    include("../scripts/php/connect.php");
                    $result = $conn -> query("select * from review");
                ?>
                <span class="all">Всего отзывов: <?= $result -> num_rows?></span><br>
                <button class="write" id="openModalBtn">Написать отзыв</button>
                <div class="but__slider">
                    <button class="prev" onclick="prevSlide()">&larr;</button>
                    <button class="next" onclick="nextSlide()">&rarr;</button>
                </div>
            </div>
            <div class="slider">
                <div class="slides">
                    <?php
                        while ($row = $result -> fetch_assoc()) {
                    ?>
                    <div class="slide slide__active">
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
                        <img src="../assets/img/english/phone.svg" alt="">
                        <span>Тел: +7 (800) 350 53 74 <br>8 (3462) 55-07-51</span>
                    </div>
                    <div class="list">
                        <img src="../assets/img/english/home.svg" alt="">
                        <span>Сургут, ул. 30 лет <br> Победы, 44/3</span>
                    </div>
                    <div class="list">
                        <img src="../assets/img/english/email.svg" alt="">
                        <span>712517@mail.ru</span>
                    </div>
                </div>
            </div>
            <div class="map" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/973/surgut/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Сургут</a><a href="https://yandex.ru/maps/973/surgut/house/ulitsa_30_let_pobedy_44_3/Y0oYcgRiS0YCQFhrfX50c3hhZQ==/services/?ll=73.401255%2C61.241444&source=serp_navig&tab=services&utm_medium=mapframe&utm_source=maps&z=12.79" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица 30 лет Победы, 44/3 — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=73.401255%2C61.241444&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NzU2MTU3MxKEAdCg0L7RgdGB0LjRjywg0KXQsNC90YLRiy3QnNCw0L3RgdC40LnRgdC60LjQuSDQsNCy0YLQvtC90L7QvNC90YvQuSDQvtC60YDRg9CzLCDQodGD0YDQs9GD0YIsINGD0LvQuNGG0LAgMzAg0LvQtdGCINCf0L7QsdC10LTRiywgNDQvMyIKDU7dkkIVewJ1Qg%2C%2C&source=serp_navig&tab=services&z=12.79" width="700" height="450" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
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
    <div id="openModalBtnSend2" style="display: none;"></div>
    <script src="../scripts/js/slider.js"></script>
    <script src="../scripts/js/englishFilter.js"></script>
    <script src="../scripts/js/reviewsModal.js"></script>
</body>
</html>

<script>
    function redirectToPage(url) {
        window.location.href = url;
    }
</script>
