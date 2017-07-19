$( document ).ready(function() {
	isDatePicker($('#birthdate'));

var barcode = document.getElementsByClassName("getcoupon");
  $('.seta_btn').click(function(event) {
	  
    var data = 'ref=seta&ref2=setb';
	  $.ajax({
        method: "POST",
        url: "savecoupon.php",
        data: data
      })
      .done(function( msg ) {
        // alert( "Data Saved: " + msg );
        alert("Save Coupon: "+msg);

      });
	  
    $(barcode).show();
	
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




function gencode($t){
	  <!-- alert('in func gen'); -->
    var res_text = String($t);
      if (res_text.search('/')) {
        var ar_text = res_text.split('/');
        var outlet = ar_text[0];
        var set = ar_text[1];
        var divid = 'res_'+set;
      };

   var imgbarcode =  '<img alt="testing" src="barcode.php?print=true&size=80&text='+outlet+set+'" />';
   document.getElementById(divid).innerHTML = imgbarcode;
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

