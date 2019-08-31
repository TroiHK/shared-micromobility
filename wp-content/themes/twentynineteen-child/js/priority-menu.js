//scroll menu
$(function () {
  $(document).scroll(function () {
    var $nav = $(".background-fixed-bar");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
 
 //scroll menu archive
$(function () {
  $(document).scroll(function () {
    var $nav = $(".header-archive");
    $nav.toggleClass('scrolled-archive', $(this).scrollTop() > $nav.height());
  });
});



// progress bar scroll
$(window).scroll(function () {
  var s = $(window).scrollTop(),
        d = $(document).height(),
        c = $(window).height();
        scrollPercent = (s / (d-c)) * 100;
        var position = scrollPercent;

   $("#progressbar").attr('value', position);

});


//retour historique window
function goBack() {
    window.history.back();
}


    // MENU

    $(".icon-menu").click(function() 
    {
        $('nav').toggleClass('active');
        $('body').toggleClass('active');
        $(".icon-search").toggleClass("none");
        $(".logo-site").toggleClass("none");
        $(".icon-menu").toggleClass("active");
        $(".header-single").toggleClass("active");
        $(".background-fixed-bar").toggleClass("active");
        $(".icon-filters").toggleClass("none");
        $(".header-archive").toggleClass("transparent-menu");
    });

    // SEARCH

    $(".icon-search").click(function() 
    {
        $('.search-background').toggleClass('active');
        $('.form-container').toggleClass('active');
        $('body').toggleClass('active');
        $(".search-container").toggleClass("active");
        $(".icon-search").toggleClass("active");
        $(".logo-site").toggleClass("none");
        $(".icon-menu").toggleClass("none");
        $(".header-single").toggleClass("active");
        $(".icon-filters").toggleClass("none");
    });

    $(".search-background").click(function() 
    {
        $('.search-background').toggleClass('active');
        $('.form-container').toggleClass('active');
        $('body').toggleClass('active');
        $(".search-container").toggleClass("active");
        $(".icon-search").toggleClass("active");
        $(".logo-site").toggleClass("none");
        $(".icon-menu").toggleClass("none");
        $(".header-single").toggleClass("active");
        $(".icon-filters").toggleClass("none");
    });


    // FILTERS 

    $(".icon-filters").click(function() 
    {
        $('.background-fixed-bar').toggleClass('active');
        $('body').toggleClass('active');
        $(".icon-filters").toggleClass("active");
        $(".icon-menu").toggleClass("none");
        $(".icon-search").toggleClass("none");
        $(".logo-site").toggleClass("none");
        $(".header-archive").toggleClass("transparent-menu");
    });


    // 

    $(".credits").click(function() 
    {
        $('.container-modal').toggleClass('active');
        $('body').toggleClass('active');
    });

    $(".icon-close-credits").click(function() 
    {
        $('.container-modal').toggleClass('active');
        $('body').toggleClass('active');
    });

    $(".modal-background").click(function() 
    {
        $('.container-modal').toggleClass('active');
        $('body').toggleClass('active');
    });



    $(document).ready(function () {
    $(window).scroll(function () {
        $('.container-icon-search-active').toggleClass("active", ($(window).scrollTop() > 100));
        $('.container-icon-menu-active').toggleClass("active", ($(window).scrollTop() > 100));
     });
});

