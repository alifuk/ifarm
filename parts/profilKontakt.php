



<?php
require_once './connect.php';

$stmt = $conn->prepare("SELECT jmeno, adresa1, telefon, lat, lng, ico, dic FROM users WHERE Id = ? LIMIT 1");
$stmt->bind_param('i', $Id);

$Id = $_GET['spolecnost'];

$stmt->execute();

$stmt->bind_result($jmeno, $adresa1, $telefon, $lat, $lng, $ico, $dic);
while ($stmt->fetch()) {
    echo "<b>" . $jmeno . "</b><br>";
    echo $adresa1 . "<br>";
    if ($telefon) {
        echo $telefon . "<br>";
    }
    echo "IČO " . $ico . "<br>";

    if ($dic != "") {
        echo "DIČ " . $dic . "<br>";
    }



// make request


    /*
      $url = "https://maps.googleapis.com/maps/api/geocode/xml?address=" . urlencode($adresa1) . "&key=AIzaSyDmPjww9bGInAdOuHn7PzD5WtVT2fx-eP8";


      $xml = simplexml_load_string(file_get_contents($url));
      $lat = $xml->result->geometry->location->lat;
      $lng = $xml->result->geometry->location->lng;

     */
    //echo "<img src='./img/profilMapa.png' style='width: 100%; '>"; 
    echo '<div id="map-canvas" style="width: 80%; height: 200px; margin: 20px auto 0;"></div>';
}
$stmt->close();
?>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script>
    var map;
    function initialize() {
        map = new google.maps.Map(document.getElementById('map-canvas'), {
            zoom: 13,
            center: {lat: <?php echo $lat ?>, lng: <?php echo $lng ?>}
        });

        var marker = new google.maps.Marker({
            position: {lat: <?php echo $lat ?>, lng: <?php echo $lng ?>},
            map: map
        });



    }

    google.maps.event.addDomListener(window, 'load', initialize);

</script>
