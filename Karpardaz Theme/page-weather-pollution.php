<?php /* Template Name: Weather pollution */ ?>
<?php get_header(); ?>


  <div class="bg-titlebar">
		<div class="container titlebar">


				<h1 class="entry-title">نمایش وضعیت  آلودگی هوا  </h1>			
	
		

		</div>
	</div>

<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://aqms.doe.ir/");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$html = curl_exec($ch);
curl_close($ch);
echo $html;



?>

<script>
$.get("https://kaarpardaz.com/wp-content/themes/Karpardaz%20Theme/map-pollution.html", function(data){
  $( "#mapContainer" ).html(data);
});



</script>



            
         
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
               

<?php get_footer(); ?>



