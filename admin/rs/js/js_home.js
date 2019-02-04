//////////////////////////////////////////////////////////////////////////////
function secter_01_show_func()
{
document.getElementById("secter_01").style.display = "";
document.getElementById("secter_02").style.display = "none";
document.getElementById("secter_03").style.display = "none";
}
function secter_02_show_func()
{
document.getElementById("secter_01").style.display = "none";
document.getElementById("secter_02").style.display = "";
document.getElementById("secter_03").style.display = "none";
}
function secter_03_show_func()
{
document.getElementById("secter_01").style.display = "none";
document.getElementById("secter_02").style.display = "none";
document.getElementById("secter_03").style.display = "";
}
//////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////
function sec01_to_sec02_func_in()
{
  document.getElementById('sec01_to_sec02').src='../resources/right_dark.png'
}
function sec01_to_sec02_func_out()
{
  document.getElementById('sec01_to_sec02').src='../resources/right_lite.png'
}
//////
function sec02_to_sec01_func_in()
{
  document.getElementById('sec02_to_sec01').src='../resources/left_dark.png'
}
function sec02_to_sec01_func_out()
{
  document.getElementById('sec02_to_sec01').src='../resources/left_lite.png'
}
//////
function sec02_to_sec03_func_in()
{
  document.getElementById('sec02_to_sec03').src='../resources/right_dark.png'
}
function sec02_to_sec03_func_out()
{
  document.getElementById('sec02_to_sec03').src='../resources/right_lite.png'
}
//////
function sec03_to_sec02_func_in()
{
  document.getElementById('sec03_to_sec02').src='../resources/left_dark.png'
}
function sec03_to_sec02_func_out()
{
  document.getElementById('sec03_to_sec02').src='../resources/left_lite.png'
}
//////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////
function year_up_function()
{var year_up_data = document.getElementById("inputyear").innerHTML;
  var year_up_data_value = +year_up_data+1;
  document.getElementById("inputyear").innerHTML = year_up_data_value;
}
function year_down_function()
{var year_down_data = document.getElementById("inputyear").innerHTML;
  var year_down_data_value = +year_down_data-1;
  document.getElementById("inputyear").innerHTML = year_down_data_value;
}
//////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////
function week_up_function()
{var week_up_data = document.getElementById("inputweeknum").innerHTML;
var new_week_up_data;
  if (week_up_data=="W1")
   {
      new_week_up_data="W2";
   }
   else if(week_up_data=="W2")
   {
      new_week_up_data="W3";
   }
   else if(week_up_data=="W3")
   {
      new_week_up_data="W4";
   }
   else if(week_up_data=="W4")
   {
      new_week_up_data="W5";
   }
   else if(week_up_data=="W5")
   {
      new_week_up_data="W6";
   }
   else
   {
      new_week_up_data="W1";
   }
  document.getElementById("inputweeknum").innerHTML = new_week_up_data;
}
function week_down_function()
{var week_down_data = document.getElementById("inputweeknum").innerHTML;
var new_week_down_data;
  if (week_down_data=="W6")
   {
      new_week_down_data="W5";
   }
   else if(week_down_data=="W5")
   {
      new_week_down_data="W4";
   }
   else if(week_down_data=="W4")
   {
      new_week_down_data="W3";
   }
   else if(week_down_data=="W3")
   {
      new_week_down_data="W2";
   }
   else if(week_down_data=="W2")
   {
      new_week_down_data="W1";
   }
   else
   {
      new_week_down_data="W6";
   }
  document.getElementById("inputweeknum").innerHTML = new_week_down_data;
}
//////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////
function year_up_func_in()
{
  document.getElementById('yearup').src='../resources/up_full.png'
}
function year_up_func_out()
{
  document.getElementById('yearup').src='../resources/up_line.png'
}
///////
function year_down_func_in()
{
  document.getElementById('yeardown').src='../resources/down_full.png'
}
function year_down_func_out()
{
  document.getElementById('yeardown').src='../resources/down_line.png'
}
///////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////
function week_up_func_in()
{
  document.getElementById('weekup').src='../resources/up_full.png'
}
function week_up_func_out()
{
  document.getElementById('weekup').src='../resources/up_line.png'
}
///////
function week_down_func_in()
{
  document.getElementById('weekdown').src='../resources/down_full.png'
}
function week_down_func_out()
{
  document.getElementById('weekdown').src='../resources/down_line.png'
}
///////////////////////////////////////////////////////////////////

