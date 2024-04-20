


 <div id="map"></div>





<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

<script>
  function initMap() {
       let map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 51.505, lng: -0.09  },
          zoom: 14,
        });
        let infoWindow = new google.maps.InfoWindow();

        const locationButton = document.createElement("button");

        locationButton.textContent = "My Current Location";
        locationButton.classList.add("custom-map-control-button");
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(
          locationButton
        );
        locationButton.addEventListener("click", () => {
          // Try HTML5 geolocation.
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
              (position) => {
                const origin = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude,
                };

                infoWindow.setPosition(origin);
                infoWindow.setContent("You're Here.");
                infoWindow.open(map);
                map.setCenter(origin);
              },
              () => {
                handleLocationError(true, infoWindow, map.getCenter());
              }
            );
          } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
          }
        });

        
      }

      function handleLocationError(browserHasGeolocation, infoWindow, origin) {
        infoWindow.setPosition(origin);
        infoWindow.setContent(
          browserHasGeolocation
            ? "Error: The Geolocation service failed."
            : "Error: Your browser doesn't support geolocation."
        );
        infoWindow.open(map);
      }

      window.initMap = initMap;
</script>

<!--GOOGLE MAP-->
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHTH5aumToaBog35M9xUlqRRQsZyJC1&callback=initMap&v=weekly&solution_channel=GMP_CCS_geolocation_v1"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/fontawesome.min.js" integrity="sha512-1M9vud0lqoXACA9QaA8IY8k1VR2dMJ2Qmqzt9pN2AH7eQHWpNsxBpaayV0kKkUsF7FLVQ2sA2SSc8w5VOm7/mg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <!--juqery-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>