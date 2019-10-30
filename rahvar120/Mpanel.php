<? include_once('Mheader.php'); ?>


<body>    <div class="page-wrapper bg-img-1 p-t-275 p-b-100">
        <div class="wrapper wrapper--w820">
            <div class="card card-1">
                <div class="card-heading">
                    <h2 class="title">مشاهده سوابق خلافی موتورسیکلت</h2>
                </div>
                <div class="card-body">
                <a class="btn btn-primary" href="https://farmooon.com/?p=364"> استعلام خلافی موتورسیکلت </a>
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
                                    <span class="desc">سوابق خلافی موتورسیکلت</span>
                                </a>
                            </li>
                      
                        </ul>
                        <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                                <div class="form">

                                    <div class="input-group">
                                         
                                        <input class="input--style-1" type="text" name="hashtraghami" id="hashtraghami" placeholder="کد هشت رقمی خود را وارد کنید" required="required">
                                        <label>کد کارت موتور سیکلت خود را بدون M وارد کنید </label>
                                        <a class="btn--next btn-result" href="#" onclick="result_rahvar();">مشاهده</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class="form">
                                <div class="message_box_result"></div>
                                <div class="alert alert-danger" role="alert">محتویات این بخش ازسایت آفلاین بوده وبه هیچ وجه به بانک اطلاعاتی پلیس راهورمتصل نمی باشد و یک نسخه بروزرسانی شده با تاریخ مندرج زیر ، از سایت اجرائیات پلیس راهور می باشد . </div>
                                <table class="table table-striped table-responsive" id="table_final" style="">
                                <thead>
                                    <tr>
                                    <th scope="col">ردیف</th>
                                    <th scope="col">بارکد</th>
                                    <th scope="col">موبایل</th>
                                    <th scope="col"> تاریخ استعلام</th>
                                    <th scope="col">جزییات </th>
                                    </tr>
                                </thead>
                                <tbody id="result_table">

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


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/jquery-validate/jquery.validate.js"></script>
    
    <script src="vendor/bootstrap-wizard/popper.min.js"></script>

    <script src="vendor/bootstrap-wizard/bootstrap.min.js"></script>
    <script src="vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="js/Mkhalafi.js"></script>
    <script src="js/Mkhalafi_result.js"></script>
  <script type="text/javascript" src="js/printPreview.js"></script>
  <script type="text/javascript" src="js/customize.js"></script>






    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->