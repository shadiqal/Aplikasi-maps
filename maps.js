

function initMap() {
          
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -2.548926, lng: 118.0148634},
          zoom: 17,
           panControl: false,
      	mapTypeControl: false,
      	streetViewControl: false,
      	mapTypeId: google.maps.MapTypeId.ROADMAP,
      	scrollwheel: false,
          styles:[
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#333333"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#dedede"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f2f2f2"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e9e9e9"
            },
            {
                "lightness": 17
            }
        ]
    }
]
        });

        // Menggunakan fungsi HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            marker = new google.maps.Marker({
              position: pos,
              map: map,
              icon: 'assets/gambar/warungFinder/userLocationWarungFinder.png',
              title: 'Posisi Kamu',
              animation: google.maps.Animation.DROP,
            });

            map.setCenter(pos);
            var user_location = position.coords.latitude+","+position.coords.longitude;
            var url = "tampil.php";
            var jarak = 10;




var infoWindow = new google.maps.InfoWindow(), tanda, i;
    $.ajax({
                url: url,
                data: "position="+encodeURI(user_location)+"&jarak="+jarak,
                dataType: 'json',
                cache: true,
                success: function(msg){
                  for(i=0; i < msg.data.warung.length;i++){
                    var point = new google.maps.LatLng(parseFloat(msg.data.warung[i].latitude),parseFloat(msg.data.warung[i].longitude));
                    var nama = msg.data.warung[i].namaWarung
                    var id = msg.data.warung[i].id
                    var jarak2 = msg.data.warung[i].jarak;
                    var infoWindowContent= 
                        '<div class="info_content">' +
                        '<h3>'  + msg.data.warung[i].namaWarung + '</h3>' +
                            '<p align="center"><a href="page/konsumen/detailWarung.php?idWarung=' + id + '&jarak=' + jarak2 + '" class="link_detail btn btn-primary">Lihat Detail</a>'
                        ;
      
                   if (msg.data.warung[i].kategori == 'laundry'){
                          var markerIcon = {
        url: 'assets/gambar/warungFinder/laundry2.png',
        scaledSize: new google.maps.Size(25, 40),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(30,65),
        labelOrigin:  new google.maps.Point(20,-10),
      };
                          var label={
                       text: msg.data.warung[i].namaWarung,
                          color: "green",
                          fontWeight: "bold"
                   };
                      }
                      else if (msg.data.warung[i].kategori == 'warung'){
                               var markerIcon = {
        url: 'assets/gambar/warungFinder/warung.png',
        scaledSize: new google.maps.Size(25, 40),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(30,65),
        labelOrigin:  new google.maps.Point(20,-10),
                                   
      };  var label={
                       text: msg.data.warung[i].namaWarung,
                          color: "orange",
                          fontWeight: "bold"
                   };
                      }
      else if (msg.data.warung[i].kategori == 'warungKelontong'){
                               var markerIcon = {
        url: 'assets/gambar/warungFinder/warungKelontong.png',
        scaledSize: new google.maps.Size(25, 40),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(30,65),
        labelOrigin:  new google.maps.Point(20,-10),
                                   
      };
                var label={
                       text: msg.data.warung[i].namaWarung,
                          color: "red",
                          fontWeight: "bold"
                   };          
                      }
                      else if (msg.data.warung[i].kategori == 'depotAirMinum'){
                               var markerIcon = {
        url: 'assets/gambar/warungFinder/galon2.png',
        scaledSize: new google.maps.Size(25, 40),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(30,65),
        labelOrigin:  new google.maps.Point(20,-10),
      };
                      var label={
                       text: msg.data.warung[i].namaWarung,
                          color: "blue",
                          fontWeight: "bold"
                   };   }
                      var markerLabel = 'GO!';
                      
                    tanda = new google.maps.Marker({
                        position: point,
                        map: map,
                        url: 'detail.php',
                        icon: markerIcon,
                        animation: google.maps.Animation.DROP,
                        title: msg.data.warung[i].namaWarung,
                       
                        label:label
                        
                    });

                    
        google.maps.event.addListener(tanda, 'click', (function(tanda, infoWindowContent, infoWindow) {
              return function() {
                  infoWindow.setContent(infoWindowContent);
                  infoWindow.open(point, tanda);
              }
          })(tanda, infoWindowContent, infoWindow));

        
                      
                  }
                }

            });

          }, function() {
            handleLocationError(true, map.getCenter());
          });
        } else {
          handleLocationError(false, map.getCenter());
          
        }
      }

      function showPlaces() {
          
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -6.973936, lng:  107.629321},
          zoom: 17,
          panControl: false,
      	mapTypeControl: false,
      	streetViewControl: false,
      	mapTypeId: google.maps.MapTypeId.ROADMAP,
      	scrollwheel: false,
          styles:[
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#333333"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#dedede"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f2f2f2"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e9e9e9"
            },
            {
                "lightness": 17
            }
        ]
    }
]
        });

        // Menggunakan fungsi HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            marker = new google.maps.Marker({
              position: pos,
              map: map,
              icon: 'assets/gambar/warungFinder/userLocationWarungFinder.png',
              title: 'Posisi Kamu',
              animation: google.maps.Animation.DROP,
            });

            map.setCenter(pos);
            var user_location = position.coords.latitude+","+position.coords.longitude;
            var url = "tampil.php";
            var jarak = 10;



