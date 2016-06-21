<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Интернет-магазин iPhon-off</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li id="cat"><a href="index.php">Каталог</a></li>
                <li id="pay">Оплата и доставка</li>
                <li id="client">Клиентам</li>
                <li id="partner">Партнерам</li>
                <li id="about">О нас</li>
                <li id="contact">Контакты</li>
            </ul>
        </nav>
    </header>
    <hr>
    <main>
        <section id="main">
            <iframe src="cat.php" frameborder="0" id="iframe" width="100%" height="300" scrolling="auto" allowfullscreen></iframe>
        </section>
        <section id="comments">
        <?php
            for($i=1;$i<5;$i++): ?>
            <div class="comments">
                <form method="get" action="addComment.php" class="commentForm">
                    <input type="hidden" name="idTovar" value="<?=$i?>">
                    <input type="text" name="name"><br>
                    <textarea name="comment" id=""></textarea><br>
                    <input type="range" min="4" max="10" st name="rate"><br>
                    <input type="submit">
                </form><br>
                <iframe src="showComments.php?idTovar=<?=$i?>" class="commentFrame"></iframe>
            </div>
            <?php endfor; ?>
        </section>
        <!--<div style="clear: both"></div>-->
    </main>
    <hr>
    <footer>
        <ul>
            <li id="terms">Условия использования</li>
            <li id="conf">Кофиденциальность</li>
            <li id="contact">Контакты</li>
        </ul>
        <p>&copy; 2016 All rights reserved</p>
    </footer>
    <script src ='js/script.js'></script>
</body>
</html>