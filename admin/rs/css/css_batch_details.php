<style>
/* page loading progress bar start*/
#myBar {
  width: 1%;
  height: 5px;
  background-color:  #2196F3; /* Blue */
}

/* page loading progress bar end*/

/*add batch button css*/

.button {
  border-radius: 4px;
  background-color: #2196F3;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 210px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 35px;
  letter-spacing: 2px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 18px 0 rgba(0, 0, 0, 0.23);
  letter-spacing: 3px;
  font-weight: bold;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border:1px solid #ccc;
  background: #f1f1f1;
  border-radius: 10px 10px 10px 10px;
  letter-spacing: 2px;
  font-weight: bold;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ccc;
  outline: none;
  border: 3px solid #2196F3;
  color: black;
  font-weight: bold;
  letter-spacing: 2px;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
}
input[type=color]{
  border:none;
  width: 25px;
  height: 25px;
  outline:none;
  border-radius: 5px;
  padding: 2px;
}
#col{
  width: 100%;
  height: 3%;
  margin-top: 5px; 
  border-radius: 10px 10px 10px 10px;
}
/* Set a style for all buttons */
.form_btn {
  background-color: #4CAF50;
  font-size: 15px;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  letter-spacing: 3px;
  border-radius: 10px 10px 10px 10px;
}

.form_btn:hover {
  opacity: 0.8;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 18px 0 rgba(0, 0, 0, 0.23);
  letter-spacing: 6px;
  font-weight: bold;
}


/* Extra styles for the cancel button */
.cancelbtn {
  width: 100%;
  height: 5%;
  padding: 10px 18px;
  background-color: #f44336;
  letter-spacing: 3px;
  border-radius: 10px 10px 10px 10px;
}
.cancelbtn:hover {
  opacity: 0.8;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 18px 0 rgba(0, 0, 0, 0.23);
  letter-spacing: 6px;
  font-weight: bold;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;

}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 4.5%;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 6px solid #2196F3;
  width: 30%; /* Could be more or less, depending on screen size */
  border-radius: 40px 40px 40px 40px;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

.edit_title{
  font-weight: bold;
}
/*#error_batch_name{
  display: none;
}*/

/*show all the batch details*/

#dbatch {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}


#dbatch td, #dbatch th {
  border: 0px solid #ddd;
  padding: 15px;
}

#dbatch tr:nth-child(even){background-color: transparent;}

#dbatch tr:hover {background-color: #A8CCF1;}

#dbatch th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #2196F3;
  color: white;
  height: 50px;
  font-size: 20px;
}

#dbatch td{
  text-align: center;
  font-size: 18px;
}

#show_col{

  width: 50%;
  height: 30px;
}

.dropdown{
  width: 32%;
  height: 30px;
  border-radius: 30px 30px 30px 30px;
  outline: none;
  letter-spacing: 2px;
  text-align: center;
}


#show_batches_table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  margin: 20px;
}

#show_batches_table td, #show_batches_table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#show_batches_table tr:nth-child(even){background-color: #f2f2f2;}

#show_batches_table tr:hover {background-color: #ddd;}

#show_batches_table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
