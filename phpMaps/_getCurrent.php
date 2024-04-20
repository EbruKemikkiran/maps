<div class="container">
<button id="locationButton" class="custom-map-control-button">My Current Location</button>

<div class="card">
    <h4>PLAIN</h4>
    <div id="locationInfo" class="localinfo"></div>
</div>

<div class="card">
    <h4>TABLE</h4>
<table id="locationTable">
    <thead>
        <tr>
            <th>Latitude</th>
            <th>Longitude</th>
        </tr>
    </thead>
    <tbody id="locationTableBody"></tbody>
</table>
</div>
</div>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

<script>
  function getLocation() {
            const locationButton = document.getElementById("locationButton");
            const locationTableBody = document.getElementById("locationTableBody");
            
            locationButton.addEventListener("click", () => {
                // HTML5 geolocation'u deneyin
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        (position) => {
                            const origin = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude,
                            };
                            console.log(origin); //konsola yazdirma
                            locationInfo.textContent = `Latitude: ${origin.lat}, Longitude: ${origin.lng}`; //plain yazdirma
                            displayLocationData(origin, locationTableBody); //tablo icin
                        },
                        () => {
                            handleLocationError(true);
                        }
                    );
                } else {
                    // Tarayıcı geolocation'u desteklemiyor
                    handleLocationError(false);
                }
            });
        }

        function handleLocationError(browserHasGeolocation) {
            console.log(
                browserHasGeolocation
                    ? "Error: The Geolocation service failed."
                    : "Error: Your browser doesn't support geolocation."
            );
        }

        function displayLocationData(data, tableBody) {
            const newRow = document.createElement("tr");
            newRow.innerHTML = `<td>${data.lat}</td><td>${data.lng}</td>`;
            tableBody.appendChild(newRow);
        }

        // getLocation() fonksiyonunu sayfa yüklendiğinde çağırın
        window.onload = getLocation;
    
      </script> 