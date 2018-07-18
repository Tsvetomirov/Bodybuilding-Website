<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/inc/init.php';
require_once 'header.php';



?>
<script type = "text/javascript" src = "/ajax/create_diet/create_diet.js"></script>
<div style = "padding-top:250px; background:black; position:relative;">
	
	<section class = "nav-row">
          <ul class="page-breadcrumb">
            <li><a href="/index.php"><i class="fa fa-home"></i> Блог</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Създай диета</span> </li>
       </ul>
	   </section>
	   </div><!--Стила е в елемента не е в stylesheet-->
    <section class = 'cd-options'>
        <form>
            <div class = 'ds-search-div'>
                <input  class = 'ds-search-field' type = 'text' placeholder = 'Търсене..' autocomplete = "off"/>
            </div>
            <div class = 'ds-grams'>
                <input class = 'ds-grams-field' value = '100' type = 'text' placeholder = 'гр' autocomplete = 'off'/>
            </div>
            <div class  = 'ds-search-results'>
                
            </div>
        </form>
        
        
    </section>
    <section class = "cd-foods" >
        <select class ="cd-meal-number">
            <option data-id = '1'>Първо Хранене</option>
            <option data-id = '2'>Второ Хранене</option>
            <option data-id = '3'>Трето Хранене</option>
            <option data-id = '4'>Четвърто Хранене</option>
            <option data-id = '5'>Пето Хранене</option>
            <option data-id = '6'>Шесто Хранене</option>
            <option data-id = '7'>Седмо Хранене</option>
            <option data-id = '8'>Осмо Хранене</option>
        </select>
        <div class= "cd-meals">
            
        </div>
    </section>
	   

<?php 
require_once 'footer.php';
?>