<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/css2.css">
    <link rel="stylesheet" href="style/style.css">
    <script type="text/javascript" src="skill/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="skill/skill.js"></script>

    <title></title>
</head>
<body>

<nav class="navbar">
    <div class="container">
        <a href="index.php" class="navbar-brand">SSendem</a>
        <a href="/" class="logo"><img src="image/SSendem.jpg" width="120px"></a>
        <div class="navbar-wrap">
            <ul class="navbar-menu">
                <li><a href="about.php">Обо мне</a> </li>
                <li><a href="hobby.php">Мои хобби</a> </li>
                <li><a href="work.php">Мои работы</a> </li>
                <li class="active"><a href="contact.php">Контакты</a> </li>
            </ul>

            <a href="#" class="callback">Вход/Регистрация</a>
        </div>
    </div>
</nav>


<div>

    <div class="content">
        <h1 align="center" style="color: Pink">Контакты</h1>

        <div class="contact">

            <p>
                Адрес: Россия, г.Ульяновск, ул.Радищева д.156 кв.15
            </p>
            <p>
                Телефон: +7(996)219-05-10
            </p>
            <p>
                Адрес электронной почты: dashama19ig02@mail.ru
            </p>

        </div>
    </div>
</div>

<div class="block_page_white">
    <div>
        <div class="gallery">
            <div class="main_gallery">
                <div class="buttonGallery1" onclick="leftChangeImage()"> left </div>
                <div>
                    <img id="mainImage" src="/image/gallery/gallery2/01.jpg"  />
                </div>
                <div class="buttonGallery2" onclick="rightChangeImage()"> right </div>
            </div>
        </div>

    </div>

</div>





<footer>
    <div class="class">
        <li><a href="about.php">Обо мне</a></li>
        <li><a href="hobby.php">Мои хобби</a></li>
        <li><a href="work.php">Мои работы</a></li>
        <li><a href="contact.php">Контакты</a></li>
    </div>
    <div class="call">
        <h2>Eсли есть вопросы, звоните:</h2>
        <p>
            +7(996)219-05-10
        </p>
    </div>


</footer>

</body>
</html>
