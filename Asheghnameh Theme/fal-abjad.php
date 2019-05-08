<?php /* Template Name: Fale Abjad */ ?>

<?php get_header();  ?>

<style>

section#fale-abjad {
    margin-top: 90px;
}

.md-form .prefix~label {
    margin-right: 2.5rem;
}

.md-form label {
    position: absolute;
    top: .65rem;
    right: 0;
    -webkit-transition: .2s ease-out;
    -o-transition: .2s ease-out;
    transition: .2s ease-out;
    cursor: text;
    color: #757575;
}

.md-form .prefix~input, .md-form .prefix~textarea {
    margin-right: 2.5rem;
    width: calc(100% - 2.5rem);
}

.result-abjad {
    margin: 20px;
}

@media screen and (min-width: 768px){
.table-responsive{
    display:inline-table;
}
}
</style>
<section id="fale-abjad">
<?php

    require_once('function-abjad.php');

?>


<div class="container">


    <div class="col-md-12">

        <!-- Card -->
        <form method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="card mx-xl-5">

                    <!-- Card body -->
                    <div class="card-body">

                        <!-- Material form register -->
                   
                            <p class="h4 text-center py-4">مشخصات مرد </p>

                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="fas fa-male fa-2x prefix grey-text"></i>
                                <input type="text" id="NameMan" name="NameMan" class="form-control" required>
                                <label for="NameMan" id="َAbjadMan" class="font-weight-light">نام مرد *</label>
                            </div>

                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="fas fa-female fa-2x prefix grey-text"></i>
                                <input type="text" id="NameMother" name="NameMother" class="form-control" required>
                                <label for="NameMother" class="font-weight-light">نام مادر *</label>
                            </div>

                    </div>
                    <!-- Card body -->

                </div>
            </div>
            <!-- Card -->

            <div class="col-md-6">

                <!-- Card -->
                <div class="card mx-xl-5">

                    <!-- Card body -->
                    <div class="card-body">

                        <!-- Material form register -->
                        <p class="h4 text-center py-4"> مشخصات زن</p>

                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fas fa-female fa-2x prefix grey-text"></i>
                            <input type="text" id="NameWoman"  name="NameWoman"class="form-control" required>
                            <label for="NameWoman" class="font-weight-light">نام زن *</label>
                        </div>

                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fas fa-female fa-2x prefix grey-text"></i>
                            <input type="text" id="NameWMother" name="NameWMother" class="form-control" required>
                            <label for="NameWMother" class="font-weight-light">نام مادر *</label>
                        </div>

                    </div>
                </div>

            </div>

            <div class="text-center py-4 mt-3" style="margin: 0 auto;">
        <button class="btn purple-gradient  waves-effect waves-light" type="submit">نمایش</button>
    </div>
    </form>
        </div>
    </div>
    <?php
    if(isset($_POST['NameMan'])){ ?>
<!--Table-->
<table id="tablePreview" class="table table-responsive table-striped table-hove">

<thead>
      <tr>
        <th scope="col">نام</th>
        <th scope="col">عدد ابجد</th>
        <th scope="col">نام</th>
        <th scope="col">عدد ابجد</th>
        <th scope="col">نام</th>
        <th scope="col">عدد ابجد</th>
        <th scope="col">نام</th>
        <th scope="col">عدد ابجد</th>

      </tr>
    </thead>

  <!--Table body-->
  <tbody>
  <?php
$NMan = Name_Split($NameMan) ;
$NMother = Name_Split($NameMother) ;
$NWoman= Name_Split($NameWoman) ;
$NWMother = Name_Split($NameWMother) ;


?>
    <tr>
      <td><?php echo $NameMan;?></td>
      <td><?php echo $NMan;?></td>
      <td><?php echo $NameMother ;?></td>
      <td><?php echo  $NMother ;?></td>
      <td><?php echo $NameWoman;?></td>
      <td><?php echo  $NWoman ;?></td>
      <td><?php echo $NameWMother;?></td>
      <td><?php echo  $NWMother ;?></td>


    </tr>


  </tbody>
  <!--Table body-->
</table>
<!--Table-->
<div class="result-abjad">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">نتیجه فال ابجد شما</h5>
    <p class="card-text"><?php result_abjad($NMan,$NMother,$NWoman,$NWMother); ?></p>

  </div>
</div>
</div>
    <?php } ?>
</div>


</section>


<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/abjad.js"></script> -->
<?php  get_footer(); ?>

