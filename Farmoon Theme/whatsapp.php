<?php /* Template Name: Whatsapp */ ?>


<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { 



 header("Location: https://uzee.ir/sibche");


}

else {

    header("Location: https://play.google.com/store/apps/details?id=vada.farmoon.app");
}


?>