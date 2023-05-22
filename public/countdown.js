

// Get time data from form and set dynamic Id to variable used for output

var time = document.getElementById('timeComplete');
var dynamicId = document.getElementById('dynId').value;


// Date settings start

var currentDate = new Date();
var setDate = new Date();

var hoursSet = parseInt(time.value.split(":")[0]);
var minutesSet = parseInt(time.value.split(":")[1]);
var countDownDate = new Date(currentDate.getMonth()+1+" "+currentDate.getDate()+", "+currentDate.getFullYear()+"  "+hoursSet+":"+minutesSet+":"+currentDate.getSeconds()).getTime();

// Date settings end

// 1 second counter start

var x = setInterval(function() {

  var currentDateCount = new Date().getTime();

  var distance = countDownDate - currentDateCount;
  
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


  document.getElementById(dynamicId).innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s left";


  if (distance < 0) {
    clearInterval(x);
    document.getElementById(dynamicId).innerHTML = "EXPIRED";
  }
}, 1000);

// 1 second counter end


// edited data alert start

function edited(){
  alert("Successfully edited");
}

// edited data alert end
