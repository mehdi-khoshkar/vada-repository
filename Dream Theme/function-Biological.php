<?php




function score()
{

    $Question1= $_POST['question1'];
    $Question2 = $_POST['question2'];
    $Question3 = $_POST['question3'];
    $Question4 = $_POST['question4'];
    $Question5 = $_POST['question5'];




       if($Question1 && $Question2 && $Question3 && $Question4 && $Question5)
       {
   
        $score = $Question1 + $Question2 + $Question3 + $Question4 + $Question5;
        echo '<span class="badge badge-default">امتیاز شما : ' .$score . '</span> ';
        if(22<=$score && $score<=25)
        {
            
            echo "  كاملاً صبحی (DM) <br/>گروه های (DM) و (DE) در حدود دو ساعت از روز را تقریباً هدر می دهند. افراد گروه (DM) در ساعت ۸ تا ۹ صبح در اوج سرحال بودن و هوشیاری هستند ولی حداكثر تا ساعت ۹ یا ۱۰ شب می توانند سرحال باشند. بنابراین برای كارهای روزانه مناسب هستند. برعكس گروه (DE) می توانند شب هنگام به راحتی بیدار بمانند ولی ساعات صبحگاهی را هدر می دهند.";
        }
 
        if(18<=$score && $score<=21)
        {
            
            echo "در حد تعادل صبحی (MM)<br/>گروه های (MM) و (ME) هم در حوزه استاندارد و از نظر هوشیاری و خوابالو بودن در یك سطح هستند. البته افراد گروه (MM) اگر مجبور به كار شبانه شوند بیشتر سختی می كشند" ;
        }
 
        if(12<=$score && $score<=17)
        {
            
            echo "هیچ كدام (N) <br/>ریتم شبانه روزی استاندارد نوع (N) است و افرادی را شامل می شود كه بین ساعات ۷ تا ۸ صبح از خواب بیدار می شوند و بین ساعت ۱۱ تا ۱۲ شب می خوابند. افراد این گروه بیشتر از دیگران در صبح و اوایل شب هوشیار هستند و در اوایل بعدازظهر در حداقل میزان هوشیاری قرار دارند." ;
        }
  
        if(8<=$score && $score<=11)
        {
            
            echo "در حد تعادل غروبی (ME)<br/>گروه های (MM) و (ME) هم در حوزه استاندارد و از نظر هوشیاری و خوابالو بودن در یك سطح هستند. البته افراد گروه (MM) اگر مجبور به كار شبانه شوند بیشتر سختی می كشند" ;
        }
 
        if(4<=$score && $score<=7)
        {
            
            echo "كاملاً غروبی (DE)<br/>گروه های (DM) و (DE) در حدود دو ساعت از روز را تقریباً هدر می دهند. افراد گروه (DM) در ساعت ۸ تا ۹ صبح در اوج سرحال بودن و هوشیاری هستند ولی حداكثر تا ساعت ۹ یا ۱۰ شب می توانند سرحال باشند. بنابراین برای كارهای روزانه مناسب هستند. برعكس گروه (DE) می توانند شب هنگام به راحتی بیدار بمانند ولی ساعات صبحگاهی را هدر می دهند." ;
        }

        echo "<p>    خوب است بدانید كه اگر از ریتم شبانه روزی بدن خود راضی نیستید می توانید به مرور آن را تغییر دهید. بهتر ابتدا ساعت خواب و بیدار شدن خود را ۱۰ دقیقه تغییر بدهید و سپس آن را به ۲۰ دقیقه و بعد ۳۰ تا ۴۵ دقیقه برسانید. این كار را آرام آرام انجام دهید و در هر مرحله صبر كنید تا بدن تان به تغییر ساعت عادت كند كه احساس كمبود خواب نكنید و در طول روز هوشیار و سرحال باشید.

        این تغییر برای یك تا دو ساعت قابل انجام است. دانشمندان معتقدند بهترین زمان برای خواب به هنگام غروب آفتاب و بهترین زمان بیدار شدن، هنگام طلوع خورشید است.</p>";

       }
      
  
       else {

        echo '<div class="alert alert-danger">
        <strong>خطا !</strong> لطفا تمامی سوالات را پاسخ دهید
        </div>' ;

       }

 
   
}
