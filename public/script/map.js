const lat = 47.636791;
const lon = 6.102844;
let macarte = null;
// Fonction d'initialisation de la carte
function initMap() {
    // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
    macarte = L.map('map').setView([lat, lon], 13);
    // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte)
    const myIcon = L.icon({
        iconUrl: "media/LogoSvg/map-marker.svg",
        iconSize:[50, 50],
        iconAnchor: [25,50],
        popupAnchor:[-3,-76]
    })
    let marker = L.marker([47.63685, 6.101861],{icon: myIcon}).addTo(macarte);
    marker.bindPopup("STAD")
}

// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
window.addEventListener("load", function(event){
    initMap()
}, false)