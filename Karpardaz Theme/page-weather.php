<?php /* Template Name: Weather */ ?>
<?php get_header(); ?>


  <div class="bg-titlebar">
		<div class="container titlebar">


				<h1 class="entry-title">نمایش وضعیت آب و هوا  </h1>			
	
		

		</div>
	</div>

<?php

if(isset($_GET['cityID']))
{
    $cityId =  $_GET['cityID'];
   
}
function getWeather($cityId){


    $apiKey = "40491ec60b2bc63e3564fd7b18db6e44";
    $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;
   
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    
    curl_close($ch);
    $data = json_decode($response);
    $currentTime = time();
    return $data;
  
}

function translateText($string)
{
        if($string == 'broken clouds')
        {
            $string = 'ابری' ;
           
        }
        if($string == 'clear sky')
        {
            $string = 'آفتابی' ;
           
        }

        if($string == 'few clouds')
        {
            $string = 'نیمه ابری' ;
           
        }

        if($string == 'scattered clouds')
        {
            $string = 'ابرهای پراکنده' ;
           
        }

        if($string == 'light rain')
        {
            $string = 'بارش باران' ;
           
        }
        if($string == 'overcast clouds')
        {
            $string = 'ابرهای خفیف';
        }

        if($string == 'haze')
        {
            $string = 'گرم';
        }
         
        if($string == 'mist')
        {
            $string = 'مه آلود';
        }
         
        if($string == 'light intensity shower rain')
        {
            $string = 'بارندگی';
        }

        if($string == 'thunderstorm with rain')
        {
            $string = 'رعد و برق همراه باران';
        }


        if($string == 'shower rain')
        {
            $string = 'بارندگی';
        }

        if($string == 'snow')
        {
            $string = 'برف';
        }
        if($string == 'thunderstorm')
    {
              $string = 'رعد و برق';
    }

    if($string == 'moderate rain')
    {
              $string = 'بارش متوسط';
    }

        
        
        
        return $string;
}

 ?>




<style>
body {
    font-family: Arial;
    font-size: 0.95em;
    color: #929292;
}
.site-main {
    direction: rtl;
}

.btn-weather-search {
    margin: 10px;
}

.report-container {
    border: #E0E0E0 1px solid;
    padding: 7px 16px 8px 4px;
    border-radius: 2px;
    display: inline-block
}

.weather-icon {
    vertical-align: middle;
    float: initial;
}
.weather-forecast {
    color: #212121;
    font-size: 1.2em;
    font-weight: bold;
    margin: 20px 0px;
}

span.min-temperature {
    margin-left: 15px;
    color: #929292;
}

.time {
    line-height: 25px;
}

.weather-section {
    transition: transform .2s;
    display: inline-block;
    margin: 10px 10px;
    text-align: center;
    min-width: 230px;
    box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);
}


.weather-section:hover {
    transform: scale(1.1);
    transition: transform .2s;
}

.weather-section .panel-heading {
    background-color: #23a8e5;
    color: #fff;
    font-size: 18px;
}
#weather-section .container {
    text-align:right;
}

.weather-section-search {
    text-align: center;
    width: 100%;
    box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);
}

.container.weather-search select {
    direction: rtl;
    font-size: 24px;
    border: 3px solid #23a8e5;
    width: 300px;
}

@media only screen and (max-width: 468px) {

.weather-section {

    width: 93%;
 
}
}
</style>

</head>
<body>



<section id="weather-section">
<div class="container weather-search">
<form  method="GET">


    <select name="cityID">
  <option value="127082">خوزستان</option>
  <option value="7648907">البرز</option>
  <option value="1159301">زاهدان</option>
  <option value="1161724">چابهار</option>
  <option value="1113217">زابل</option>
  <option value="140380">بجنورد</option>
  <option value="115770">شهرکرد</option>


    </select>

    <button type="submit" class="btn-weather-search btn btn-primary" name="submit">نمایش آب  و هوا </button>     	
  
            </form>
