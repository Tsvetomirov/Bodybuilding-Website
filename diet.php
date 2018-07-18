<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/inc/init.php';
require_once 'header.php';


?>
<script type = "text/javascript" src = "/ajax/diet/diet-errors-ajax.js" ></script>

<div style = "padding-top:250px; background:black; position:relative;">
	
	<section class = "nav-row">
          <ul class="page-breadcrumb">
            <li><a href="/index.php"><i class="fa fa-home"></i> Блог</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Формуляр</span> </li>
       </ul>
	   </section>
	   
</div><!--Стила е в елемента не е в stylesheet-->
<form method = "POST">
<div class="diet-form">
<fieldset><legend>Лична информация</legend>
    <div> <label class = "personal-info">Имейл</label><input type = "text" placeholder = "Email" name = "email" /></div>
    <div> <label class = "personal-info">Възраст</label><input type = "text" placeholder = "Години" name = "age" /></div>
    <div> <label class = "personal-info">Височина</label><input type = "text" placeholder = "Сантиметри" name = "height" /></div>
    <div> <label class = "personal-info">Тегло</label><input type = "text" placeholder = "Килограми" name = "weight" /></div>
    <div>   <label class = "personal-info">Пол:</label>
    
            <label class = "diet-sex"><span><input type = "radio" name = "sex" value = "male" checked = "checked"/></span>Мъж </label>
            
            <label class = "diet-sex"><span><input type = "radio" name = "sex" value = "female"/></span>Жена</label> </div>
            
    <div><label class = "personal-info">Физическа Активност</label>
    
        <label class = "activity-level"><span> <input type = "radio" name = "activity" value = "nikakva_aktivnost" checked = "checked"/></span>Никаква активност(заседнал начин на живот)</label>
        
        <label class = "activity-level"><span> <input type = "radio" name = "activity" value = "sredna_aktivnost" /></span>Ниска Активност (1-3 тренировки седмично/ работа която не изисква силно физическо натоварване)</label>
               
        <label class = "activity-level"><span> <input type = "radio" name = "activity" value = "sredna_aktivnost"/></span>Средна Активност (1-3 тренировки седмично/високо интензивна работа)</label>
                      
        <label class = "activity-level"><span> <input type = "radio" name = "activity" value = "visoka_aktivnost" /></span>Висока Активност (3-5 тренировки седмично/работа която не изисква силно физическо натоварване)</label>
        
        <label class = "activity-level"><span> <input type = "radio"name = "activity" value = "mnogo_visoka_aktivnost" /></span>Много Висока Активност (3-5 тренировки седмично/високо интензивна работа)</label>
    </div>
    
    <div><label class = "personal-info">Цел</label>
         <label class = "purpose"><span> <input type = "radio" name = "goal" value = "poddurjane" checked = "checked"/></span>Поддържане на килограми</label>
        
        <label class = "purpose"><span> <input type = "radio" name = "goal" value = "kachvane"/></span>Покачване на килограми</label>
        
        <label class = "purpose"><span> <input type = "radio" name = "goal" value = "svalqne"/></span>Сваляне на килограми</label>
        
    </div>
    
    <div><label class = "personal-info">Заболявания (които могат да повияят на храненето)</label>
        <input type = "text" placeholder = "Заболявания" name = "diseases"/>
    </div>
    
    <div><label class = "personal-info">Предпочитани Храни</label>
        <input type = "text" placeholder = "Видове храни..." name = "liked_foods"/>
    </div>
    
    <div><label class = "personal-info">Храни които мразите и/или могат да Ви навредят</label>
        <input type = "text" placeholder = "Видове храни..." name = "hated_foods"/>
    </div>

    <div><label class = "personal-info">Бюджет за един ден</label>
        <input type = "text" placeholder = "Лева" name = "budget"/>
    </div>
    
    <div><label class = "personal-info">Допълнителна информация</label>
        <h6>От колко време тренирате и какво ?</h6><input type = "text" placeholder = "По желание" name = "training"/>
        <h6>Опишете с какво се храните през деня,по-принцип</h6>
        <input type = "text" placeholder = "По желание" name = "eat_usually"/>
    </div>
    <div>
        <input class = "d-f-sub" type = "submit" value = "Изпращане"/>
    </div>
</fieldset>
</div>
</form>
<?php 
require_once 'footer.php';
?>