var infoWindow = new google.maps.InfoWindow(), tanda, i;
    $.ajax({
                url: url,
                data: "position="+encodeURI(user_location)+"&jarak="+jarak,
                dataType: 'json',
                cache: true,
                success: function(msg){
                  for(i=0; i < msg.data.warung.length;i++){
                    var point = new google.maps.LatLng(parseFloat(msg.data.warung[i].latitude),parseFloat(msg.data.warung[i].longitude));
                    var nama = msg.data.warung[i].namaWarung
                    var id = msg.data.warung[i].id
                    var jarak2 = msg.data.warung[i].jarak;
                    var infoWindowContent= 
                        '<div class="info_content">' +
                        '<h3>'  + msg.data.warung[i].namaWarung + '</h3>' +
                            '<p align="center"><a href="page/konsumen/detailWarung.php?idWarung=' + id + '&jarak=' + jarak2 + '" class="link_detail btn btn-primary">Lihat Detail</a>'
                        ;
      
                    if (msg.data.warung[i].kategori == 'laundry'){
                          var markerIcon = {
        url: 'assets/gambar/warungFinder/2.png',
        scaledSize: new google.maps.Size(20, 35),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(30,65),
        labelOrigin:  new google.maps.Point(20,-10),
      };
                          var label={
                       text: msg.data.warung[i].namaWarung,
                          color: "blue",
                          fontWeight: "bold"
                   };
                      }
                      else if (msg.data.warung[i].kategori == 'warung'){
                               var markerIcon = {
        url: 'assets/gambar/warungFinder/1.png',
        scaledSize: new google.maps.Size(20, 35),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(30,65),
        labelOrigin:  new google.maps.Point(20,-10),
                                   
      };
                var label={
                       text: msg.data.warung[i].namaWarung,
                          color: "orange",
                          fontWeight: "bold"
                   };          
                      }
                      else if (msg.data.warung[i].kategori == 'depotAirMinum'){
                               var markerIcon = {
        url: 'assets/gambar/warungFinder/3.png',
        scaledSize: new google.maps.Size(40, 30),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(30,65),
        labelOrigin:  new google.maps.Point(25,-15),
      };
                      var label={
                       text: msg.data.warung[i].namaWarung,
                          color: "blue",
                          fontWeight: "bold"
                   };   }
                      var markerLabel = 'GO!';
                      
                    tanda = new google.maps.Marker({
                        position: point,
                        map: map,
                        url: 'detail.php',
                        icon: markerIcon,
                        animation: google.maps.Animation.DROP,
                        title: msg.data.warung[i].namaWarung,
                       
                        label:label
                        
                    });

                    
        google.maps.event.addListener(tanda, 'click', (function(tanda, infoWindowContent, infoWindow) {
              return function() {
                  infoWindow.setContent(infoWindowContent);
                  infoWindow.open(point, tanda);
              }
          })(tanda, infoWindowContent, infoWindow));

        
                      
                  }
                }

            });

          }, function() {
            handleLocationError(true, map.getCenter());
          });
        } else {
          handleLocationError(false, map.getCenter());
        }
      }
      

      google.maps.event.addDomListener(window, 'load', initMap);