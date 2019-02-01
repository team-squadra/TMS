  <script>
function move() {
  var elem = document.getElementById("myBar");   
  var width = 0;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    }
    else if(width==80){
      setInterval(frame,15);

    }
     else {
      width++; 
      elem.style.width = width + '%'; 
    }
     if(width==100){
      elem.style.width = 0;
    }
  }
}
</script>