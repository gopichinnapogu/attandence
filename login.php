<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/loader.css">
    <title>LoginPage</title>
    <!-- <style>
       #gopi{
              height:100%;
              width: 100%;
              z-index: -1;
       }
    </style> -->
</head>
<body style="bg-color:red;">
       <!-- <img src="js\images.jpeg" alt="gopi" height="100%" width="100%" id="gopi"> -->
    <div class="loginform">
             <div class="inputgroup topmarginlarge">
                    <input  type="text" id="txtUsername" required>
                    <label for="txtUsername" id="lblUsername">USER NAME</label>
             </div>

             <div class="inputgroup topmarginlarge">
                    <input type="password" id="txtPassword" required>
                    <label for="txtPassword" id="lblPassword">PASSWORD</label>
             </div>
             <div class="divcallforaction topmarginlarge">
                <button class="btnlogin inactivecolor" id="btnLogin">LOGIN</button>
             </div>  
             
             <div class="diverror topmarginlarge" id="diverror">
              <label class="errormessage" id="errormessage">ERROR GOES HERE</label>
             </div>
    </div>
    <div class="lockscreen" id="lockscreen">
       <div class="spinner" id="spinner"></div>
         <lable class="lblwait topmargin" id="lblwait">PLEASE WAIT</lable>
    </div>

         <script src="js/jquery.js"></script>
        <script src="js/login.js"></script>
</body>
</html>