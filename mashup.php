<?php
require 'include/bd.php';

$query = "SELECT * FROM mashup;";
$stmt = $pdo->query($query);
$result = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php
require_once '__header.php';
?>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
<?php
$i = 1;
foreach ($result as $row) {
    echo "position_$i=new google.maps.LatLng($row->gps);";
    $i++;
}
?>

    function initialize() {
        var mapProp = {
            center: new google.maps.LatLng(4.6356946, -74.0709893),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

<?php
$i = 1;
foreach ($result as $row) {
    echo "var marker_$i=new google.maps.Marker({
  position:position_$i,
  });";
    echo "marker_$i.setMap(map);";
    echo "var infowindow_$i = new google.maps.InfoWindow({
  content:'" . $row->nombre . "'
  });";
//echo "infowindow.open(map,marker);";
    echo "marker_$i.addListener('click', function() {
    infowindow_$i.open(map, marker_$i);
  });
";
    $i++;
}
?>
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div class="page_content">
    <h2 class="text-center">Sitios de interés cercanos</h2>
    <br>
    <div id="googleMap" style="width:80%;height:600px;margin:auto;"></div>
</div>
<?php
include '__footer.php';
?>