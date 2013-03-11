(function ($) {
	$(document).ready(function() {
		$("#quicktabs-tab-people_by_research_area-1, #quicktabs-tab-r_qt-2").mouseover(function(){
			$("#quicktabs-tab-people_by_research_area-1, #quicktabs-tab-r_qt-2").html("Earth Evolution");
		});
		$("#quicktabs-tab-people_by_research_area-2, #quicktabs-tab-r_qt-3").mouseover(function(){
			$("#quicktabs-tab-people_by_research_area-2, #quicktabs-tab-r_qt-3").html("Earth System Science");
		});
		$("#quicktabs-tab-people_by_research_area-3, #quicktabs-tab-r_qt-4").mouseover(function(){
			$("#quicktabs-tab-people_by_research_area-3, #quicktabs-tab-r_qt-4").html("Environmental Information Management");
		});
		$("#quicktabs-tab-people_by_research_area-4, #quicktabs-tab-r_qt-5").mouseover(function(){
			$("#quicktabs-tab-people_by_research_area-4, #quicktabs-tab-r_qt-5").html("Human Impacts");
		});
		$("#quicktabs-tab-people_by_research_area-5, #quicktabs-tab-r_qt-6").mouseover(function(){
			$("#quicktabs-tab-people_by_research_area-5, #quicktabs-tab-r_qt-6").html("Natural Hazards");
		});
		
		$("#quicktabs-tab-people_by_research_area-1, #quicktabs-tab-r_qt-2").mouseout(function(){
			$("#quicktabs-tab-people_by_research_area-1, #quicktabs-tab-r_qt-2").html("EE");
		});
		$("#quicktabs-tab-people_by_research_area-2, #quicktabs-tab-r_qt-3").mouseout(function(){
			$("#quicktabs-tab-people_by_research_area-2, #quicktabs-tab-r_qt-3").html("ESS");
		});
		$("#quicktabs-tab-people_by_research_area-3, #quicktabs-tab-r_qt-4").mouseout(function(){
			$("#quicktabs-tab-people_by_research_area-3, #quicktabs-tab-r_qt-4").html("CS");
		});
		$("#quicktabs-tab-people_by_research_area-4, #quicktabs-tab-r_qt-5").mouseout(function(){
			$("#quicktabs-tab-people_by_research_area-4, #quicktabs-tab-r_qt-5").html("HI");
		});
		$("#quicktabs-tab-people_by_research_area-5, #quicktabs-tab-r_qt-6").mouseout(function(){
			$("#quicktabs-tab-people_by_research_area-5, #quicktabs-tab-r_qt-6").html("NH");
		});
	});
})(jQuery);