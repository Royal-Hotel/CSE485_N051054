// js slide ảnh

$(document).ready(function(){
    var stt = 0;
    starImg = $ ("img.slide:first").attr("stt");
    endImg = $ ("img.slide:last").attr("stt");
    $("img.slide").each(function(){
        if($(this).is(':visible'))
        stt = $(this).attr("stt");
    });
    $("#next").click(function(){
        if(stt == endImg){
            stt = -1;
        }
        next = ++stt;
        $("img.slide").hide();
        $("img.slide").eq(next).show();
    });
    $("#prev").click(function(){
        if(stt == 0){
            stt = endImg;
            prev = stt++;
        }
        prev = --stt;
        $("img.slide").hide();
        $("img.slide").eq(prev).show();
    });
    setInterval(function(){
        $("#next").click();
    },3500);
});

/////////////////////////////////////////
function RowsRecreate(roomrows) {
  //alert(roomrows);
  var optionsAdult = "";
  var optionsChild = "";
  var maxadult = 4;
  var maxchild = 4;
  for (var i = 1; i <= maxadult; i++) {
    optionsAdult += "<option value=\"" + i + "\">" + i + "</option>\n";
  }
  for (var i = 0; i <= maxchild; i++) {
    optionsChild += "<option value=\"" + i + "\">" + i + "</option>\n";
  }
  rowsdiv = "";
  for (var i = 2; i <= roomrows; i++) {
    rowsdiv += '<div class="ex-options"><div class="date-select-box-child-label"><div class="room-adult">Room ' + i + ':</div></div><ul class="date-select-box-child"><li><ul><li><div class="date-select-box adult-icon-b-form"><div class="room-adult">Adults</div> <select name="adult' + i + '" title="" id="adult' + i + '" class="valid adultselect">' + optionsAdult + '</select></div></li><li><div class="date-select-box adult-icon-b-form"><div class="room-adult">Child: </div><select onclick="showAge(' + i + ');" id="child' + i + '" name="child' + i + '" class="childselect">' + optionsChild + '</select></li></ul></li></ul></div><div style="display:none" class="Age popup-age speech-bubble" id="age' + i + '" ></div>';
  }
  document.getElementById("adbox_widget").innerHTML = rowsdiv + '';
}



function showAge(RoomN) {
  var child = document.getElementById("child" + RoomN).value;
  if (child != 0) {
    document.getElementById("age" + RoomN).style.visibility = 'visible';
  }
}


function createAgedropdown(RoomNum, child) {
  var rowsdivchildAge = "";
  var optionsChildAge = "";
  document.getElementById("age" + RoomNum).style.visibility = 'visible';
  if (child == 0) {
    document.getElementById("age" + RoomNum).style.visibility = 'hidden';
  }
  for (var i = 1; i <= 14; i++) {
    optionsChildAge += "<option value=\"" + i + "\">" + i + "</option>\n";
  }
  rowsdivchildAge += '<div class="head-line"><span class="age-head">Child Age </span><span onclick="closePopup(' + RoomNum + ')" class="close-pp closediv' + RoomNum + '">X</span></div>';
  for (var j = 1; j <= child; j++) {
    rowsdivchildAge += '<div class="fields-block-alter width35pr child-popup"><p>child ' + j + '</p><div class="room"><select id="childage_' + RoomNum + '_' + j + '" name="childage_' + RoomNum + '_' + j + '"  title="" class="childselect">' + optionsChildAge + '</select></div></div>';

  }

  //alert(rowsdivchildAge);
  document.getElementById("age" + RoomNum).innerHTML = rowsdivchildAge + '';
}

function closePopup(RoomNumber) { //alert(RoomNumber);
  document.getElementById("age" + RoomNumber).style.visibility = 'hidden';

}

 


$(function () {
  var sd = new Date();
sd.setDate(sd.getDate() + 1);
var currentDate = new Date();
currentDate.setDate(currentDate.getDate()); 

  $('#datepickerchechinT').datepicker({onSelect: function (dateStr) {

      var d = $.datepicker.parseDate('d M yy', dateStr); 
      var minAfterSelect = new Date(d.getTime());
      minAfterSelect.setDate(minAfterSelect.getDate() + 1);
      d.setDate(d.getDate() + 1); // Add three days
      $('#datepickerchechoutT').datepicker('option', 'minDate', minAfterSelect);
      $('#datepickerchechoutT').datepicker('setDate', d);
      
      setTimeout(function () {

        $("#datepickerchechoutT").datepicker('show');
      }, 16);
    },
    altField: '#datepickerchechin',
    altFormat: 'dd/mm/yy',
    dateFormat: 'dd M yy', buttonText: 'Select Check In Date', buttonImage: 'ASSETS_PATH/images/Calendaricon.png',
    //minDate: 0, 
    minDate: new Date(),
    maxDate: '+12M',
    beforeShow: function (input, inst) {
      var calendar = inst.dpDiv;
      setTimeout(function () {
        calendar.position({
          my: 'left top',
          at: 'left bottom',
          collision: 'none',
          of: input
        });
      }, 1);
    }

  });

  $('#datepickerchechoutT').datepicker({
    altField: '#datepickerchechout',
    altFormat: 'dd/mm/yy',
    dateFormat: 'dd M yy', buttonText: 'Select Check Out Date', buttonImage: '/images/Calendaricon.png',
    //minDate: 0, 
    minDate: new Date(),
    maxDate: '+12M',
    beforeShow: function (input, inst) {
      var calendar = inst.dpDiv;
      setTimeout(function () {
        calendar.position({
          my: 'right top',
          at: 'right bottom',
          collision: 'none',
          of: input
        });
      }, 1);
    }

  });
});
$('#region_hotel').change( function(){
  
  var region = $(this).val();
  var pos = region.search("_")
  //alert(pos);
  if(pos==-1){
    $('#BookingEnginePromoCodeField').hide();
  } else {
    $('#BookingEnginePromoCodeField').show();
  }
  //BookingEnginePromoCodeField
});
  $("#searchsubmit_widget").click(function () {
    var startDate = $('#datepickerchechin').val();
    var endDate = $('#datepickerchechout').val();
    
    if(startDate==""){
      alert("Check In date should not be blank. ");
      return false;
    }
    if(startDate==""){
      alert("Check Out date should not be blank. ");
      return false;
    }
    
    //return false;
  });
