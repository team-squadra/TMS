//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function startup_func()
{   
    //   Called As the order ** do not change the order**
    find_week_number();
    add_day_number();
    hide_table_days();
    display_correct_week();
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function year_and_month_change()
{
    add_day_number();
    hide_table_days();
    document.getElementById("week_1").style.display = "";
    document.getElementById("week_2").style.display = "none";
    document.getElementById("week_3").style.display = "none";
    document.getElementById("week_4").style.display = "none";
    document.getElementById("week_5").style.display = "none";
    document.getElementById("week_6").style.display = "none";
    document.getElementById("inputweeknum").value = 'W1';
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function add_day_number()
{

document.getElementById("w1_0").innerHTML = "";
document.getElementById("w1_1").innerHTML = "";
document.getElementById("w1_2").innerHTML = "";
document.getElementById("w1_3").innerHTML = "";
document.getElementById("w1_4").innerHTML = "";
document.getElementById("w1_5").innerHTML = "";
document.getElementById("w1_6").innerHTML = "";

document.getElementById("w5_0").innerHTML = "";
document.getElementById("w5_1").innerHTML = "";
document.getElementById("w5_2").innerHTML = "";
document.getElementById("w5_3").innerHTML = "";
document.getElementById("w5_4").innerHTML = "";
document.getElementById("w5_5").innerHTML = "";
document.getElementById("w5_6").innerHTML = "";

document.getElementById("w6_0").innerHTML = "";
document.getElementById("w6_1").innerHTML = "";
document.getElementById("w6_2").innerHTML = "";

var weeknm_id_array = [];

            weeknm_id_array[0] = "w1_0";
            weeknm_id_array[1] = "w1_1";
            weeknm_id_array[2] = "w1_2";
            weeknm_id_array[3] = "w1_3";
            weeknm_id_array[4] = "w1_4";
            weeknm_id_array[5] = "w1_5";
            weeknm_id_array[6] = "w1_6";

            weeknm_id_array[7] = "w2_0";
            weeknm_id_array[8] = "w2_1";
            weeknm_id_array[9] = "w2_2";
            weeknm_id_array[10] = "w2_3";
            weeknm_id_array[11] = "w2_4";
            weeknm_id_array[12] = "w2_5";
            weeknm_id_array[13] = "w2_6";

            weeknm_id_array[14] = "w3_0";
            weeknm_id_array[15] = "w3_1";
            weeknm_id_array[16] = "w3_2";
            weeknm_id_array[17] = "w3_3";
            weeknm_id_array[18] = "w3_4";
            weeknm_id_array[19] = "w3_5";
            weeknm_id_array[20] = "w3_6";

            weeknm_id_array[21] = "w4_0";
            weeknm_id_array[22] = "w4_1";
            weeknm_id_array[23] = "w4_2";
            weeknm_id_array[24] = "w4_3";
            weeknm_id_array[25] = "w4_4";
            weeknm_id_array[26] = "w4_5";
            weeknm_id_array[27] = "w4_6";

            weeknm_id_array[28] = "w5_0";
            weeknm_id_array[29] = "w5_1";
            weeknm_id_array[30] = "w5_2";
            weeknm_id_array[31] = "w5_3";
            weeknm_id_array[32] = "w5_4";
            weeknm_id_array[33] = "w5_5";
            weeknm_id_array[34] = "w5_6";

            weeknm_id_array[35] = "w6_0";
            weeknm_id_array[36] = "w6_1";
            weeknm_id_array[37] = "w6_2";

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

var this_month = inputmonth;
var today = new Date(inputyear,this_month-1);
var month = today.getMonth();
var daysInMonth = daysInMonth(month + 1, today.getFullYear());

function daysInMonth(month,year) {
  return new Date(year, month, 0).getDate();
}

var dd = new Date(inputyear,this_month-1,1);
var day = dd.getDay();


            if (day == 0)
            {
                for (i = 0; i < daysInMonth; i++)
                {
                  document.getElementById(weeknm_id_array[i]).innerHTML = i + 1;
                }
            }
            else if (day == 1)
            {
                for (i = 0; i < daysInMonth; i++)
                {
                    document.getElementById(weeknm_id_array[i+1]).innerHTML = i + 1;
                }
            }
            else if (day == 2)
            {
                for (i = 0; i < daysInMonth; i++)
                {
                    document.getElementById(weeknm_id_array[i+2]).innerHTML = i + 1;
                }
            }
            else if (day == 3)
            {
                for (i = 0; i < daysInMonth; i++)
                {
                    document.getElementById(weeknm_id_array[i+3]).innerHTML = i + 1;
                }
            }
            else if (day == 4)
            {
                for (i = 0; i < daysInMonth; i++)
                {
                    document.getElementById(weeknm_id_array[i+4]).innerHTML = i + 1;
                }
            }
            else if (day == 5)
            {
                for (i = 0; i < daysInMonth; i++)
                {
                    document.getElementById(weeknm_id_array[i+5]).innerHTML = i + 1;
                }
            }
            else if (day == 6)
            {
                for (i = 0; i < daysInMonth; i++)
                {
                    document.getElementById(weeknm_id_array[i+6]).innerHTML = i + 1;
                }
            }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function hide_table_days()
{

//  display all..........

document.getElementById("w1_sunday_1").style.display = "";
document.getElementById("w1_sunday_2").style.display = "";
document.getElementById("w1_sunday_3").style.display = "";
document.getElementById("w1_sunday_4").style.display = "";

document.getElementById("w1_monday_1").style.display = "";
document.getElementById("w1_monday_2").style.display = "";
document.getElementById("w1_monday_3").style.display = "";
document.getElementById("w1_monday_4").style.display = "";

document.getElementById("w1_tuesday_1").style.display = "";
document.getElementById("w1_tuesday_2").style.display = "";
document.getElementById("w1_tuesday_3").style.display = "";
document.getElementById("w1_tuesday_4").style.display = "";

document.getElementById("w1_wednesday_1").style.display = "";
document.getElementById("w1_wednesday_2").style.display = "";
document.getElementById("w1_wednesday_3").style.display = "";
document.getElementById("w1_wednesday_4").style.display = "";

document.getElementById("w1_thursday_1").style.display = "";
document.getElementById("w1_thursday_2").style.display = "";
document.getElementById("w1_thursday_3").style.display = "";
document.getElementById("w1_thursday_4").style.display = "";

document.getElementById("w1_friday_1").style.display = "";
document.getElementById("w1_friday_2").style.display = "";
document.getElementById("w1_friday_3").style.display = "";
document.getElementById("w1_friday_4").style.display = "";

document.getElementById("w1_saturday_1").style.display = "";
document.getElementById("w1_saturday_2").style.display = "";
document.getElementById("w1_saturday_3").style.display = "";
document.getElementById("w1_saturday_4").style.display = "";

document.getElementById("w4_saturday_1").style.display = "";
document.getElementById("w4_saturday_2").style.display = "";
document.getElementById("w4_saturday_3").style.display = "";
document.getElementById("w4_saturday_4").style.display = "";

document.getElementById("week_5").style.display = "";
document.getElementById("w4_to_w5_btn").style.display = "";

document.getElementById("w5_monday_1").style.display = "";
document.getElementById("w5_monday_2").style.display = "";
document.getElementById("w5_monday_3").style.display = "";
document.getElementById("w5_monday_4").style.display = "";

document.getElementById("w5_tuesday_1").style.display = "";
document.getElementById("w5_tuesday_2").style.display = "";
document.getElementById("w5_tuesday_3").style.display = "";
document.getElementById("w5_tuesday_4").style.display = "";

document.getElementById("w5_wednesday_1").style.display = "";
document.getElementById("w5_wednesday_2").style.display = "";
document.getElementById("w5_wednesday_3").style.display = "";
document.getElementById("w5_wednesday_4").style.display = "";

document.getElementById("w5_thursday_1").style.display = "";
document.getElementById("w5_thursday_2").style.display = "";
document.getElementById("w5_thursday_3").style.display = "";
document.getElementById("w5_thursday_4").style.display = "";

document.getElementById("w5_friday_1").style.display = "";
document.getElementById("w5_friday_2").style.display = "";
document.getElementById("w5_friday_3").style.display = "";
document.getElementById("w5_friday_4").style.display = "";

document.getElementById("w5_saturday_1").style.display = "";
document.getElementById("w5_saturday_2").style.display = "";
document.getElementById("w5_saturday_3").style.display = "";
document.getElementById("w5_saturday_4").style.display = "";

document.getElementById("week_6").style.display = "";
document.getElementById("w5_to_w6_btn").style.display = "";

document.getElementById("w6_monday_1").style.display = "";
document.getElementById("w6_monday_2").style.display = "";
document.getElementById("w6_monday_3").style.display = "";
document.getElementById("w6_monday_4").style.display = "";

document.getElementById("w6_tuesday_1").style.display = "";
document.getElementById("w6_tuesday_2").style.display = "";
document.getElementById("w6_tuesday_3").style.display = "";
document.getElementById("w6_tuesday_4").style.display = "";




//---WEEK 1 value declaring---------
var w1_0_value = document.getElementById("w1_0").innerHTML;
var w1_1_value = document.getElementById("w1_1").innerHTML;
var w1_2_value = document.getElementById("w1_2").innerHTML;
var w1_3_value = document.getElementById("w1_3").innerHTML;
var w1_4_value = document.getElementById("w1_4").innerHTML;
var w1_5_value = document.getElementById("w1_5").innerHTML;
var w1_6_value = document.getElementById("w1_6").innerHTML;
//----------------------------------
//---WEEK 4 value declaring---------
var w4_6_value = document.getElementById("w4_6").innerHTML;
//----------------------------------
//---WEEK 5 value declaring---------
var w5_0_value = document.getElementById("w5_0").innerHTML;
var w5_1_value = document.getElementById("w5_1").innerHTML;
var w5_2_value = document.getElementById("w5_2").innerHTML;
var w5_3_value = document.getElementById("w5_3").innerHTML;
var w5_4_value = document.getElementById("w5_4").innerHTML;
var w5_5_value = document.getElementById("w5_5").innerHTML;
var w5_6_value = document.getElementById("w5_6").innerHTML;
//----------------------------------
//---WEEK 6 value declaring---------
var w6_0_value = document.getElementById("w6_0").innerHTML;
var w6_1_value = document.getElementById("w6_1").innerHTML;
var w6_2_value = document.getElementById("w6_2").innerHTML;
//----------------------------------


///----------Week 1-------------------------
if (w1_0_value == '') {
document.getElementById("w1_sunday_1").style.display = "none";
document.getElementById("w1_sunday_2").style.display = "none";
document.getElementById("w1_sunday_3").style.display = "none";
document.getElementById("w1_sunday_4").style.display = "none";
}
if (w1_1_value == '') {
document.getElementById("w1_monday_1").style.display = "none";
document.getElementById("w1_monday_2").style.display = "none";
document.getElementById("w1_monday_3").style.display = "none";
document.getElementById("w1_monday_4").style.display = "none";
}
if (w1_2_value == '') {
document.getElementById("w1_tuesday_1").style.display = "none";
document.getElementById("w1_tuesday_2").style.display = "none";
document.getElementById("w1_tuesday_3").style.display = "none";
document.getElementById("w1_tuesday_4").style.display = "none";
}
if (w1_3_value == '') {
document.getElementById("w1_wednesday_1").style.display = "none";
document.getElementById("w1_wednesday_2").style.display = "none";
document.getElementById("w1_wednesday_3").style.display = "none";
document.getElementById("w1_wednesday_4").style.display = "none";
}
if (w1_4_value == '') {
document.getElementById("w1_thursday_1").style.display = "none";
document.getElementById("w1_thursday_2").style.display = "none";
document.getElementById("w1_thursday_3").style.display = "none";
document.getElementById("w1_thursday_4").style.display = "none";
}
if (w1_5_value == '') {
document.getElementById("w1_friday_1").style.display = "none";
document.getElementById("w1_friday_2").style.display = "none";
document.getElementById("w1_friday_3").style.display = "none";
document.getElementById("w1_friday_4").style.display = "none";
}
if (w1_6_value == '') {
document.getElementById("w1_saturday_1").style.display = "none";
document.getElementById("w1_saturday_2").style.display = "none";
document.getElementById("w1_saturday_3").style.display = "none";
document.getElementById("w1_saturday_4").style.display = "none";
}
///-----------------------------------------
///----------Week 4-------------------------
if (w4_6_value == '') {
document.getElementById("w4_saturday_1").style.display = "none";
document.getElementById("w4_saturday_2").style.display = "none";
document.getElementById("w4_saturday_3").style.display = "none";
document.getElementById("w4_saturday_4").style.display = "none";
}
///-----------------------------------------
///----------Week 5-------------------------
if (w5_0_value == '') {
document.getElementById("week_5").style.display = "none";
document.getElementById("w4_to_w5_btn").style.display = "none";
}
if (w5_1_value == '') {
document.getElementById("w5_monday_1").style.display = "none";
document.getElementById("w5_monday_2").style.display = "none";
document.getElementById("w5_monday_3").style.display = "none";
document.getElementById("w5_monday_4").style.display = "none";
}
if (w5_2_value == '') {
document.getElementById("w5_tuesday_1").style.display = "none";
document.getElementById("w5_tuesday_2").style.display = "none";
document.getElementById("w5_tuesday_3").style.display = "none";
document.getElementById("w5_tuesday_4").style.display = "none";
}
if (w5_3_value == '') {
document.getElementById("w5_wednesday_1").style.display = "none";
document.getElementById("w5_wednesday_2").style.display = "none";
document.getElementById("w5_wednesday_3").style.display = "none";
document.getElementById("w5_wednesday_4").style.display = "none";
}
if (w5_4_value == '') {
document.getElementById("w5_thursday_1").style.display = "none";
document.getElementById("w5_thursday_2").style.display = "none";
document.getElementById("w5_thursday_3").style.display = "none";
document.getElementById("w5_thursday_4").style.display = "none";
}
if (w5_5_value == '') {
document.getElementById("w5_friday_1").style.display = "none";
document.getElementById("w5_friday_2").style.display = "none";
document.getElementById("w5_friday_3").style.display = "none";
document.getElementById("w5_friday_4").style.display = "none";
}
if (w5_6_value == '') {
document.getElementById("w5_saturday_1").style.display = "none";
document.getElementById("w5_saturday_2").style.display = "none";
document.getElementById("w5_saturday_3").style.display = "none";
document.getElementById("w5_saturday_4").style.display = "none";
}
///-----------------------------------------

///----------Week 6-------------------------

if (w6_0_value == '') {
document.getElementById("week_6").style.display = "none";
document.getElementById("w5_to_w6_btn").style.display = "none";
}

if (w6_1_value == '') {
document.getElementById("w6_monday_1").style.display = "none";
document.getElementById("w6_monday_2").style.display = "none";
document.getElementById("w6_monday_3").style.display = "none";
document.getElementById("w6_monday_4").style.display = "none";
}

if (w6_2_value == '') {
document.getElementById("w6_tuesday_1").style.display = "none";
document.getElementById("w6_tuesday_2").style.display = "none";
document.getElementById("w6_tuesday_3").style.display = "none";
document.getElementById("w6_tuesday_4").style.display = "none";
}
///-----------------------------------------
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function display_correct_week()
{
    var today_week = document.getElementById("inputweeknum").value;
    if (today_week == 'W1') {
        document.getElementById("week_1").style.display = "";
        document.getElementById("week_2").style.display = "none";
        document.getElementById("week_3").style.display = "none";
        document.getElementById("week_4").style.display = "none";
        document.getElementById("week_5").style.display = "none";
        document.getElementById("week_6").style.display = "none";
    }
    else if (today_week == 'W2') {
        document.getElementById("week_1").style.display = "none";
        document.getElementById("week_2").style.display = "";
        document.getElementById("week_3").style.display = "none";
        document.getElementById("week_4").style.display = "none";
        document.getElementById("week_5").style.display = "none";
        document.getElementById("week_6").style.display = "none";
    }
    else if (today_week == 'W3') {
        document.getElementById("week_1").style.display = "none";
        document.getElementById("week_2").style.display = "none";
        document.getElementById("week_3").style.display = "";
        document.getElementById("week_4").style.display = "none";
        document.getElementById("week_5").style.display = "none";
        document.getElementById("week_6").style.display = "none";
    }
    else if (today_week == 'W4') {
        document.getElementById("week_1").style.display = "none";
        document.getElementById("week_2").style.display = "none";
        document.getElementById("week_3").style.display = "none";
        document.getElementById("week_4").style.display = "";
        document.getElementById("week_5").style.display = "none";
        document.getElementById("week_6").style.display = "none";
    }
    else if (today_week == 'W5') {
        document.getElementById("week_1").style.display = "none";
        document.getElementById("week_2").style.display = "none";
        document.getElementById("week_3").style.display = "none";
        document.getElementById("week_4").style.display = "none";
        document.getElementById("week_5").style.display = "";
        document.getElementById("week_6").style.display = "none";
    }
    else if (today_week == 'W6') {
        document.getElementById("week_1").style.display = "none";
        document.getElementById("week_2").style.display = "none";
        document.getElementById("week_3").style.display = "none";
        document.getElementById("week_4").style.display = "none";
        document.getElementById("week_5").style.display = "none";
        document.getElementById("week_6").style.display = "";
    }
    else{}
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////
function year_up_function()
{var year_up_data = document.getElementById("inputyear").value;
  var year_up_data_value = +year_up_data+1;
  document.getElementById("inputyear").value = year_up_data_value;
  year_and_month_change();
}
function year_down_function()
{var year_down_data = document.getElementById("inputyear").value;
  var year_down_data_value = +year_down_data-1;
  document.getElementById("inputyear").value = year_down_data_value;
  year_and_month_change();
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

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function w1_to_w2_btn()
{
    document.getElementById("week_1").style.display = "none";
    document.getElementById("week_2").style.display = "";
    document.getElementById("week_3").style.display = "none";
    document.getElementById("week_4").style.display = "none";
    document.getElementById("week_5").style.display = "none";
    document.getElementById("week_6").style.display = "none";
    document.getElementById("inputweeknum").value = 'W2';
}

function w2_to_w1_btn()
{
    document.getElementById("week_1").style.display = "";
    document.getElementById("week_2").style.display = "none";
    document.getElementById("week_3").style.display = "none";
    document.getElementById("week_4").style.display = "none";
    document.getElementById("week_5").style.display = "none";
    document.getElementById("week_6").style.display = "none";
    document.getElementById("inputweeknum").value = 'W1';
}
function w2_to_w3_btn()
{
    document.getElementById("week_1").style.display = "none";
    document.getElementById("week_2").style.display = "none";
    document.getElementById("week_3").style.display = "";
    document.getElementById("week_4").style.display = "none";
    document.getElementById("week_5").style.display = "none";
    document.getElementById("week_6").style.display = "none";
    document.getElementById("inputweeknum").value = 'W3';
}
function w3_to_w2_btn()
{
    document.getElementById("week_1").style.display = "none";
    document.getElementById("week_2").style.display = "";
    document.getElementById("week_3").style.display = "none";
    document.getElementById("week_4").style.display = "none";
    document.getElementById("week_5").style.display = "none";
    document.getElementById("week_6").style.display = "none";
    document.getElementById("inputweeknum").value = 'W2';
}
function w3_to_w4_btn()
{
    document.getElementById("week_1").style.display = "none";
    document.getElementById("week_2").style.display = "none";
    document.getElementById("week_3").style.display = "none";
    document.getElementById("week_4").style.display = "";
    document.getElementById("week_5").style.display = "none";
    document.getElementById("week_6").style.display = "none";
    document.getElementById("inputweeknum").value = 'W4';
}
function w4_to_w3_btn()
{
    document.getElementById("week_1").style.display = "none";
    document.getElementById("week_2").style.display = "none";
    document.getElementById("week_3").style.display = "";
    document.getElementById("week_4").style.display = "none";
    document.getElementById("week_5").style.display = "none";
    document.getElementById("week_6").style.display = "none";
    document.getElementById("inputweeknum").value = 'W3';
}
function w4_to_w5_btn()
{
    document.getElementById("week_1").style.display = "none";
    document.getElementById("week_2").style.display = "none";
    document.getElementById("week_3").style.display = "none";
    document.getElementById("week_4").style.display = "none";
    document.getElementById("week_5").style.display = "";
    document.getElementById("week_6").style.display = "none";
    document.getElementById("inputweeknum").value = 'W5';
}

function w5_to_w4_btn()
{
    document.getElementById("week_1").style.display = "none";
    document.getElementById("week_2").style.display = "none";
    document.getElementById("week_3").style.display = "none";
    document.getElementById("week_4").style.display = "";
    document.getElementById("week_5").style.display = "none";
    document.getElementById("week_6").style.display = "none";
    document.getElementById("inputweeknum").value = 'W4';
}
function w5_to_w6_btn()
{
    document.getElementById("week_1").style.display = "none";
    document.getElementById("week_2").style.display = "none";
    document.getElementById("week_3").style.display = "none";
    document.getElementById("week_4").style.display = "none";
    document.getElementById("week_5").style.display = "none";
    document.getElementById("week_6").style.display = "";
    document.getElementById("inputweeknum").value = 'W6';
}
function w6_to_w5_btn()
{
    document.getElementById("week_1").style.display = "none";
    document.getElementById("week_2").style.display = "none";
    document.getElementById("week_3").style.display = "none";
    document.getElementById("week_4").style.display = "none";
    document.getElementById("week_5").style.display = "";
    document.getElementById("week_6").style.display = "none";
    document.getElementById("inputweeknum").value = 'W5';
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




//---------------------------year-----------------------------------
 $(document).ready(function(){  
      $('#year_up').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val();
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch}, 
                success:function(data){  
                     $('#div_result').html(data);  
                }  
           });  
      });  
 });
 $(document).ready(function(){  
      $('#inputyear').change(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val();
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},   
                success:function(data){  
                     $('#div_result').html(data);  
                }  
           });  
      });  
 });
 $(document).ready(function(){  
      $('#year_down').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val();
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch}, 
                success:function(data){  
                     $('#div_result').html(data);  
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
           var inputbatch = $('#inputbatch').val();
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},  
                success:function(data){  
                     $('#div_result').html(data);  
                }  
           });  
      });  
 });
  //--------------------------------------------------------------

  //---------------------------week-----------------------------------
   $(document).ready(function(){  
      $('#inputweeknum').change(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val();
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},   
                success:function(data){  
                     $('#div_result').html(data);  
                }  
           });  
      });  
 });
   $(document).ready(function(){  
      $('#w1_to_w2_btn').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val(); 
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},   
                success:function(data){  
                     $('#div_result').html(data);  
                }  
           });  
      });  
 });
   $(document).ready(function(){  
      $('#w2_to_w3_btn').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val(); 
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},   
                success:function(data){  
                     $('#div_result').html(data);  
                }  
           });  
      });  
 });
   $(document).ready(function(){  
      $('#w2_to_w1_btn').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val();
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},   
                success:function(data){  
                     $('#div_result').html(data);  
                }  
           });  
      });  
 });
   $(document).ready(function(){  
      $('#w3_to_w4_btn').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val();  
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},   
                success:function(data){  
                     $('#div_result').html(data);  
                }  
           });  
      });  
 });
   $(document).ready(function(){  
      $('#w3_to_w2_btn').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val();
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},   
                success:function(data){  
                     $('#div_result').html(data);  
                }  
           });  
      });  
 });
   $(document).ready(function(){  
      $('#w4_to_w5_btn').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val();
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},  
                success:function(data){  
                     $('#div_result').html(data);  
                }  
           });  
      });  
 });
   $(document).ready(function(){  
      $('#w4_to_w3_btn').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val();  
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},   
                success:function(data){  
                     $('#div_result').html(data);  
                }  
           });  
      });  
 });
   $(document).ready(function(){  
      $('#w5_to_w6_btn').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val();
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},   
                success:function(data){  
                     $('#div_result').html(data);  
                }  
           });  
      });  
 });
   $(document).ready(function(){  
      $('#w5_to_w4_btn').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val(); 
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},   
                success:function(data){  
                     $('#div_result').html(data);  
                }  
           });  
      });  
 });
   $(document).ready(function(){  
      $('#w6_to_w5_btn').click(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val();
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},   
                success:function(data){  
                     $('#div_result').html(data);  
                }  
           });  
      });  
 });
   //--------------------------------------------------------------

   //---------------------------batch-----------------------------------
    $(document).ready(function(){  
      $('#inputbatch').change(function(){  
           var inputyear = $('#inputyear').val();
           var input_fake_month = $('#input_fake_month').val();
           var inputweeknum = $('#inputweeknum').val();
           var inputbatch = $('#inputbatch').val();  
           $.ajax({  
                url:"rs/php/php_timetables.php",  
                method:"POST",  
                data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},   
                success:function(data){  
                     $('#div_result').html(data);  
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
    var inputbatch = $('#inputbatch').val();  
    $.ajax({  
            url:"rs/php/php_timetables.php",  
            method:"POST",  
            data:{inputyear:inputyear,input_fake_month:input_fake_month,inputweeknum:inputweeknum,inputbatch:inputbatch},  
            success:function(data){  
            $('#div_result').html(data);  
            }  
          });  
 });
//--------------------------------------------------------------