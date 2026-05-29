jQuery(document).ready(function(){

"use strict";

$('.people-carousel').carouFredSel({
		responsive:true,
		width:'100%',
		circular:true,
		prev:'#prev',
		next:'#next',
		scroll:{
			items:1,
			duration:500,
			pauseOnHover:true
		},
		auto:true,
		items:{
			visible:{
				min:1,
				max:1
			},
			height:"variable"
		},
		pagination:{
			container:".people-navigator",
			anchorBuilder:false
		}
	});
    
    $('.testimonials-carousel').carouFredSel({
		responsive:true,
		width:'100%',
		circular:true,
		prev:'#prev',
		next:'#next',
		scroll:{
			items:1,
			duration:500,
			pauseOnHover:true
		},
		auto:true,
		items:{
			visible:{
				min:1,
				max:1
			},
			height:"variable"
		},
		pagination:{
			container:".testipager",
			anchorBuilder:false
		}
	});
    
    /* end pagination*/
     var map = new GMaps({
      div: '.map',
      lat: 28.206371,
      lng: 78.379145,
      zoom:17
     });
    
    map.addMarker({
      lat:28.206371,
      lng: 78.376145,
      title: 'Lima',
         infoWindow: {
          content: '<p>Our School</p>'
        }
    });
    
});

   