<?php

  if(isset($_GET['cityID'])){
  

?>
<div class="container">
<div class="weather-section" style="width:100%;">
   <?php $data = getWeather($cityId);?>
  <div class="panel panel-default">
    <div class="panel-heading">وضعیت آب و هوای شهر انتخابی</div>
    <div class="panel-body">
    <div class="time">
    <div>به روزرسانی در تاریخ : </div>
            <div><?php echo jdate("l H:i ", $currentTime); ?></div>
            <div><?php echo jdate("F j , Y ",$currentTime); ?></div>
            <div class="weather-description">
            <?php echo translateText($data->weather[0]->description); ?>
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> 
            </div>
        </div>
        <div class="weather-forecast">
           <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
        <div>رطوبت: %<?php echo $data->main->humidity; ?> </div>
            <div>سرعت باد: <?php echo $data->wind->speed; ?> کیلومتر / ساعت</div>
        </div>
    
    </div>
  </div>
  </div>

  <?php } ?>

<div class="container">




<div class="weather-section">
<?php $data = getWeather(112931);?>
  <div class="panel panel-default">
    <div class="panel-heading"> وضعیت آب و هوای تهران </div>
    <div class="panel-body">
    <div class="time">
    <div>به روزرسانی در تاریخ : </div>
            <div><?php echo jdate("l H:i ", $currentTime); ?></div>
            <div><?php echo jdate("F j , Y ",$currentTime); ?></div>
            <div class="weather-description">
            <?php echo translateText($data->weather[0]->description); ?>
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> 
            </div>
        </div>
        <div class="weather-forecast">
           <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
        <div>رطوبت: %<?php echo $data->main->humidity; ?> </div>
            <div>سرعت باد: <?php echo $data->wind->speed; ?> کیلومتر / ساعت</div>
        </div>
    
    </div>
  </div>
  </div>
  <div class="weather-section">
  <?php $data = getWeather(144448);?>
  <div class="panel panel-default">
    <div class="panel-heading">وضعیت آب و هوای اهواز</div>
    <div class="panel-body">
    <div class="time">
    <div>به روزرسانی در تاریخ : </div>
            <div><?php echo jdate("l H:i ", $currentTime); ?></div>
            <div><?php echo jdate("F j , Y ",$currentTime); ?></div>
            <div class="weather-description">
            <?php echo translateText($data->weather[0]->description); ?>
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> 
            </div>
          
        </div>
        <div class="weather-forecast">
              
                 <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
        <div>رطوبت: %<?php echo $data->main->humidity; ?> </div>
            <div>سرعت : <?php echo $data->wind->speed; ?> کیلومتر / ساعت</div>
        </div>
    
     </div>
  </div>
  </div>
  <div class="weather-section">
  <?php $data = getWeather(1133749);?>
  <div class="panel panel-default">
    <div class="panel-heading">وضعیت آب و هوای مشهد</div>
    <div class="panel-body">
    <div class="time">
    <div>به روزرسانی در تاریخ : </div>
            <div><?php echo jdate("l H:i ", $currentTime); ?></div>
            <div><?php echo jdate("F j , Y ",$currentTime); ?></div>
            <div class="weather-description">
            <?php echo translateText($data->weather[0]->description); ?>
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> 
            </div> 
        </div>
        <div class="weather-forecast">
           <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
            <div>رطوبت: %<?php echo $data->main->humidity; ?> </div>
            <div>سرعت باد : <?php echo $data->wind->speed; ?> کیلومتر / ساعت</div>
        </div>
    
     </div>
  </div>
  </div>

  <div class="weather-section">
  <?php $data = getWeather(115019);?>
  <div class="panel panel-default">
    <div class="panel-heading">وضعیت آب و هوای شیراز</div>
    <div class="panel-body">
    <div class="time">
    <div>به روزرسانی در تاریخ : </div>
            <div><?php echo jdate("l H:i ", $currentTime); ?></div>
            <div><?php echo jdate("F j , Y ",$currentTime); ?></div>
            <div class="weather-description">
            <?php echo translateText($data->weather[0]->description); ?>
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> 
            </div> 
        </div>
        <div class="weather-forecast">
           <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
            <div>رطوبت: %<?php echo $data->main->humidity; ?> </div>
            <div>سرعت باد : <?php echo $data->wind->speed; ?> کیلومتر / ساعت</div>
        </div>
    
     </div>
  </div>
  </div>

  






