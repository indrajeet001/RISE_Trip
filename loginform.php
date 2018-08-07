<!DOCTYPE html>
<html>
    <head>
        <title>Trip To Life</title>
        <script>
            
            window.onload = function()
            {
                one = window.location.href;
                status = one.search("flag");
                if(status != -1)
                {
                    document.getElementById("Error").innerHTML = "Username or Password May Be Incorrect";
                }    
            }
        </script>
        <style>
           #Error
           {
               
           }
            
        </style>
        <meta charset="utf-8">
        <meta name="Viewport" content="width=device-width,initial-scale=1.0">
        <style>
            @import url(https://fonts.googleapis.com/css?family=Robot=300);
            .login-page{
                width: 360px;
                padding: 8% 0 0;
                margin: auto;
            }
            .form{
                
                position: relative;
                z-index: 1;
                background: lightblue;
                max-width: 360px;
                margin: 0 auto 100px;
                padding: 45px;
                text-align: center;
                box-shadow: 0 0 20px 0 rgba(0,0,0,0.2), 0 5px 5px 0 rgba(0,0,0,0.24);
            }
            .form input{
                font-family: "Robot", sans-serif;
                outline: 0;
                background: #f2f2f2;
                width: 100%;
                border: 0;
                margin: 0 0 15px;
                padding: 15px;
                box-sizing: border-box;
                font-size: 14px;
                    
            }
            .form button{
                font-family: "Robot", sans-serif;
                text-transform: uppercase;
                outline: 0;
                background: blue;
                width: 100%;
                border: 0;
                padding: 15px;
                color: dodgerblue;
                font-size: 40px;
                -webkit-transition: all 0.3 ease;
                transition: all 0.3 ease;
                cursor: pointer;
                                
            }
            .form button:hover,.form button:active,.form button:focus{
                background: #43A047;
                }
            .form message  {
                margin: 15px 0 0;
                color: #b3b3b3;
                font-size: 12px;
                }
            .form message a {
                color: #4CAF50;
                text-decoration: none;
                }
            .form .register-form{
                display: none;
            }
            .container{
                position: relative;
                z-index: 1;
                max-width: 300px;
                margin: 0 auto;
                }
            .container:before, .container:after{
                content: "";
                display: block;
                clear: both;
                }
            .container .info{
                margin:  50px auto;
                text-align: center;
                }
            .container .info h1{
                margin: 0 0 15px;
                padding: 0;
                font-size: 36px;
                font-weight: 300;
                color: #1a1a1a
                }
            .comtainer .info span{
                color:#4d4d4d;
                font-size: 12px;
                }
            .form input[type=submit]
            {
                background-color: skyblue;
            
            }
            .form input[type=submit]:hover
            {
                background-color: skyblue;
            }
            .container .info span a
            {
                color: #000000;
                text-decoration: none;
            }
            .container .info span .fa
            {
                color: #EF3B3A;
            }
            body{
                background: url(Img/Kyoto/KyotoJapan%207.jpg);
            }
            
        </style>
    </head>
    <body>
        <div class="login-page">
        <div class="form">
            
            <form action="login.php" method="post">
            <input type="text" name="email" placeholder="Email"/>
                <input type="password" name="password" placeholder="Password"/>
                <input type="submit" name="Log In" value="Login">
                <br>
                <input type="submit" name="Sign Up" onclick="window.location ='registerform.php'" value="Sign Up" /> 
                <div id="Error"></div>
            </form>
            </div>    
            </div>
    </body>
</html>
        