<style>
    div{  width:25%;text-align: center;float:left;}
    div img{width:150px;}
</style>
<form method="get" action="inCart.php" id="toCart">
                <?php
                require_once 'products.php';
                foreach($products as $product):
                    ?>
                    <div>
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