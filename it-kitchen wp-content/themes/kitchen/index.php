<?php get_header('main'); ?>

    <!--  content -->
    <div class="content_main">
        <div class="container">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="container">
                    <?php the_content(); ?>

                </div>
            <?php endwhile; ?>
                <!-- post navigation -->
            <?php else: ?>
                <!-- no posts found -->
            <?php endif; ?>

        </div>
    </div>
    <div class="map_header">
        <div>
            Контакты:
            <address>Москва, ул. Свободы д. 35 стр. 43</address>
            Телефоны: <a href="tel:+74957970130">+7 (495) 797-01-30</a>
        </div>

    </div>
    <div id="map-canvas" class="map_wrap">
    </div>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        var map;
        var MY_MAPTYPE_ID = 'custom_style';
        function initialize() {
            var featureOpts = [
                {
                    featureType: 'water',
                    elementType: 'all',
                    stylers: [
                        {color: '#d9ffae'}
                    ]
                },
                {
                    featureType: 'landscape.man_made',
                    elementType: 'all',
                    stylers: [
                        {hue: '#e1e8d9'}
                    ]
                },
                {
                    featureType: 'poi',
                    elementType: 'all',
                    stylers: [
                        {hue: '#c1dca3'}
                    ]
                },
                {
                    featureType: 'transit',
                    elementType: 'all',
                    stylers: [
                        {hue: '#7de22a'}
                    ]
                }
            ];


            var mapOptions = {
                zoom: 16,
                mapTypeControl: false,
                scrollwheel: false,
                streetViewControl: false,
                center: new google.maps.LatLng(55.8359949,37.4516801),
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
                },
                mapTypeId: MY_MAPTYPE_ID
            };

            map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);

            var styledMapOptions = {
                name: 'Custom Style'
            };

            var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

            map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

            var image = 'http://psd2html.hol.es/kitchen/wp-content/themes/kitchen/img/marker.png';
            var myLatLng = new google.maps.LatLng(55.838109,37.451716);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image
            });



        }
        google.maps.event.addDomListener(window, 'load', initialize);


    </script>
    <!-- END content -->

<?php get_footer(); ?>