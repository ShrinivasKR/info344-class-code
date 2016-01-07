<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather</title>
</head>
<body>
    <?php
        $locationData = json_decode(file_get_contents('http://ip-api.com/json'));     
        
        $weatherapiQuery = 'http://api.openweathermap.org/data/2.5/weather?q='.$locationData->city.",".$locationData->countryCode.'&units=imperial&appid=2de143494c0b295cca9337e1e96b00e0'; 
        
        $weatherData = json_decode(file_get_contents($weatherapiQuery));
         
        echo ("The weather in {$locationData->city}, $locationData->countryCode is {$weatherData->weather[0]->description} with a current temperature of  {$weatherData->main->temp}.");
    ?>
</body>
</html>