<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--   <meta http-equiv="refresh" content="30"> -->
      <link rel="stylesheet" href="css1/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" type="text/css" href="css/style1.css">
      <script type="text/javascript" src="form_validationko.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
      <script src="js1/jquery-slim.min.js"></script>
      <script src="js1/popper.min.js"></script>
      <script src="js1/bootstrap.min.js"></script>
      <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css"
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light " style="background-color: black">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <nav class="navbar navbar-light">
                  <form class="form-inline">
                     <!-- <a href="view_attendance.php"><input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Sign In"></a>-->
                     <a href="adminloginpage.php" style="border:1px solid #cc5200;padding:30%;border-radius: 6px;position: absolute;">Admin</a>

                  </form>
                  
               </nav>
         <div class="container">
            <a class="navbar-brand" href="#">
               
               <h1><?php include('animate/index.html');?></h1>
            </a>
            <br><br><br>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                     <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link disabled" href="#"></a>
                  </li>
               </ul>
               <nav class="navbar navbar-light">
                  <form class="form-inline">
                     <!-- <a href="view_attendance.php"><input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Sign In"></a>-->
                     <a href="view_attendance.php" style="border:1px solid #cc5200;padding:30%;border-radius: 6px;position: absolute;">employee SignIn</a>

                  </form>
                  
               </nav>
             
            </div>
         </div>
      </nav>
      <div class="container">
      <div class="row">
      <div class="col-lg-6">
         <!-- <div id="clock"> -->
            <!-- <div class="hour">
               <div class="min"></div>
               <div class="min"></div>
               <div class="min"></div>
               <div class="min"></div>
               <div class="min"></div>
            </div>
            <div class="hour">
               <div class="min"></div>
               <div class="min"></div>
               <div class="min"></div>
               <div class="min"></div>
               <div class="min"></div>
            </div>
            <div id="alarm"> </div>
            <div id="min"></div>
            <div id="hour"></div>
            <div id="sec"></div>
            <ol>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
            </ol> -->
            <hr>
            <!-- <center>
               <div class="date">
                  <?php 
                    // date_default_timezone_set("africa/nairobi");
                      //$time = date("h:i A",strtotime("+0 HOURS"));
                      //$date = date("M-d-Y");
                      ?>
                  <strong style="font-size: 1.6em;"><?//php echo  $date;?>&nbsp;&nbsp;<font style="color:red;">|</font>&nbsp;&nbsp; 
                  <div class="container">
                     <div class="row">
                        <div class="col-9">
                           <div class="clock m-2 p-1">
                           <span style="color:#fff;font-size:45px;" id="tick2" class="timeh1"></strong>
                           </div>
                        </div>
                     </div>
                  </div>
            </center> -->
            </div>
         </div>
         <div class="container d-flex  m-4">
         <div class="row">
            <div class="col-md-12">
            <div class="card m-2 p-1">
                  <div class="card-body">
                  <form id="register_form" novalidate  action="index.php" method="POST">
                 
                 <div class="wrapper">
                     <span class="bg-animate"></span>
                     <div class="form-box login">
                           <h3 class="text-center text-light">Start Session!</h3>
                                       
                                             <div class="input-box login">
                                                 <input type="text" name="user_no" required>
                                                 <label> EmployeeID</label>
                                                <i class="fa fa-user"></i>
                                             </div>
                                      
                                             <div class="input-box">
                                                 <input type="password" name="password" required>
                                                 <label> Password</label>
                                            <i class="fa fa-lock"></i>
                                             </div>
                                             <div class="form-group">
                           <input type="submit" value="Login"   class="btn btn-outline-success btn-block btn-lg" id ="id" name="search" />
                                       
                                         </div> 
                                         </form>
                  </div>
               </div>
               
                    </div>
                   

                </div>
            </div>
         </div>
             
      
                  <!-- <div class="card" style="border-top: 4px solid orange;border-bottom: 4px solid orange;border-radius: 4px;">
                     <h3 class="card-header" style="background-color:#23472d;border:none;"><b style="color:white">Attendance Form</b></h3>
                     <div class="card-body"style="background-color:#23472d;border:none;">
                        <div class="input-group input-group-lg">
                           <span class="input-group-addon" id="sizing-addon1"><img src="icon/users.ico"></span>
                           <input style="background-color:#23472d;border:none;" type="text" class="form-control" name="user_no" id="val1" placeholder="EmployeeID" aria-describedby="sizing-addon1" required="" />
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                           <span class="input-group-addon" id="sizing-addon1"><img src="icon/lock_blue.ico"></span>
                           <input style="background-color:#23472d;border:none;" type="password" class="form-control" name="password" id="val5" placeholder="Password..." aria-describedby="sizing-addon1" required="" />
                        </div>
                        <br>
                        <div class="form-group">
                           <input type="submit" value="Login"   class="btn btn-outline-primary btn-block btn-lg" id ="id" name="search" />
                        </div> -->
                 
               <!-- </form> -->
               <div class="container ps-5 ms-5 m-4 p-4">
               <div class="row padding">
                     <div class="col-md-8">
               <center>
               <strong> 
                     <div class="date">
                  <?php 
                     date_default_timezone_set("africa/nairobi");
                      $time = date("h:i A",strtotime("+0 HOURS"));
                      $date = date("M-d-Y");
                      ?>
                  <div class="container">
                     <div class="row">
                        <div class="col-9 mx-auto">
                           <div class="clock">
                           <span style="color:#fff;font-size:45px;" id="tick2" class="timeh1">
                        </strong>
                           </div>
                        </div>
                     </div>
                  </div>
                     </div>
                  </div>
              
            </center>
              </div> 
              </div>
               </div>
               <br>
               <?php
                  include('login.php');
                  ?>
            </div>
            <br>
            <!--<div class="alert alert-info hide alert-dismissible fade show" role="alert"><strong>All right Reserved @ 2018 By:Juniltoledo</strong>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
               </div>-->
            <script  src="js/index.js"></script>
   </body>
   </div>
   </div>
   <script src = "jsko/jquery.js"></script>
   <script src = "jsko/bootstrap.js"></script>
   
   <br>
   <div class="alert alert-info hide text-center">All right Reserved &copy; <?php echo date('Y');?> Created By:</div>
 </div>
   <br>
