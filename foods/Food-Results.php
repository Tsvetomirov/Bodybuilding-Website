<?php /*Template Name:Food-Results*/ ?>
<!DOCTYPE html>

<?php
$fsearch = "";
if (!empty($_GET['fsearch'])){

$fsearch=$_GET['fsearch'];

$query = "SELECT * FROM food_data_bg WHERE ";
$terms = explode (" ",$fsearch);
$i=0;
foreach($terms as $each){
      $i++;
     if($i == 1){
       $query .= "title LIKE '%".$each."%'";
     }
else{
      $query .= "OR title LIKE '%".$each."%'";
     }
}

require_once $_SERVER['DOCUMENT_ROOT'].'/inc/connection.php';
       $query = mysqli_query($connect,$query);

       $num_rows = mysqli_num_rows($query);

}
else
{
    header( "Location: /foods/food-groups-bg.php" );
	exit();
}


?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';?>

<html>

<form method="get" action='./food-results.php' accept-charset="utf-8">

<input type="text" name="fsearch" id="food_search" autocomplete="off" value="<?php 
if(isset($_GET['fsearch'])){
echo $_GET['fsearch'];
}?>">
<button  id="search-button" type="submit"><i id="button-icon"></i><span id="button-text">Търсене..</span></button>
<?php
          if($num_rows > 0){
                echo  
                    "       
                    <table id='table1'>            
                    <thead>
                    <tr class='Table1-row1'>
                    <th></th><th>Храни</th><th>Въглехидрати</th><th>Белтъчини</th><th>Мазнини</th><th>Калории</th>
                    </tr>
                    </thead>
                    ";

                   echo "<tbody>";
                      
            while($row = mysqli_fetch_assoc($query)){
               $myID = $row["id"];
               $title = $row["title"];
               $state = $row["state"];
               $fimage = $row["fimage"];
               $carbs = $row["carbohydrates"];
               $fats = $row["fats"];
               $proteins = $row["proteins"];
               $CaloriesTotal = $row["calories total"];

              echo "
                    <tr class='Table1-row2'>
                    <td><a><img src='$fimage'</a></td>
                    <td><a href='/foods/food-information-bg.php?id=$myID'>$title <div>$state</div></a></td>
                    <td>$carbs</td>
                    <td>$fats</td>
                    <td>$proteins</td>
                    <td>$CaloriesTotal</td>
                    </tr>";
              }
              echo "</tbody>
               </table>";
          }
          else{
           echo "<div class='res1'>Не бяха намерени резултати за:$fsearch</div>";
          }
?>




</form>
</html>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/footer.php'; ?>