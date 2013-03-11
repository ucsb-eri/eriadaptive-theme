(function ($) {
	function researchFix()
	{
		var ww = $(document).width();
		if(ww >= 510)
		{
			var h = $('#research_image_field').height();
			var w = $('#research_image_field').width();
			var dw = $('#block-system-main').width();
			var lh = $('#research_link_field').height();
			var ph = $('#research_people_field').height();
			$('#research_about_field').css('min-height', h+lh+ph+20);
			$('#research_about_field').width(dw-20-w);
			$('#research_link_field').width(w);
			$('#research_people_field').width(w);
		}
		else
		{
			$('#research_about_field').css('min-height', '100%');
			$('#research_about_field').width('100%');
			$('#research_link_field').width('100%');
			$('#research_people_field').width('100%');
		}
	}
	$(window).load(researchFix);
	$(window).resize(researchFix);
})(jQuery);
