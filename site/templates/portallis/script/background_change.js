$(document).ready(function(){
	$("a img").each(function(){
		var jImage = $(this);
		var divElement = $("<div id=\"thisDiv\" class=\"background_mod\"><p>"+ jImage.attr("alt") +"</p></div>");
		var pElement = divElement.find("p");
		
		if ((jImage.attr("alt") != "") &&
			jImage.attr("alt") != null){
			jImage.addClass("grayscale");
			divElement.mouseleave(function(){
				if(divElement.length > 0){
					divElement.each(function(){
						this.remove();
				});
				}
					jImage.removeClass("non_grayscale");
					jImage.addClass("grayscale");
			});
			jImage.mouseenter(function(){
				//adiciona uma div a imagem
				if(divElement.length<2){
					jImage.parent().append(divElement);
					jImage.removeClass("grayscale");
					jImage.addClass("non_grayscale");
					var height = jImage.height();
					var width = jImage.width();
				 	var position = jImage.offset();
					var posx = position.left;
					var posy = position.top;
					divElement.css("width", width);
					divElement.css("height", height);
					divElement.css("left", posx);
					divElement.css("top", posy);
					var size = parseInt(pElement.css("font-size"));
					divElement.css("padding-top",(height-3*size)/2);
				}
			});	
		}
	});
});

