$( document ).ready(function() {
function savecoupon(set_name,customerid){

  var data = 'setname='+set_name+'&customerid='+customerid;
    $.ajax({
        method: "POST",
        url: "savecoupon.php",
        data: data
      })
      .done(function( msg ) {
        // alert("Save Coupon: "+msg);

      });

    gencode(set_name,customerid);
    // $(barcode).show();
}

function gencode(set_name,customerid){
    var imgbarcode =  '<img class="imgbarcode" alt="testing" src="barcode.php?print=true&size=40&sizefactor=1&text='+set_name+customerid+'" />';
    // get last char of string
    var last_char_of_set_name =  set_name.slice(-1);
    var result = 'res_'+last_char_of_set_name;
   document.getElementById(result).innerHTML = imgbarcode;
   //    if (res_text.search('/')) {
   //      var ar_text = res_text.split('/');
   //      var outlet = ar_text[0];
   //      var set = ar_text[1];
   //      var divid = 'res_'+set;
   //    };

   // var imgbarcode =  '<img alt="testing" src="barcode.php?print=true&size=100&text='+outlet+set+'" />';
   // document.getElementById(divid).innerHTML = imgbarcode;
}

function isDatePicker(dpk){
    $( dpk ).datepicker({
        dateFormat: 'dd/mm/yy',
        yearRange: "1930:",
        changeYear: true,
        changeMonth: true,
        monthNamesShort: ["1","2","3","4","5","6","7","8","9","10","11","12"]
    });
}

///////////////////////////////////////////////////////

// Popup initialization
$('.test-popup-link').magnificPopup({
  type: 'image'
  // other options
});

// toggle condition text
$("#condition_text_detail").hide();
  $("#toggle_condition_text").click(function(event) {
    $("#condition_text_detail").toggle();
      $("#toggle_condition_text").html('แสดงข้อมูลน้อยลง');

  });

	isDatePicker($('#birthdate'));
  $('#login_email').focus();
	// $('#register_submit_btn').click(function(event) {
	// 	register_member();
	// });

//clicked coupon set A 
  $('.seta_btn').click(function(event) {
  	var set_name = 'SKGLA';
  	var customerid = String($('#customerid').val());
  	
	  savecoupon(set_name,customerid);
    
	//esc key press
	document.onkeydown = function(evt) {
    	evt = evt || window.event;
    	if (evt.keyCode == 27) {
        	$(barcode).hide();
    	}
	};
  });
 //clicked coupon set B
  $('.setb_btn').click(function(event) {
  	var set_name = 'SKGLB';
  	var customerid = String($('#customerid').val());
	  savecoupon(set_name,customerid);
    
	//esc key press
	document.onkeydown = function(evt) {
    	evt = evt || window.event;
    	if (evt.keyCode == 27) {
        	$(barcode).hide();
    	}
	};
  });
 //clicked coupon set C
  $('.setc_btn').click(function(event) {
  	var set_name = 'SKGLC';
  	var customerid = String($('#customerid').val());
	  savecoupon(set_name,customerid);
    
	//esc key press
	document.onkeydown = function(evt) {
    	evt = evt || window.event;
    	if (evt.keyCode == 27) {
        	$(barcode).hide();
    	}
	};
  });
  
  $('.close_dialog').click(function(event) {
	  	$(barcode).hide();
	});

function register_member(){
	var data = $('#form_register').serialize();
	  $.ajax({
        method: "POST",
        url: "form_register.php",
        data: data
      })
      .done(function( msg ) {
        alert("Register status: "+msg);

      });
}

});

