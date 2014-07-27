var map;
  function initialize() {
    var mapOptions = {
      draggable: false,
      scrollwheel: false,
      scaleControl: false,
      disableDoubleClickZoom: true,
      zoom: 8,
      mapTypeControl: false,
      disableDefaultUI: true,
      center: new google.maps.LatLng(-12.38732,-76.773077),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map_canvas'),
        mapOptions);
  }

  google.maps.event.addDomListener(window, 'load', initialize);