</html>
<br><br>
<script>
   // <!--/. tells about the time  -->
                 function show2(){
                 if (!document.all&&!document.getElementById)
                 return
                 thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
                 var Digital=new Date()
                 var hours=Digital.getHours()
                 var minutes=Digital.getMinutes()
                 var seconds=Digital.getSeconds()
                 var dn="PM"
                 if (hours<12)
                 dn="AM"
                 if (hours>12)
                 hours=hours-12
                 if (hours==0)
                 hours=12
                 if (minutes<=9)
                 minutes="0"+minutes
                 if (seconds<=9)
                 seconds="0"+seconds
                 var ctime=hours+"<span class='clk'>:</span>"+minutes+"<span class='clk'>:</span>"+seconds+" "+dn
                 thelement.innerHTML=ctime
                 setTimeout("show2()",1000)
                 }
                 window.onload=show2
         //-->
          
           
</script> <!--/. Script where the format of the interface time,month,day and year relies -->
<script type="text/javascript">
   $("#id").unbind('click').on("click", function () {
   
          uservalidate();
          passvalidate();
   
         if (uservalidate() === true
          && passvalidate() === true
   
          ) {
   
   };
   
   
   });
   
   
   function uservalidate() {
   if ($('#val1').val() == '') { 
    $('#val1').css('border-color', '#dc3545');
    return false;
     } else {
      $('#val1').css('border-color', '#28a745'); 
       return true;
   }
   
   };
   
   function passvalidate() {
   if ($('#val5').val() == '') { 
    $('#val5').css('border-color', '#dc3545');
    return false;
     } else {
      $('#val5').css('border-color', '#28a745'); 
       return true;
   }
   
   };
   
   
