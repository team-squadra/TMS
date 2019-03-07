<style>
/* page loading progress bar start*/

#myProgress {
  width: 100%;
  background-color: #4D4747;
}

#myBar {
  width: 1%;
  height: 5px;
  background-color:  #f44336;/* Red */
}

/* page loading progress bar end*/

body  {
  background-image: url("bg2.jpg");
  background-color: #6F6565;
  background-size: cover;
}


/*Css for hall deatils table start*/
#dHall {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  overflow: auto;
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

/*Css for hall deatils table end*/

/*Hall search bar start*/
#myInput {
  background-image: url('sico.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 30%; /* width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 3px solid #f44336; /* Add a grey border */
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

/*Hall search bar end*/

#input_form{
  width: auto;
}

/*input hall details form css start*/
.input-container {
  display: -ms-flexbox; /* IE10 */
  width: 50%;
  margin-bottom: 15px;
}

.icon {
  padding: 6px;
  background: #f44336;
  color: white;
  min-width: 50px;
  text-align: center;
  border-radius: 6px 0px 0px 6px;
}

.input-field {
  width: 73%;
  padding: 5px;
  outline: none;
  border-radius: 0px 6px 6px 0px;
}

.input-field:focus {
  border: 2px solid #f44336;
}

/* Set a style for the submit button */
.btn {
  background-color: #f44336;
  color: white;
  margin-top: 3px;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  font-size: 15px;
  border-radius: 6px 6px 6px 6px;
}

.btn:hover {
  opacity: 2;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.25);
}

#panel3{
    width: 70%;
  padding: 10px;
  text-align: center;
  background-color: #E09797;
  border: solid 1px #c3c3c3;
  border-radius: 16px 16px 16px 16px;
}
/*input hall details form css end*/

/*update hall details form css start*/

#uHall .edit{
   padding: 6px;
  background: #f44336;
  color: white;
  min-width: 50px;
  text-align: left;
  border-radius: 6px 0px 0px 6px;
}

#uHall .input{
   padding: 5px;
  outline: none;
 border-radius: 0px 6px 6px 0px;
}

#uHall .input:focus{
  border: 2px solid #f44336;
}

#uHallupdate{
  background-color: #f44336;
  color: white;
  padding: 15px 20px;
  border: none;
  width: 225%;
  opacity: 0.9;
  font-size: 15px;
  margin-top: 3px;
  cursor: pointer;
  border-radius: 6px 6px 6px 6px;
}

#uHallupdate:hover {
        opacity: 2;
        box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.25);

}
#panel, #flip {
  width: 70%;
  padding: 10px;
  text-align: center;
  background-color: #E09797;
  border: solid 1px #c3c3c3;
  border-radius: 16px 16px 16px 16px;
}
/*update hall details form css end*/

 /*Remove a hall css start*/
 #panel2,#flip2{
  width: 70%;
  padding: 10px;
  text-align: center;
  background-color: #E09797;
  border: solid 1px #c3c3c3;
   border-radius: 16px 16px 16px 16px;
 }
 #panel2,#panel{
  padding-top: 3%;
  padding-bottom: 3%;
 }
 #removebtn{
    background-color: #f44336;
  color: white;
  padding: 15px 20px;
  border: none;
  width: 50%;
  opacity: 0.9;
  font-size: 15px;
  border-radius: 6px 6px 6px 6px;
 }
 #removebtn:hover {
  opacity: 2;
        box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.25);
 }

#tooltip{
  background-color: black;
  color: #fff;
  text-align: center;
  padding: 3px 0;
  border-radius: 6px;
   top: -5px;
  left: 50%;
}

</style>
