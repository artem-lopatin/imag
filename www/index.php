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
            <form method="post" id="toCart" >
                <?php
                require_once 'products.php';
                foreach($products as $product):
                    ?>
                    <div class="products">
                        <a href="inCart.php">
                            <img src="<?=$product['img']?>" style="width:150px;">
                        </a><br>
                        <input type="checkbox" name="<?=$product['name']?>">
                        <p><?=$product['name']?></p>
                    </div>
                <?php endforeach; ?>
                <!---->
                <input type="submit" value="Добавить в корзину">
            </form>
        </section>
        <div style="clear: both"></div>
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