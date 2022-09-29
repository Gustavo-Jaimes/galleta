function iniciarMap(){
    var coord = {lat:-103.3924498 ,lng: -103.3902611};
    var map = new google.maps.Map(document.getElementById('map-style-3'),{
      zoom: 12,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}