if(document.getElementById('branches')) {

    jQuery(function ($) {
        var icons = [
            'assets/img/marker.png',
        ]
        var iconsLength = icons.length;
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: new google.maps.LatLng('24.713119', '46.675294'),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            streetViewControl: false,
            scrollwheel: false,
            panControl: false,
            styles: [{
                stylers: [{
                    saturation: -100
                }]
            }],
            zoomControlOptions: {
                position: google.maps.ControlPosition.LEFT_BOTTOM
            }
        });
        var markers = new Array();
        var iconCounter = 0;
        var infowindow = new google.maps.InfoWindow();
        $('.lisgroupitem').each(function () {
            var $this = $(this);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng($this.data('lat'), $this.data('lng')),
                map: map,
                icon: icons[iconCounter]
            });
            markers.push(marker);
            var latlng = new google.maps.LatLng($this.data('lat'), $this.data('lng'));
            $this.click(function () {
                marker.setPosition(latlng);
                map.setCenter(latlng);
                infowindow.setContent($this.data('name'));
                infowindow.open(map, marker);
            });
            google.maps.event.addListener(marker, 'click', (function (marker) {
                return function () {
                    infowindow.setContent($this.data('name'));
                    infowindow.open(map, marker);
                }
            })(marker));
            iconCounter++;
            if (iconCounter >= iconsLength) {
                iconCounter = 0;
            }
        });
    });
}
