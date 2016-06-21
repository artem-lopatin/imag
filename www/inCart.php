<style>
    div{  width:25%;text-align: center;float:left;}
    div img{width:150px;}
</style>
<?php
include_once 'products.php';

foreach ($_REQUEST as $key=>$value):
    foreach ($products as $product):
        if($key==$product['name']):
?>
<div>

    <img src="<?=$product['img']?>" ><br>
    <p><?=$product['name']?></p>
</div>
<?php
        endif;
    endforeach;
endforeach; ?>

    <p>iPhone, введите данные для оформления покупки.</p>
    <form method="post" action="index.php">
        <label for="name">Имя: </label><input type="text" id="name" name="name"><br>
        <label for="email">E-mail: </label><input type="email" id="email" name="email"><br>
        <input type="submit" value="Order">
    </form>
