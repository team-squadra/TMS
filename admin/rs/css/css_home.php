<style>
/* page loading progress bar start*/

#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 1%;
  height: 5px;
  background-color:  #4CAF50; /* green */
}

/* page loading progress bar end*/

#controler_table{
	color: dimgray;float: right;margin-right: 30px; margin-left: 30px;margin-top: 5px;font-size: 13px;text-align: center;font-family: Century Gothic;
}
#controler_table td
{
	padding-left: 10px;padding-right: 10px;
}
#controler_table button
{
	border: none;
	outline: none;
	width: 100%;
  height: 100%;
	text-align: center;
	padding: 2px;
	font-size: 20px;
	color: MediumSeaGreen;
	background-color: transparent;
	cursor: pointer;
	border-radius: 50%;
}
#controler_table button:hover
{
color: orange;
}
#controler_table select
{
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
}

#lec_schedule td, #lec_schedule th {
  border: 1px solid dimgray;
  padding: 8px;
}


#lec_schedule th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #282729;
  color: white;
}

</style>
