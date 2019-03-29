<style>
#myProgress {
  width: 100%;
  background-color: transparent;
}

#myBar {
  width: 1%;
  height: 5px;
  background-color:  #f44336;/* Red */
}

body  {
  background-color: #6F6565;
  background-size: cover;
}

#dHall {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}


#dHall td, #dHall th {
  border: 1px solid #ddd;
  padding: 8px;
}

#dHall tr:nth-child(even){background-color: #f2f2f2;}

#dHall tr:hover {background-color: #DFB3B3;}

#dHall th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #f44336;
  color: white;
  height: 50px;
  font-size: 20px;
}

#dHall td{
	text-align: center;
}
#myInput {
  background-image: url('sico.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 30%; /* width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 3px solid #f44336; /* Add a red border */
  border-radius: 17px 17px 17px 17px; /*make corners round*/
  margin-bottom: 12px; /* Add some space below the input */
  transition: width 0.5s;/* transition time*/
  margin-bottom: 1.5%;
}

#myInput:hover {
	 box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.25);
	 width: 60%;
}

#myInput {-webkit-transition-timing-function: ease;}

#input_form{
  width: auto;
}

.sideright{
  float: right;
  clear: right;
}

/*input hall details form css start*/
/*.input-container {
  display: -ms-flexbox; 
  width: 0%;
  margin-bottom: 15px;
  background-color: black;
  position: absolute;
}
*/
.icon {
  padding: 5px;
  background: #f44336;
  color: white;
  height: 19px;
  min-width: 60px;
  text-align: center;
  border-radius: 6px 0px 0px 6px;
}

.input-field {
  width: 52%;
  padding: 5px;
  outline: none;
  border-radius: 0px 6px 6px 0px;
}

.input-field:focus {
  border: 2px solid #f44336;
}

/* Set a style for the submit button */
.btn {
  letter-spacing: 2px;
  background-color: #f44336;
  color: white;
  margin-top: 3px;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 68%;
  opacity: 0.9;
  font-size: 15px;
  border-radius: 6px 6px 6px 6px;
}

.btn:hover {
  opacity: 2;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.25);
  letter-spacing: 10px;
  font-weight: bolder;
}

#panel3{
    width: 60%;
    height: 60%;
  padding: 15px;
  text-align: center;
  background-color: #E09797;
  border: solid 1px #c3c3c3;
  border-radius: 16px 16px 16px 16px;
   border: 3px solid #f44336;
}

.dropdown{
  width: 50%;
  height: 25px;
  border-radius: 10px 10px 10px 10px;
  outline: none;
  letter-spacing: 1px;
  text-align: center;
  font-weight: bold;
}

#uHall .edit{
   padding: 6px;
   height: 33px;
  background: #f44336;
  color: white;
  min-width: 50px;
  text-align: left;
  border-radius: 6px 0px 0px 6px;
}

#uHall .input{
   padding: 5px;
   height: 33px;
  outline: none;
 border-radius: 0px 6px 6px 0px;
}

#uHall .input:focus{
  border: 2px solid #f44336;
}

#uHallupdate{
  letter-spacing: 2px;
  background-color: #f44336;
  color: white;
  padding: 15px 20px;
  border: none;
  width: 229%;
  opacity: 0.9;
  font-size: 15px;
  margin-top: 3px;
  cursor: pointer;
  border-radius: 6px 6px 6px 6px;
}

#uHallupdate:hover {
        opacity: 2;
        box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.25);
        letter-spacing: 10px;
        font-weight: bolder;

}
#panel, #flip {
  width: 60%;
  max-width: 60%;
  padding: 10px;
  text-align: center;
  background-color: #E09797;
  border: solid 1px #c3c3c3;
  border-radius: 16px 16px 16px 16px;
   border: 2px solid #f44336;

}

 #panel2,#flip2{
  width: 60%;
   min-width: 60%;
  padding: 10px;
  text-align: center;
  background-color: #E09797;
  border: solid 1px #c3c3c3;
   border-radius: 16px 16px 16px 16px;
    border: 2px solid #f44336;
 }
 
 #panel2,#panel{
  padding-top: 3%;
  padding-bottom: 3%;
 }
 #removebtn{
  letter-spacing: 2px;
    background-color: #f44336;
  color: white;
  padding: 15px 20px;
  border: none;
  width: 68%;
  opacity: 0.9;
  font-size: 15px;
  border-radius: 6px 6px 6px 6px;
 }

 #removebtn:hover {
  opacity: 2;
        box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.25);
        letter-spacing: 10px;
        font-weight: bolder;
 }

/*#tooltip{
  background-color: black;
  color: #fff;
  text-align: center;
  padding: 3px 0;
  border-radius: 6px;
   top: -5px;
  left: 50%;
}*/

/*css for side row*/
#side{
  width:790px;  
}
/* form headers*/
.form_header{
  background-color:orange;
  height: 50px;
}

.cs_header td {
    letter-spacing: 4px;
    font-weight: bolder;
    padding-bottom:5px;
    padding-left: 15px;
}

.custom-select{
  background-color: yellow;
}

.custom-select select {
  display: none; /*hide original SELECT element: */
}
</style>