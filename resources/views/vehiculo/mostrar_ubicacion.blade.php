<!DOCTYPE html>
<html>
<head>
    <title>Ubicación en Tiempo Real Flota Satra</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY"></script>
    <script>
        let map;
        let marker;

        function initMap() {
            // Coordenadas iniciales (podrías usar la última ubicación registrada)
            const ubicacionInicial = { lat: -33.8688, lng: 151.2093 };

            // Crear el mapa
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: ubicacionInicial,
            });

            // Colocar un marcador en la ubicación inicial
            marker = new google.maps.Marker({
                position: ubicacionInicial,
                map: map,
                title: "Tractomula"
            });

            // Llamar periódicamente para actualizar la ubicación
            setInterval(actualizarUbicacion, 5000);  // Cada 5 segundos
        }

        // Función para obtener la nueva ubicación desde Laravel
        function actualizarUbicacion() {
            fetch('/api/ubicacion-actual')
                .then(response => response.json())
                .then(data => {
                    const nuevaUbicacion = { lat: parseFloat(data.latitud), lng: parseFloat(data.longitud) };

                    // Actualizar la posición del marcador
                    marker.setPosition(nuevaUbicacion);
                    map.setCenter(nuevaUbicacion);
                });
        }

        window.onload = initMap;
    </script>
</head>
<body>
    <h1>Ubicación en Tiempo Real de la Tractomula</h1>
    <div id="map" style="height: 500px; width: 100%;"></div>
</body>
</html>
