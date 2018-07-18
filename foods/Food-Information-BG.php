<?php /*Template Name:Food-Information*/ ?>
<?php
function InGrams($ForChange, $isIU = false){
              if($isIU && $isIU > "0.0000"){
                return "IU";
                }
              if($ForChange > 0){
                return "г";
               }
              if($ForChange === "0.0000"){
                return "";
               }
}
function InMiliGrams($ForChange1){
       if($ForChange1 > 0){
           return "мг";
           }
       if($ForChange1 === "0.0000"){
           return "";
           }
}
function InMicroGrams($ForChange2){
       if($ForChange2 > 0){
          return "мкг";
          }
       if($ForChange2 ==="0.0000"){
          return "";
          }
}

function zeroField($field)
               {
        if ($field === "0.0000")
               {
               return "-";
               }
        if ($field > 0){
			
               return $field+0;
               }
}


function zeroFieldDV($var1)
               {
        if ($var1 === "0.0000")
               {
               return "-";
               }
        if ($var1 > "0")
              {
              return $var1 + 0 . '%';
              }
}

require_once $_SERVER['DOCUMENT_ROOT'] .'/inc/init.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/header.php';


if (isset($_GET['id']) && !empty($_GET['id'])){
	
	
$query = "SELECT * FROM food_data_bg where id = '" . clean_xss_int($_GET['id']) . "'";
$result = mysqli_query($connect, $query);


if (mysqli_num_rows($result) == 0){
	echo 'Няма намерен продукт с това ИД';
	
}
 while($row1 = mysqli_fetch_assoc($result)):;


$title= $row1['title'];
$fimage = $row1['fimage'];
$state = $row1['state'];
$carbs = $row1['carbohydrates'];
$carbsDV = zeroFieldDV($row1['carbs dv']);
$proteins = $row1['proteins'];
$proteinsDV = zeroFieldDV($row1['prot dv']);
$fats = $row1['fats'];
$fatsDV = zeroFieldDV($row1['fats dv']);
$caloriesTotal = zeroField($row1['calories total']);
$caloriesTotalDV = zeroFieldDV($row1['calories totaldv']);
$carbsCalories = zeroField($row1['carbs cal']);
$protCalories = zeroField($row1['prot cal']);
$fatCalories = zeroField($row1['fat cal']);
$alcoholCalories = zeroField($row1['alcohol cal']);
$fibers = zeroField($row1['fibers']);
$fibersDV = zeroFieldDV($row1['fibers dv']);
$starch = zeroField($row1['starch']);
$sugars = zeroField($row1['sugars']);
$sucrose = zeroField($row1['sucrose']);
$glucose = zeroField($row1['glucose']);
$fructose = zeroField($row1['fructose']);
$lactose = zeroField($row1['lactose']);
$maltose = zeroField($row1['maltose']);
$galactose = zeroField($row1['galactose']);
$saturatedfats = zeroField($row1['sat fats']);
$saturatedfatsDV = zeroFieldDV($row1['sat fatsdv']);
$butanoicAcid = zeroField($row1['butanoic acid']);
$hexanoicAcid = zeroField($row1['hexanoic acid']);
$octanoicAcid = zeroField($row1['octanoic acid']);
$decanoicAcid = zeroField($row1['decanoic acid']);
$dodecanoicAcid = zeroField($row1['dodecanoic acid']);
$pentadecanoicAcid = zeroField($row1['pentadecanoic acid']);
$tridecanoicAcid = zeroField($row1['tridecanoic acid']);
$tetradecanoicAcid = zeroField($row1['tetradecanoic acid']);
$hexadecanoicAcid = zeroField($row1['hexadecanoic acid']);
$heptadecanoicAcid = zeroField($row1['heptadecanoic acid']);
$octadecanoicAcid = zeroField($row1['octadecanoic acid']);
$nonadecanoicAcid = zeroField($row1['nonadecanoic acid']);
$eicosanoicAcid= zeroField($row1['eicosanoic acid']);
$docosanoicAcid = zeroField($row1['docosanoic acid']);
$tetracosanoicAcid = zeroField($row1['tetracosanoic acid']);

$monounsaturatedfats = zeroField($row1['monosat fats']);
$tetradecenoicMonoAcid = zeroField($row1['tetradecenoic mono']);
$pentadecenoicMonoAcid = zeroField($row1['pentadecenoic mono']);
$hexadecenoicMonoAcid = zeroField($row1['hexadecenoic mono']);
$hexadecenoicMonoAcidC = zeroField($row1['hexadecenoic c']);
$hexadecenoicMonoAcidT = zeroField($row1['hexadecenoic t']);
$heptadecenoicMonoAcid = zeroField($row1['heptadecenoic mono']);
$octadecenoicMonoAcid = zeroField($row1['octadecenoic mono']);
$octadecenoicMonoAcidC = zeroField($row1['octadecenoic c']);
$octadecenoicMonoAcidT = zeroField($row1['octadecenoic t']);
$eicosenoicMonoAcid = zeroField($row1['eicosenoic mono']);
$docosenoicMonoAcid = zeroField($row1['docosenoic mono']);
$docosenoicMonoAcidC = zeroField($row1['docosenoic c']);
$docosenoicMonoAcidT = zeroField($row1['docosenoic t']);
$tetracosenoicMonoAcidC = zeroField($row1['tetracosenoic c']);
$polyunsaturatedfats = zeroField($row1['poly fats']);
$hexadecadienoicPolyAcid = zeroField($row1['hexadecadienoic poly']);
$octadecadienoicPolyAcid = zeroField($row1['octadecadienoic poly']);
$octadecadienoicPolyAcidN6 = zeroField($row1['octadecadienoic n-6,c,c']);
$octadecadienoicPolyAcidCT = zeroField($row1['octadecadienoic c,t']);
$octadecadienoicPolyAcidTC = zeroField($row1['octadecadienoic t,c']);
$octadecadienoicPolyAcidTT = zeroField($row1['octadecadienoic t,t']);
$octadecadienoicPolyAcidIso = zeroField($row1['octadecadinoic iso']);
$octadecadienoicPolyAcidUndefined = zeroField($row1['octadecadinoic']);
$octadecatrienoicPolyAcid = zeroField($row1['octadecatrienoic poly']);
$octadecatrienoicPolyAcidN3CCC = zeroField($row1['octadecatrienoic n-3 c,c,c']);
$octadecatrienoicPolyAcidN6CCC = zeroField($row1['octadecatrienoic n-6 c,c,c']);
$octadecatetraenoicPolyAcid = zeroField($row1['octadecatetraenoic poly']);
$eicosadienoicPolyAcidN6CC = zeroField($row1['eicosadienoic n-6 c,c']);
$eicosatrienoicPolyAcid = zeroField($row1['eicosatrienoic poly']);
$eicosatrienoicPolyAcidN3 = zeroField($row1['eicosatrienoic n-3']);
$eicosatrienoicPolyAcidN6 = zeroField($row1['eicosatrienoic n-6']);
$eicosatetraenoicPolyAcid = zeroField($row1['eicosatetraenoic poly']);
$eicosatetraenoicPolyAcidN3 = zeroField($row1['eicosatetraenoic n-3']);
$eicosatetraenoicPolyAcidN6 = zeroField($row1['eicosatetraenoic n-6']);
$eicosapentaenoicPolyAcidN3 = zeroField($row1['eicosapentaenoic n-3']);
$dicosadienoicPolyAcid = zeroField($row1['dicosadienoic poly']);
$docosapentaenoicPolyAcidN3 = zeroField($row1['docosapentaenoic n-3']);
$docosahexaenoicPolyAcidN3 = zeroField($row1['docosahexaenoic n-3']);

$transfats = zeroField($row1['trans fats']);
$omega3 = zeroField($row1['omega 3']);
$omega6 = zeroField($row1['omega 6']);
$vitaminA = zeroField($row1['vitamin a']);
$vitaminADV = zeroFieldDV($row1['vitamin a dv']);
$retinol = zeroField($row1['retinol']);
$retinolAE = zeroField($row1['retinol ae']);
$alphaCarotene = zeroField($row1['alpha carotene']);
$betaCarotene = zeroField($row1['beta carotene']);
$betaCryptoxanthin = zeroField($row1['beta crypt']);
$lycopene = zeroField($row1['lycopene']);
$luteinAndZeaxanthin = zeroField($row1['lutein + zaexanthin']);
$vitaminC = zeroField($row1['vitamin c']);
$vitaminCDV = zeroFieldDV($row1['vitamin c dv']);
$vitaminD = zeroField($row1['vitamin d']);
$vitaminDDV = zeroFieldDV($row1['vitamin d dv']);
$vitaminE = zeroField($row1['vitamin e']);
$vitaminEDV = zeroFieldDV($row1['vitamin e dv']);
$betaTocopherol = zeroField($row1['beta tocopherol']);
$gammaTocopherol = zeroField($row1['gamma tocopherol']);
$deltaTocopherol = zeroField($row1['delta tocopherol']);
$vitaminK = zeroField($row1['vitamin k']);
$vitaminKDV = zeroFieldDV($row1['vitamin k dv']);
$thiamin = zeroField($row1['thiamin']);
$thiaminDV = zeroFieldDV($row1['thiamin dv']);
$riboflavin = zeroField($row1['riboflavin']);
$riboflavinDV = zeroFieldDV($row1['riboflavin dv']);
$niacin = zeroField($row1['niacin']);
$niacinDV = zeroFieldDV($row1['niacin dv']);
$vitaminB6 = zeroField($row1['vitamin b6']);
$vitaminB6DV = zeroFieldDV($row1['vitamin b6 dv']);
$folate = zeroField($row1['folate']);
$folateDV = zeroFieldDV($row1['folate dv']);
$foodFolate = zeroField($row1['food folate']);
$folicAcid = zeroField($row1['folic acid']);
$dietaryFolateEquiv = zeroField($row1['dietary folate equiv']);
$vitaminB12 = zeroField($row1['vitamin b12']);
$vitaminB12DV = zeroFieldDV($row1['vitamin b12 dv']);
$pantothenicAcid = zeroField($row1['pantothenic acid']);
$pantothenicAcidDV = zeroFieldDV($row1['pantothenic acid dv']);
$choline = zeroField($row1['choline']);
$betaine = zeroField($row1['betaine']);
$calcium = zeroField($row1['calcium']);
$calciumDV = zeroFieldDV($row1['calcium dv']);
$iron = zeroField($row1['iron']);
$ironDV = zeroFieldDV($row1['iron dv']);
$magnesium = zeroField($row1['magnesium']);
$magnesiumDV = zeroFieldDV($row1['magnesium dv']);
$phosphorus = zeroField($row1['phosphorus']);
$phosphorusDV = zeroFieldDV($row1['phosphorus dv']);
$potassium = zeroField($row1['potassium']);
$potassiumDV = zeroFieldDV($row1['potassium dv']);
$sodium = zeroField($row1['sodium']);
$sodiumDV =  zeroFieldDV($row1['sodium dv']);
$zinc = zeroField($row1['zinc']);
$zincDV = zeroFieldDV($row1['zinc dv']);
$copper = zeroField($row1['copper']);
$copperDV = zeroFieldDV($row1['copper dv']);
$manganese = zeroField($row1['manganese']);
$manganeseDV= zeroFieldDV($row1['manganese dv']);
$selenium = zeroField($row1['selenium']);
$seleniumDV = zeroFieldDV($row1['selenium dv']);
$fluoride = zeroField($row1['fluoride']);
$fluorideDV = zeroFieldDV($row1['fluoride dv']);
$cholesterol = zeroField($row1['cholesterol']);
$cholesterolDV = zeroFieldDV($row1['cholesteroldv']);
$phytosterol = zeroField($row1['phytosterol']);
$campesterol = zeroField($row1['campesterol']);
$stigmasterol = zeroField($row1['stigmasterol']);
$betaSitosterol = zeroField($row1['beta-sitosterol']);
$tryptophan = zeroField($row1['tryptophan']);
$threonine = zeroField($row1['threonine']);
$isoleucine = zeroField($row1['isoleucine']);
$leucine = zeroField($row1['leucine']);
$lysine = zeroField($row1['lysine']);
$methionine = zeroField($row1['methionine']);
$cysteine = zeroField($row1['cysteine']);
$phenylanine = zeroField($row1['phenylanine']);
$tyrosine = zeroField($row1['tyrosine']);
$valine = zeroField($row1['valine']);
$arginine = zeroField($row1['arginine']);
$histidine = zeroField($row1['histidine']);
$alanine = zeroField($row1['alanine']);
$asparticAcid = zeroField($row1['aspartic acid']);
$glutamicAcid = zeroField($row1['glutamic acid']);
$glycine = zeroField($row1['glycine']);
$proline = zeroField($row1['proline']);
$serine = zeroField($row1['serine']);
$hydroxyproline = zeroField($row1['hydroxyproline']);



$alcohol = zeroField($row1['alcohol']);
$water = zeroField($row1['water']);
$ash = zeroField($row1['ash']);
$caffeine = zeroField($row1['caffeine']);
$theobromine = zeroField($row1['theobromine']);



$proteinsgr = InGrams($row1['proteins']);
$carbsgr = InGrams($row1['carbohydrates']);
$fibersgr = InGrams($row1['fibers']);
$starchgr = InGrams($row1['starch']);
$sugarsgr = InGrams($row1['sugars']);
$fatsgr = InGrams($row1['fats']);
$saturatedfatsgr = InGrams($row1['sat fats']);
$monounsaturatedfatsgr = InGrams($row1['monosat fats']);
$polyunsaturatedfatsgr = InGrams($row1['poly fats']);
$transfatsgr = InGrams($row1['trans fats']);
$vitaminAgr = InGrams($row1['vitamin a'],true);
$vitaminDgr =InGrams($row1['vitamin d'],true);
$alcoholgr = InGrams($row1['alcohol']);
$watergr = InGrams($row1['water']);
$ashgr = InGrams($row1['ash']);

//fats in miligrams
$butanoicAcidmgr = InMiliGrams($row1['butanoic acid']);
$hexanoicAcidmgr = InMiliGrams($row1['hexanoic acid']);
$octanoicAcidmgr = InMiliGrams($row1['octanoic acid']);
$decanoicAcidmgr = InMiliGrams($row1['decanoic acid']);
$dodecanoicAcidmgr = InMiliGrams($row1['dodecanoic acid']);
$pentadecanoicAcidmgr = InMiliGrams($row1['pentadecanoic acid']);
$tridecanoicAcidmgr = InMiliGrams($row1['tridecanoic acid']);
$tetradecanoicAcidmgr = InMiliGrams($row1['tetradecanoic acid']);
$hexadecanoicAcidmgr = InMiliGrams($row1['hexadecanoic acid']);
$heptadecanoicAcidmgr = InMiliGrams($row1['heptadecanoic acid']);
$octadecanoicAcidmgr = InMiliGrams($row1['octadecanoic acid']);
$nonadecanoicAcidmgr = InMiliGrams($row1['nonadecanoic acid']);
$eicosanoicAcidmgr = InMiliGrams($row1['eicosanoic acid']);
$docosanoicAcidmgr = InMiliGrams($row1['docosanoic acid']);
$tetracosanoicAcidmgr = InMiliGrams($row1['tetracosanoic acid']);

$tetradecenoicMonoAcidCmgr = InMiliGrams($row1['tetradecenoic mono']);
$pentadecenoicMonoAcidmgr = InMiliGrams($row1['pentadecenoic mono']);
$hexadecenoicMonoAcidmgr = InMiliGrams($row1['hexadecenoic mono']);
$hexadecenoicMonoAcidCmgr = InMiliGrams($row1['hexadecenoic c']);
$hexadecenoicMonoAcidTmgr = InMiliGrams($row1['hexadecenoic t']);
$heptadecenoicMonoAcidmgr = InMiliGrams($row1['heptadecenoic mono']);
$octadecenoicMonoAcidmgr= InMiliGrams($row1['octadecenoic mono']);
$octadecenoicMonoAcidCmgr = InMiliGrams($row1['octadecenoic c']);
$octadecenoicMonoAcidTmgr = InMiliGrams($row1['octadecenoic t']);
$eicosenoicMonoAcidmgr = InMiliGrams($row1['eicosenoic mono']);
$docosenoicMonoAcidmgr = InMiliGrams($row1['docosenoic mono']);
$docosenoicMonoAcidCmgr = InMiliGrams($row1['docosenoic c']);
$docosenoicMonoAcidTmgr = InMiliGrams($row1['docosenoic t']);
$tetracosenoicMonoAcidCmgr = InMiliGrams($row1['tetracosenoic c']);

$hexadecadienoicPolyAcidmgr = InMiliGrams($row1['hexadecadienoic poly']);
$octadecadienoicPolyAcidmgr = InMiliGrams($row1['octadecadienoic poly']);
$octadecadienoicPolyAcidN6mgr = InMiliGrams($row1['octadecadienoic n-6,c,c']);
$octadecadienoicPolyAcidCTmgr = InMiliGrams($row1['octadecadienoic c,t']);
$octadecadienoicPolyAcidTCmgr = InMiliGrams($row1['octadecadienoic t,c']);
$octadecadienoicPolyAcidTTmgr = InMiliGrams($row1['octadecadienoic t,t']);
$octadecadienoicPolyAcidIsomgr = InMiliGrams($row1['octadecadinoic iso']);
$octadecadienoicPolyAcidUndefinedmgr = InMiliGrams($row1['octadecadinoic']);
$octadecatrienoicPolyAcidmgr = InMiliGrams($row1['octadecatrienoic poly']);
$octadecatrienoicPolyAcidN3CCCmgr = InMiliGrams($row1['octadecatrienoic n-3 c,c,c']);
$octadecatrienoicPolyAcidN6CCCmgr = InMiliGrams($row1['octadecatrienoic n-6 c,c,c']);
$octadecatetraenoicPolyAcidmgr = InMiliGrams($row1['octadecatetraenoic poly']);
$eicosadienoicPolyAcidN6CCmgr = InMiliGrams($row1['eicosadienoic n-6 c,c']);
$eicosatrienoicPolyAcidmgr = InMiliGrams($row1['eicosatrienoic poly']);
$eicosatrienoicPolyAcidN3mgr = InMiliGrams($row1['eicosatrienoic n-3']);
$eicosatrienoicPolyAcidN6mgr = InMiliGrams($row1['eicosatrienoic n-6']);
$eicosatetraenoicPolyAcidmgr = InMiliGrams($row1['eicosatetraenoic poly']);
$eicosatetraenoicPolyAcidN3mgr = InMiliGrams($row1['eicosatetraenoic n-3']);
$eicosatetraenoicPolyAcidN6mgr = InMiliGrams($row1['eicosatetraenoic n-6']);
$eicosapentaenoicPolyAcidN3mgr = InMiliGrams($row1['eicosapentaenoic n-3']);
$dicosadienoicPolyAcidmgr = InMiliGrams($row1['dicosadienoic poly']);
$docosapentaenoicPolyAcidN3mgr = InMiliGrams($row1['docosapentaenoic n-3']);
$docosahexaenoicPolyAcidN3mgr = InMiliGrams($row1['docosahexaenoic n-3']);

$omega3mgr = InMiliGrams($row1['omega 3']);
$omega6mgr = InMiliGrams($row1['omega 6']);
$vitaminCmgr = InMiliGrams($row1['vitamin c']);
$vitaminEmgr = InMiliGrams($row1['vitamin e']);
$thiaminmgr = InMiliGrams($row1['thiamin']);
$riboflavinmgr = InMiliGrams($row1['riboflavin']);
$niacinmgr = InMiliGrams($row1['niacin']);
$vitaminB6mgr = InMiliGrams($row1['vitamin b6']);
$pantothenicAcidmgr = InMiliGrams($row1['pantothenic acid']);
$cholinemgr = InMiliGrams($row1['choline']);
$betainemgr = InMiliGrams($row1['betaine']);
$caffeinemgr = InMiliGrams($row1['caffeine']);
$theobrominemgr = InMiliGrams($row1['theobromine']);
$tryptophanmgr = InMiliGrams($row1['tryptophan']);
$threoninemgr = InMiliGrams($row1['threonine']);
$isoleucinemgr = InMiliGrams($row1['isoleucine']);
$leucinemgr = InMiliGrams($row1['leucine']);
$lysinemgr = InMiliGrams($row1['lysine']);
$methioninemgr = InMiliGrams($row1['methionine']);
$cysteinemgr = InMiliGrams($row1['cysteine']);
$phenylaninemgr = InMiliGrams($row1['phenylanine']);
$tyrosinemgr = InMiliGrams($row1['tyrosine']);
$valinemgr = InMiliGrams($row1['valine']);
$argininemgr = InMiliGrams($row1['arginine']);
$histidinemgr = InMiliGrams($row1['histidine']);
$alaninemgr = InMiliGrams($row1['alanine']);
$asparticAcidmgr = InMiliGrams($row1['aspartic acid']);
$glutamicAcidmgr = InMiliGrams($row1['glutamic acid']);
$glycinemgr = InMiliGrams($row1['glycine']);
$prolinemgr = InMiliGrams($row1['proline']);
$serinemgr = InMiliGrams($row1['serine']);
$hydroxyprolinemgr = InMiliGrams($row1['hydroxyproline']);

$sucrosemgr = InMiliGrams($row1['sucrose']);
$glucosemgr = InMiliGrams($row1['glucose']);
$fructosemgr = InMiliGrams($row1['fructose']);
$lactosemgr = InMiliGrams($row1['lactose']);
$maltosemgr = InMiliGrams($row1['maltose']);
$galactosemgr = InMiliGrams($row1['galactose']);

$betaTocopherolmgr = InMiliGrams($row1['beta tocopherol']);
$gammaTocopherolmgr = InMiliGrams($row1['gamma tocopherol']);
$deltaTocopherolmgr = InMiliGrams($row1['delta tocopherol']);
$campesterolmgr = InMiliGrams($row1['campesterol']);
$stigmasterolmgr = InMiliGrams($row1['stigmasterol']);
$betaSitosterolmgr = InMiliGrams($row1['beta-sitosterol']);


 //Минерали miligrams
$calciummgr = InMiliGrams($row1['calcium']);
$ironmgr = InMiliGrams($row1['iron']);
$magnesiummgr = InMiliGrams($row1['magnesium']);
$phosphorusmgr = InMiliGrams($row1['phosphorus']);
$potassiummgr = InMiliGrams($row1['potassium']);
$sodiummgr = InMiliGrams($row1['sodium']);
$zincmgr = InMiliGrams($row1['zinc']);
$coppermgr = InMiliGrams($row1['copper']);
$manganesemgr = InMiliGrams($row1['manganese']);

//steroli
$phytosterolmgr = InMiliGrams($row1['phytosterol']);
$cholesterolmgr = InMiliGrams($row1['cholesterol']);


//micrograms
$vitaminKmcgr = InMicroGrams($row1['vitamin k']);
$folatemcgr = InMicroGrams($row1['folate']);
$vitaminB12mcgr = InMicroGrams($row1['vitamin b12']);
$seleniummcgr = InMicroGrams($row1['selenium']);
$fluoridemcgr = InMicroGrams($row1['fluoride']);
$retinolmcgr = InMicroGrams($row1['retinol']);
$retinolAEmcgr = InMicroGrams($row1['retinol ae']);
$alphaCarotenemcgr = InMicroGrams($row1['alpha carotene']);
$betaCarotenemcgr = InMicroGrams($row1['beta carotene']);
$betaCryptoxanthinmcgr = InMicroGrams($row1['beta crypt']);
$lycopenemcgr = InMicroGrams($row1['lycopene']);
$luteinAndZeaxanthinmcgr = InMicroGrams($row1['lutein + zaexanthin']);
$foodFolatemcgr = InMicroGrams($row1['food folate']);
$folicAcidmcgr = InMicroGrams($row1['folic acid']);
$dietaryFolateEquivmcgr = InMicroGrams($row1['dietary folate equiv']);


?>
<script type = "text/javascript" src ="/js/foods/sub-tables-hide.js"></script>
<div style = "padding-top:250px; background:black; position:relative;">
	
	<section class = "nav-row">
          <ul class="page-breadcrumb">
            <li><a href="/index.php"><i class="fa fa-home"></i> Блог</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="/foods/food-groups-bg.php">Търсене на продукти</a> <i class="fa fa-angle-double-right"></i></li>
			<li><a href="/foods/food-tableBG.php?products=all">Продукти</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span><?php echo $title;?></span> </li>
       </ul>
	   </section>
	   
</div><!--Стила е в елемента не е в stylesheet-->

<div class="food-content">
<div id="food-container">
<div id="food-general-information">
<div id="f-name"><h1>
<?php echo $title; ?>
</h1></div>
<img id="f-portrait" src="<?php echo $fimage; ?>"/>

<div>
<div class="food-macros"><b>Общи Калории</b><span><?php echo $caloriesTotal; ?></span></div>
<div class="food-macros"><b>Протеин</b><span><?php echo $proteins; ?></span></div>
<div class="food-macros"><b>Въглехидрат</b><span><?php echo $carbs; ?></span></div>
<div class="food-macros"><b>Мазнини</b><span><?php echo $fats; ?></span></div>
</div>

</div> <!-----Food-General-Information --->

<fieldset id="macro-names">
<legend id="food-legend">Хранителни Стойности</legend>
<div>Съдържание в 100 грама</div>

<div class="nutri-info">
<table>
<tbody>
<tr>

<td id="t-row11">
<div class="fm-table">

<div class="center1">Калории</div>

<div class="name-d1 left">Съдържание в 100гр</div>
<div class="name-d2 left"></div>
<div class="name-d3 left"><span class="name-s3">%ДС</span></div>

<div id="kalorii">
<div class="table-clear">
<div class="name-d1 left">Общо калории</div>
<div class="name-d2 left"><span class="name-s2"><?php ?></span><span id="unit_1"><?php echo $caloriesTotal?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $caloriesTotalDV?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">От Алкохоли</div>
<div class="name-d2 left"><span class="name-s2"><?php ?></span><span id="unit_1"><?php echo $alcoholCalories?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">От Белтъчини</div>
<div class="name-d2 left"><span class="name-s2"><?php ?></span><span id="unit_1"><?php echo $protCalories?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">От Въглехидрати</div>
<div class="name-d2 left"><span class="name-s2"><?php ?></span><span id="unit_1"><?php echo $carbsCalories?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">От Мазнини</div>
<div class="name-d2 left"><span class="name-s2"><?php ?></span><span id="unit_1"><?php echo $fatCalories?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>

</div> <!-- kalorii-->
<!--fm border-->
</div>


<!------Калории --->

<div class="fm-table">

<div class="center1">Въглехидрати</div>

<div class="name-d1 left">Съдържание в 100гр</div>
<div class="name-d2 left"></div>
<div class="name-d3 left"><span class="name-s3">%ДС</span></div>

<div id="vuglehidrati">
<div class="table-clear">
<div class="name-d1 left">Общо Въглехидрати</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $carbs?></span><span id="unit_1"><?php echo $carbsgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $carbsDV?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Фибри</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $fibers ?></span><span id="unit_1"><?php echo $fibersgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $fibersDV?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Нишесте</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $starch ?></span><span id="unit_1"><?php echo $starchgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Захари</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $sugars ?></span><span id="unit_1"><?php echo $sugarsgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Захароза</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $sucrose ?></span><span id="unit_1"><?php echo $sucrosemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Глюкоза</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $glucose ?></span><span id="unit_1"><?php echo $glucosemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Фруктоза</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $fructose ?></span><span id="unit_1"><?php echo $fructosemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Лактоза</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $lactose ?></span><span id="unit_1"><?php echo $lactosemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Малтоза</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $maltose ?></span><span id="unit_1"><?php echo $maltosemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Галактоза</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $galactose ?></span><span id="unit_1"><?php echo $galactosemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
</div>
<img id="carbsimg" src="http://localhost:7777/uploads/images/Arrow-down-2-icon.png">
</div>

<!---Въглехидрати край--->


<!---Мазнини ---->
<div class="fm-table">

<div class="center1">Мазнини и Мастни киселини</div>

<div class="name-d1 left">Съдържание в 100гр</div>
<div class="name-d2 left"></div>
<div class="name-d3 left"><span class="name-s3">%ДС</span></div>

<div id="maznini">
<div class="table-clear">
<div class="name-d1 left">Общо Мазнини</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $fats?></span><span id="unit_1"><?php echo $fatsgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $fatsDV?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Наситени</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $saturatedfats?></span><span id="unit_1"><?php echo $saturatedfatsgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $saturatedfatsDV ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Бутанова Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $butanoicAcid ?></span><span id="unit_1"><?php echo $butanoicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Капронова Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $hexanoicAcid ?></span><span id="unit_1"><?php echo $hexanoicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Октанова Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octanoicAcid ?></span><span id="unit_1"><?php echo $octanoicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Деканолова Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $decanoicAcid ?></span><span id="unit_1"><?php echo $decanoicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Додеканова Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $dodecanoicAcid ?></span><span id="unit_1"><?php echo $dodecanoicAcidmgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Арахидонова Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $pentadecanoicAcid ?></span><span id="unit_1"><?php echo $pentadecanoicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Тридеканова Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $tridecanoicAcid ?></span><span id="unit_1"><?php echo $tridecanoicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Тетрадеканова Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $tetradecanoicAcid ?></span><span id="unit_1"><?php echo $tetradecanoicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Хексадеканова Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $hexadecanoicAcid ?></span><span id="unit_1"><?php echo $hexadecanoicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Хептадеканова Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $heptadecanoicAcid ?></span><span id="unit_1"><?php echo $heptadecanoicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Октадеканоева Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecanoicAcid ?></span><span id="unit_1"><?php echo $octadecanoicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Нонадеканова Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $nonadecanoicAcid ?></span><span id="unit_1"><?php echo $nonadecanoicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Еикозанова Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $eicosanoicAcid ?></span><span id="unit_1"><?php echo $eicosanoicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Докозанова Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $docosanoicAcid ?></span><span id="unit_1"><?php echo $docosanoicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Тетракозеноева Кисл.</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $tetracosanoicAcid ?></span><span id="unit_1"><?php echo $tetracosanoicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>

<div class="table-clear">
<div class="name-d1 left">Мононенаситени</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $monounsaturatedfats ?></span><span id="unit_1"><?php echo $monounsaturatedfatsgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>14:1</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $tetradecenoicMonoAcid ?></span><span id="unit_1"><?php echo $tetradecenoicMonoAcidCmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>15:1</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $pentadecenoicMonoAcid ?></span><span id="unit_1"><?php echo $pentadecenoicMonoAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>16:1 Недиференциранa</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $hexadecenoicMonoAcid ?></span><span id="unit_1"><?php echo $hexadecenoicMonoAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>16:1 c</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $hexadecenoicMonoAcidC ?></span><span id="unit_1"><?php echo $hexadecenoicMonoAcidCmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>16:1 t</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $hexadecenoicMonoAcidT ?></span><span id="unit_1"><?php echo $hexadecenoicMonoAcidTmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>17:1</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $heptadecenoicMonoAcid ?></span><span id="unit_1"><?php echo $heptadecenoicMonoAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>18:1 Недиференцирана</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecenoicMonoAcid ?></span><span id="unit_1"><?php echo $octadecenoicMonoAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>18:1 c</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecenoicMonoAcidC ?></span><span id="unit_1"><?php echo $octadecenoicMonoAcidCmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>18:1 t</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecenoicMonoAcidT?></span><span id="unit_1"><?php echo $octadecenoicMonoAcidTmgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>20:1</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $eicosenoicMonoAcid ?></span><span id="unit_1"><?php echo $eicosenoicMonoAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>22:1 Недиференцира</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $docosenoicMonoAcid ?></span><span id="unit_1"><?php echo $docosenoicMonoAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>22:1 c</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $docosenoicMonoAcidC ?></span><span id="unit_1"><?php echo $docosenoicMonoAcidCmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>22:1 t</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $docosenoicMonoAcidT ?></span><span id="unit_1"><?php echo $docosenoicMonoAcidTmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>24:1 c</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $tetracosenoicMonoAcidC ?></span><span id="unit_1"><?php echo $tetracosenoicMonoAcidCmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>

<div class="table-clear">
<div class="name-d1 left">Полиненаситени</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $polyunsaturatedfats ?></span><span id="unit_1"><?php echo $polyunsaturatedfatsgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>16:2 Недиференцирана</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $hexadecadienoicPolyAcid ?></span><span id="unit_1"><?php echo $hexadecadienoicPolyAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>18:2 Недиференцирана</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecadienoicPolyAcid ?></span><span id="unit_1"><?php echo $octadecadienoicPolyAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>18:2 n-6 c,c</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecadienoicPolyAcidN6 ?></span><span id="unit_1"><?php echo $octadecadienoicPolyAcidN6mgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>18:2 c,t</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecadienoicPolyAcidCT ?></span><span id="unit_1"><?php echo $octadecadienoicPolyAcidCTmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>18:2 t,c</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecadienoicPolyAcidTC ?></span><span id="unit_1"><?php echo $octadecadienoicPolyAcidTCmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>18:2 t,t</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecadienoicPolyAcidTT ?></span><span id="unit_1"><?php echo $octadecadienoicPolyAcidTTmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>18:2 i</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecadienoicPolyAcidIso ?></span><span id="unit_1"><?php echo $octadecadienoicPolyAcidIsomgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>18:2 t Неопределена</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecadienoicPolyAcidUndefined ?></span><span id="unit_1"><?php echo $octadecadienoicPolyAcidUndefinedmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>18:3</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecatrienoicPolyAcid ?></span><span id="unit_1"><?php echo $octadecatrienoicPolyAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>18:3 n-3,c,c,c</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecatrienoicPolyAcidN3CCC ?></span><span id="unit_1"><?php echo $octadecatrienoicPolyAcidN3CCCmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>18:3 n-6,c,c,c</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecatrienoicPolyAcidN6CCC ?></span><span id="unit_1"><?php echo $octadecatrienoicPolyAcidN6CCCmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>18:4 Недиференциранa</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $octadecatetraenoicPolyAcid ?></span><span id="unit_1"><?php echo $octadecatetraenoicPolyAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>20:2 n-6,c,c</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $eicosadienoicPolyAcidN6CC ?></span><span id="unit_1"><?php echo $eicosadienoicPolyAcidN6CCmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>20:3 Недиференциранa</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $eicosatrienoicPolyAcid ?></span><span id="unit_1"><?php echo $eicosatrienoicPolyAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>20:3 n-3</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $eicosatrienoicPolyAcidN3 ?></span><span id="unit_1"><?php echo $eicosatrienoicPolyAcidN3mgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>20:3 n-6</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $eicosatrienoicPolyAcidN6 ?></span><span id="unit_1"><?php echo $eicosatrienoicPolyAcidN6mgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>20:4 Недиференциранa</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $eicosatetraenoicPolyAcid ?></span><span id="unit_1"><?php echo $eicosatetraenoicPolyAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>20:4 n-3</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $eicosatetraenoicPolyAcidN3 ?></span><span id="unit_1"><?php echo $eicosatetraenoicPolyAcidN3mgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>20:4 n-6</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $eicosatetraenoicPolyAcidN6 ?></span><span id="unit_1"><?php echo $eicosatetraenoicPolyAcidN6mgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>20:5 n-3</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $eicosapentaenoicPolyAcidN3 ?></span><span id="unit_1"><?php echo $eicosapentaenoicPolyAcidN3mgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>22:2</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $dicosadienoicPolyAcid ?></span><span id="unit_1"><?php echo $dicosadienoicPolyAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>22:5 n-3</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $docosapentaenoicPolyAcidN3 ?></span><span id="unit_1"><?php echo $docosapentaenoicPolyAcidN3mgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>22:6 n-3</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $docosahexaenoicPolyAcidN3 ?></span><span id="unit_1"><?php echo $docosahexaenoicPolyAcidN3mgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>

<div class="table-clear">
<div class="name-d1 left">Транс Мазнини</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $transfats ?></span><span id="unit_1"><?php echo $transfatsgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Омега 3 МК</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $omega3?></span><span id="unit_1"><?php echo $omega3mgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Омега 6 МК</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $omega6?></span><span id="unit_1"><?php echo $omega6mgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"></span></div>
</div>
</div>
<img id="mazniniimg" src="http://localhost:7777/uploads/images/Arrow-down-2-icon.png">
<!---------------ДРУГИ--------------------->
<!--fm border-->
</div>

<div class="fm-table">

<div class="center1">Други</div>

<div class="name-d1 left">Съдържание в 100гр</div>
<div class="name-d2 left"></div>
<div class="name-d3 left"><span class="name-s3">%ДС</span></div>

<div id="drugi">
<div class="table-clear">
<div class="name-d1 left">Алкохол</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $alcohol?></span><span id="unit_1"><?php echo $alcoholgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Вода</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $water ?></span><span id="unit_1"><?php echo $watergr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Пепел</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $ash ?></span><span id="unit_1"><?php echo $ashgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Кофеин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $caffeine ?></span><span id="unit_1"><?php  echo $caffeinemgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php  ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Теобромин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $theobromine ?></span><span id="unit_1"><?php echo $theobrominemgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php  ?></span></div>
</div>
</div>
</div>

</td>

<!---Мазнини -->
<td id="t-row12">
<div class="fm-table">

<div class="center1">Витамини</div>

<div class="name-d1 left">Съдържание в 100гр</div>
<div class="name-d2 left"></div>
<div class="name-d3 left"><span class="name-s3">%ДС</span></div>

<div id="vitamini">
<div class="table-clear">
<div class="name-d1 left">Витамин А</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $vitaminA; ?></span><span id="unit_1"><?php echo $vitaminAgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $vitaminADV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Ретинол</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $retinol ?></span><span id="unit_1.1"><?php echo $retinolmcgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php  ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Активнен Ретинол</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $retinolAE ?></span><span id="unit_1.2"><?php echo $retinolAEmcgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php  ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Алфа Каротин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $alphaCarotene ?></span><span id="unit_1.3"><?php echo $alphaCarotenemcgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php  ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Бета Каротин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $betaCarotene ?></span><span id="unit_1.4"><?php echo $betaCarotenemcgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php  ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Бета Криптоксантин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $betaCryptoxanthin ?></span><span id="unit_1.5"><?php echo $betaCryptoxanthinmcgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php  ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Ликопен</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $lycopene ?></span><span id="unit_1.6"><?php echo $lycopenemcgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php  ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Лутеин + Зеаксентин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $luteinAndZeaxanthin ?></span><span id="unit_1.7"><?php echo $luteinAndZeaxanthinmcgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php  ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Витамин Ц</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $vitaminC; ?></span><span id="unit_2"><?php echo $vitaminCmgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $vitaminCDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Витамин Д</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $vitaminD; ?></span><span id="unit_3"><?php echo $vitaminDgr;?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $vitaminDDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Витамин Е</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $vitaminE?></span><span id="unit_4"><?php echo $vitaminEmgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $vitaminEDV ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Бета Токоферол</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $betaTocopherol?></span><span id="unit_4"><?php echo $betaTocopherolmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Гама Токоферол</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $gammaTocopherol ?></span><span id="unit_4"><?php echo $gammaTocopherolmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Делта Токоферол</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $deltaTocopherol?></span><span id="unit_4"><?php echo $deltaTocopherolmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>

<div class="table-clear">
<div class="name-d1 left">Витамин К</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $vitaminK; ?></span><span id="unit_5"><?php echo $vitaminKmcgr;?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $vitaminKDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Тиамин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $thiamin; ?></span><span id="unit_6"><?php echo $thiaminmgr;?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $thiaminDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Рибофлавин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $riboflavin; ?></span><span id="unit_7"><?php echo $riboflavinmgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $riboflavinDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Ниацин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $niacin; ?></span><span id="unit_8"><?php echo $niacinmgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $niacinDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Витамин Б6</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $vitaminB6; ?></span><span id="unit_8"><?php echo $vitaminB6mgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $vitaminB6DV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Фолат</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $folate; ?></span><span id="unit_10"><?php echo $folatemcgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $folateDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Активен Фолат</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $foodFolate ?></span><span id="unit_10.1"><?php echo $foodFolatemcgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Фолиева Киселина</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $folicAcid?></span><span id="unit_10.2"><?php echo $folicAcidmcgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Ф.К. Еквивалент</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $dietaryFolateEquiv ?></span><span id="unit_10.3"><?php echo $dietaryFolateEquivmcgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Витамин Б12</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $vitaminB12; ?></span><span id="unit_11"><?php echo $vitaminB12mcgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $vitaminB12DV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Витамин Б5</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $pantothenicAcid; ?></span><span id="unit_12"><?php echo $pantothenicAcidmgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $pantothenicAcidDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Холин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $choline; ?></span><span id="unit_13"><?php echo $cholinemgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Бетаин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $betaine; ?></span><span id="unit_14"><?php echo $betainemgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
</div><!---Витамини край--->
<img id="vitaminimg" src="http://localhost:7777/uploads/images/Arrow-down-2-icon.png">
<!--fm border-->
</div>



<!------ПРОТЕИНИ---------->
<div class="fm-table">

<div class="center1">Протеин и Аминокиселини</div>

<div class="name-d1 left">Съдържание в 100гр</div>
<div class="name-d2 left"></div>
<div class="name-d3 left"><span class="name-s3">%ДС</span></div>

<div id="proteins">
<div class="table-clear">
<div class="name-d1 left">Протеин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $proteins?></span><span id="unit_1"><?php echo $proteinsgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $proteinsDV?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"> <div class="pit"></div>Аланин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $alanine ?></span><span id="unit_1"><?php echo $alaninemgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Аргинин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $arginine?></span><span id="unit_1"><?php echo $argininemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Аспараг. Киселина</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $asparticAcid ?></span><span id="unit_1"><?php echo $asparticAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Цистин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $cysteine ?></span><span id="unit_1"><?php echo $cysteinemgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Глутамат</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $glutamicAcid?></span><span id="unit_1"><?php echo $glutamicAcidmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Глицин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $glycine ?></span><span id="unit_1"><?php echo $glycinemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Гистидин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $histidine ?></span><span id="unit_1"><?php echo $histidinemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Изолевцин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $isoleucine ?></span><span id="unit_1"><?php echo $isoleucinemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Левцин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $leucine ?></span><span id="unit_1"><?php echo $leucinemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Лизин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $lysine ?></span><span id="unit_1"><?php echo $lysinemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Метионин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $methionine?></span><span id="unit_1"><?php echo $methioninemgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Фениланин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $phenylanine ?></span><span id="unit_1"><?php echo $phenylaninemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Пролин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $proline ?></span><span id="unit_1"><?php echo $prolinemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Серин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $serine ?></span><span id="unit_1"><?php echo $serinemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Треонин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $threonine ?></span><span id="unit_1"><?php echo $threoninemgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Триптофан</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $tryptophan ?></span><span id="unit_1"><?php echo $tryptophanmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Тирозин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $tyrosine ?></span><span id="unit_1"><?php echo $tyrosinemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Валин</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $valine ?></span><span id="unit_1"><?php echo $valinemgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
 </div>
<img id="proteinimg" src="http://localhost:7777/uploads/images/Arrow-down-2-icon.png">
  </div>


<!-----------Table row-15---->
<div class="fm-table">

<div class="center1">Минерали</div>

<div class="name-d1 left">Съдържание на 100 гр</div>
<div class="name-d2 left"></div>
<div class="name-d3 left"><span class="name-s3">%ДС</span></div>

<div id="minerali">
<div class="table-clear">
<div class="name-d1 left">Калций</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $calcium; ?></span><span id="unit_15"><?php echo $calciummgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $calciumDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Желязо</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $iron; ?></span><span id="unit_16"><?php echo $ironmgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $ironDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Магнезий</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $magnesium; ?></span><span id="unit_17"><?php echo $magnesiummgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $magnesiumDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Фосфор</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $phosphorus; ?></span><span id="unit_18"><?php echo $phosphorusmgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $phosphorusDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Калий</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $potassium; ?></span><span id="unit_19"><?php echo $potassiummgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $potassiumDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Натрий</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $sodium; ?></span><span id="unit_20"><?php echo $sodiummgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $sodiumDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Цинк</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $zinc; ?></span><span id="unit_21"><?php echo $zincmgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $zincDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Мед</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $copper; ?></span><span id="unit_22"><?php echo $coppermgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $copperDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Манган</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $manganese; ?></span><span id="unit_23"><?php echo $manganesemgr;?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $manganeseDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Селен</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $selenium; ?></span><span id="unit_24"><?php echo $seleniummcgr; ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $seleniumDV; ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Флуорид</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $fluoride; ?></span><span id="unit_25"><?php echo $fluoridemcgr;?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $fluorideDV; ?></span></div>
</div>

</div> <!-- minerali-->
<!--fm border-->
</div>

<div class="fm-table">

<div class="center1">Стероли</div>

<div class="name-d1 left">Съдържание в 100гр</div>
<div class="name-d2 left"></div>
<div class="name-d3 left"><span class="name-s3">%ДС</span></div>

<div id="steroli">
<div class="table-clear">
<div class="name-d1 left">Холестерол</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $cholesterol ?></span><span id="unit_1">
<?php echo $cholesterolmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php echo $cholesterolDV?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left">Фитостероли</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $phytosterol ?></span><span id="unit_1">
<?php echo $phytosterolmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Стигмастерол</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $stigmasterol ?></span><span id="unit_1.2"><?php echo $stigmasterolmgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Кампестерол</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $campesterol ?></span><span id="unit_1.2"><?php echo $campesterolmgr?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
<div class="table-clear">
<div class="name-d1 left"><div class="pit"></div>Бета-Ситостерол</div>
<div class="name-d2 left"><span class="name-s2"><?php echo $betaSitosterol?></span><span id="unit_1.2"><?php echo $betaSitosterolmgr ?></span></div>
<div class="name-d3 left"><span class="name-s3"><?php ?></span></div>
</div>
 </div>
<img id="sterolimg" src="http://localhost:7777/uploads/images/Arrow-down-2-icon.png">
</div>


</td>

</tr>
</tbody>
</table>
</div> <!--nutri-info-->
</fieldset>
</div>
</div>
<?php endwhile;

}
else{
$errors[] = 'Моля въведете ИД на желания продукт!';
} 
if(!empty($errors)){
	print_r(output_errors($errors));
	
}
require_once $_SERVER['DOCUMENT_ROOT']. '/footer.php'?>