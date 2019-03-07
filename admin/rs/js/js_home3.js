//////////////////////////////////////////////////////////////////////////////
function year_up_function()
{var year_up_data = document.getElementById("inputyear").value;
  var year_up_data_value = +year_up_data+1;
  document.getElementById("inputyear").value = year_up_data_value;
}
function year_down_function()
{var year_down_data = document.getElementById("inputyear").value;
  var year_down_data_value = +year_down_data-1;
  document.getElementById("inputyear").value = year_down_data_value;
}
//////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////
function week_up_function()
{var week_up_data = document.getElementById("inputweeknum").value;
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
  document.getElementById("inputweeknum").value = new_week_up_data;
}
function week_down_function()
{var week_down_data = document.getElementById("inputweeknum").value;
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
  document.getElementById("inputweeknum").value = new_week_down_data;
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
  var inputyear = document.getElementById("inputyear").value;
  var input_fake_month = document.getElementById("input_fake_month").value;
var inputmonth;
                       if (input_fake_month=="January") {
                        inputmonth =1;
                       }
                       else if (input_fake_month=="February") {
                        inputmonth =2;
                       }
                       else if (input_fake_month=="March") {
                        inputmonth =3;
                       }
                       else if (input_fake_month=="April") {
                        inputmonth =4;
                       }
                       else if (input_fake_month=="May") {
                        inputmonth =5;
                       }
                       else if (input_fake_month=="June") {
                        inputmonth =6;
                       }
                       else if (input_fake_month=="July") {
                        inputmonth =7;
                       }
                       else if (input_fake_month=="August") {
                        inputmonth =8;
                       }
                       else if (input_fake_month=="September") {
                        inputmonth =9;
                       }
                       else if (input_fake_month=="October") {
                        inputmonth =10;
                       }
                       else if (input_fake_month=="November") {
                        inputmonth =11;
                       }
                       else if (input_fake_month=="December") {
                        inputmonth =12;
                       }
                       else
                       {
                         inputmonth ="";

                       }

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
  document.getElementById("inputweeknum").value = weeknum;

}



//---------------------------year-----------------------------------
 $(document).ready(function(){  
      $('#year_up_btn').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputday = $('#inputday').val();
           $.ajax({  
                url:"rs/php/php_home.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputday:inputday}, 
                success:function(data){  
                     $('#batch_div').html(data);  
                }  
           });  
      });  
 });
 $(document).ready(function(){  
      $('#inputyear').change(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputday = $('#inputday').val();
           $.ajax({  
                url:"rs/php/php_home.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputday:inputday},   
                success:function(data){  
                     $('#batch_div').html(data);  
                }  
           });  
      });  
 });
 $(document).ready(function(){  
      $('#year_down_btn').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputday = $('#inputday').val();
           $.ajax({  
                url:"rs/php/php_home.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputday:inputday}, 
                success:function(data){  
                     $('#batch_div').html(data);  
                }  
           });  
      });  
 });
 //--------------------------------------------------------------

 //---------------------------month-----------------------------------
  $(document).ready(function(){  
      $('#input_fake_month').change(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputday = $('#inputday').val();
           $.ajax({  
                url:"rs/php/php_home.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputday:inputday},  
                success:function(data){  
                     $('#batch_div').html(data);  
                }  
           });  
      });  
 });
  //--------------------------------------------------------------

  //---------------------------week-----------------------------------
   $(document).ready(function(){  
      $('#week_up_btn').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputday = $('#inputday').val(); 
           $.ajax({  
                url:"rs/php/php_home.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputday:inputday},   
                success:function(data){  
                     $('#batch_div').html(data);  
                }  
           });  
      });  
 });
   $(document).ready(function(){  
      $('#inputweeknum').change(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputday = $('#inputday').val();
           $.ajax({  
                url:"rs/php/php_home.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputday:inputday},   
                success:function(data){  
                     $('#batch_div').html(data);  
                }  
           });  
      });  
 });
   $(document).ready(function(){  
      $('#week_down_btn').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputday = $('#inputday').val(); 
           $.ajax({  
                url:"rs/php/php_home.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputday:inputday},   
                success:function(data){  
                     $('#batch_div').html(data);  
                }  
           });  
      });  
 });
   //--------------------------------------------------------------

   //---------------------------day-----------------------------------
    $(document).ready(function(){  
      $('#inputday').change(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputday = $('#inputday').val();  
           $.ajax({  
                url:"rs/php/php_home.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputday:inputday},   
                success:function(data){  
                     $('#batch_div').html(data);  
                }  
           });  
      });  
 });
    //--------------------------------------------------------------

    //---------------------------body-----------------------------------
$(document).ready(function(){ 
    find_week_number();         
    var inputyear = $('#inputyear').val();
    var input_fake_month = $('#input_fake_month').val();
    var inputweeknum = $('#inputweeknum').val();
    var inputday = $('#inputday').val();  
    $.ajax({  
            url:"rs/php/php_home.php",  
            method:"POST",  
            data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputday:inputday},  
            success:function(data){  
            $('#batch_div').html(data);  
            }  
          });  
 });
//--------------------------------------------------------------