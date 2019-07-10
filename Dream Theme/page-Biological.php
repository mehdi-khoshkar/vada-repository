<?php /* Template Name: Biological */ ?>


<?php get_header(); ?>


<style>
section#Question1 {
    margin-top: 90px;
}

.custom-control-label::before {
    position: absolute;
    top: .25rem;
    right: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #dee2e6;
}


.custom-control-label::after {
    position: absolute;
    top: .25rem;
    right: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%;
}

</style>
<div class="container">

<?php  require_once('function-Biological.php');  ?>

<form method="POST">
<section id="Question1">

<h4>۱. اگر در روز كاملاً آزاد باشید و هیچ وظیفه ای برای انجام دادن نداشته باشید چه ساعتی از خواب بیدار می شوید؟</h4>
<!-- Group of default radios - option 1 -->
<div class="custom-control custom-radio custom-control-inline">

  <input type="radio" class="custom-control-input" id="question1Example1" value="5" name="question1">
  <label class="custom-control-label" for="question1Example1">۵ تا ۶:۳۰ صبح</label>

</div>

<!-- Group of default radios - option 2 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question1Example2" value="4" name="question1" >
  <label class="custom-control-label" for="question1Example2">۶:۳۰ تا ۷:۴۵</label>
</div>

<!-- Group of default radios - option 3 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question1Example3" value="3" name="question1">
  <label class="custom-control-label" for="question1Example3">۷:۴۵ تا ۹:۴۵ صبح</label>
</div>

<!-- Group of default radios - option 4 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question1Example4" value="2" name="question1">
  <label class="custom-control-label" for="question1Example4">۹:۴۵ تا ۱۱ صبح</label>
</div>


<!-- Group of default radios - option 5 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question1Example5" value="1" name="question1">
  <label class="custom-control-label" for="question1Example5">۱۱ صبح تا ۱۲ ظهر </label>
</div>

</section>

<hr>
<section id="Question2">

<h4>۲. در نیم ساعت اول پس از بیدار شدن چقدر احساس خستگی می كنید؟</h4>
<!-- Group of default radios - option 1 -->
<div class="custom-control custom-radio custom-control-inline">

  <input type="radio" class="custom-control-input" id="question2Example1" value="1" name="question2">
  <label class="custom-control-label" for="question2Example1">خیلی خسته</label>

</div>

<!-- Group of default radios - option 2 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question2Example2" value="2" name="question2" >
  <label class="custom-control-label" for="question2Example2">نسبتاً خسته</label>
</div>

<!-- Group of default radios - option 3 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question2Example3" value="3" name="question2">
  <label class="custom-control-label" for="question2Example3">نسبتاً سرحال </label>
</div>

<!-- Group of default radios - option 4 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question2Example4" value="4" name="question2">
  <label class="custom-control-label" for="question2Example4"> كاملاً سرحال</label>
</div>



</section>


<hr>
<section id="Question3">

<h4>۳. شب هنگام در چه ساعتی به خاطر احساس خستگی می خوابید؟</h4>
<!-- Group of default radios - option 1 -->
<div class="custom-control custom-radio custom-control-inline">

  <input type="radio" class="custom-control-input" id="question3Example1" value="5" name="question3">
  <label class="custom-control-label" for="question3Example1">۸ تا ۹ شب</label>

</div>

<!-- Group of default radios - option 2 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question3Example2" value="4" name="question3" >
  <label class="custom-control-label" for="question3Example2">۹ تا ۱۰:۱۵</label>
</div>

<!-- Group of default radios - option 3 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question3Example3" value="3" name="question3">
  <label class="custom-control-label" for="question3Example3">۱۰:۱۵ تا ۱۲:۳۰ نیمه شب</label>
</div>

<!-- Group of default radios - option 4 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question3Example4" value="2" name="question3">
  <label class="custom-control-label" for="question3Example4"> ۱۲:۳۰ تا ۱:۴۵ بامداد</label>
</div>

<!-- Group of default radios - option 4 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question3Example5" value="1" name="question3">
  <label class="custom-control-label" for="question3Example5"> ۱:۴۵ تا ۳ بامداد</label>
</div>



</section>


<hr>
<section id="Question4">

<h4>۴. در چه ساعتی از روز احساس می كنید در اوج سرحالی هستید؟</h4>
<!-- Group of default radios - option 1 -->
<div class="custom-control custom-radio custom-control-inline">

  <input type="radio" class="custom-control-input" id="question4Example1" value="5" name="question4">
  <label class="custom-control-label" for="question4Example1">۵ تا ۸ صبح</label>

</div>

<!-- Group of default radios - option 2 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question4Example2" value="4" name="question4" >
  <label class="custom-control-label" for="question4Example2">۸ تا ۱۰ صبح</label>
</div>

<!-- Group of default radios - option 3 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question4Example3" value="3" name="question4">
  <label class="custom-control-label" for="question4Example3">۱۰ صبح تا ۵ بعدازظهر</label>
</div>

<!-- Group of default radios - option 4 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question4Example4" value="2" name="question4">
  <label class="custom-control-label" for="question4Example4"> ۵ تا ۱۰ شب </label>
</div>

<!-- Group of default radios - option 4 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question4Example5" value="1" name="question4">
  <label class="custom-control-label" for="question4Example5"> ۱۰ شب تا ۵ صبح </label>
</div>



</section>


<hr>
<section id="Question5">

<h4>۵. وقتی درباره دو گروه افراد صبحی و غروبی شنیدید، خود را در كدام گروه قرار دادید؟</h4>
<!-- Group of default radios - option 1 -->
<div class="custom-control custom-radio custom-control-inline">

  <input type="radio" class="custom-control-input" id="question5Example1" value="6" name="question5">
  <label class="custom-control-label" for="question5Example1">دقیقاً یك انسان صبحی </label>

</div>

<!-- Group of default radios - option 2 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question5Example2" value="4" name="question5" >
  <label class="custom-control-label" for="question5Example2">یشتر یك انسان صبحی تا یك انسان غروبی</label>
</div>

<!-- Group of default radios - option 3 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question5Example3" value="2" name="question5">
  <label class="custom-control-label" for="question5Example3">بیشتر یك انسان غروبی تا یك انسان صبحی</label>
</div>

<!-- Group of default radios - option 4 -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="question5Example4" value="0" name="question5">
  <label class="custom-control-label" for="question5Example4"> دقیقاً یك انسان غروبی</label>
</div>


</section>

<button class="btn aqua-gradient  waves-effect waves-light" type="submit" value="Submit">نمایش</button>

</form>

<?php if($_POST['question1']){ ?>

<div class="result-biological">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">نتیجه  ساعت بیولوژیک شما</h5>
    <p class="card-text"></p><h4> <?php score(); ?></h4>
  </div>
</div>
</div>

<?php } ?>


</div>

<?php get_footer(); ?>