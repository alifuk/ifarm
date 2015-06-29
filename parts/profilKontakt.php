



<?php
require_once './connect.php';

$stmt = $conn->prepare("SELECT jmeno, adresa1, telefon FROM users WHERE jmeno = ?");
$stmt->bind_param('i', $user);

$user = $_GET['spolecnost'];

$stmt->execute();

$stmt->bind_result($jmeno, $adresa1, $telefon);
while ($stmt->fetch()) {
    echo $jmeno . "<br>";
    echo $adresa1 . "<br>";
    echo $telefon . "<br>";



// make request



    $url = "https://maps.googleapis.com/maps/api/geocode/xml?address=" . urlencode($adresa1) . "&key=AIzaSyDmPjww9bGInAdOuHn7PzD5WtVT2fx-eP8";


    $xml = simplexml_load_string(file_get_contents($url));
    $lat = $xml->result->geometry->location->lat;
    $lng = $xml->result->geometry->location->lng;


    //echo "<img src='./img/profilMapa.png' style='width: 100%; '>"; 
    echo '<div id="map-canvas" style="width: 100%; height: 400px;"></div>';
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
