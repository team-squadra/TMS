<style>
    .error 
{
    color: #FF7800;
}
body{
    margin: 0;
    padding: 0;
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("../resources/ll.jpg");
    background-size: cover;
    font-family: sans-serif;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 0px;
    text-align: center;
    font-size: 22px;
}
h2{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 15px;
}
.recover{
    width: 350px;
    height: 440px;
    background: rgba(0,0,0,0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius: 20px;

}
.recover p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.recover input{
    width: 100%;
    margin-bottom: 20px;
}
.recover input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
    text-align: center;
}
.recover input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #67b12f ;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.recover input[type="submit"]:hover
{
    cursor: pointer;
    background: tomato;
    color: white;
}
.recover button{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
    border: none;
    background-color: transparent;
    outline: none;
}
.recover button:hover
{
    color: #ffc107;
    cursor: pointer;
}
#h1_newacc{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 12px;
}
::placeholder {
    color: darkgrey;
    opacity: 1; /* Firefox */
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: darkgrey;
}
::-ms-input-placeholder { /* Microsoft Edge */
   color: darkgrey;
}
</style>
