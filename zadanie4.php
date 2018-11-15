<?php

    function bmi($mass,$height) {
        $bmi = $mass/(($height*0.01)^2);
		return round($bmi, 2);
    }   
	
    $bmi = bmi(100,182); 

    if ($bmi <= 18.5) {
        $output = "NIEDOWAGĘ";

        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
        $output = "NORMALNĄ WAGĘ";

        } else if ($bmi > 24.9 AND $bmi<=29.9) {
        $output = "NADWAGĘ";

        } else if ($bmi > 30.0) {
        $output = "OTYŁOŚĆ";
    }
    echo "Twoje BMI wynosi " . $bmi . "  i masz: "; 
    echo "$output";

	