<?php /* Template Name: Car Price  Audi */ ?>


<?php get_header(); ?>


<div class="bg-titlebar">
    <div class="container titlebar">


        <h1 class="entry-title">قیمت روز خودرو </h1>


    </div>
</div>



    <div class="container">
        <div class="col-md-12" style="padding-top:15px">

            <a href="https://farmooon.ir/?page_id=3572" class="btn btn-primary btn-top-price"> بازگشت</a>

            <div class="brand-car">

                <img class="brand-img" src="<?php echo get_template_directory_uri(); ?>/BrandsCar/audi.png"/>


            </div>


            <?php
            $i = 0;
            $table_name = $wpdb->prefix . 'price';
            $results = $wpdb->get_results("SELECT * FROM $table_name WHERE brand = 'آئودی' "); // Query to fetch data from database table and storing in $results
            ?>


            <table class="table  table-responsive table-striped">
                <tr>
                    <th>مدل</th>
                    <th> تیپ</th>
                    <th> سال</th>
                    <th>قیمت</th>
                </tr>


                <?php

                foreach ($results as $row) {
                    $i++ ?>
                    <tr>
                        <td> <?php echo $row->model; ?></td>
                        <td> <?php echo $row->tip; ?></td>
                        <td> <?php echo $row->year; ?></td>
                        <td> <?php echo $row->price; ?>&nbsp;تومان</td>
                        <?php if ($i == $row->countModel) break; ?>

                    </tr>
                    <?php
                }

                ?>


            </table>


        </div>


</div>

    <!-- <script  src="<?php echo get_template_directory_uri(); ?>/price/price.js"></script> -->


    <?php get_footer(); ?>




