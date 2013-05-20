(function ($) {
  function setLogo() {
    if(window.innerWidth <= 640) {
      $('#logo_mapped_image').attr("src","http://www.eri.ucsb.edu/sites/default/files/mobile_banner_futura_blue_final.jpg");
    } else {
      $('#logo_mapped_image').attr("src","http://www.eri.ucsb.edu/sites/default/files/ERI_Banner_Futura_Std_Blue_Final.jpg");
    }
  }
  $(window).resize(setLogo);
  $(document).ready(setLogo);
})(jQuery);
