//-------------------------//
//------ SCRIPT NAME ------//
//--- Created by RSW --//
//-------------------------//
function attachAnchorLink(linkAnchor) {
	linkAnchor.on('click', function () {
		var link = '#' + $(this).data('link');
		var scroll = $(link).offset().top - 55;

		var body = $("html, body");
		body.stop().animate({scrollTop:scroll}, '700', 'swing');
	});
}

function triggerIfAnchor(anchor, callback) {
	var anchorName = document.location.hash.substring(1);
	if(anchorName.length != null && anchorName == anchor) {
		callback();
	}
}