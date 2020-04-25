
am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end
    
    // Create map instance
    var chart = am4core.create("slide1", am4maps.MapChart);
    
    // Set map definition
    chart.geodata = am4geodata_worldLow;
    
    // Set projection
    chart.projection = new am4maps.projections.Miller();
    
    // Create map polygon series
    var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
    
    // Exclude Antartica
    polygonSeries.exclude = ["AQ"];
    
    // Make map load polygon (like country names) data from GeoJSON
    polygonSeries.useGeodata = true;
    
    // Configure series
    var polygonTemplate = polygonSeries.mapPolygons.template;
    polygonTemplate.tooltipText = "{name}";
    polygonTemplate.fill = chart.colors.getIndex(0).lighten(0.1);
    
    // Add image series
    var imageSeries = chart.series.push(new am4maps.MapImageSeries());
    imageSeries.mapImages.template.propertyFields.longitude = "longitude";
    imageSeries.mapImages.template.propertyFields.latitude = "latitude";
    imageSeries.data = [ {
      "title": "New Delhi",
      "latitude": 24.6353,
      "longitude": 79.2250
    }];
    
    // add events to recalculate map position when the map is moved or zoomed
    chart.events.on( "ready", updateCustomMarkers );
    chart.events.on( "mappositionchanged", updateCustomMarkers );
    
    // this function will take current images on the map and create HTML elements for them
    function updateCustomMarkers( event ) {
      
      // go through all of the images
      imageSeries.mapImages.each(function(image) {
        // check if it has corresponding HTML element
        if (!image.dummyData || !image.dummyData.externalElement) {
          // create onex
          image.dummyData = {
            externalElement: createCustomMarker(image)
          };
        }
    
        // reposition the element accoridng to coordinates
        var xy = chart.geoPointToSVG( { longitude: image.longitude, latitude: image.latitude } );
        image.dummyData.externalElement.style.top = xy.y + 'px';
        image.dummyData.externalElement.style.left = xy.x + 'px';
      });
    
    }
    
    // this function creates and returns a new marker element
    function createCustomMarker( image ) {
      
      var chart = image.dataItem.component.chart;
    
      // create holder
      var holder = document.createElement( 'div' );
      holder.className = 'map-marker';
      holder.title = image.dataItem.dataContext.title;
      holder.style.position = 'absolute';
    
      
      // create dot
      var dot = document.createElement( 'div' );
      dot.className = 'dot';
      holder.appendChild( dot );
    
      // create pulse
      var pulse = document.createElement( 'div' );
      pulse.className = 'pulse';
      holder.appendChild( pulse );
    
      // append the marker to the map container
      chart.svgContainer.htmlElement.appendChild( holder );
    
      return holder;
    }
    
    }); // end am4core.ready()