</div>





<div class="container">
<div class="weather-section">
<?php $data = getWeather(113646);?>
  <div class="panel panel-default">
    <div class="panel-heading"> وضعیت آب و هوای تبریز </div>
    <div class="panel-body">
    <div class="time">
    <div>به روزرسانی در تاریخ : </div>
            <div><?php echo jdate("l H:i ", $currentTime); ?></div>
            <div><?php echo jdate("F j , Y ",$currentTime); ?></div>
            <div class="weather-description">
            <?php echo translateText($data->weather[0]->description); ?>
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> 
            </div>
        </div>
        <div class="weather-forecast">
           <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
        <div>رطوبت: %<?php echo $data->main->humidity; ?> </div>
            <div>سرعت باد: <?php echo $data->wind->speed; ?> کیلومتر / ساعت</div>
        </div>
    
    </div>
  </div>
  </div>
  <div class="weather-section">
  <?php $data = getWeather(124544);?>
  <div class="panel panel-default">
    <div class="panel-heading">وضعیت آب و هوای مازندران</div>
    <div class="panel-body">
    <div class="time">
    <div>به روزرسانی در تاریخ : </div>
            <div><?php echo jdate("l H:i ", $currentTime); ?></div>
            <div><?php echo jdate("F j , Y ",$currentTime); ?></div>
            <div class="weather-description">
            <?php echo translateText($data->weather[0]->description); ?>
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> 
            </div>
          
        </div>
        <div class="weather-forecast">
              
                 <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
        <div>رطوبت: %<?php echo $data->main->humidity; ?> </div>
            <div>سرعت : <?php echo $data->wind->speed; ?> کیلومتر / ساعت</div>
        </div>
    
     </div>
  </div>
  </div>
  <div class="weather-section">
  <?php $data = getWeather(128222);?>
  <div class="panel panel-default">
    <div class="panel-heading">وضعیت آب و هوای کرمانشاه</div>
    <div class="panel-body">
    <div class="time">
    <div>به روزرسانی در تاریخ : </div>

            <div><?php echo jdate("l H:i ", $currentTime); ?></div>
            <div><?php echo jdate("F j , Y ",$currentTime); ?></div>
            <div class="weather-description">
            <?php echo translateText($data->weather[0]->description); ?>
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> 
            </div> 
        </div>
        <div class="weather-forecast">
           <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
            <div>رطوبت: %<?php echo $data->main->humidity; ?> </div>
            <div>سرعت باد : <?php echo $data->wind->speed; ?> کیلومتر / ساعت</div>
        </div>
    
     </div>
  </div>
  </div>

  <div class="weather-section">
  <?php $data = getWeather(111453);?>
  <div class="panel panel-default">
    <div class="panel-heading">وضعیت آب و هوای زنجان</div>
    <div class="panel-body">
    <div class="time">
    <div>به روزرسانی در تاریخ : </div>

            <div><?php echo jdate("l H:i ", $currentTime); ?></div>
            <div><?php echo jdate("F j , Y ",$currentTime); ?></div>
            <div class="weather-description">
            <?php echo translateText($data->weather[0]->description); ?>
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> 
            </div> 
        </div>
        <div class="weather-forecast">
           <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
            <div>رطوبت: %<?php echo $data->main->humidity; ?> </div>
            <div>سرعت باد : <?php echo $data->wind->speed; ?> کیلومتر / ساعت</div>
        </div>
    
     </div>
  </div>
  </div>

  






</div>
    

    
    </section>
<?php get_footer(); ?>