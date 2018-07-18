<?php 
require_once $_SERVER['DOCUMENT_ROOT']. '/inc/init.php';

if(logged_in() === false){
    header('Location:/maintenance');
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';


$url = "http://musclevale.com/";
?>
<script type = "text/javascript" src = "/assets/Food-page.js"></script>
<div class="food-content">
<div class = "food_pic_background" >
	<section class = "nav-row">
          <ul class="page-breadcrumb">
            <li><a href="/index.php"><i class="fa fa-home"></i> Блог</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Търсене на продукти</span> </li>
       </ul>
	   </section>
</div>
<div id="food-container">
<h1 id="food-table">Таблица с храни</h1>
<div class="food-table-information">Тук ще намерите информация за хранителния състав на различни храни и продукти.</div>
<p>Всички данни и измервания в базата са направени спрямо 100 грама/милилитра от дадения продукт.</p>
<p>Търсене на храни:</p>
<form method="get" action = "/foods/food-results.php" accept-charset="utf-8">

<input type="text" name="fsearch" id="food_search" autocomplete="off">
<button  id="search-button" type="submit"><i id="button-icon"></i><span id="button-text">Търсене..</span></button>

</form>
<div id="food_search_result">
</div>
<div id="food-groups">
<div class="column1">
<div class="food-group">
<a href="/foods/Food-TableBG.php?products=agneshki-produkti"><img src="<?php echo $url.'/uploads/database/agneshki-produkti/A-Sheep-Products.jpg';?>">Агнешки продукти</a>
</div>
</div>
<div class="column1">
<div class="food-group">
<a href="/foods/Food-TableBG.php?products=teleshki-produkti"><img src="<?php echo $url.'/uploads/database/teleshki-produkti/A-Calf-Products.jpg' ?>">Телешки продукти</a>
</div>
</div>
<div class="column1">
<div class="food-group">
<a href="/foods/Food-TableBG.php?products=pileshki-produkti"><img src="<?php echo $url.'/uploads/database/pileshki-produkti/A-Chicken-Products.jpg' ?>">Пилешки продукти</a>
</div>
</div>
<div class="column1">
<div class="food-group">
<a href = " /foods/Food-TableBG.php?products=svinski-produkti"><img src="<?php echo $url.'/uploads/database/svinski-produkti/A-Pork-Products.jpg' ?>">Свински продукти</a>
</div>
</div>
<div class="column1">
<div class="food-group">
<a href="/foods/Food-TableBG.php?products=ribni-produkti"><img src="<?php echo $url.'/uploads/database/riba-i-morski-darove/A-Fish-And-Seafood.gif' ?>">Риба и морски дарове</a>
</div>
</div>
<div class="column1">
<div class="food-group">
<a href="/foods/Food-TableBG.php?products=mlechni-produkti">
<img src="<?php echo $url.'/uploads/database/mlechni-i-qichni-produkti/A-Dairy-Products.png' ?>">Млечни и яйчни продукти</a>
</div>
</div>
<div class="column1">
<div class="food-group">
<a href=" /foods/Food-TableBG.php?products=plodove"><img src="<?php echo $url.'/uploads/database/plodove-i-plodovi-sokove/A-Fruits-And-Juices.png'?>">Плодове и плодови сокове</a>
</div>
</div>
<div class="column1">
<div class="food-group">
<a href=" /foods/Food-TableBG.php?products=masla-i-olya"><img src="<?php echo $url.'/uploads/database/masla-i-olya/A-Olive-Oil.png' ?>">Масла и олия</a>
</div>
</div>
<div class="column1">
<div class="food-group">
<a><img src="<?php echo $url.'/uploads/database/podpravki-i-bilki/A-Herbs.jpg' ?>">Подправки и билки</a>
</div>
</div>
<div class="column1">
<div class="food-group">
<a><img src="<?php echo $url.'/uploads/database/qdki-i-semena/A-Nuts-And-Seeds.jpg' ?>">Ядки и семена</a>
</div>
</div>
<div class="column1">
<div class="food-group">
<a><img src="<?php echo $url.'/uploads/database/zaharni-izdeliq/A-Deserts.jpg' ?>">Захарни изделия</a>
</div>
</div>
<div class="column1">
<div class="food-group">
<a><img src="">tegavo</a>
</div>
</div>

</div> <!--Food Groups div-->
</div>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>