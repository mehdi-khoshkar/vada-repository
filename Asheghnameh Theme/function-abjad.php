<?php


$NameMan = $_POST['NameMan'];
$NameMother = $_POST['NameMother'];
$NameWoman = $_POST['NameWoman'];
$NameWMother = $_POST['NameWMother'];


function Name_Split($str)
{


    global $wpdb;
    $table_name = $wpdb->prefix.'abjad';

    $len = mb_strlen($str, 'UTF-8');
    $result = [];
    for ($i = 0; $i < $len; $i++) {
        $result[] = mb_substr($str, $i, 1, 'UTF-8');
        $abjad = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE horouf IN ('$result[$i]') "),ARRAY_A);
        $number_abjad =$abjad[0]['abjad'] + $number_abjad;
       
        
    
    }

    return $number_abjad;
 

}



function result_abjad($NMan,$NMother,$NWoman,$NWMother)
{

    global $wpdb;
     $table_name = $wpdb->prefix.'abjad_result';

     if(isset($_POST['NameMan'])){
     $total = $NMan + $NMother +  $NWoman + $NWMother;

     $result_abjad = $total%5+1;
     $abjad= $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE number_abjad = '".$result_abjad."' "),ARRAY_A);

        $info_abjad =$abjad[0]['info'];

    echo $info_abjad ;

     }

}







