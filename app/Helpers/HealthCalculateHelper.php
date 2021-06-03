<?php

if (!function_exists('bmi')) {

    /**
     * description
     *
     * @param
     * @return
     */
     function bmi($mass, $height)
    {

        $bmi = 0.00;
        //  if ($unit == "Metric") {
        //BMI = weight (kg) ÷/ ( height * height  ) in Meter
        $bmi = ($mass / ($height * $height));
        //    }
//        if ($unit == "Imperial") {
//            //BMI = weight (lb) x (height inch  * height inch ) x 703
//            $bmi = ($mass / ($height * $height)) * 703;
//        }
        return $bmi;
    }

}
