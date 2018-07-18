<?php /*Template Name:Food-Search.php*/ ?>
<?php

$fsearch= "";

if(!empty($_POST['fsearch'])) {
$fsearch =htmlentities($_POST['fsearch']);
$req = ("SELECT * FROM food_data_bg WHERE ");
$term = explode(" ",$fsearch);
$i=0;
foreach($term as $form){
      $i++;
     if($i == 1){
       $req .= "title LIKE '%".$form."%'";
     }else{
      $req .= "OR title LIKE '%".$form."%'";
     }
}
require_once $_SERVER['DOCUMENT_ROOT'].'/inc/connection.php';
$req = mysqli_query($connect,$req);
     $num_rows = mysqli_num_rows($req);

          if($num_rows == 0){
echo 'Няма резултати';
}
else{
while($row = mysqli_fetch_assoc($req)){
$title= $row["title"];
$myID= $row["id"];
$image = $row["fimage"];
$state = $row["state"];
   ?>
       <div class="search-result">
          <a href="/foods/food-information-bg.php?id=<?php echo $myID;?>"><img id="result-image"src="<?php if(file_exists($_SERVER['DOCUMENT_ROOT'].$image)){echo $image;} else {echo '/uploads/images/Arrow-Up-2-icon.png';}?>"/></a>
           <span class="result-title"><a href="/foods/food-information-bg.php?id=<?php echo $myID;?>"><?php echo $title; ?></a></span>
            <span id = "result-state"><?php echo $state;?></span>
       </div>
       <?php
       }
    }
}
?>