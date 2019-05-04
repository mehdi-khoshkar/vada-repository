<?php /* Template Name: Pay Fine */ ?>


<?php  get_header(); ?>

<script  src="<?php echo get_template_directory_uri(); ?>/khalafi_files/Chart.min.js"></script>


<div class="bg-titlebar">
		<div class="container titlebar">

		
				<h1 class="entry-title">نمایش  استعلام های انجام شده توسط فرمون </h1>			
	
		

		</div>
	</div>

   


<div class="container">




<script>

jQuery( document ).ajaxComplete(function() {
    var estelamNumber = $("#estelam-number").text();
    var tedad = $("#tedad").text();
    var countTakhalof = $("#count-takhalof").text();
console.log(countTakhalof);

var ctx = document.getElementById("myChart");

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["تعداد استعلام ها", "تعداد بیشترین نوع تخلف","تعداد پرتخلف ترین مکان",],
        datasets: [{
            label: 'آمار',
            data: [estelamNumber,tedad ,countTakhalof],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});



});


</script>

    <div class="row">


    <div class=" col-md-12 col-sm-12 col-lg-12 estelam-khalafi">
    <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                        

                        استعلام های انجام شده
            
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" >
                <div class="panel-body">
                <div  class="title-estelam">
                    تعداد استعلام ها :
                    <span id="estelam-number"></span>
                </div>
                <div class="response-estelam" >
                    مقدار کل جریمه ها :
                    <span id="estelam-amount"> </span>
      
                    ریال
                </div>
                </div>
            </div>
        </div>

      
    
        </div>


        <div class=" col-md-6 col-sm-6 col-lg-6 estelam-khalafi">
    <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                        

                پرتخلف ترین مکان
            
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" >
                <div class="panel-body">
                <div  class="title-estelam">
                     محل تخلف :
                    <span id="por-takhalof"> </span>
                </div>
                <div class="response-estelam" >
                      تعداد :
                    <span id="count-takhalof"> </span>
                </div>
                </div>
            </div>
        </div>

      
    
        </div>



        <div class=" col-md-6 col-sm-6 col-lg-6 estelam-khalafi">
    <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                        

                بیشترین نوع تخلف            
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" >
                <div class="panel-body">
                <div  class="title-estelam">
                    شرح تخلف :
                    <span id="noe-takhalof"> </span>
                </div>
                <div class="response-estelam" >
                    تعداد :
                    <span id="tedad"> </span>
                </div>
                </div>
            </div>
        </div>

      
    
        </div>

     </div>

     <div class="col-lg-6 col-md-6 convas">

<canvas id="myChart" width="400" height="400"></canvas>
</div>

</div>






<script  src="<?php echo get_template_directory_uri(); ?>/khalafi_files/getReport.js"></script>




<?php get_footer(); ?>




