

<!------ Include the above in your HEAD tag ---------->
<link href="css/wp-main.css" rel="stylesheet">

<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
    </div>
</div>

<!-- Start form -->
<form class="wizard-container" id="js-wizard-form">
		<div class="nav nav-pills">

			<div class="setup-content" id="step-1">
				<div class="col-xs-12">
					<div class="col-md-12">
						<p>در این بخش میتوانید خلافی خود را استعلام بگیرید</p>

						<div class="form-group">
							<input name="aform" value="add" type="hidden">
							<input name="rc" value="" type="hidden">
							<input type="hidden" name="duration" id="duration" value="">
							<label for="hashtraghami" class="text-rahvar">کد هشت یا نه رقمی کارت خود را وارد کنید</label>
							<input class="form-control" type="text" name="hashtraghami" id="hashtraghami" placeholder="کد 8 رقمی کارت ماشین" required>
						</div>

						<!-- content go here -->
						<button class="btn btn-primary btn-block nextBtn pull-right" type="button">تایید</button>
					</div>
				</div>
			</div>

			<div class="setup-content" id="step-2">
				<div class="col-xs-12">
					<div class="col-md-12">
						<p>در این بخش میتوانید خلافی خود را استعلام بگیرید</p>

						<!-- content go here -->
						<div class="form-group">
							<label for="hashtraghami" class="text-rahvar">شماره همراه خود را وارد نمایید ( اختیاری)</label>
							<input class="form-control" type="text" name="mobile" id="mobile" placeholder="شماره موبایل(اختیاری)">
						</div>
						<div class="group-btn">
							<button class="btn btn-primary btn-block nextBtn btn-start pull-right" type="button">مرحله بعد</button>
							<button class="btn btn-danger btn-block previewBtn pull-right" type="button">بازگشت</button>
						</div>

					</div>
				</div>
			</div>

			<div class="setup-content" id="step-3">
				<div class="col-xs-12">
					<div class="col-md-12">

						<div class="message_box_img"></div>

						<!-- content go here -->
						<div class="form-group">
							<?php
								$ip=$_SERVER['REMOTE_ADDR'];
$location = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));

if($location['geoplugin_countryCode'] == 'IR')
{
 ?>
								<div id="captcha-img">
									<input id="cptchid" name="cptchid" type="hidden" value="">
									<img id="capimg" alt="متن درون تصویر را در جعبه متن زیر وارد نمائید" src="" width="200" height="60">
									<img height="16" id="ch_capt" style="cursor:pointer " src="https://farmooon.com/wp-content/uploads/2019/08/refresh.gif" width="18" onclick="">
								</div>
								<label for="hashtraghami" class="text-rahvar">متن موجود در تصویر را وارد کنید</label>
								<input class="form-control" type="text" name="capcha" id="capcha" placeholder="متن تصویر را وارد کنید" required="required">
								<?php }else {?>
									<div class="alert alert-danger" role="alert">فیلترشکن خود را خاموش کنید سپس مجددا استعلام بگیرید</div>
									<?php } ?>
						</div>
						<div class="group-btn">
						<a  class="btn btn-primary btn-block nextBtn  pull-rig" onclick="form_submit();">استعلام خلافی</a>

							<button class="btn btn-danger btn-block previewBtn pull-right" type="button">بازگشت</button>
						</div>

					</div>
				</div>

			</div>


			<div class="setup-content" id="step-4">

			<div class="col-xs-12">
					<div class="col-md-12">

					<div class="message_box"></div>
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

					<div class="group-btn">
							<button class="btn btn-primary btn-block nextBtn  pull-right">استعلام خلافی</button>
							<button class="btn btn-danger btn-block previewBtn pull-right" type="button">بازگشت</button>
						</div>
				</div>
				</div>
			
	</div>
	</form>

    <!-- End form -->

    <div id="rahvar_page" style="display:none;"></div>
<div id="result_table" style="display:none;"></div>


<script src="https://farmooon.com/rahvar120/vendor/jquery/jquery.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://farmooon.com/rahvar120/js/khalafi.js"></script>
<script src="https://farmooon.com/rahvar120/js/khalafi_result.js"></script>
<script src="https://farmooon.com/rahvar120/vendor/jquery-validate/jquery.validate.js"></script>
<script src="js/wp-global.js"></script>



</div>