</script>
<script type="text/javascript">
   $(document).ready (function(){
               $("#success-alerts").fadeOut(15000);

               $("#id").unbind('click').on("click", function () {
                   $("#success-alerts").fadeTo(1000, 0).slideUp(5000, function(){
                    //$(this).remove();
                   });   
               }, 5000);
   
               $("#success-alert").fadeOut(15000);
               $("#id").unbind('click').on("click", function () {
                   $("#success-alert").fadeTo(1000, 0).slideUp(5000, function(){
                  // $(this).remove();
                   });   
               }, 5000);
    });
   
</script>
<script type="text/javascript">
   $(document).ready (function(){
               $("#danger-alert").fadeOut(15000);
               $("#id").unbind('click').on("click", function () {
                   $("#danger-alert").fadeTo(1000, 0).slideUp(5000, function(){
                    //$(this).remove();
                   });   
               }, 5000);
   
               $("#danger-alerts").fadeOut(15000);
               $("#id").unbind('click').on("click", function () {
                   $("#danger-alerts").fadeTo(1000, 0).slideUp(5000, function(){
                  // $(this).remove();
                   });   
               }, 5000);
    });
   
</script>
<!-- <script type="text/javascript">
  var content = $('#id');
content.fadeOut().load(page, function() {
    content.fadeIn();
});
</script> -->
<style>
   .clk{
      font-size: 45px;
      width: 30px;
      padding: 16px;
      display: inline-flex;
      text-align: center;
      position: relative; 
   }
   .clock{
      width: 400px;
      height: 100px;
      text-align: center;
      backdrop-filter: blur(40px);
      background:transparent;
      padding: 4px 4px;
      border: 1px solid orange;
      box-shadow: 0 0 25px orange;
      margin-top: 50px;
      position: absolute;
   }
   .clock::before{
      content: '';
      width: 78px;
      height: 74px;
      background: orange;
      border-radius: 5px;
      box-shadow: 10px 0 25px orange;
      position: absolute;
      left: -28px;
      top: -22px;
     

   }
   .clock::after{
      content: '';
      width: 78px;
      height: 74px;
      background: #23472d;
      border-radius: 5px;
      position: absolute;
      box-shadow: 10px 0 25px orange;
      right: -35px;
      bottom: -20px;
      /* z-index: -;  */

   }
   
.input-box{
    position: relative;
    width:310px;
    margin: 30px 0;
    border-bottom: 2px solid orange; 
}
.card{
    position: relative;
    width: 400px;
    height: 400px;
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: transparent;
    border: 1px solid gray;
    backdrop-filter: blur(15px);
}
.input-box label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: #fff;
    pointer-events: none;
    transition: .5s;

}

.input-box input:focus~label,
.input-box input:valid~label{
    top: -4px;
    color: orange;
}
.input-box input{
    width: 100%;
    height: 50px;
    background-color: transparent;
    outline: none;
    border: none;
    font-size: 18px;
    color: #fff; 
    padding-left: 35px;
    padding-right: 35px;
    transition: .5s;
}
.input-box input:focus,/*input type border*/
.input-box input:valid {
    border-bottom-color: #0ef;
}
.input-box .fa{
    position: absolute;
    top: 50%;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    line-height: 57px;
    transform: translateY(-50%);
    transition: .5s;
}
.input-box input:focus~i,
.input-box input:valid~i{
    color: orange;
}
.btn_login{
    position: relative;
    border: 2px solid orange;
    width: 100%;
    height: 45px;
    background: transparent;
    outline: none;
    cursor: pointer;
    border-radius: 40px;
    font-size: 16px;
    font-weight: 600;
    z-index: 1;
    overflow: hidden;
}
.btn_login::before{
    content: '';
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    height: 300%;
    background: linear-gradient(orange,#23472d,orange,#23472d);
    z-index: -1;
    transition: .5s;
}


	 body{
    background:url(images/HugeDomains_com.jpeg);
    background-image: linear-gradient();
    background-position:center;
    background-size: cover;
    background-repeat: no-repeat;
} 
</style>