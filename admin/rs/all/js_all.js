function move() {
  var elem = document.getElementById("myBar");   
  var width = 0;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    }
     else 
     {
      width++; 
      elem.style.width = width + '%'; 
    }
     if(width==100){
      elem.style.width = 0;
    }
  }
}



    var clock = document.getElementById('clock');
  function hexClock() {
  var time = new Date();
  var hours = (time.getHours() % 24).toString();
  var minutes = time.getMinutes().toString();
  var seconds = time.getSeconds().toString();

  if (hours.length < 2) {
    hours = '0' + hours;
  }

  if (minutes.length < 2) {
    minutes = '0' + minutes;
  }

  if (seconds.length < 2) {
    seconds = '0' + seconds;
  }

  var clockStr = hours + ' : ' + minutes + ' : ' + seconds;
  var hexColorStr = '#' + hours + minutes + seconds;

  clock.textContent = clockStr;

}

hexClock();
setInterval(hexClock, 1000);



