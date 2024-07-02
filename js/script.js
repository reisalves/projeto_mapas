//Minha localização



var greenIcon = L.icon({
  iconUrl: 'images/perfil.png',
  // shadowUrl: 'leaf-shadow.png',

  iconSize: [30, 30], // size of the icon
  shadowSize: [50, 64], // size of the shadow
  iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
  shadowAnchor: [4, 62],  // the same for the shadow
  popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
});


var myIcon = L.icon({
  iconUrl: 'images/localizador.png',
  // shadowUrl: 'leaf-shadow.png',

  iconSize: [25, 25], // size of the icon
  shadowSize: [50, 64], // size of the shadow
  iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
  shadowAnchor: [4, 62],  // the same for the shadow
  popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
});

var bus= L.icon({
  iconUrl: 'images/bus.png',
  // shadowUrl: 'leaf-shadow.png',

  iconSize: [45, 45], // size of the icon
  shadowSize: [50, 64], // size of the shadow
  iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
  shadowAnchor: [4, 62],  // the same for the shadow
  popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
});
// var myIcon = L.divIcon({ className: 'mydmap' });


if (navigator.geolocation) {
  navigator.geolocation.watchPosition(function (position) {

    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;


    var map = L.map('map', {
      // center: [latitude, longitude],
      center: [-21.699094759711787, -47.517080022998655],
      zoom: 15,
    })
  

   

    L.marker([-21.695407642461557, -47.474835004277466], { icon: bus }).addTo(map).bindPopup("Bus");


    L.marker([latitude, longitude ], { icon: greenIcon }).addTo(map).bindPopup("Minha localização");

    //LINHA VERDE
    L.marker([-21.695407642461557, -47.474835004277466], { icon: myIcon }).addTo(map).bindPopup("Garagem");
    L.marker([-21.711818761752628, -47.47790587475852], { icon: myIcon }).addTo(map).bindPopup("Nelson Fernandes");
    L.marker([-21.706193503344796, -47.481221176697595], { icon: myIcon }).addTo(map).bindPopup("Confecção Hábito");
    L.marker([-21.726821431230697, -47.35269282563022 ], { icon: myIcon }).addTo(map).bindPopup("Estrela");
    L.marker([-21.753936662262028, -47.3387859], { icon: myIcon }).addTo(map).bindPopup("Posto de Saúde Estrela");
    L.marker([-21.754287415225, -47.342552828681 ], { icon: myIcon }).addTo(map).bindPopup("Praça Estrela");
    L.marker([-21.753688, -47.344396 ], { icon: myIcon }).addTo(map).bindPopup("Matadouro");
    L.marker([-21.717533272225726, -47.47258288185709 ], { icon: myIcon }).addTo(map).bindPopup("Planalto Elektro"); 
    L.marker([-21.72031423333009, -47.473826647264865 ], { icon: myIcon }).addTo(map).bindPopup("Padaria Planalto"); 
    L.marker([-21.716983037483057, -47.47593909381206 ], { icon: myIcon }).addTo(map).bindPopup("Posto Roseira"); 
    L.marker([-21.571584941578415, -47.53841644995715 ], { icon: myIcon }).addTo(map).bindPopup("Nelson Fernandes"); 
    L.marker([-21.706598883088176, -47.47935093428569 ], { icon: myIcon }).addTo(map).bindPopup("Praça do Rosário"); 
    L.marker([-21.70462639372875, -47.479991739337116 ], { icon: myIcon }).addTo(map).bindPopup("Padaria Veneza"); 
    L.marker([-21.697451760296147, -47.475742120549924 ], { icon: myIcon }).addTo(map).bindPopup("Posto Ruff"); 
    L.marker([-21.712178265168436, -47.470998530880365 ], { icon: myIcon }).addTo(map).bindPopup("Creche Lagoinha");
    L.marker([-21.695547275602074, -47.4829923591763 ], { icon: myIcon }).addTo(map).bindPopup("Posto GD"); 
    L.marker([-21.705347701507783, -47.4817384066858 ], { icon: myIcon }).addTo(map).bindPopup("Ecoponto");
    L.marker([-21.692958548434994, -47.497789061268186 ], { icon: myIcon }).addTo(map).bindPopup("Padaria Pão de Ouro");
    L.marker([-21.692119582443052, -47.5014332631225 ], { icon: myIcon }).addTo(map).bindPopup("Paróquia São José");
    L.marker([-21.69877631387111, -47.47582508841121 ], { icon: myIcon }).addTo(map).bindPopup("Igreja Baptista");
    L.marker([-21.692855466951908, -47.49992519087968 ], { icon: myIcon }).addTo(map).bindPopup("Bar do Claudemir");
    L.marker([ -21.693044907346692, -47.507823805747904 ], { icon: myIcon }).addTo(map).bindPopup("São Luis");
    L.marker([-21.69421041637448, -47.50507246942738 ], { icon: myIcon }).addTo(map).bindPopup("Igreja Deus é Amor");
    L.marker([-21.69288199504024, -47.50438870522302 ], { icon: myIcon }).addTo(map).bindPopup("Conselho tutelar");
    L.marker([-21.692958548434994, -47.497789061268186 ], { icon: myIcon }).addTo(map).bindPopup("Padaria Pão de Ouro");
    L.marker([-21.695034205878965, -47.49188483862558 ], { icon: myIcon }).addTo(map).bindPopup("Fort Marterial de Construção");
    L.marker([-21.69751715470455, -47.489832974844525 ], { icon: myIcon }).addTo(map).bindPopup("São Sebastião");//são sebastião 3 (grick)
    L.marker([-21.701764307353056, -47.48475051894055 ], { icon: myIcon }).addTo(map).bindPopup("Galdina");
    L.marker([-21.705034948853843, -47.48226914592242 ], { icon: myIcon }).addTo(map).bindPopup("Moda Construção");
    L.marker([-21.710586363515876, -47.49000174963072 ], { icon: myIcon }).addTo(map).bindPopup("Posto 2 Avenidas");
    L.marker([-21.714957994848174, -47.49320168754433 ], { icon: myIcon }).addTo(map).bindPopup("Sanatório");
    L.marker([-21.707820927888488, -47.48407393585621 ], { icon: myIcon }).addTo(map).bindPopup("Rodoviária");
    L.marker([-21.70804512718451, -47.47990055533711 ], { icon: myIcon }).addTo(map).bindPopup("Santa Casa");
    L.marker([-21.711818761752628, -47.47790587475852 ], { icon: myIcon }).addTo(map).bindPopup("Nelson Fernandes");
    L.marker([-21.712397623359887, -47.4763628409999 ], { icon: myIcon }).addTo(map).bindPopup("Maria Amelia");
    L.marker([-21.706878191642183, -47.47505993243125 ], { icon: myIcon }).addTo(map).bindPopup("Seperm.São Pedro");
    L.marker([-21.706598883088176, -47.47935093428569 ], { icon: myIcon }).addTo(map).bindPopup("Praça do Rosário");


    //LINHA VERMELHA
    L.marker([-21.695407642461557, -47.474835004277466], { icon: myIcon }).addTo(map).bindPopup("Garagem");
    L.marker([-21.709937454459897, -47.48986278188465], { icon: myIcon }).addTo(map).bindPopup("Posto duas avenidas");
    L.marker([-21.714957994848174, -47.49320168754433 ], { icon: myIcon }).addTo(map).bindPopup("Sanatório");
    L.marker([-21.707820927888488, -47.48407393585621 ], { icon: myIcon }).addTo(map).bindPopup("Rodoviária");
    L.marker([-21.70804512718451, -47.47990055533711 ], { icon: myIcon }).addTo(map).bindPopup("Santa Casa");
    L.marker([-21.711818761752628, -47.47790587475852], { icon: myIcon }).addTo(map).bindPopup("Nelson Fernandes");
    L.marker([-21.706598883088176, -47.47935093428569 ], { icon: myIcon }).addTo(map).bindPopup("Praça do Rosário"); 
    L.marker([-21.705504636527824, -47.47457324777664 ], { icon: myIcon }).addTo(map).bindPopup("Reis Malhas"); 
    L.marker([-21.697451760296147, -47.475742120549924 ], { icon: myIcon }).addTo(map).bindPopup("Posto Ruff");  
    L.marker([-21.712178265168436, -47.470998530880365 ], { icon: myIcon }).addTo(map).bindPopup("Creche Lagoinha");
    L.marker([-21.695547275602074, -47.4829923591763 ], { icon: myIcon }).addTo(map).bindPopup("Posto GD"); 
    L.marker([-21.705347701507783, -47.4817384066858 ], { icon: myIcon }).addTo(map).bindPopup("Ecoponto");
    L.marker([-21.823735703441184, -47.624874087022896 ], { icon: myIcon }).addTo(map).bindPopup("Drogaria Raia");
    L.marker([-21.692958548434994, -47.497789061268186 ], { icon: myIcon }).addTo(map).bindPopup("Padaria Pão de Ouro");
    L.marker([-21.651065895096956, -47.47040272304252 ], { icon: myIcon }).addTo(map).bindPopup("Igreja Batista");
    L.marker([-21.692855466951908, -47.49992519087968 ], { icon: myIcon }).addTo(map).bindPopup("Bar do Claudemir");
    L.marker([-21.69751715470455, -47.489832974844525 ], { icon: myIcon }).addTo(map).bindPopup("São Sebastião");
    L.marker([-21.69421041637448, -47.50507246942738 ], { icon: myIcon }).addTo(map).bindPopup("Igreja Deus é Amor");
    L.marker([-21.69288199504024, -47.50438870522302 ], { icon: myIcon }).addTo(map).bindPopup("Conselho tutelar");
    L.marker([-21.695034205878965, -47.49188483862558 ], { icon: myIcon }).addTo(map).bindPopup("Fort Marterial de Construção");
    L.marker([-21.701764307353056, -47.48475051894055 ], { icon: myIcon }).addTo(map).bindPopup("Galdina");
    L.marker([-21.704925299027845, -47.48243007846724 ], { icon: myIcon }).addTo(map).bindPopup("vivo/moda");
    L.marker([-21.70804512718451, -47.47990055533711 ], { icon: myIcon }).addTo(map).bindPopup("Santa Casa");
    L.marker([-21.71299, -47.47505 ], { icon: myIcon }).addTo(map).bindPopup("Asilo");
    L.marker([-21.719614101863787, -47606207816705 ], { icon: myIcon }).addTo(map).bindPopup("Rotatória Planalto");
    L.marker([-21.753936662262028, -47.3387859], { icon: myIcon }).addTo(map).bindPopup("Posto de Saúde Estrela");
    L.marker([-21.753688, -47.344396 ], { icon: myIcon }).addTo(map).bindPopup("Matadouro");
    L.marker([-21.717533272225726, -47.47258288185709 ], { icon: myIcon }).addTo(map).bindPopup("Planalto Elektro"); 

    // function onMapClick(e) {
    //   alert("You clicked the map at " + e.latlng);
    // }
L.Routing.control({
  waypoints: [
    L.latLng(latitude, longitude),
    L.latLng(-21.695407642461557, -47.474835004277466)
  ],
  show:false
}).addTo(map);
    // map.on('click', onMapClick);

    // add an OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors',
    }).addTo(map);

console.log(L.control.locate({}));
    L.control.locate({
   
    }).addTo(map);

  })

 
}


