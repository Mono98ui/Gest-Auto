<?php
    include("../header/header.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css" />  
  <title>Home</title>
</head>
<body>
<div class="services-container" id="servicesContainer">
<?php
      // Récupérer les données des services via l'API
      $api_url = "https://wheelwiseapi.onrender.com/api/services";
      $services_json = file_get_contents($api_url);
      $services = json_decode($services_json);

      // Afficher les services sur la page
      foreach ($services as $service) {
        echo '<div class="service-item">';
        echo '<h3>' . $service->type_car . '</h3>';
        echo '<p>Duration: ' . $service->time_service . ', Charge: ' . $service->cost . '</p>';
        echo '</div>';
      }
    ?>
</body>
</html>