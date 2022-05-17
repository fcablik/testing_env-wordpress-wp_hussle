$(document).ready(function(){

	$(".loading-text").delay( 2500 ).fadeOut( 500 );
	$(".loading-screen").delay( 3000 ).fadeOut( 1000 );

	if (!sessionStorage.isVisited) {
		sessionStorage.isVisited = 'true'
		$(".loading-text").delay( 2500 ).fadeOut( 500 );
		$(".loading-screen").delay( 3000 ).fadeOut( 1000 );
	  } else {
		$(".loading-text").hide();
		$(".loading-screen").hide();
	  }

});
