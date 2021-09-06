//-------------------------//
//------ SCRIPT NAME ------//
//--- Created by RSW --//
//-------------------------//
var mapPlots;
var getMapInfos = function(plots) {
	mapPlots = plots;
};

jQuery('document').ready(function ($) {

	//----------------//
	//--- Variables --//
	//----------------//


	//----------------//
	//--- Functions --//
	//----------------//


	//----------------//
	//--- Listeners --//
	//----------------//
	var a1;
	var b1;
	var a2;
	var b2;

	console.log(mapPlots);
	function getCoordsY() {
		var x1 = 180 - 48.856;
		var y1 = 3048.856;

		var x2 = 180 - 44.837;
		var y2 = 1984.837;

		a1 = (y1 - y2) / (x1 - x2);
		b1 = y2 - (x2 * a1);
	console.log(a1, b1);

	}
	function getCoordsX() {
		var x1 = 2.352;
		var y1 = 1252.352;

		var x2 = -0.5791;
		var y2 = 3230.579;

		a2 = (y1 - y2) / (x1 - x2);
		b2 = y2 - (x2 * a2);
	console.log(a2, b2);


	}
	getCoordsX();
	getCoordsY();
	console.log(43.7101728 * a1 + b1);
	console.log(7.261953199999994 * a2 + b2);


	// console.log(a, b);
	//---------------------//
	//--- Initialization --//
	//---------------------//
	var plots = '{';

	$.each(mapPlots, function(index, value) {
		if(plots != '{') {
			plots = plots + ', ' + JSON.stringify(value).slice(1, -1);
		} else {
			plots = plots + JSON.stringify(value).slice(1, -1);
		}
	});
	plots = plots + '}';

	$(".mapcontainer").mapael({
		map: {
			name: "france_regions",
			defaultArea: {
				attrs: {
					fill: "#ffffff",
					stroke: "#1D1C1B",
					"stroke-width": 15,
					"stroke-linejoin": "round"
				},
				attrsHover: {
					fill: "#FDE17F"
				}
			}
		},
		areas: {
			"FR-C": {
				attrs: {
					fill: "#FDE17F"
				}
			}
		},
		plots: JSON.parse(plots),
		// plots: {
		// 	'paris': {
		// 		latitude: 2200.6815198,
		// 		longitude: 3500.281013,
		// 		// tooltip: {content: "Le Pestrin"},
		// 		size: 120,
		// 		attrs: {
		// 			stroke: "#1D1C1B",
		// 			"stroke-width": 15,
		// 			fill: "transparent"
		// 			// fill: "#FFDB00"
		// 			// fill: "url('../assets/maps/marker2.png')"
		// 		},
		// 		attrsHover: {
		// 			transform: "s1.5",
		// 			"stroke-width": 15
		// 		}
		// 	}
		// }

	});
});
