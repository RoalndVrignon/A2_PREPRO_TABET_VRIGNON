var carrousel = {
	nbSlide : 0,
	nbCurrent : 1,
	elemeCurrent : null,
	elem : null,

	init : function(elem){
		this.nbSlide = elem.find("slide").lenght;

		elem.append('<div class="navigation"></div>');
		for(var i=1;i<=this.nbSlide;i++){
			elem.find(".navigation").append("<span>"+i+"</span>");
		}

	}
}




$(function() {
   carousel.init($("#carrousel"));
});