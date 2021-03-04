<?php
	header('Access-Control-Allow-Origin:*');
	$height=$_POST['height']/100;
	$weight=$_POST['weight'];
	$bmi=round($weight/($height*$height),2);

	if($bmi<18.5){
		$bmistr="體重過輕";
	}elseif($bmi<24 && $bmi>=18.5) {
		$bmistr="健康體位";
	}elseif($bmi>=24) {
		$bmistr="體位異常";
	}

	echo '<h1>BMI:'.$bmi.$bmistr.'</h1>';
?>