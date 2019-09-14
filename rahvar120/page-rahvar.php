<!DOCTYPE html>
<html lang="fa">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="از همینجا خلافی بگیرید.در این بخش می‌توانید خلافی خودروی خود را استعلام بگیرید و در صورت لزوم اقدام به چاپ خلافی خودرو نمایید. کافیست کد 8 یا 9 رقمی کارت ماشین را وارد نمایید. ⭐️⭐️⭐️⭐️⭐️">
    <meta name="author" content="فرمون">
    <meta name="keywords" content="خلافی خودرو,استعلام خلافی,استعلام خلافی خودرو,استعلام خلافی خودرو از طریق اینترنت,خلافی ماشین,جریمه خودرو,خلافی,rahvar120,دریافت خلافی خودرو,خلافي ماشين,گرفتن خلافی ماشین,خلافي خودرو,گرفتن خلافی,راهور 120 خلافی ماشین,عدم خلافی,پرداخت جریمه رانندگی,پرداخت خلافی خودرو,استعلام تخلفات رانندگی,استعلام جریمه خودرو,گرفتن خلافی خودرو,پرداخت جریمه خودرو,راهور۱۲۰">
        <link rel="icon" href="https://farmooon.com/wp-content/uploads/2018/02/cropped-namadak-32x32.png" type="image/png" sizes="16x16">

    
    <!-- Title Page-->
    <title>استعلام آنلاین خلافی خودرو</title>

    <!-- Icons font CSS-->
   

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  
<!-- Latest compiled and minified CSS -->
<link href="vendor/bootstrap-wizard/bootstrap.min.css" rel="stylesheet" media="all">

    <link href="css/main.css" rel="stylesheet" media="all">



</head>

<body>

             <div class="page-wrapper bg-img-1 p-t-275 p-b-100">
        <div class="wrapper wrapper--w820">


            <div class="card card-1">
                <div class="card-heading">
                    <h1 class="title"> استعلام آنلاین خلافی خودرو از estelam.rahvar120.ir</h1>
                </div>
                <div class="card-body">

                <a class="btn btn-primary" href="https://farmooon.com/rahvar120/panel">مشاهده سوابق خلافی</a>
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
                                        <input class="input--style-1" type="text" name="hashtraghami" id="hashtraghami" placeholder="کد هشت رقمی خود را وارد کنید" required="required" autofocus>
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

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/jquery-validate/jquery.validate.js"></script>
    
    <script src="vendor/bootstrap-wizard/popper.min.js"></script>

    <script src="vendor/bootstrap-wizard/bootstrap.min.js"></script>
    <script src="vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="js/app.js"></script>







    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->