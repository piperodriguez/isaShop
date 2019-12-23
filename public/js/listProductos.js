$(document).ready(function() {
  //lista de productos
	$('#products').pinterest_grid({
	no_columns: 4,
	padding_x: 10,
	padding_y: 10,
	margin_bottom: 50,
	single_column_breakpoint: 700
	});
// Activate Carousel
  $("#myCarousel").carousel();

  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });

  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#myCarousel").carousel("next");
  });
});