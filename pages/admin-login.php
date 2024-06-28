<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Englishclub.ru</title>
</head>
<body>
    <header>
        <div class="header__container _container">
            <a href="/">
                <img src="../assets/img/logo.png" alt="logo">
            </a>
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
        <form action="../scripts/php/auth.php" method="POST" class="auth _container">
            <h2>Авторизация</h2>
            <input type="text" name="login" id="login" placeholder="Логин">
            <input type="password" name="password" id="password" placeholder="Пароль">
            <input type="submit" value="Войти">
        </form>
    </main>
    <div id="openModalBtnSend2" style="display: none;"></div>
    <script src="../scripts/js/slider.js"></script>
    <script src="../scripts/js/englishFilter.js"></script>
    <script src="../scripts/js/reviewsModal.js"></script>
</body>
</html>