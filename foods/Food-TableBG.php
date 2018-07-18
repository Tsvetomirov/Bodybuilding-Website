<?php /*Template Name:Food TableBG*/ ?>
<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';

if(logged_in() === false){
    header('Location:/maintenance');
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>
<?php
//$page_name= strtok($_SERVER['REQUEST_URI'],'?');
//Ако не е зададена категория с продукти,а са избрани всички
if(isset($_GET['products']) && $_GET['products'] == 'all'){
	$current_page = 'food-table-all'; //за хеадъра,за да пусне актив класа
	
$sql = "SELECT COUNT(id) FROM food_data_bg ";
$query = mysqli_query($connect,$sql);
$row = mysqli_fetch_array($query);
if(implode($row) == 0){
	$errors[] = 'Няма намерени продукти!';
}else{

$allrows = $row[0];

$page_rows = 10;

$last = ceil($allrows/$page_rows);
//Check 1
if($last < 1){
	$last = 1;
}

$pagenum = 1;
//Check 2
if (isset($_GET['pn'])){
   $pagenum = preg_replace('#[^0-9]#', ' ', $_GET['pn']);
}
if($pagenum < 1){	
$pagenum = 1;
}
else if ($pagenum > $last){
	$pagenum = $last;
}
$limit = 'LIMIT ' .($pagenum-1) * $page_rows . ',' . $page_rows;
$sql = "SELECT id,fimage,title,state,carbohydrates,proteins,fats,`calories total` FROM food_data_bg ".$limit;
$query = mysqli_query($connect,$sql);



$paginationCtrls = '';

if($last != 1){

   if($pagenum > 1){
	$previous = $pagenum - 1;
	$paginationCtrls .= ' <span class = "p-controls-long"><a href="?products='.$_GET['products'].'&pn='.$previous.'">Предишна</a></span>';
    for ($i = $pagenum-4; $i < $pagenum; $i++){
		if($i > 0){
			$paginationCtrls .=' <span class = "p-controls-short"><a href="?products='.$_GET['products'].'&pn='.$i.'">'.$i.'</a></span>';
		}
	}
	}
	$paginationCtrls .= "<span class='p-controls'> $pagenum </span>";
	
	for($i = $pagenum+1; $i <=$last; $i++){
				$paginationCtrls .=' <span class = "p-controls-short"><a href="food%20tablebg.php?products='.$_GET['products'].'&pn='.$i.'">'.$i.'</a></span> ';
		if($i >= $pagenum + 4){
			break;
		}
	}
	if ($pagenum!=$last){
		$next = $pagenum+1;
		$paginationCtrls .= '<span class = "p-controls-long"><a href="?products='.$_GET['products'].'&pn='.$next.'">Следваща</a></span>';
	}
}
mysqli_close($connect);

//$query = "SELECT * FROM food_data_bg where pageid = '" . $page_name . "'";
//$result = mysqli_query($connect, $query);
//if (!$connect)
//  {
//  die("Connection error: " . mysqli_error());
//  }

?>
<html>

<div style = "padding-top:250px; background:black; position:relative;">
	
	<section class = "nav-row">
          <ul class="page-breadcrumb">
            <li><a href="/index.php"><i class="fa fa-home"></i> Блог</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="/foods/food-groups-bg.php">Търсене на продукти</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Продукти</span> </li>
       </ul>
	   </section>
	   
</div><!--Стила е в елемента не е в stylesheet-->

<table id="table1">
<thead>
<tr class="Table1-row1">
<th></th><th>Храни</th><th>Въглехидрати</th><th>Белтъчини</th><th>Мазнини</th><th>Калории</th>
</tr>
</thead>
<tbody>
<?php while($row1 = mysqli_fetch_array($query)):;?>
<tr class="Table1-row2">
<td><a><img src=<?php if(file_exists($_SERVER['DOCUMENT_ROOT'].$row1['fimage'])){ echo $row1['fimage']; } else { echo '/images/image-not-available.png';}?>></a></td>
<td><a href="/foods/Food-Information-BG.php?id=<?php echo $row1["id"];?>"><?php echo $row1['title'];?></a>
<div><?php echo $row1['state']; ?></div>
</td>
<td><?php echo $row1['carbohydrates'];?></td>
<td><?php echo $row1['proteins'];?></td>
<td><?php echo $row1['fats'];?></td>
<td><?php echo $row1['calories total'];?></td>
</tr>
<?php endwhile;?>
<!--
<tr class="Table1-row2"><td><a><img src="http://www.nital.org/files/6416/2016/03/14/urolitiaza-pri-agnetata.jpg"></a></td><td>Foods</td><td>Carbohydrates</td><td>Proteins</td><td>Fats</td><td>Calories Total</td></tr>
 -->
</tbody>
</table>
<div id="p-controls"><?php echo $paginationCtrls?></div>
<?php 
	} //Затварящите на if(implode($row)==0)

	require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
}






else{

//Ако е зададена определена категория с продукти
if(isset($_GET['products']) && !empty($_GET['products'])){
	
$sql = "SELECT COUNT(id) FROM food_data_bg WHERE pageid = '" . clean_xss($_GET['products']) . "'";

$query = mysqli_query($connect,$sql);
$row = mysqli_fetch_array($query);
if(implode($row) == 0){
	$errors[] = 'Няма намерени продукти!';
}else{

$allrows = $row[0];

$page_rows = 10;

$last = ceil($allrows/$page_rows);
//Check 1
if($last < 1){
	$last = 1;
}

$pagenum = 1;
//Check 2
if (isset($_GET['pn'])){
   $pagenum = preg_replace('#[^0-9]#', ' ', $_GET['pn']);
}
if($pagenum < 1){	
$pagenum = 1;
}
else if ($pagenum > $last){
	$pagenum = $last;
}
$limit = 'LIMIT ' .($pagenum-1) * $page_rows . ',' . $page_rows;
$sql = "SELECT * FROM food_data_bg where pageid = '".$_GET['products']."' $limit";
$query = mysqli_query($connect,$sql);


$textline1 = "Food_data_bg (<b>$allrows</b>)";
$textline2 = "Страница <b>$pagenum</b>от<b>$last</b>";

$paginationCtrls = '';

if($last != 1){

   if($pagenum > 1){
	$previous = $pagenum - 1;
	$paginationCtrls .= ' <span class = "p-controls-long"><a href="?products='.$_GET['products'].'&pn='.$previous.'">Предишна</a></span>';
    for ($i = $pagenum-4; $i < $pagenum; $i++){
		if($i > 0){
			$paginationCtrls .=' <span class = "p-controls-short"><a href="?products='.$_GET['products'].'&pn='.$i.'">'.$i.'</a></span>';
		}
	}
	}
	$paginationCtrls .= "<span class='p-controls'> $pagenum </span>";
	
	for($i = $pagenum+1; $i <=$last; $i++){
				$paginationCtrls .=' <span class = "p-controls-short"><a href="Food-TableBG.php?products='.$_GET['products'].'&pn='.$i.'">'.$i.'</a></span> ';
		if($i >= $pagenum + 4){
			break;
		}
	}
	if ($pagenum!=$last){
		$next = $pagenum+1;
		$paginationCtrls .= '<span class = "p-controls-long"><a href="?products='.$_GET['products'].'&pn='.$next.'">Следваща</a></span>';
	}
}
mysqli_close($connect);

//$query = "SELECT * FROM food_data_bg where pageid = '" . $page_name . "'";
//$result = mysqli_query($connect, $query);
//if (!$connect)
//  {
//  die("Connection error: " . mysqli_error());
//  }
?>
<html>
<div style = "padding-top:250px; background:black; position:relative;">
	
	<section class = "nav-row">
          <ul class="page-breadcrumb">
            <li><a href="/index.php"><i class="fa fa-home"></i> Блог</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="/foods/food-groups-bg.php">Търсене на продукти</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Продукти</span> </li>
       </ul>
	   </section>
	   
</div><!--Стила е в елемента не е в stylesheet-->
<table id="table1">
<thead>
<tr class="Table1-row1">
<th></th><th>Храни</th><th>Въглехидрати</th><th>Белтъчини</th><th>Мазнини</th><th>Калории</th>
</tr>
</thead>
<tbody>
<?php while($row1 = mysqli_fetch_array($query)):;?>
<tr class="Table1-row2">
<td><a><img src="<?php if(file_exists($_SERVER['DOCUMENT_ROOT'].$row1[2])){ echo $row1[2]; } else { echo '/images/image-not-available.png';}?>"></a></td>
<td><a href="/foods/Food-Information-BG.php?id=<?php echo $row1["id"];?>"><?php echo $row1[3];?></a>
<div><?php echo $row1[4]; ?></div>
</td>
<td><?php echo $row1[5];?></td>
<td><?php echo $row1[6];?></td>
<td><?php echo $row1[7];?></td>
<td><?php echo $row1[8];?></td>
</tr>
<?php endwhile;?>
<!--
<tr class="Table1-row2"><td><a><img src="http://www.nital.org/files/6416/2016/03/14/urolitiaza-pri-agnetata.jpg"></a></td><td>Foods</td><td>Carbohydrates</td><td>Proteins</td><td>Fats</td><td>Calories Total</td></tr>
 -->
</tbody>
</table>
<div id="p-controls"><?php echo $paginationCtrls?></div>
<?php 
	} //Затварящите на if(implode($row)==0)
}else{
	$errors[] = 'Няма намерени продукти';
}
if(!empty($errors)){
	print_r(output_errors($errors));
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
}
?>
</html>