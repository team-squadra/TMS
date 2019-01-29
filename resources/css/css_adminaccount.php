<style type="text/css">
*
{
	margin: 0;
	padding: 0;
}
header
{
  height: 45px;
  background-color: #282923;
}
.main-nav
{
	 float: right;
	 list-style: none;
	 margin-top: 30px;
}
.main-nav li
{
	display: inline-block;
}
.main-nav li a
{
	color: white;
	text-decoration: none;
	padding: 5px 20px;
	font-family: "Roboto",sans-serif;
	font-size: 15px;
}
.main-nav li.active a
{
	border: 2px solid #67b12f;
  background-color: #67b12f;
  border-radius: 10px;
}
.main-nav li a:hover
{
	border: 1px solid white;
  border-radius: 10px;
}
.logo
{
	width:auto;
	height: auto;
	float: left;
  position: absolute;
  margin: 5px;
}
body
{
  font-family: Arial, Helvetica, sans-serif;
  background-color: #ddd;
}
.main {   
    flex: 40%;
    background-color: transparent;
    padding: 20px;
}
.row {  
    display: flex;
    flex-wrap: wrap;
}
.side {
    
    width: 18%;
    min-width: 200px;
    height: auto;
    background-color: transparent;
    padding: 10px;
    float: right;
    min-height: 615px;
}
.pro_pic
{
  width: 150px;
  height: 150px;
  background-color: transparent;/*#e5e5e7;*/
  border: 5px solid gray;
  padding: 0px 0px 0px 0px;
}
.pro_pic img {
  width: 100%;
  height: 100%;
}
.pro_pic input {  
  background-color: black;
  border-radius: 5px;
  border: none;
  color: white;
  padding: 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  cursor: pointer;
}
#parent2 {
  position: relative;
}
#child2 {
  position: absolute;
  left:5px;
  bottom:10px;
}
#account_table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  text-align: center;
  border-collapse: collapse;
  width: 100%;
}
#account_table td, #account_table th {
  border: 1px solid #ddd;
  padding: 8px;
}
#account_table tr:nth-child(even){background-color: #f2f2f2;}

#account_table th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: MediumSeaGreen;
  color: white;
}
.input
{
  width: 100%; 
  height: 100% ; 
  text-align: center; 
  font-size: 15px; 
  border : none;
}
#sub
{
    float: right;
    margin: 20px;
    font-family: "Century Gothic";
    font-size: 12px;
    border: 2px solid MediumSeaGreen;
    color: white;
    border-radius: 20px;
    padding: 10px;
    background-color: MediumSeaGreen;
}
#sub:hover
{
    color: white;
    border: 5px solid #67b12f;
    background-color: #67b12f;
    cursor: pointer;
}
@media screen and (max-width: 100px) {
    .row {   
        flex-direction: column;
    }
}
@media screen and (max-width: 400px) {
    .navbar a {
        float: none;
        width:100%;
    }
}
.user
{
  width: 50px;
  height: 50px;
  background-color: transparent;
  float: right;
}
.user_table
{
  padding-top: 5px;
  padding-left: 5px;
  padding-bottom: 5px;
  float: right;
  margin-right: 5px;
}
#user_parent {
  position: relative;
  width: 100%;
  height: 100%;
}
#user_child {
  position: absolute;
  left:0px;
  bottom:0px;
  right: 0px;
  top: 0px;
}
.dropbtn {
  background-color: transparent;
  border:none;
  width: 100%;
  height: 100%;
  color: white;
  cursor: pointer;
}
.dropdown {
  position: relative;
  display: inline-block;
  width: 100%;
  height: 100%;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 150px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
  z-index: 1;
  right: 5px;
  top: 50px;
  border-radius: 5px;
}
.dropdown-content a {
  color: dimgray;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
      margin-top: 5px;
  margin-bottom: 5px;
}
.dropdown-content p {
  color: gray;
  padding: 5px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #67b12f;color: white;}
.dropdown:hover .dropdown-content {display: block;}
</style>