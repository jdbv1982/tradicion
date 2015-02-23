$(document).ready(function() {

	//var path = 'http://192.168.0.11/webtradicionlocal/public';
	//var path = 'http://localhost/web/public';
	var path = 'http://tradicionchagoya.com';

	var url = window.location.pathname;
	var segmentos = url.split("/");
	var seccion = segmentos[segmentos.length -1];

	if(seccion == 'inicio' || seccion == 'home'){
		sugerir(path, seccion);
	}

	getHistoria('gethistoria', 1, path, seccion );
	$(document).on('click','.menuhistoria', function(e){
		getHistoria('gethistoria', $(this).attr('valor'), seccion );
	});

	$(document).on('mouseover','.menu-arbol-historia', function(e){
		getHistoria('gethistoria', $(this).attr('valor'), path, seccion);
	});


	getProceso('getproceso',1, path, seccion);
	$(document).on('click', '.Proceso-item-menu', function(e){
		getProceso('getproceso',$(this).attr('valor'), path, seccion);
	});


	/*menu productos*/

	$(document).on('mouseover', '#vermenuproductos', function(e){
		e.preventDefault();
		$("#submenu").slideDown();
	});

	$(document).on('mouseleave', '#submenu', function(e){
		e.preventDefault();
		$("#submenu").slideUp();
	});

//phone

$(document).on('click','.btn-gen-phone', function(e){
	e.preventDefault();
	getHistoria('gethistoria', $(this).attr('valor'), path, seccion);
});


/*animaciones*/
rotate ('#mod-proceso-maguey1');
rotate ('#mod-proceso-maguey2');
rotate ('#mod-proceso-maguey3');

jQuery("#mod-proceso-humo").dynamiccloudeffect ({demo:"demo3"});

jQuery('#mod-proceso-fuego').fire({
		maxPow:0,
		speed:20,
		fireTransparency:35,
		globalTransparency:10,
		minPow:0,
		gravity:5,
		fadingFlameSpeed:3,
		yOffset:0,
		flameHeight:1,
		maxPowZone:"center",
		flameWidth:3
	});


});

function getProceso(url, id, path, seccion){
	$.ajax({
		type: "POST",
		dataType: "json",
		url: url,
		data: {id: id, seccion:seccion},
		success: function(data){
			$("#proceso-modal-contenido").hide();
			$("#proceso-img").hide();

			 $("#proceso-img >img").attr("src", path + data['urlimage']);
			 $("#proceso-modal-titulo").html(data['titulo']);
			 $("#proceso-modal-texto").html(data['contenido']);

			$("#proceso-modal-contenido").slideDown(500);
			$("#proceso-img").slideDown(500);

		}

	});

}


function getHistoria(url, id, path, idioma){
	$(".Historia-img").html("<img src='http://preloaders.net/preloaders/287/Filling%20broken%20ring.gif'> Espere un momento...");

	$.ajax({
		type: "POST",
		dataType: "json",
		url: url,
		data: {id: id, idioma: idioma},
		success: function(data){
			$("#titulo").html(data['titulo']);
			$("#Historia-contenido").html(data['contenido']);
			 $(".Historia-img").hide();

			if(id > 1 && id < 6){
			 	$(".Historia-img").show();
			 	$("#quintag").hide();
			}

			$(".Historia-img").html('<img src="" width="100%" height="152px">');
			$(".Historia-img >img").attr("src", path + data['img1']);

			if(id == 6){
				$("#quintag >img").attr("src", path + data['img1']);
				$("#quintag").show();
			}
		}

	});

}

function printContent(ele, valor){
	if(valor == ""){
		ele.html("");
	}else{
		ele.html(valor);
	}
}

function validaCampo(ele, valor, clasecss){
	if(valor == ""){
		ele.removeClass(clasecss);
	}else{
		ele.addClass(clasecss);
	}
}


function rotate (elementID) {

    var rota = jQuery(elementID),
        degree = 0,
        timer;

    function spin() {
        rota.css({ transform: 'rotate(' + degree + 'deg)'});
		plusOrMinus = Math.random() < 0.5 ? -1 : 1;
		randAngle = Math.floor(Math.random()*70+50) * plusOrMinus;
		randDelay = Math.floor(Math.random()*1000+2000);
        timer = setTimeout(function() {
            degree += randAngle;
            spin(); // loop it
        },randDelay);
    }

    spin();    // run it!

}

function sugerir(path, idioma){
	$.ajax({
		type: "POST",
		dataType: "json",
		url: "getSugerencia",
		data: {idioma: idioma},
		success: function(data){
			$("#producto-link").attr("href", path + data['url']);
			$("#producto-link >img").attr("src", path + data['urlimage']);
			$("#sugerencia-nombre").html(data['titulo']);
		}

	});
}
