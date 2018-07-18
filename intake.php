<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/init.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');

?>
<script type = "text/javascript" src="/ajax/intake/intake.js"> </script>
<div style = "padding-top:250px; background:black; position:relative;">
	
	<section class = "nav-row">
          <ul class="page-breadcrumb">
            <li><a href="/index.php"><i class="fa fa-home"></i> Блог</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Калориен прием</span> </li>
       </ul>
	   </section>
	   
</div><!--Стила е в елемента не е в stylesheet-->
<h3>Моля изберете нужният брой полета, според броя на дните, които ще въдведете </h3>
<form method = "POST" id = 'intake-form-x1'>
    <section class = "intake-body">
    	<select class = "intake-pick" name = "broi_dni">
    	
    		<option value = "2">Две полета</option>
    		<option value = "3">Три полета</option>
    		<option value = "4">Четири полета</option>
    		<option value = "5">Пет полета</option>
    		<option value = "6">Шест полета</option>
    		<option value = "7">Седем полета</option>
    		<option value = "8">Осем полета</option>
    		<option value = "9">Девет полета</option>
    		<option value = "10">Десет полета</option>
    		<option value = "11">Единадесет полета</option>
    		<option value = "12">Дванадесет полета</option>
            <option value = "13">Тринадесет полета</option>
    		<option value = "14">Четиринадесет полета</option>
    		
    	</select>
    </section>
</form>

    
    <div id = "intake_input"></div>
<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php');
?>