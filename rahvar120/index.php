<?php include_once('header.php') ?>
    <div class="page-wrapper bg-img-1 p-t-275 p-b-100">

    
        <div class="wrapper wrapper--w820">
        <?php

define( 'SHORTINIT', true );

require($_SERVER['DOCUMENT_ROOT'] .'/wp-load.php' );
include_once('jdf.php');


$table_name  = $wpdb->prefix.'rahvar';



	$data = $wpdb->get_results( "SELECT count(*) as total from $table_name WHERE tools ='barcode'"); // Query to fetch data from database table and storing in $results
    $data_unique = $wpdb->get_results("SELECT barcode,date, COUNT(1) AS rpt_count FROM $table_name WHERE tools ='barcode' GROUP BY barcode ORDER BY date DESC"); // Query to fetch data from database table and storing in $results
    ?>
<h1>آمار استعلام خلافی خودرو با بارکد</h1>
<div class="alert alert-success" role="alert">
  آمار کل استعلام خلافی ها تاکنون : <?php  echo  $data[0]->total; ?>
</div>
<?php
$date = $data_unique[0]->date;
$array = explode(' ', $date);
//print_r($array);
list($year, $month, $day) = explode('-', $array[0]);
list($hour, $minute, $second) = explode(':', $array[1]);
$timestamp_date = mktime($month, $day, $year);
$timestamp_time = jmktime($hour, $minute, $second);

//echo $timestamp;
$jalali_date = jdate("تاریخ آخرین استعلامی:Y/m/d", $timestamp_date);
$jalali_time = jdate("زمان:H:i:s", $timestamp_time);

?>

<div class="alert alert-danger" role="alert">
  تعداد استعلام خلافی ها تاکنون : <?php  echo  count($data_unique); ?><br/>
 <?php echo $jalali_date;echo $jalali_time; ?>
 <br/>
 بارکد : <?php  echo  $data_unique[0]->barcode; ?>
</div>



<?php
$data = $wpdb->get_results( "SELECT count(*) as total from $table_name WHERE tools ='pelak'"); // Query to fetch data from database table and storing in $results
    $data_unique = $wpdb->get_results("SELECT barcode,pelak,date, COUNT(1) AS rpt_count FROM $table_name WHERE tools ='pelak' GROUP BY barcode ORDER BY date DESC"); // Query to fetch data from database table and storing in $results
    ?>
<h1>آمار استعلام خلافی خودرو با پلاک</h1>
<div class="alert alert-success" role="alert">
  آمار کل استعلام خلافی ها تاکنون : <?php  echo  $data[0]->total; ?>
</div>
<?php
$date = $data_unique[0]->date;
$array = explode(' ', $date);
//print_r($array);
list($year, $month, $day) = explode('-', $array[0]);
list($hour, $minute, $second) = explode(':', $array[1]);
$timestamp_date = mktime($month, $day, $year);
$timestamp_time = jmktime($hour, $minute, $second);

//echo $timestamp;
$jalali_date = jdate("تاریخ آخرین استعلامی:Y/m/d", $timestamp_date);
$jalali_time = jdate("زمان:H:i:s", $timestamp_time);

?>

<div class="alert alert-danger" role="alert">
  تعداد استعلام خلافی ها تاکنون : <?php  echo  count($data_unique); ?><br/>
 <?php echo $jalali_date;echo $jalali_time; ?>
 <br/>
 پلاک : <?php  echo  $data_unique[0]->pelak; ?>
 <br/>
 بارکد : <?php  echo  $data_unique[0]->barcode; ?>
</div>



<?php

define( 'SHORTINIT', true );

require($_SERVER['DOCUMENT_ROOT'] .'/wp-load.php' );
include_once('jdf.php');


$table_name  = $wpdb->prefix.'Mrahvar';



	$data = $wpdb->get_results( "SELECT count(*) as total from $table_name"); // Query to fetch data from database table and storing in $results
    $data_unique = $wpdb->get_results("SELECT barcode,date, COUNT(1) AS rpt_count FROM $table_name GROUP BY barcode ORDER BY date DESC"); // Query to fetch data from database table and storing in $results
    ?>
<h1>آمار استعلام خلافی موتور سیکلت</h1>
<div class="alert alert-success" role="alert">
  آمار کل استعلام خلافی ها تاکنون : <?php  echo  $data[0]->total; ?>
</div>
<?php
$date = $data_unique[0]->date;
$array = explode(' ', $date);
//print_r($array);
list($year, $month, $day) = explode('-', $array[0]);
list($hour, $minute, $second) = explode(':', $array[1]);
$timestamp_date = mktime($month, $day, $year);
$timestamp_time = jmktime($hour, $minute, $second);

//echo $timestamp;
$jalali_date = jdate("تاریخ آخرین استعلامی:Y/m/d", $timestamp_date);
$jalali_time = jdate("زمان:H:i:s", $timestamp_time);

?>

