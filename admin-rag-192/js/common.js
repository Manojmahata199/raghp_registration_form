/*"use strict";*/

$(function(){
	try{
		$('#txtdate').mask("99/99/9999");
		$('#hindi_marks_data').mask("999");
		
		//$('#emergencylandline').mask("(99999)-(99999999)");
	}catch(err){} //this block written in try catch to make dataTable plugin work
	
	bindAutoComplete("txtstate");
	bindAutoComplete("schoolname");
	bindAutoComplete("boardexam");
	bindAutoComplete('loacation');
	//setRollmask();
	$('.extratxt').hide();
	
	$('#extra_curricular_yes').click(function(event) {
		$('.extratxt').show();
	});
	
	$('#extra_curricular_no').click(function(event) {
		$('.extratxt').hide();
	});

	/*$('#[datalist],#schoolname[datalist]').each(function() {
    var elem = $(this),
        list = $(document.getElementById(elem.attr('datalist')));
    elem.autocomplete({
    	select: function( event, ui ) {
    		 selected_value = ui.item.label;
    		
    	},
        source: list.children().map(function() {
            return $(this).text();
        }).get(),
		minLength: 0
		
    }).focus(function() {
            $(this).autocomplete("search", "");
        });
});*/


	
try {
	$('#tblstudent').DataTable({
		"aaSorting": [],  
	});
}catch(err){}
	
$('#totalscore').focus(function(){$('#totalscore-legend').addClass('hint--always')});
$('#totalscore').blur(function(){$('#totalscore-legend').removeClass('hint--always')});

}); // end ready

function isNumberKey(evt) {
   evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57 )){
        return false;
	}else { return true;}
}

function validateEmail(sEmail) {
	var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if (filter.test(sEmail)) {
		return true;
	}
	else {
		return false;
	}
}

function bindAutoComplete(id){
	$('#'+id+'[datalist]').each(function() {
	    var elem = $(this),
	        list = $(document.getElementById(elem.attr('datalist')));
	    elem.autocomplete({
	    	select: function( event, ui ) {
	    		 selected_value = ui.item.label;
	    		
	    	},
	        source: list.children().map(function() {
	            return $(this).text();
	        }).get(),
			minLength: 0
			
	    }).focus(function() {
	            $(this).autocomplete("search", "");
	        });
	});
	
}

function setRollmask(board){
	/*
	'1', 'CBSE - 10'*
	'2', 'ICSE - 10'*
	'3', 'WBBSE - 10'*
	'4', 'CBSE - 12'*
	'5', 'ISC - 12'*
	'6', 'WBCHSE - 12'*
	'7', 'IB - 10'
	'8', 'IB - 12'
	'9', 'IGCSE - 10'
	'10', 'IGCSE - 12'
	*/
	/*
	if(board == 3){
		$('#boardrollnumber').attr("placeholder","000000X - 0000");
		$('#boardrollnumber').mask("999999a-9999");
	}
	else if(board == 6){
		$('#boardrollnumber').attr("placeholder","0000000 - 0000");
		$('#boardrollnumber').mask("999999-9999");
	}
	else if(board == 1 || board == 4){
		$('#boardrollnumber').attr("placeholder","0000000");
		$('#boardrollnumber').mask("9999999");
	}
	else if(board == 2 || board == 5){
		$('#boardrollnumber').attr("placeholder","0000000");
		$('#boardrollnumber').mask("9999999");
	}
	else {
		$('#boardrollnumber').attr("placeholder","0000000");
		$('#boardrollnumber').mask("9999999");
	}
	*/
}

function setResultDetails(board,rad){
	if(board=='CBSE'){
		if(rad==10){
			$(".hindigradefrmrow").show();
			$(".hindimarksfrmrow").hide();
			$(".preboardfrmrow").hide();
			$(".totalscorefrmrow").hide();
			$("#hindimarks_preboard").val("");
			$("#totalscore").val("");
			$("#hindimarks").val("");
			$("#sub").prop('disabled', false);
		}
		else{
			$(".hindigradefrmrow").hide();
			$(".hindimarksfrmrow").show();
			$(".preboardfrmrow").hide();
			$(".totalscorefrmrow").hide();
			$("#hindigrade").val("");
		}
	}
	else{
		$(".hindigradefrmrow").hide();
		$(".hindimarksfrmrow").show();
		$("#hindigrade").val("");
	}	
}

function setSaveButton(board,rad,hindimarks){
	if(board=='WBBSE'){
		if(hindimarks >= hindiMarksWBBSE12){
			$("#sub").prop('disabled', false);
		}
		else{
			$("#sub").prop('disabled', true);
		}
	}
	else if(board=='CBSE'){
		if(rad==12){
			if(hindimarks >= hindiMarksCBSE12){
				$("#sub").prop('disabled', false);
			}
			else{
				$("#sub").prop('disabled', true);
			}
		}
		else{
			$("#sub").prop('disabled', false);
		}
	}
	else if(board=='CISCE'){
		if(hindimarks >= hindiMarksCISCE12){
			$("#sub").prop('disabled', false);
		}
		else{
			$("#sub").prop('disabled', true);
		}
	}
}

function showRamawatar(rad){
	if(rad==12){
		$(".ramawatarfrmrow").show();
	}
	else{
		$(".ramawatarfrmrow").hide();
	}
}

