jQuery(function ($) {

  $('.tabsNav li').click(function(){
      $('.tabsNav li').removeClass('active');
      $(this).addClass('active');
      $('.tabContent').removeClass('active');

      var activeTab = $(this).find('a').attr('href');
      $(activeTab).addClass('active');
      return false;
  });

  $('.subTabs li').click(function(){
      $('.subTabs li').removeClass('active');
      $(this).addClass('active');
      $('.subContent').removeClass('active');

      var activeTab = $(this).find('a').attr('href');
      $(activeTab).addClass('active');
      return false;
  });


    $('#openMenu').on('click', function() {
        $('.headerContent').toggleClass('active');
    });


    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.pickImg img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".pickImg input").change(function(){
        readURL(this);
    });


});
