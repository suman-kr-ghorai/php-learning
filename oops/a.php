<?php
interface TemperatureConverter {
    public function convert($temperature);
}

class CelsiusToFahrenheit implements TemperatureConverter {
        public function convert($temperature) {
        return ($temperature * 9/5) + 32;
    }
}

class FahrenheitToCelsius implements TemperatureConverter {
    public function convert($temperature) {
    return ($temperature-32) * 9/5;
}
}

    $celsius = $_REQUEST['celsius']; 
    $fahrenheit=$_REQUEST['fahrenheit'];
    
    if ($celsius) {
        $converter = new CelsiusToFahrenheit();
        $fahrenheit1 = $converter->convert($celsius); 
        echo "<p>{$celsius}°C is equal to {$fahrenheit1}°F.</p>"; 
    } 
    
    elseif($fahrenheit){
        $converter = new FahrenheitToCelsius();
        $celsius1 = $converter->convert($fahrenheit); 
        echo "<p>{$fahrenheit}°F is equal to {$celsius1}°C.</p>"; 
    }
    else {
        echo "<p>Please enter a valid numeric value.</p>";
    }
    

?>