
ymaps.ready(function () {
    var map = new ymaps.Map("map", {
      center: [51.671439, 39.203243], 
      zoom: 16,
      // controls: false
  });

    // Создание геообъекта с типом точка (метка).

    var point = new ymaps.Placemark([51.671439, 39.203243], {}, {
        preset: 'islands#redIcon'
    });


// Размещение геообъекта на карте.
map.geoObjects.add(point);
map.controls.remove('searchControl');
map.controls.remove('typeSelector');
map.controls.remove('fullscreenControl');
map.controls.remove('trafficControl');
map.controls.remove('geolocationControl');

});
