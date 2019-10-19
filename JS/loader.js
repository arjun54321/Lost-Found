// start loader coding
window.onload=function(){
	"use strict";
	$(document).ready(
		function(){
			$(".loader-icon").fadeOut(1000,function(){
				$(".slide-left,.slide-right").animate({"width":"0%"},1000,function(){
					$(".loader-con").fadeOut();
				});
			});
		}
	);
}
// end loader coding

// start popup coding
$(document).ready(
	function(){
		$(".a1").click(function(){
			$("#modal").animate({"margin-top":"100px"},1000);
			$("#blur").fadeIn(1000);
			$("#blur").click(
				function(){
					$("#modal").animate({"marginTop":"-600px"},500);
					$("#blur").fadeOut(500);
				}
			);
		});
	}
);
// end popup coding	