function find_week_number() 
{
  var inputyear = document.getElementById("inputyear").innerHTML;
  var inputmonth = document.getElementById("input_fake_month").value;

var dd = new Date(inputyear,inputmonth-1,1);
var day = dd.getDay();

var td_date =new Date();
var tdd = td_date.getDate();

var weeknum;
if (day == 0)
{

    if (tdd <= 7)
    {
        weeknum =  "W1";
    }
    else if (tdd <= 14)
    {
      weeknum =  "W2";
    }
    else if (tdd <= 21)
    {
        weeknum =  "W3";
    }
    else if (tdd <= 28)
    {
        weeknum =  "W4";
    }
    else
    {
      weeknum =  "W5";
    }

}
else if (day == 1)
{
  if (tdd <= 6)
    {
        weeknum =  "W1";
    }
    else if (tdd <= 13)
    {
      weeknum =  "W2";
    }
    else if (tdd <= 20)
    {
        weeknum =  "W3";
    }
    else if (tdd <= 27)
    {
        weeknum =  "W4";
    }
    else
    {
      weeknum =  "W5";
    }
}
else if (day == 2)
{
  if (tdd <= 5)
    {
        weeknum =  "W1";
    }
    else if (tdd <= 12)
    {
      weeknum =  "W2";
    }
    else if (tdd <= 19)
    {
        weeknum =  "W3";
    }
    else if (tdd <= 26)
    {
        weeknum =  "W4";
    }
    else
    {
      weeknum =  "W5";
    }
}
else if (day == 3)
{
  if (tdd <= 4)
    {
        weeknum =  "W1";
    }
    else if (tdd <= 11)
    {
      weeknum =  "W2";
    }
    else if (tdd <= 18)
    {
        weeknum =  "W3";
    }
    else if (tdd <= 25)
    {
        weeknum =  "W4";
    }
    else
    {
      weeknum =  "W5";
    }
}
else if (day == 4)
{
  if (tdd <= 3)
    {
        weeknum =  "W1";
    }
    else if (tdd <= 10)
    {
      weeknum =  "W2";
    }
    else if (tdd <= 17)
    {
        weeknum =  "W3";
    }
    else if (tdd <= 24)
    {
        weeknum =  "W4";
    }
    else
    {
      weeknum =  "W5";
    }
}
else if (day == 5)
{
  if (tdd <= 2)
    {
        weeknum =  "W1";
    }
    else if (tdd <= 9)
    {
      weeknum =  "W2";
    }
    else if (tdd <= 16)
    {
        weeknum =  "W3";
    }
    else if (tdd <= 23)
    {
        weeknum =  "W4";
    }
    else if (tdd  <= 30)
    {
        weeknum =  "W5";
    }
    else
    {
      weeknum =  "W6";
    }
}
else if (day == 6)
{
  if (tdd <= 1)
    {
        weeknum =  "W1";
    }
    else if (tdd <= 8)
    {
      weeknum =  "W2";
    }
    else if (tdd <= 15)
    {
        weeknum =  "W3";
    }
    else if (tdd <= 22)
    {
        weeknum =  "W4";
    }
    else if (tdd  <= 29)
    {
        weeknum =  "W5";
    }
    else
    {
      weeknum =  "W6";
    }
}
  document.getElementById("inputweeknum").innerHTML = weeknum;

}