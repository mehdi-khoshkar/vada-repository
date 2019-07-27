<?php /* Template Name: Send SMS Android*/ ?>







<!-- <div class="container"> -->
<?php  require_once('functions_sms.php');?>


<?php
$success_send = valid_number();
if(isset($_POST['number_android']) && $_POST['number_android'] != null && $success_send ==true){
   $number = $_POST['number_android'];
   SendSmsAndroid($number); 
}

?>


<!-- <form method="POST">
  <div class="form-group">
    <label for="number">شماره موبایل</label>
    <input type="text" class="form-control" id="number" name="number" aria-describedby="numberHelp" placeholder="شماره موبایل خود را وارد کنید">
  </div>

  <button type="submit" class="btn btn-primary">دریافت لینک دانلود</button>
 
</form>
</div> -->
