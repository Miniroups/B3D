<section id="section-contact">
    <div id="p-section-contact">
      <h3><?= $_SESSION['translate']['section_c_title']?></h3>
      <p><span><?= $_SESSION['translate']['section_c_tel_s']?></span><?= $_SESSION['translate']['section_c_tel']?></p>
      <p><span><?= $_SESSION['translate']['section_c_mail_s']?></span><?= $_SESSION['translate']['section_c_mail']?></p>
      <p><span><?= $_SESSION['translate']['section_c_adresse_s']?></span><?= $_SESSION['translate']['section_c_adresse']?></p>
      <p><span><?= $_SESSION['translate']['section_c_horaire_s']?></span><?= $_SESSION['translate']['section_c_horaire']?></p>
    </div>

    <script src="https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.js"></script>
    <!-- API Openstreetmap -->
    <div id="my_osm_widget_map"></div>
    <script>
      var mymap = L.map('my_osm_widget_map', { /* use the same name as your <div id=""> */
        center: [44.356944444444, 0.070555555555556], /* set GPS Coordinates */
        zoom: 17, /* define the zoom level */
        zoomControl: true, /* false = no zoom control buttons displayed */
        scrollWheelZoom: true /* false = scrolling zoom on the map is locked */
      });

      L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiamJhMTkiLCJhIjoiY2pxcndtZGNzMDJpdDQzcGs1d2pveTVoYyJ9.RD6Ybznf-xsmN1Hzib_Ozg', { /* set your personal MapBox Access Token */
        maxZoom: 20, /* zoom limit of the map */
        attribution: 'Données &copy; Contributeurs <a href="http://openstreetmap.org">OpenStreetMap</a> + ' +
          '<a href="http://mapbox.com">Mapbox</a> | ' +
          '<a href="https://creativecommons.org/licenses/by/2.0/">CC-BY</a> ' +
          '', /* set the map's caption */
          id: 'mapbox.streets' /* mapbox.light / dark / streets / outdoors / satellite */
      }).addTo(mymap);

      L.marker([44.356944444444, 0.070555555555556]).addTo(mymap); /* set your location's GPS Coordinates : [LAT,LON] */
      </script>
    </section>
