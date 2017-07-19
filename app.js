$( document ).ready(function() {
	isDatePicker($('#birthdate'));

	// $('#register_submit_btn').click(function(event) {
	// 	register_member();
	// });

//clicked coupon set A 
  $('.seta_btn').click(function(event) {
	  savecoupon('SKGLA','59009999');
    
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
	  savecoupon('SKGLB','59009999');
    
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
	  savecoupon('SKGLC','59009999');
    
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

function savecoupon(set_name,customerid){
	var data = 'setname='+set_name+'&customerid='+customerid;
	  $.ajax({
        method: "POST",
        url: "savecoupon.php",
        data: data
      })
      .done(function( msg ) {
        alert("Save Coupon: "+msg);

      });
	  gencode(set_name);
    // $(barcode).show();
}


function gencode(t){
    var res_text = String(t);
    var customerid = '59000001';
    var imgbarcode =  '<img alt="testing" src="barcode.php?print=true&size=100&text='+res_text+customerid+'" />';
    // get last char of string
    var set_code =  res_text.slice(-1);
    var divid = 'res_'+set_code;
   document.getElementById(divid).innerHTML = imgbarcode;

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

});

