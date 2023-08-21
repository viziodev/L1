<?php
  include_once("../models/model.php") ;
 
foreach ($articles as $key=> $article) {
                  $articles[$key]["qte_seuil"]=rand(1,10000);
                   $articles[$key]["rupture"]=$key%2==0?true:false;
}
if(isset($_GET['page'])){
      if($_GET['page']==2) {
      include_once("../views/liste1.html.php");
    }elseif($_GET['page']==1){
      include_once("../views/liste.html.php");
    }
}else{
     include_once("../views/liste.html.php");
}




?>