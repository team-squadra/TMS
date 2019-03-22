<style>
/* page loading progress bar start*/
#myBar {
  width: 1%;
  height: 5px;
  background-color:  #4CAF50; /* green */
}

/* page loading progress bar end*/

#controler_table{
	color: dimgray;margin-left: 20px; float: right; margin-top: 5px;font-size: 25px;text-align: center;font-family: Century Gothic;
}
#controler_table td
{
	padding-left: 10px;padding-right: 10px;
}
#controler_table button
{
	border: none;
	outline: none;
	width: 30px;
  height: 30px;
  padding: 5px;
  margin: 2px;
	text-align: center;
	font-size: 10px;
	color: black;
	background-color: #ddd;
	cursor: pointer;
	border-radius: 50%;
  transform: rotate(90deg);

}
#controler_table button:hover
{
border:  2px solid #4CAF50;
}
#controler_table select,input
{
font-size: 15px;
color: DodgerBlue;
width: 100%;
outline: none;
border: none;
cursor: pointer;
font-family: Century Gothic;
}
#controler_table option::-webkit-appearance: none;
{

border: none;
border:  1px solid darkgrey; border-radius: 20px;
}
#controler_table select :hover
{
cursor: pointer;
background-color: red;
}

#lec_schedule {
  font-family: Century Gothic;
  text-align: center;
  border-collapse: collapse;
  width: 100%;
  background-color: transparent;
}
#lec_schedule td, #lec_schedule th {
  border: 1px solid dimgray;
  padding: 8px;
}
#lec_schedule td
{
  color: black;
}
#lec_schedule th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #282729;
  color: white;
}
#try_to_add_data
{
  padding: 8px 16px;
  text-decoration: none;
  background-color: transparent;
  color: gray;
  border: 2px solid DodgerBlue;
  border-radius: 20px;
  cursor: pointer;
  font-size: 15px;
}
#try_to_add_data:hover{
  background-color: DodgerBlue;
  color: white;
}
#openFullscreen
{
  padding: 10px;
  border-radius: 20px;
  border: none;
  background-color: #ddd;
}
</style>
