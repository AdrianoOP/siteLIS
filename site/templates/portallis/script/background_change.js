$(document).ready(function(){
	$(window).load(function(){
	$("a img").each(function(){
		var jImage = $(this);
		var divElement = $("<div id=\"thisDiv\" class=\"background_mod\"><p>"+ jImage.attr("alt") +"</p></div>");
		if ((jImage.attr("alt") != "") &&
		    jImage.attr("alt") != null){
		    jImage.parent().append(divElement);		   
		    var pElement = divElement.find("p");
		    pElement.addClass("specialImageNon-Hover");
		    var height = jImage.height();
		    var width = jImage.width();
		    var position = jImage.offset();
		    var posx = position.left;
		    var posy = position.top;
		    var size = parseInt(pElement.css("font-size"));
		    divElement.css("width", width);
		    divElement.css("height", size);
		    divElement.css("left", posx);
		    divElement.css("top", posy);
		    divElement.css("margin-top",(height-3*size)/2);
		    divElement.css("padding-top",0);
		    
		    $(window).resize(function(){
			    var height = jImage.height();
			    var width = jImage.width();
			    var position = jImage.offset();
			    var posx = position.left;
			    var posy = position.top;
			    var size = parseInt(pElement.css("font-size"));
			    divElement.css("width", width);
			    divElement.css("height", size);
			    divElement.css("left", posx);
			    divElement.css("top", posy);
			    divElement.css("margin-top",(height-3*size)/2);
			    divElement.css("padding-top",0);
			});
		    jImage.mouseleave(function(){
			    pElement.removeClass("specialImageHover");
			    pElement.addClass("specialImageNon-Hover");
			    pElement.on("mouseover", function(){
				pElement.addClass("specialImageHover");
				pElement.removeClass("specialImageNon-Hover");
		       		});
			});
		    pElement.mouseleave(function(){
			    pElement.removeClass("specialImageHover");
			    pElement.addClass("specialImageNon-Hover");
			    jImage.on("mouseover", function(){
				pElement.addClass("specialImageHover");
				pElement.removeClass("specialImageNon-Hover");
		       		});
			});
		    pElement.mouseenter(function(){
			    pElement.removeClass("specialImageNon-Hover");
			    pElement.addClass("specialImageHover");
			});
		    jImage.mouseenter(function(){
			    pElement.removeClass("specialImageNon-Hover");
			    pElement.addClass("specialImageHover");
			});
		}
	    });
});
    });