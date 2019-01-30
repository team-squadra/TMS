<style>
/*-------------------------------------------------insidepages----------------------------------------------------*/
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
button ,input
{
  outline: none;
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
  outline: none;
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
  outline: none;
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
.dropdown-content button:hover {
 background-color: tomato;
 color: white;
}
.dropdown-content p {
  color: gray;
  padding: 5px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #67b12f;color: white;}
.dropdown:hover .dropdown-content {display: block;}

#signout
{
  color: dimgray;
  padding: 12px 16px;
  display: block;
  width: 100%;
  border: none;
  cursor: pointer;
  background-color: transparent; 
}
#signout:hover
{
  color: white;
  background-color: tomato; 
}
/*-------------------------------------------------insidepages----------------------------------------------------*/
</style>