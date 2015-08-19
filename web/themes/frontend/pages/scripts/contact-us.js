var ContactUs = function () {

    return {
        //main function to initiate the module
        init: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
	            lat: 10.456324,
				lng: -66.830684,
			  });
			   var marker = map.addMarker({
		            lat:  10.456324, 
					lng: -66.830684,
		            title: 'Dirección.',
		            infoWindow: {
		                content: "<p>Situado en la <b>Calle Alto Hatillo</b>,</p><p> Urbanización Los Naranjos.<b> Caracas, Venezuela.</b></p>"
		            }
		        });

			   marker.infoWindow.open(map, marker);
			});
        }
    };

}();