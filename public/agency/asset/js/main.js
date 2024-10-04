$(document).ready(function() {

    $('#load-signin').on('click', function(){
        setTimeout(() => {
            $('#signup-container').animate({left: '-2000px'});
        }, 250);
        $('#signin-container').animate({left: '10', right: 'auto'});
    });

    $('#load-signup').on('click', function(){
        setTimeout(() => {
            $('#signin-container').animate({left: '-2000px'});
        }, 250);
        $('#signup-container').animate({left: '10', right: 'auto'});
    });

    // Toggle Password Input Visibility

    $('.rlf-hd-hide').on('click', function(){
      let targetInput = $(this).parents('.rlf-hd').siblings('.psw_input');
      targetInput.attr('type', 'text');
      $(this).siblings('.rlf-hd-show').removeClass('d-none');
      $(this).addClass('d-none');

    });

    $('.rlf-hd-show').on('click', function(){
      let targetInput = $(this).parents('.rlf-hd').siblings('.psw_input');
      targetInput.attr('type', 'password');
      $(this).siblings('.rlf-hd-hide').removeClass('d-none');
      $(this).addClass('d-none');
    });


        //NAVBAR TOGGLING
        const menuBtn = $('.menu-btn');
        let menuOpen = false;
        menuBtn.click(function() {
        if(!menuOpen){
            menuBtn.addClass('open');
            $('.nav-sm').animate({top: '0px'});
            menuOpen = true;
        }else{
            menuBtn.removeClass('open');
            $('.nav-sm').animate({top: '-2000px'});
            menuOpen = false;
        }
        })
    
        let sideClose = $('.close');
        sideClose.click(function(){
         menuBtn.removeClass('open');
            $('.nav-sm').animate({left: '-300px'});
            menuOpen = false;
        })

  
    
        //STICKY TOP NAVBAR 
        var navHeight = $("nav.navbar").height();

        var stickyNavTop = $("nav.navbar").offset().top;
        var stickyNav = function(){
            var scrollTop = $(window).scrollTop();
            if(scrollTop > stickyNavTop){
              // $("nav.navbar").parents('header').addClass('stiky__pt');
              $("nav.navbar").addClass("sticky");
            }else{
                $("nav.navbar").removeClass("sticky");
                // $("nav.navbar").parents('header').removeClass('stiky__pt');
            }
        };
        $(window).scroll(function(){
            stickyNav();
        });




       var currentYear = new Date().getFullYear();
       $('#year').text(currentYear);


       var pathLength = $('.progress-bar').width();
			var progressLength = $('.progress-bar').find('.progress');
			var offset = 500;
			

			function updateProgress(){
				var scroll = $(window).scrollTop();
				var height = $(document).height() - $(window).height();
				var progress =  (scroll * pathLength / height);
				progressLength.css('width', progress);
			}



			// updateProgress();
			
			$(window).scroll(function(){
				var scroll = $(window).scrollTop();
				var height = $(document).height() - $(window).height();
				var progress =  (scroll * pathLength / height);
				progressLength.css('width', progress);
			});



            // Property card hover effect
            $('.property-card').hover(
               function(){
                $(this).find('.ctn-overlay').animate({left: 0});
               }, 
               function(){
                $(this).find('.ctn-overlay').animate({left: '-1000px'});
               }
            );



    
});