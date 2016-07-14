// Initialize Materialize components

$( document ).ready(function(){

  //get page url
  var page = window.location.href.substr(window.location.href.lastIndexOf("/")+1);

  //Set Navbar active class
  $("#navbar ul li a").each(function(){
       if($(this).attr("href") == page || $(this).attr("href") == '' )
        $(this).parent().addClass("active");
  });

  //Set about_sidenav active class
  $("#about_sidenav a").each(function(){
       if($(this).attr("href") == page || $(this).attr("href") == '' )
        $(this).addClass("active");
  });

  //Drop Down
  $(".dropdown-button").dropdown({hover:true, constrain_width:false, gutter:"10px"});

  // Navbar
  $(".button-collapse").sideNav();
});
