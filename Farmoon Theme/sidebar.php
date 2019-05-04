<section id="sidebar-blog">
			<div class="sidebar-inner">
   <aside>

	 <?php if ( is_active_sidebar( 'sidebar-blog' ) ) { ?>
    <ul id="sidebar">
        <?php dynamic_sidebar('sidebar-blog'); ?>
				<li id="table-price-sidebar"> 
				<h2 class="widgettitle widget-car-price">قیمت روز خودرو </h2>

												<table class="table  table-responsive table-striped">
										<tr>
												<th>مدل</th>
												<th> تیپ</th>
												<th>قیمت بازار (تومان)</th>
										</tr>
									

										<?php  

											$table_name = $wpdb->prefix.'price';

											$results_saipa = $wpdb->get_results( "SELECT * FROM $table_name WHERE brand = 'سایپا' AND model ='پراید 131' "); // Query to fetch data from database table and storing in $results

											$i = 1;

										foreach($results_saipa as $row){?>
												<tr>
														<td> <?php echo $row->model; ?></td>
														<td> <?php echo  $row->tip; ?></td>
														<td> <?php echo  $row->price; ?></td>
													<?php	if ($i++ == 1) break; ?>
												</tr>
												<?php 
												}
													
													?>

</tr>


<?php  

$table_name = $wpdb->prefix.'price';

$results_saipa = $wpdb->get_results( "SELECT * FROM $table_name WHERE brand = 'سایپا' AND model ='تیبا' "); // Query to fetch data from database table and storing in $results

$i = 1;

foreach($results_saipa as $row){?>
	<tr>
			<td> <?php echo $row->model; ?></td>
			<td> <?php echo  $row->tip; ?></td>
			<td> <?php echo  $row->price; ?></td>
		<?php	if ($i++ == 1) break; ?>
	</tr>
	<?php 
	}
		
		?>

</tr>
									

									<?php  


										$results_iran = $wpdb->get_results( "SELECT * FROM $table_name WHERE brand = 'ایران خودرو' AND model ='سمند LX' "); // Query to fetch data from database table and storing in $results

							
										$i = 1;
									foreach($results_iran as $row){?>
											<tr>
													<td> <?php echo $row->model; ?></td>
													<td> <?php echo  $row->tip; ?></td>
													<td> <?php echo  $row->price; ?></td>
												<?php	if ($i++ == 1) break; ?>
											</tr>
											<?php 
											}
												
												?>


<?php  


$results_iran = $wpdb->get_results( "SELECT * FROM $table_name WHERE brand = 'ایران خودرو' AND model ='پژو 207' "); // Query to fetch data from database table and storing in $results


$i = 1;
foreach($results_iran as $row){?>
	<tr>
			<td> <?php echo $row->model; ?></td>
			<td> <?php echo  $row->tip; ?></td>
			<td> <?php echo  $row->price; ?></td>
		<?php	if ($i++ == 1) break; ?>
	</tr>
	<?php 
	}
		
		?>

			
								</table>



            <div class="btn-price-sidebar">
								<a href="https://farmooon.com/?page_id=3572" class="btn btn-primary">لیست قیمت روز خودرو</a>
						</div>

						<!-- <form name="form" method="post" action="">
  <div class="form-group">
    <label for="exampleFormControlSelect1">برند خودرو</label>
    <select class="form-control Brand" name="Brand" id="Brand">
      <option value="ایران خودرو">ایران خودرو</option>
			<option>سایپا</option>
			<option>پارس خودرو</option>
			<option>کرمان موتور</option>
			<option> مدیران خودرو</option>
			<option>گروه بهمن</option>
			<option> ام جی</option>
			<option>تویوتا</option>
			<option>بنز</option>
			<option>بی ام و</option>
			<option> رنو</option>
			<option>آئودی</option>

    </select>

		<label for="exampleFormControlSelect1">مدل خودرو</label>
    <select class="form-control" name="Model" id="Model">
<option>انتخاب مدل</option>
</select>
		

	
  </div>

 
</form>  -->

<?php if(isset($_GET['Brand'])){ ?>
<table class="table  table-responsive table-striped">

<?php

$Brand =  $_GET['Brand'];
$Model =  $_GET['Model'];
   
?>
                    <tr>
												<th>مدل</th>
												<th> تیپ</th>
												<th>قیمت بازار (تومان)</th>
										</tr>

                <?php
								$results_search = $wpdb->get_results( "SELECT * FROM $table_name WHERE brand = '$Brand' AND model= '$Model' "); // Query to fetch data from database table and storing in $results
										$i = 1;
									foreach($results_search as $row){?>
											<tr>
													<td> <?php echo $row->model; ?></td>
													<td> <?php echo  $row->tip; ?></td>
													<td> <?php echo  $row->price; ?></td>
												<?php	if ($i++ == 1) break; ?>
											</tr>
											<?php 
											}
												
												?>

</table>

<?php } ?>
				</li>
    </ul>
<?php } ?>


	 </aside>
		
		</div>



	</section>