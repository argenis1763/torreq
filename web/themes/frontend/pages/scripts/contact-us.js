var ContactUs = function() {

    return {
        //main function to initiate the module
        init: function() {
            var map;
            var map2;
            $(document).ready(function() {
                map = new GMaps({
                    div: '#map',
                    lat: 10.456324,
                    lng: -66.830684
                });
                var marker = map.addMarker({
                    lat: 10.456324,
                    lng: -66.830684,
                    title: 'Torre Q',
                    infoWindow: {
                        content: "<p>Situado en la <b>Calle Alto Hatillo</b>,</p><p> Urbanización Los Naranjos.<b> Caracas, Venezuela.</b></p>"
                    }
                });
                
                map2 = new GMaps({
                    div: '#map2',
                    lat: 10.456324,
                    lng: -66.830684
                });
                var marker2 = map2.addMarker({
                    lat: 10.456324,
                    lng: -66.830684,
                    title: 'Torre Q',
                    infoWindow: {
                        content: "<div style='font-family: Generica, serif;'><p><b>Calle Alto Hatillo</b>, Urbanización</p><p> Los Naranjos.<b> Caracas, Venezuela.</b></p></div>"
                    }
                });
//                marker.open(map, marker);
                marker2.infoWindow.open(map2, marker2);
            });
        }
    };

}();