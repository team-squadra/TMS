<style>
.pro_pic
{
  width: 150px;
  height: 150px;
  background-color: transparent;/*#e5e5e7;*/
  border: 5px solid gray;
  border-radius: 50%;
  padding: 0px 0px 0px 0px;
}
.pro_pic img {
  width: 100%;
  height: 100%;
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
    border:none;
    color: white;
    border-radius: 50%;
    padding:10px;
}
#sub:hover
{
    cursor: pointer;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
}

#profile img
{
  width: 30px;
  height: 30px;
}

#profile td{
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 5px; 
}

#profile input[type="text"]
{
    border: none;
    border-bottom:  1px solid grey;
    background: transparent;
    border-radius: 10px;
    outline: none;
    height: 30px;
    color: dimgrey;
    font-size: 16px;
    width: 300px;
    text-align: center;
}
#image{
  color: transparent;
}
#image::-webkit-file-upload-button
{
  font-size: 12px;
  border: 1px solid MediumSeaGreen;
  border-radius: 10px;
  background-color: MediumSeaGreen;
  outline: none;
  cursor: pointer;
  color: white;
  margin-left: 90px;
  padding: 5px;
}
#image::-webkit-file-upload-button:hover
{
    background: #ffc107;
    color: #000;
    border: 1px solid #ffc107;
}
#profile input[type="text"]:hover
{
    border-bottom:  3px solid MediumSeaGreen;
    color: MediumSeaGreen;
    font-weight: bold;

}
#lms{
  background-image:url("../resources/black_lms.png");
  background-size:100% 100%;
  background-position: center;
  width: 50px;
  height: 50px;
  position: fixed;
  bottom: 0px;
  right:5px;
  padding: 5px;
}
#lms:hover{
background-image:url("../resources/yellow_lms.png");
}

/* page loading progress bar start*/

#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 1%;
  height: 5px;
  background-color: black;
}

/* page loading progress bar end*/
</style>