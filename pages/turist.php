<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/turist.css">
    <title>Englishclub.ru</title>
</head>
<body>
    <span class="close" style="display: none;">&times;</span>
    <div id="myModalSend" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Отправить заявку</h3>
            <form id="feedbackFormSend" class="feedbackForm" method="POST" action="scripts/php/addReview.php">
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
                <input type="hidden" name="page" value="turist">
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
                    <li><a href="#why__turism">Почему нас выбирают</a></li>
                    <li><a href="#holidays">Каникулярный отдых</a></li>
                    <li><a href="#tours">Туры</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="intro _container">
            <div class="intro__container">
                <h1 style="line-height: 1.5; max-width: 700px">Откройте для себя мир с "English Club"</h1>
                <p>Исследуйте мир вместе с нами и обогащайте свой жизненный опыт через путешествия. <br> Присоединяйтесь к нашему клубу и откройте для себя новые культуры и языки в увлекательных путешествиях!</p>
                <button id="openModalBtnSend">Отправить заявку</button>
            </div>
            <img src="../assets/img/intro.png" alt="intro">
        </section>
        <section class="about _container">
            <div class="about__container">
                <div>
                    <h2 id="about-us">“Туризм клуб”</h2>
                </div>
                <p>Мы "Туризм клуб" - ваш путеводитель в мире языков и культурных открытий. Развиваем интеллект, творчество и навыки. Присоединяйтесь к нам для изучения английского, китайского, французского и чешского языков, а также для увлекательных образовательных путешествий.</p>
            </div>
            <img src="../assets/img/logo.png" alt="about">
        </section>
        <div class="blocks__wrapper" style="margin-top: 150px;">
            <div class="bsection" onclick="redirectToPage('./english.php')">
                <img src="../assets/img/bsection_english.png" alt="english">
                <div class="bsection__text">
                    <h2>Английский</h2>
                </div>
            </div>
            <div class="bsection" onclick="redirectToPage('./it.php')">
                <img src="../assets/img/bsection_it.png" alt="it">
                <div class="bsection__text">
                    <h2>IT</h2>
                </div>
            </div>
        </div>
        <section class="why__turism _container">
            <div class="why__turism__container">
                <h2 id="why__turism"><span>Почему</span> стоит выбрать лагерь от “Английский клуб”</h2>
                <img src="../assets/img/turism/why/why.png" alt="">
            </div>
            <div class="why__blocks">
                <div class="why__block">
                    <h4>Увлекательная программа</h4>
                    <p>Ребята в игровых формах учят английский язык. Перевоплощаются в мини-театре, ставят эксперименты, готовят, прыгают на батутах, снимают тик-токи и много-много всего другого... </p>
                    <div>
                        <img src="../assets/img/turism/why/1.svg" alt="">
                    </div>
                </div>
                <div class="why__block">
                    <h4>Опытные педагоги</h4>
                    <p>Наши педагоги дипломированные и обладают наградами, сертификатами в образовании, умеют вовлечь  и подружиться с каждым ребенком</p>
                    <div>
                        <img src="../assets/img/turism/why/2.svg" alt="">
                    </div>
                </div>
                <div class="why__block">
                    <h4>Результативное обучение</h4>
                    <p>Вовлекаем ребят в процесс обучения игровыми подходами и системой мотивации</p>
                    <div>
                        <img src="../assets/img/turism/why/3.svg" alt="">
                    </div>
                </div>
                <div class="why__block">
                    <h4>Безопасно, тепло и уютно  </h4>
                    <p>Мы несем ответственность за комфортное и безопасное прибывание ребенка в лагере и создали для ребят и педагогов все условия </p>
                    <div>
                        <img src="../assets/img/turism/why/4.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="holidays">
            <h2 class="_container" id="holidays">Каникулярный отдых в Сургуте, <br>Сургутском районе и России</h2>
            <div class="holidays__container _container">
                <div class="holiday__block">
                    <h3>Нижнесортымский</h3>
                    <img src="../assets/img/turism/holiday.jpg" alt="">
                    <div>
                        <a href="./sortym.html">Иду в лагерь</a>
                    </div>
                </div>
                <div class="holiday__block">
                    <h3>Лянтор</h3>
                    <img src="../assets/img/turism/holiday.jpg" alt="">
                    <div>
                        <a href="./lyantor.html">Иду в лагерь</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="tours">
            <h2 class="_container" id="tours">Туры</h2>
            <div class="tours__container _container">
                <div class="tour__block">
                    <h3>Столица нефтяного края</h3>
                    <div>
                        <img src="../assets/img/turism/tours/1.jpg" alt="">
                    </div>
                    <a data-action="file" href="../assets/resources/Stolitsa_neftyanogo_kraya.pdf" target="_blank">Подробнее</a>
                </div>
                <div class="tour__block">
                    <h3>Жемчужины ЮГРЫ</h3>
                    <div>
                        <img src="../assets/img/turism/tours/2.jpg" alt="">
                    </div>
                    <a data-action="file" href="../assets/resources/Zhemchuzhiny_Yugry.pdf" target="_blank">Подробнее</a>
                </div>
                <div class="tour__block">
                    <h3>Виват, Сургут, Виват</h3>
                    <div>
                        <img src="../assets/img/turism/tours/3.jpg" alt="">
                    </div>
                    <a data-action="file" href="../assets/resources/Vivat_Surgu_Vivat.pdf" target="_blank">Подробнее</a>
                </div>
                <div class="tour__block">
                    <h3>Белые ночи</h3>
                    <div>
                        <img src="../assets/img/turism/tours/4.jpg" alt="">
                    </div>
                    <a data-action="file" href="../assets/resources/Belyye_nochi_.pdf" target="_blank">Подробнее</a>
                </div>
                <div class="tour__block tour__block__last">
                    <h3>По дикому северу</h3>
                    <div>
                        <img src="../assets/img/turism/tours/5.jpg" alt="">
                    </div>
                    <a data-action="file" href="../assets/resources/po_dikomu_severu_1_1.pdf" target="_blank">Подробнее</a>
                </div>
            </div>
        </div>
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
    <button id="openModalBtnSend2" style="display: none;"></button>
    <div id="myModal" style="display: none;"></div>
    <button id="openModalBtn" style="display: none;"></button>
    <script src="../scripts/js/reviewsModal.js"></script>
</body>
</html>

<script>
    function redirectToPage(url) {
        window.location.href = url;
    }
</script>