function setAggregateInputFromBoardExam(board,rad,hindimarks){
	if(board=='WBBSE'){
		if(rad==10){
			if(hindimarks >= hindiMarksWBBSE10){
				$(".preboardfrmrow").show();
				$(".totalscorefrmrow").show();
				
			}
			else{
				$(".preboardfrmrow").hide();
				$(".totalscorefrmrow").hide();
				$("#hindimarks_preboard").val("");
				$("#totalscore").val("");
				
			}
		}
		else{
			if(hindimarks >= hindiMarksWBBSE12){
				$(".preboardfrmrow").show();
				$(".totalscorefrmrow").show();
				
			}
			else{
				$(".preboardfrmrow").hide();
				$(".totalscorefrmrow").hide();
				$("#hindimarks_preboard").val("");
				$("#totalscore").val("");
				
			}
		}
	}
	else if(board=='CBSE'){
		if(rad==12){
			if(hindimarks >= hindiMarksCBSE12){
				$(".preboardfrmrow").show();
				$(".totalscorefrmrow").show();
				
				
			}
			else{
				$(".preboardfrmrow").hide();
				$(".totalscorefrmrow").hide();
				$("#hindimarks_preboard").val("");
				$("#totalscore").val("");
				
			}
		}
		else{
				$(".preboardfrmrow").hide();
				$(".totalscorefrmrow").hide();
				$("#hindimarks_preboard").val("");
				$("#totalscore").val("");
		}
		
	}
	else if(board=='CISCE'){
		if(rad==10){
			if(hindimarks >= hindiMarksCISCE10){
				$(".preboardfrmrow").show();
				$(".totalscorefrmrow").show();
				
			}
			else{
				$(".preboardfrmrow").hide();
				$(".totalscorefrmrow").hide();
				$("#hindimarks_preboard").val("");
				$("#totalscore").val("");
			}
		}
		else{
			if(hindimarks >= hindiMarksCISCE12){
				$(".preboardfrmrow").show();
				$(".totalscorefrmrow").show();
				
			}
			else{
				$(".preboardfrmrow").hide();
				$(".totalscorefrmrow").hide();
				$("#hindimarks_preboard").val("");
				$("#totalscore").val("");
				
			}
		}
	}
}

function setAggregateInput(board,rad,hindimarks){
	if(board=='WBBSE'){
		if(rad==10){
			if(hindimarks >= hindiMarksWBBSE10){
				$(".preboardfrmrow").show();
				$("#hindimarks_preboard").focus();
				$(".totalscorefrmrow").show();
				
			}
			else{
				$(".preboardfrmrow").hide();
				$(".totalscorefrmrow").hide();
				$("#hindimarks_preboard").val("");
				$("#totalscore").val("");
				
			}
		}
		else{
			if(hindimarks >= hindiMarksWBBSE12){
				$(".preboardfrmrow").show();
				$("#hindimarks_preboard").focus();
				$(".totalscorefrmrow").show();
				
			}
			else{
				$(".preboardfrmrow").hide();
				$(".totalscorefrmrow").hide();
				$("#hindimarks_preboard").val("");
				$("#totalscore").val("");
				
			}
		}
	}
	else if(board=='CBSE'){
		if(rad==12){
			if(hindimarks >= hindiMarksCBSE12){
				$(".preboardfrmrow").show();
				$("#hindimarks_preboard").focus();
				$(".totalscorefrmrow").show();
				
				
			}
			else{
				$(".preboardfrmrow").hide();
				$(".totalscorefrmrow").hide();
				$("#hindimarks_preboard").val("");
				$("#totalscore").val("");
				
			}
		}
		else{
				$(".preboardfrmrow").hide();
				$(".totalscorefrmrow").hide();
				$("#hindimarks_preboard").val("");
				$("#totalscore").val("");
		}
	}
	else if(board=='CISCE'){
		if(rad==10){
			if(hindimarks >= hindiMarksCISCE10){
				$(".preboardfrmrow").show();
				$("#hindimarks_preboard").focus();
				$(".totalscorefrmrow").show();
				
			}
			else{
				$(".preboardfrmrow").hide();
				$(".totalscorefrmrow").hide();
				$("#hindimarks_preboard").val("");
				$("#totalscore").val("");
			}
		}
		else{
			if(hindimarks >= hindiMarksCISCE12){
				$(".preboardfrmrow").show();
				$("#hindimarks_preboard").focus();
				$(".totalscorefrmrow").show();
				
			}
			else{
				$(".preboardfrmrow").hide();
				$(".totalscorefrmrow").hide();
				$("#hindimarks_preboard").val("");
				$("#totalscore").val("");
			}
		}
	}
}

function isDate(txtDate)
{
  var currVal = txtDate;
  if(currVal == '')
    return false;
  
  //Declare Regex  
  var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/; 
  var dtArray = currVal.match(rxDatePattern); // is format OK?

  if (dtArray == null)
     return false;
 
  //Checks for mm/dd/yyyy format.
  dtMonth = dtArray[3];
  dtDay= dtArray[1];
  dtYear = dtArray[5];

  if (dtMonth < 1 || dtMonth > 12)
      return false;
  else if (dtDay < 1 || dtDay> 31)
      return false;
  else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31)
      return false;
  else if (dtMonth == 2)
  {
     var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
     if (dtDay> 29 || (dtDay ==29 && !isleap))
          return false;
  }
  return true;
}

function myConfirmBox(text) {
    
    if (confirm(text) == true) {
        return true;
    } else {
        return false;
    }
}

$(document).ready(function() {
		$("#school").searchable({
			maxListSize: 50,						// if list size are less than maxListSize, show them all
			maxMultiMatch: 50,						// how many matching entries should be displayed
			exactMatch: false,						// Exact matching on search
			wildcards: true,						// Support for wildcard characters (*, ?)
			ignoreCase: true,						// Ignore case sensitivity
			latency: 200,							// how many millis to wait until starting search
			warnMultiMatch: 'top {0} matches ...',	// string to append to a list of entries cut short by maxMultiMatch 
			warnNoMatch: 'no matches ...',			// string to show in the list when no entries match
			zIndex: 'auto'							// zIndex for elements generated by this plugin
	   	});
	});

