<style type="text/css">
* {
  box-sizing: border-box;
}
body {
    margin: 0;
    padding: 0;
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("resources/assests/ll.jpg");
    background-size: cover;
    font-family: sans-serif;
}
#head {
  color: white;
  font-size: 40px;
  font-family: "Century Gothic";
  margin-bottom: 50px;
  width: auto;
}
#head a:hover{
  color: red;
}
.btn
{
    text-decoration: none;
    font-family: "Century Gothic";
    font-size: 30px;
    border: 2px solid white;
    color: white;
    border-radius: 20px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 2px;
    padding-bottom: 2px;
}
.btn:hover
{
    color: white;
    border: 5px solid #39b54a;
    cursor: pointer;
}
#ico{
  width: 200px;
  height: 200px;
  margin-top: 100px;
  border-radius: 50%;
}
#ico:hover{
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,1);
}
#nsbm{
  background-image:url("resources/assests/bw.png");
  background-size:100% 100%;
  background-position: center;
  width: 250px;
  height: 100px;
  position: fixed;
  bottom: 10px;
  right:10px;
  padding: 15px;
}
#nsbm:hover{
background-image:url("resources/assests/nsbm.png");
}
.main {   
    flex: 30%;
    padding: 20px;
    width: auto;
}
.row {  
    display: flex;
    flex-wrap: wrap;
}
.side {
    
    width: 35%;
    height: auto;
    padding: 10px;
    float: right;
    min-height: 500px;
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
.mySlides {
  display: none;
}
img {
  vertical-align: middle;
}
.slideshow-container {
  width: 500px;
  height: 500px;
}
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom:0px;
  width: 100%;
  text-align: center;
  background-color: rgba(0,0,0,0.5);
}
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  top: 0;
}
.dot {
  height: 5px;
  width: 5px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
#active {
  background-color: orange;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
