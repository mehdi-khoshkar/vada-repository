<?php /* Template Name: Currency */ ?>
<?php get_header(); ?>


<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://call.tgju.org/ajax.json",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",

));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$currency =json_decode($response);

?>

  <div class="bg-titlebar">
  <div class="container titlebar" style="margin-top: 60px;">


				<h1 class="entry-title"><?php the_title(); ?>  </h1>			
	
		

		</div>
	</div>


<div class="container">

<?php
$low = '<img src="https://kaarpardaz.com/wp-content/uploads/2019/06/down-change.png"/>';
$high='<img src="https://kaarpardaz.com/wp-content/uploads/2019/06/up-change.png"/>';

?>


<table class="table table-striped table-responsive table-curency">
  <thead>
    <tr>
      <th scope="col">عنوان نرخ	</th>
      <th scope="col">قیمت زنده (ریال)</th>
      <th scope="col">تغییرات</th>
      <th scope="col">زمان به روزرسانی</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">گرم طلای 24</th>
      <td><?php echo $currency->current->geram24->p;?></td>
      <td id="change"><?php echo $currency->current->geram24->dp;?>&nbsp;<em><?php if( $currency->current->geram24->dt == 'low'){ echo $low;}else{echo $high;}?></em></td>
      <td><?php echo $currency->current->geram24->t;?></td>
    </tr>
    <tr>
      <th scope="row">گرم طلای ۱۸</th>
      <td><?php echo $currency->current->geram18->p;?></td>
      <td id="change"><?php echo $currency->current->geram18->dp;?>&nbsp;<em><?php if( $currency->current->geram18->dt == 'low'){ echo $low;}else{echo $high;}?></em></td>
      <td><?php echo $currency->current->geram18->t;?></td>
    </tr>
    <tr>
      <th scope="row">دلار</th>
      <td><?php echo $currency->current->price_dollar_rl->p;?> </td>
      <td id="change"><?php echo $currency->current->price_dollar_rl->dp;?>&nbsp;<em><?php if( $currency->current->price_dollar_rl->dt == 'low'){ echo $low;}else{echo $high;}?></em></td>
      <td><?php echo $currency->current->price_dollar_rl->t;?></td>
    </tr>
    <tr>
      <th scope="row">یورو</th>
      <td><?php echo $currency->current->price_eur->p;?></td>
      <td id="change"><?php echo $currency->current->price_eur->dp;?>&nbsp;<em><?php if( $currency->current->price_eur->dt == 'low'){ echo $low;}else{echo $high;}?></em></td>
      <td><?php echo $currency->current->price_eur->t;?></td>
    </tr>
    <tr>
      <th scope="row">تمام سکه بهار آزادی</th>
      <td><?php echo $currency->current->sekee->p;?></td>
      <td id="change"><?php echo $currency->current->sekee->dp;?>&nbsp;<em><?php if( $currency->current->sekee->dt == 'low'){ echo $low;}else{echo $high;}?></em></td>
      <td><?php echo $currency->current->sekee->t;?></td>
    </tr>

    <tr>
      <th scope="row">نیم سکه بهار آزادی</th>
      <td><?php echo $currency->current->nim->p;?></td>
      <td id="change"><?php echo $currency->current->nim->dp;?>&nbsp;<em><?php if( $currency->current->nim->dt == 'low'){ echo $low;}else{echo $high;}?></em></td>
      <td><?php echo $currency->current->nim->t;?></td>
    </tr>

    <tr>
      <th scope="row">ربع سکه بهار آزادی</th>
      <td><?php echo $currency->current->rob->p;?></td>
      <td id="change"><?php echo $currency->current->rob->dp;?>&nbsp;<em><?php if( $currency->current->rob->dt == 'low'){ echo $low;}else{echo $high;}?></em></td>
      <td><?php echo $currency->current->rob->t;?></td>
    </tr>




    

  </tbody>
</table>

<?php the_content();?>



</div>
    


    
<?php get_footer(); ?>