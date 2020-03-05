/* Enabling support for new HTML5 tags for IE6, IE7 and IE8 */
if (navigator.appName == 'Microsoft Internet Explorer') {
  if ((navigator.userAgent.indexOf('MSIE 6.0') >= 0) || (navigator.userAgent.indexOf('MSIE 7.0') >= 0) || (navigator.userAgent.indexOf('MSIE 8.0') >= 0)) {
    document.createElement('header')
    document.createElement('nav')
    document.createElement('section')
    document.createElement('aside')
    document.createElement('footer')
    document.createElement('article')
    document.createElement('hgroup')
    document.createElement('figure')
    document.createElement('figcaption')
    document.createElement('video')
  }
}
/* Enabling support for new HTML5 tags for IE6, IE7 and IE8 */


;
(function($) {
  $(function() {

    // Begin input common focus and blur for value.
    /*$('input:text,input:password,textarea')
      .focus(function() {
        if (this.value == this.defaultValue) {
          this.value = ''
        }
      })
      .blur(function() {
        if (!this.value) {
          this.value = this.defaultValue;
        }
      }) */
      // Ends input common focus and blur for value.

    if (window.PIE) {
      $('.gradient, .rounded, .shadow').each(function() {
        PIE.attach(this);
      });
    }

    //For iebelow7,9//
    if (navigator.appName == 'Microsoft Internet Explorer') {
      if ((navigator.userAgent.indexOf('MSIE 7.0') >= 0) || (navigator.userAgent.indexOf('MSIE 8.0') >= 0)) {
        $('body').addClass('iebelow9')
      }
    }


    $('#loan-purpose-details div.row').on('click', function() {
      $(this).addClass('focus').siblings().removeClass('focus');
    });


    $(document).on('click', 'div.row', function() {
      $('div.row').removeClass('selected');
      $(this).addClass('selected');
    });

	
	$(document).on('click','.Users_has_current',function(){
		var value = $(this).val();
		
		if(value == 1){
			$('.is_current_balance').show();
		}
		else{ 
			$('#Users_balance_from_what_company').val('');
			$('#Users_balance_outstanding').val('');
			$('.is_current_balance').hide();
		}
	});
	
	$(document).on('click','.sole_owner',function(){
		var value = $(this).val();
		
		if(value == 0){
			$('.is_sole').show();
		}
		else{ 
			$('.is_sole').hide();
		}
	});
	
	$(document).on('click','.federal_liens',function(){
		var value = $(this).val();
		
		if(value == 1){
			$('.show_federal').show();
		}
		else{ 
			$('.show_federal').hide();
		}
	});
	
	$(document).on('change','#UsersFinancials_cash_advance',function(){
		var value = $(this).val();
		
		if(value == 'Yes'){
			$('.cash_advance').show();
		}
		else{ 
			$('#UsersFinancials_cash_advance_with').val('');
			$('#UsersFinancials_balance').val('');
			$('.cash_advance').hide();
			
		}
	});
	

    $('input.cbtn').click(function() {
      //$('div.contactusp').toggle("slide");
      $('div.contactusp').show();
    });
    $('div.cdnone').click(function() {
      $('div.contactusp').hide();
    });

    $('div.wout').click(function() {
      $('div.contactusp').toggle("slide");
    });
	
	$('div.login-link a').click(function() {
      $('div.login-popup').show();
    });
	
	$('div.modal-window .cdnone ').click(function() {
		$('div.login-popup input').val("");
      $('div.login-popup').hide();
    });
	
	 
	$('div.modal-forgot-password .cdnone').click(function() {
		$('div.modal-forgot-password input').val("");
      $('div.modal-forgot-password').hide();
    });
	
	
	$('a#forgot-password').click(function() {
		$('div.login-popup').fadeOut();
		$('div.modal-forgot-password').show();
	});
		
	$('a.loginopan').click(function() {
		
		$('div.modal-forgot-password').fadeOut();
		$('div.login-popup').show();
	});	

    $(".ppb").on({
      mouseover: function() {
        $(".pp").stop().show(400);
      },

      mouseout: function() {
        $(".pp").stop().hide(400);
      }
    })


    $(".ppb2").on({
      mouseover: function() {
        $(".pp2").stop().show(400);
      },

      mouseout: function() {
        $(".pp2").stop().hide(400);
      }
    })

    $(".ppb3").on({
      mouseover: function() {
        $(".pp3").stop().show(400);
      },

      mouseout: function() {
        $(".pp3").stop().hide(400);
      }
    })


    $('a.ti').bind('click', function() {
      $('div.action-row button').addClass('allow-click').show();
    });


    $('div.next-to-content a.ti').click(function() {
      $('div#loan-purpose-details').show("slide");
    });

    $('a.lasti').click(function() {
      $('div#loan-purpose-details').hide("slide");
    });


    $('#tab-wrapper a').click(function() {
      $('textarea.lastitem').hide("slide");
    });

    $('#tab-wrapper a.lasti').click(function() {
      $('textarea.lastitem').show("slide");
    });




    $('#tab-body div.section').hide();

    $('#tab-wrapper a').click(function() {
		var currobj = this;
		if($(currobj).hasClass('selected-link')){
			$(currobj).parent().removeClass('selected');
			$(currobj).removeClass('selected-link');
		}else{
			  //$('#tab-wrapper div.purpose-option').removeClass('selected');
			  $(currobj).parent().addClass('selected');
			  $(currobj).addClass('selected-link');
		}
	  var fundingpurpose = '';
	  $('#tab-wrapper div.selected').each(function(){
		 fundingpurpose += $.trim($(this).find('span').html());
		 fundingpurpose += ',';
	  })
		console.log($.trim(fundingpurpose));
	$('#Users_funding_purpose').val($.trim(fundingpurpose));
      var activeTab = $(currobj).attr('href');
      $('#tab-body div.section:visible').hide();
      $(activeTab).show();
      return false;
    });



$(".autotab").on('input',function () { console.log($(this).val().length);
console.log($(this).attr('maxlength'));
    if($(this).val().length == $(this).attr('maxlength')) {
        $(this).next().next().focus();
    }
});

 	


  }); //End Document Ready



  //Quad, Cubic, Quart, Quint, Sine, Expo, Circ, Elastic, Back, Bounce
  jQuery.easing["jswing"] = jQuery.easing["swing"];
  jQuery.extend(jQuery.easing, {
    def: "easeOutQuad",
    swing: function(a, b, c, d, e) {
      return jQuery.easing[jQuery.easing.def](a, b, c, d, e)
    },
    easeInQuad: function(a, b, c, d, e) {
      return d * (b /= e) * b + c
    },
    easeOutQuad: function(a, b, c, d, e) {
      return -d * (b /= e) * (b - 2) + c
    },
    easeInOutQuad: function(a, b, c, d, e) {
      if ((b /= e / 2) < 1) return d / 2 * b * b + c;
      return -d / 2 * (--b * (b - 2) - 1) + c
    },
    easeInCubic: function(a, b, c, d, e) {
      return d * (b /= e) * b * b + c
    },
    easeOutCubic: function(a, b, c, d, e) {
      return d * ((b = b / e - 1) * b * b + 1) + c
    },
    easeInOutCubic: function(a, b, c, d, e) {
      if ((b /= e / 2) < 1) return d / 2 * b * b * b + c;
      return d / 2 * ((b -= 2) * b * b + 2) + c
    },
    easeInQuart: function(a, b, c, d, e) {
      return d * (b /= e) * b * b * b + c
    },
    easeOutQuart: function(a, b, c, d, e) {
      return -d * ((b = b / e - 1) * b * b * b - 1) + c
    },
    easeInOutQuart: function(a, b, c, d, e) {
      if ((b /= e / 2) < 1) return d / 2 * b * b * b * b + c;
      return -d / 2 * ((b -= 2) * b * b * b - 2) + c
    },
    easeInQuint: function(a, b, c, d, e) {
      return d * (b /= e) * b * b * b * b + c
    },
    easeOutQuint: function(a, b, c, d, e) {
      return d * ((b = b / e - 1) * b * b * b * b + 1) + c
    },
    easeInOutQuint: function(a, b, c, d, e) {
      if ((b /= e / 2) < 1) return d / 2 * b * b * b * b * b + c;
      return d / 2 * ((b -= 2) * b * b * b * b + 2) + c
    },
    easeInSine: function(a, b, c, d, e) {
      return -d * Math.cos(b / e * (Math.PI / 2)) + d + c
    },
    easeOutSine: function(a, b, c, d, e) {
      return d * Math.sin(b / e * (Math.PI / 2)) + c
    },
    easeInOutSine: function(a, b, c, d, e) {
      return -d / 2 * (Math.cos(Math.PI * b / e) - 1) + c
    },
    easeInExpo: function(a, b, c, d, e) {
      return b == 0 ? c : d * Math.pow(2, 10 * (b / e - 1)) + c
    },
    easeOutExpo: function(a, b, c, d, e) {
      return b == e ? c + d : d * (-Math.pow(2, -10 * b / e) + 1) + c
    },
    easeInOutExpo: function(a, b, c, d, e) {
      if (b == 0) return c;
      if (b == e) return c + d;
      if ((b /= e / 2) < 1) return d / 2 * Math.pow(2, 10 * (b - 1)) + c;
      return d / 2 * (-Math.pow(2, -10 * --b) + 2) + c
    },
    easeInCirc: function(a, b, c, d, e) {
      return -d * (Math.sqrt(1 - (b /= e) * b) - 1) + c
    },
    easeOutCirc: function(a, b, c, d, e) {
      return d * Math.sqrt(1 - (b = b / e - 1) * b) + c
    },
    easeInOutCirc: function(a, b, c, d, e) {
      if ((b /= e / 2) < 1) return -d / 2 * (Math.sqrt(1 - b * b) - 1) + c;
      return d / 2 * (Math.sqrt(1 - (b -= 2) * b) + 1) + c
    },
    easeInElastic: function(a, b, c, d, e) {
      var f = 1.70158;
      var g = 0;
      var h = d;
      if (b == 0) return c;
      if ((b /= e) == 1) return c + d;
      if (!g) g = e * .3;
      if (h < Math.abs(d)) {
        h = d;
        var f = g / 4
      } else var f = g / (2 * Math.PI) * Math.asin(d / h);
      return -(h * Math.pow(2, 10 * (b -= 1)) * Math.sin((b * e - f) * 2 * Math.PI / g)) + c
    },
    easeOutElastic: function(a, b, c, d, e) {
      var f = 1.70158;
      var g = 0;
      var h = d;
      if (b == 0) return c;
      if ((b /= e) == 1) return c + d;
      if (!g) g = e * .3;
      if (h < Math.abs(d)) {
        h = d;
        var f = g / 4
      } else var f = g / (2 * Math.PI) * Math.asin(d / h);
      return h * Math.pow(2, -10 * b) * Math.sin((b * e - f) * 2 * Math.PI / g) + d + c
    },
    easeInOutElastic: function(a, b, c, d, e) {
      var f = 1.70158;
      var g = 0;
      var h = d;
      if (b == 0) return c;
      if ((b /= e / 2) == 2) return c + d;
      if (!g) g = e * .3 * 1.5;
      if (h < Math.abs(d)) {
        h = d;
        var f = g / 4
      } else var f = g / (2 * Math.PI) * Math.asin(d / h);
      if (b < 1) return -.5 * h * Math.pow(2, 10 * (b -= 1)) * Math.sin((b * e - f) * 2 * Math.PI / g) + c;
      return h * Math.pow(2, -10 * (b -= 1)) * Math.sin((b * e - f) * 2 * Math.PI / g) * .5 + d + c
    },
    easeInBack: function(a, b, c, d, e, f) {
      if (f == undefined) f = 1.70158;
      return d * (b /= e) * b * ((f + 1) * b - f) + c
    },
    easeOutBack: function(a, b, c, d, e, f) {
      if (f == undefined) f = 1.70158;
      return d * ((b = b / e - 1) * b * ((f + 1) * b + f) + 1) + c
    },
    easeInOutBack: function(a, b, c, d, e, f) {
      if (f == undefined) f = 1.70158;
      if ((b /= e / 2) < 1) return d / 2 * b * b * (((f *= 1.525) + 1) * b - f) + c;
      return d / 2 * ((b -= 2) * b * (((f *= 1.525) + 1) * b + f) + 2) + c
    },
    easeInBounce: function(a, b, c, d, e) {
      return d - jQuery.easing.easeOutBounce(a, e - b, 0, d, e) + c
    },
    easeOutBounce: function(a, b, c, d, e) {
      if ((b /= e) < 1 / 2.75) {
        return d * 7.5625 * b * b + c
      } else if (b < 2 / 2.75) {
        return d * (7.5625 * (b -= 1.5 / 2.75) * b + .75) + c
      } else if (b < 2.5 / 2.75) {
        return d * (7.5625 * (b -= 2.25 / 2.75) * b + .9375) + c
      } else {
        return d * (7.5625 * (b -= 2.625 / 2.75) * b + .984375) + c
      }
    },
    easeInOutBounce: function(a, b, c, d, e) {
      if (b < e / 2) return jQuery.easing.easeInBounce(a, b * 2, 0, d, e) * .5 + c;
      return jQuery.easing.easeOutBounce(a, b * 2 - e, 0, d, e) * .5 + d * .5 + c
    }
  })

})(jQuery)