<div class="alert alert-danger" role="alert">
  تعداد استعلام خلافی ها تاکنون : <?php  echo  count($data_unique); ?><br/>
 <?php echo $jalali_date;echo $jalali_time; ?>
 <br/>
 بارکد : <?php  echo  $data_unique[0]->barcode; ?>
</div>
           <div class="card card-1" style="display: none;">
                <div class="card-heading">
                    <h1 class="title"> استعلام آنلاین خلافی خودرو از estelam.rahvar120.ir</h1>
                </div>
                <div class="card-body">


  <img src="https://farmooon.com/wp-content/uploads/2018/06/car-card-min.jpg" alt="">

  

                <div class="message_box_rahvar"></div>

                    <form class="wizard-container" method="POST" action="#" id="js-wizard-form">
                        <ul class="tab-list">
                            <li class="tab-list__item active">
                                <a class="tab-list__link" href="#tab1" data-toggle="tab">
                                    <span class="step">1</span>
                                    <span class="desc">بارکد</span>
                                </a>
                            </li>
                            <li class="tab-list__item">
                                <a class="tab-list__link" href="#tab2" data-toggle="tab">
                                    <span class="step">2</span>
                                    <span class="desc">شماره موبایل</span>
                                </a>
                            </li>
                            <li class="tab-list__item">
                                <a class="tab-list__link" href="#tab3" data-toggle="tab">
                                    <span class="step">3</span>
                                    <span class="desc">کد امنیتی</span>
                                </a>
                            </li>
                            <li class="tab-list__item">
                                <a class="tab-list__link" href="#tab4" data-toggle="tab">
                                    <span class="step">4</span>
                                    <span class="desc">خلافی شما</span>
                                </a>
                            </li>
                         
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <div class="form">

                                    <div class="input-group">
                                    <input name="aform" value="add" type="hidden">
                                    <input name="rc" value="" type="hidden">
                                    <input type="hidden" name="duration" id="duration" value="">
                                        <input class="input--style-1" type="text" name="hashtraghami" id="hashtraghami" placeholder="کد هشت رقمی خود را وارد کنید" required="required">
                                        <a class="btn--next btn-start">مرحله بعد</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class="form">
                                    <div class="input-group">
                                        <input class="input--style-1" type="text" name="mobile" id="mobile" placeholder="شماره موبایل خود را وارد کنید (اختیاری)">
                                        <a class="btn--next">مرحله بعد</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab3">
                                <div class="form">
                                <div class="message_box_img"></div>

                                    <div class="input-group">
                                    <?php
                                    $ip=$_SERVER['REMOTE_ADDR'];
$location = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));

 if($location['geoplugin_countryCode'] == 'IR')
 {
     ?>
                                    <input id="cptchid" name="cptchid" type="hidden" value="">
                                    <img id="capimg" alt="متن درون تصویر را در جعبه متن زیر وارد نمائید" src="" width="200" height="60">
                                    <img height="16" id="ch_capt" style="cursor:pointer " src="https://farmooon.com/wp-content/uploads/2019/08/refresh.gif" width="18"  onclick=""> 
                                    <input class="input--style-1" type="text" name="capcha" id="capcha" placeholder="کد امنیتی بالا را وارد کنید" required="required">
                                        <a  class="btn--next btn-submit" onclick="form_submit();">استعلام خلافی</a>
 <?php }else {?>
    <div class="alert alert-danger" role="alert">فیلترشکن خود را خاموش کنید سپس مجددا  استعلام بگیرید</div>
 <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab4">
                                <div class="form">
                                <a class="btn btn-primary" href="https://farmooon.com/rahvar120/panel">مشاهده سوابق خلافی</a>
                                <a  id="btnPrint" class="btn btn-success">چاپ</a>
                                <!-- <a href="#" class="btn btn-info" id="reload_page">استعلام مجدد</a> -->
                                <a  class="btn btn-danger btn--previous">بازگشت</a>
                               
                                <div class="row message_box"></div>
                                <table class="table table-striped table-responsive" id="table_final" style="display:none;">

                                        <thead>
                                            <tr>
                                            <th scope="col">شرح تخلف</th>
                                            <th scope="col">نوع</th>
                                            <th scope="col">کد تخلف	</th>
                                            <th scope="col">مبلغ(ریال)	</th>
                                            <th scope="col">محل تخلف</th>
                                            <th scope="col">شهر	</th>
                                            <th scope="col">تاریخ</th>
                                            <th scope="col">سریال</th>
                                            <th scope="col">بارکد</th>
                                            <th scope="col">پلاک</th>
                                            <th scope="col">شناسه پرداخت</th>
                                            <th scope="col">شناسه قبض</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>
                              </table>
                                </div>
                            </div>
                          
                            <div class="tab-pane" id="tab5">
                                                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div id="rahvar_page" style="display:none;"></div>
    <div id="result_table" style="display:none;"></div>

<?php include_once('footer.php'); ?>