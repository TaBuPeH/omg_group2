$(document).ready(function () {
    $("#far-clouds").clouds({
		fps: 50,
        speed: 0.3,
        dir: "left"
    });
    
	$("#near-clouds").clouds({
		fps: 50,
        speed: 0.5,
        dir: "left"
    });
});