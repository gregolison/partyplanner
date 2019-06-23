$(function() {
  $('#encolheMenu').on('click', function(){
	  /*$('#sidebar').css('width', 'auto');
	  $('#sidebar').css('transition', 'width 0.2s');
	  $('#sidebar .sidebar-header').css('height', 'auto');
	  $('#sidebar .sidebar-header').css('background', 'none');
	  $('#sidebar .header-photo').css('width', '40px');
	  $('#sidebar .header-photo').css('height', '40px');
	  $('#sidebar .header-nome').hide();
	  $('#sidebar .list-unstyled > p').hide();
	  $('#sidebar .list-unstyled li').css('textAlign', 'center');
	  $('#sidebar .list-unstyled li').css('padding', '15px 25px 15px 25px');
	  $('#sidebar .list-unstyled li span').hide();
	  $('#sidebar .list-unstyled li i').css('fontSize', '1.3em');
	  $('#sidebar .list-unstyled li i').css('margin-right', '0px');*/
	  $('#sidebar').addClass('minimized');
	  $( "#sidebar" ).animate({
		width: "83px"
	  }, 50);
	  $('#encolheMenu').hide();
	  $('#expandeMenu').show();
  });
  $('#expandeMenu').on('click', function(){
	  /*$('#sidebar').css('width', '250px');
	  $('#sidebar').css('transition', 'width 0.2s');
	  $('#sidebar .sidebar-header').css('height', '120px');
	  $('#sidebar .header-photo').css('width', '74px');
	  $('#sidebar .header-photo').css('height', '74px');
	  $('#sidebar .header-nome').show();
	  $('#sidebar .list-unstyled > p').show();
	  $('#sidebar .list-unstyled li').css('textAlign', 'left');
	  $('#sidebar .list-unstyled li').css('padding', '15px 30px 15px 35px');
	  $('#sidebar .list-unstyled li').css('transition', 'all 0.2s');
	  $('#sidebar .list-unstyled li span').show();
	  $('#sidebar .list-unstyled li i').css('fontSize', '1em');
	  $('#sidebar .list-unstyled li i').css('margin-right', '13px');
	  $('#sidebar .list-unstyled li i').css('transition', 'all 0.2s');*/
	  $('#sidebar').removeClass('minimized');
	  $( "#sidebar" ).animate({
		width: "250px"
	  }, 50);
	  $('#expandeMenu').hide();
	  $('#encolheMenu').show();
	});
});