<!-- VERSION AVEC IMAGE -->
<!-- <section id="section-contact">
  <div id="p-section-contact">
    <h3>Restons en contact</h3>
    <p><span>Téléphone :</span> 01 23 45 67 89</p>
    <p><span>Email :</span> julien.procedes@orange.fr</p>
    <p><span>Adresse :</span> " l'Intendant " 47700 Poussignac</p>
    <p><span>Horaire d'ouverture :</span> Du lundi au vendredi de 8h à 17h00</p>
  </div>
  <div>
    <img src="images/usine-vue-d-ensemble.jpg" alt="usine vue d\'ensemble">
  </div>
</section> -->

<!-- VERSION AVEC MAP -->
<section id="section-contact">
    <div id="p-section-contact">
      <h3>Restons en contact</h3>
      <p><span>Téléphone :</span> 01 23 45 67 89</p>
      <p><span>Email :</span> julien.procedes@orange.fr</p>
      <p><span>Adresse :</span> " l'Intendant " 47700 Poussignac</p>
      <p><span>Horaire d'ouverture :</span> Du lundi au vendredi de 8h à 17h00</p>
    </div>

    <!-- API Openstreetmap -->
    <div id="my_osm_widget_map"></div>
    <script>
      window.addEventListener('load', function() {
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
            'C\'est bibi qui l\'a fait !', /* set the map's caption */
            id: 'mapbox.streets' /* mapbox.light / dark / streets / outdoors / satellite */
        }).addTo(mymap);

        L.marker([44.356944444444, 0.070555555555556]).addTo(mymap); /* set your location's GPS Coordinates : [LAT,LON] */
      });
    </script>
</section>
