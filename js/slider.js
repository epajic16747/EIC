
var brojac = 1;
var brojSlika = 5;

function Carousel(x){
    var sliderImages = document.getElementById('slide');
    brojac = brojac + x;
	if(brojac == brojSlika + 1){
		brojac = 1;
	}
	if(brojac == 0 ){
		brojac = brojSlika;
	}
    sliderImages.src="images/carousel/img" + brojac +".jpg";
}