<style>
#myBar {
  width: 1%;
  height: 5px;
  background-color:  #555 /* Light black */
}

/* page loading progress bar end*/
#controler_table{
	color: dimgray;float: right;margin-right: 30px; margin-left: 30px;margin-top: 5px;font-size: 13px;text-align: center;font-family: Century Gothic;font-size: 20px;
}
#controler_table td
{
	padding-left: 10px;padding-right: 10px;
}
#controler_table a
{
  border: none;
  outline: none;
  width: 30px;
  height: 30px;
  padding: 10px;
  margin: 20px;
  text-align: center;
  font-size: 10px;
  color: black;
  background-color: #ddd;
  cursor: pointer;
  border-radius: 50%;
  transform: rotate(90deg);
}
#controler_table a:hover
{
border:  2px solid #4CAF50;
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


.lec_schedule {
  font-family: Century Gothic;
  text-align: center;
  border-collapse: collapse;
  width: 100%;
  font-size: auto;
}
.lec_schedule td, #lec_schedule th {
  border: 1px solid dimgray;
  padding: 8px;
}
.lec_schedule th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #282729;
  color: white;
}
.lec_schedule input
{
	width: 100%;
	height: 100%;
	border: none;
	margin: 0px;
	background-color: transparent;
	text-align: center;
}
.lec_schedule select
{
 width: 100%;
outline: none;
border: none;
cursor: pointer;
font-family: Century Gothic;
}
.lec_schedule option::-webkit-appearance: none;
{
border: none;
border:  1px solid darkgrey; border-radius: 20px;
}
.div_btn
{
  padding: 8px 16px;
  background-color: #4CAF50;
  color: white;
  border-radius: 50%;
  cursor: pointer;
  position: absolute;
  top: 50%;
  
}
.next
{
	right: -5px;
}
.previous
{
	left: -5px;
}
.div_btn:hover {
  background-color: #ddd;
  color: black;
  cursor: pointer;
}
#insert_update
{
  padding: 8px 16px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  position: absolute;
  bottom: 5px;
  right: 5px;
  font-size: 15px;
}
#insert_update:hover{
  background-color: #ffc107;
  color: black;
  cursor: pointer;
}
#inseted_updated_data
{
  background-color: #4CAF50;
  color: white;
  width: 200px;
  height: 50px;
  position: fixed;
  bottom: 10px;
  right:10px;
}
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
  position: fixed;
  bottom: 10px;
  right:10px;
  padding: 15px;
}

#insert_alert {background-color: #4CAF50;}
#update_alert {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
#try_to_add_data
{
  padding: 8px 16px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  position: absolute;
  bottom: 5px;
  right: 5px;
  font-size: 15px;
}
</style>
