<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SAQIB </title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link rel="icon" type="image" href="pic2.jpg">
    <link rel="stylesheet" href="port_css.css">
</head>
<body>
    
<?php 
     $err = " .";
     
     if($_SERVER['REQUEST_METHOD']=="POST"){
    date_default_timezone_set("asia/kolkata");

    $name  = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $mess  = $_POST['msg'];

     $curr_date = date("D/d/m/Y");    
     $curr_time = date("h:i:sa");

    $servername = 'localhost';
    $username = 'root';
    $password = 'mysql';
    $db  = 'portfolio';
      

    $conn = new mysqli($servername,$username,$password,$db);
    $sql = "INSERT INTO `message`(`Name`, `Phone`, `Email`, `Address`,`Date`, `Time`) VALUES('$name','$phone','$email','$mess','$curr_date','$curr_time')";

    // $conn->query($sql);
      
    // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // echo "Connected successfully";
    
    
    if($conn->query($sql) === TRUE){
        // echo "Thanks for messaging.";
        $err = "Thanks";
    }

}


?>




    <header class="head">
         <div class="port"> <a href="index.php"> Portfolio </a> </div>    
            <div><img src="menu.png" alt="" height="30px" width="auto" id="img" onclick="menu_togle()" ></div>
            <div id="menu"> 
                <a href="index.php" onclick="hide()"> <div> Home  </div> </a>
                <a href="#about" onclick="hide()"> <div> About </div> </a>
                <a href="#skills" onclick="hide()"> <div> Skills </div> </a>
                <a href="#works" onclick="hide()"> <div> Works </div> </a>
                <a href="#resume" onclick="hide()"> <div> Resume </div> </a>
                <a href="#contact" onclick="hide()"> <div> Contact </div> </a>
            </div>
    </header>
    <div class="home" id="home">
        <div class="home_content">
            <div class="hello">Hello, My name is </div>
            <div class="saqib">Mohd Saqib</div>
            <div class="developer">I'm a Web Developer | Student </div>
            <a href="#contact"> <button class="hire"> Hire </button> </a>
        </div>        
   </div>
   <div id="about">
         <div class="who"> About me <hr> </div>   
         <span  class="mypic"> <img src="pic2.jpg" alt="" > </span>
         <span class="bio"> 
             I'am currently a 3rd year student of Diploma in
              Computer Engineering  at Jamia Millia Islamia University.
             I am a hard working, honest , good timekeeper and always
              willing to learn new skills. I’m a nice fun and friendly person.

             
         </span>
        
    </div>


   <div id="skills">
      <div class="skill_head"> Skills <hr></div>     
     <div class="skill_list">
         <ul>
             <li> C/C++ </li>
             <li> JavaScript </li>
             <li> HTML </li>
             <li> CSS </li>
             <li> MySql </li>
             <li> PHP </li>
             <li> jQuery </li>
         </ul>
     </div>
  </div>


<div id="works">
  <div class="work_head"> Works <hr> </div>
  <ul class="work_list">
      <li> <a href="Icard/Icard_form.php"> Identity Card Generator </a> </li>
      <li> <a href="#"> College Website </a> </li>
  </ul>
</div>


<div id="resume">
  <div class="resume_head"> Resume <hr> </div>
  <a href="#"> <div class="resume_download">
     Download Resume  
  </div> </a>
</div>



<div id="contact">
    <div class="contact_head"> Contact <hr></div>

    <div class="address"> 
        <span class="adr_head"> Address  </span> <br> <br>
        <span class="adr" > <img src="adress_icon.png" alt="" height="30px" width="auto"> &emsp; &nbsp; 
             Dr. BR ambedkar Hostel,Jamia Millia Islamia,<br>
            &emsp; &emsp; &ensp; Okhla Jamia Nagar, 
             New Delhi- 110025  </span>  <br> <hr> <br>
            <span class="phone"> <img src="call.png" alt="" height="20px" width="auto"> &emsp; +91 95480 97513 </span> <br> <hr> <br>      
            <span class="email"> <img src="message.png" alt="" height="20px" width="auto"> &emsp; mohdsaqibnavodaya@gmail.com </span> <br> <hr>  <br>    
            <a href="https://www.linkedin.com/in/mohd-saqib-0ab247189/"> <span> <img src="linkedin.png" height="30px" width="auto"> &emsp;  </span> </a> 
            <a href="https://github.com/MohdSaqib2003/"> <span> <img src="github.png" height="30px" width="auto"> &emsp;  </span> </a>
            <a href="https://www.facebook.com/saqibNavodayan/"> <span> <img src="facebook.png" height="30px" width="auto"> &emsp;  </span> </a> <hr>
            <br><br>
        </div>


        <div class="message"> 
          <span class="msg_head"> Message me  </span>  <br> <br> <br>
          <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>"  class="msg_form" onsubmit="return validate()"> 
                <input class="name" type="text" name="name" id="nme" placeholder="Name" autocomplete="OFF">
                <input type="phone" class="phone_no" id="phone" name="phone" placeholder="Phone" autocomplete="OFF"> <br>
                <input type="email" class="email_adr" id="email" name="email" placeholder="Email" autocomplete="OFF"> <br>
                <input type="text" class="msg" name="msg" placeholder="Message" id="mess" autocomplete="OFF"><br><span id="error"> </span><br>
                <input type="submit" class="button" value="Send message" id="submit" > <br>
                <span id="response"> <?php echo $err;?> </span>
            </form>
            
        </div>
</div>

<footer class="thank">
        <div>Thanks for visiting</div>
</footer>





    <script>
        var menu_icon = document.getElementById("img");
        var menu = document.getElementById("menu");

        function menu_togle(){
            if(menu.style.display == "block"){
                menu.style.display = "none";
                menu_icon.src="menu.png";
                menu.style.margin = "0px";
            }
            else{
                menu.style.display = "block";
                menu_icon.src="cross_mark.png";
                menu.style.margin = "-10px";
            }

        }
        function hide(){
            if(innerWidth<=900){
                  menu.style.display = "none";
                    menu_icon.src="menu.png";
            }
        }
        
        var err = document.getElementById("error");
        
        function validate(){
            var mess = document.getElementById("mess").value;
            var name = document.getElementById("nme").value;
            if(name==""){
                err.innerHTML = "please enter name";
                return false;
            }
            
            var phone_no = document.getElementById("phone").value;
            var email = document.getElementById("email").value;
            var reg = /^([0-9]){10}$/;
            if(!reg.test(phone_no)){
                if(phone_no!=""){
                    err.innerHTML = "Enter a valid Phone No.";
                    return false;
                }
            }
            reg = /^([a-zA-Z0-9\_\.]+)@([a-zA-Z]+)\.([a-zA-Z]+)$/;
            if(!reg.test(email)){
                if(email!=""){
                    err.innerHTML = "Enter a valid email";
                    return false;
                }    
            }

            if(mess==""){
                err.innerHTML = "write something";
                return false;
            }
            // load_data();
            return true;

        }
        
    </script>
</body>
</html>