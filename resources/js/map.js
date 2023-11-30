let map = L.map('mapbody').setView([53.545, 10.016], 11);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

let clickmarker = null;

let clickicon = new L.Icon({
    iconUrl: 'plugins/leaflet/images/marker-icon-red.png',
    shadowURL: 'plugins/leaflet/images/marker-shadow.png',
    iconSize: [25, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    shadowSize: [41, 41]
});
map.on('click', (event) => {
    if (clickmarker !== null) {
        map.removeLayer(clickmarker);
    }
    clickmarker = L.marker([event.latlng.lat, event.latlng.lng], {icon: clickicon}).addTo(map);

    console.log(event.latlng.lat + ";" + event.latlng.lng);
    $('#coord-string').html(event.latlng.lat + ";" + event.latlng.lng);
    $('#pos_save_button').show();
})
