<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Weather</title>
</head>
<body>
    <?php
    
        $url = parse_url($_SERVER['REQUEST_URI']);

        $location = substr($url['path'], 12);
        if (strlen($location) == 0) {
            $locationData = json_decode(file_get_contents('http://ip-api.com/json'));
            $city = $locationData->city;
            $countryCode = $locationData->countryCode;
        } else {
            $locationData = explode(",", $location);
            $city = substr($locationData[0], 1);
            $countryCode = substr($locationData[1], 0, 2);
        }
        
        $weatherapiQuery = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.",".$countryCode.'&units=imperial&appid=2de143494c0b295cca9337e1e96b00e0'; 
        
        $weatherData = json_decode(file_get_contents($weatherapiQuery));
         
        echo ("The weather in $city, $countryCode is {$weatherData->weather[0]->description} with a current temperature of  {$weatherData->main->temp}.");
    ?>
</body>
</html>