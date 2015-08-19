var ContactUs = function() {

    return {
        //main function to initiate the module
        init: function() {
            var map;
            $(document).ready(function() {
                map = new GMaps({
                    div: '#map',
                    lat: 10.456324,
                    lng: -66.830684,
                });
                var marker = map.addMarker({
                    lat: 10.456324,
                    lng: -66.830684,
                    title: 'Dirección.',
                    infoWindow: {
                        content: "<p>Situado en la <b>Calle Alto Hatillo</b>,</p><p> Urbanización Los Naranjos.<b> Caracas, Venezuela.</b></p>"
                    }
                });
                var map2;
                map2 = new GMaps({
                    div: '#map2',
                    lat: 10.456324,
                    lng: -66.830684,
                });
                var marker2 = map2.addMarker({
                    lat: 10.456324,
                    lng: -66.830684,
                    title: 'Dirección.',
                    infoWindow: {
                        content: "<p><b>Calle Alto Hatillo</b>, Urbanización</p><p> Los Naranjos.<b> Caracas, Venezuela.</b></p>"
                    }
                });
                marker.infoWindow.open(map, marker);
                marker2.infoWindow.open(map2, marker2);
            });
        }
    };

}();