<html>
    <head>
        <title>Welcome to hell's first step</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style>
            .box 
                {
                    width:300px;
                    height:300px;
                    background-color:darkslategrey;
                    position:fixed;
                    margin-left:-150px; /* half of width */
                    margin-top:-150px;  /* half of height */
                    top:50%;
                    left:50%;
                    border-bottom: black;
                    border: solid;
                }
                body
                { 
                    background-image:url("indexpic.jpg");
                    color: aliceblue;
                }
                a
                {
                    color:turquoise;
                }
                a:visited 
                {
                    color:orange ;
                }

            </style>
            <script type="text/javascript">
                        function validate()
                    {
                            if(!vuser()&&vpass())
                            {
                                alert("Wrong Input");
                                return false;
                            }
                            else{return true;}
                    }
                    function vuser()
                    {
                        var user=document.getElementById("user").value;
                        var patt=/\w/;
                        console.log(user.length);
                    return (patt.test(user)&&user.length<11);
                    }
                    function vpass()
                    {
                        var pass=document.getElementById("pass").value;
                        var patt=/\w/;
                        console.log(pass.length);
                    return (patt.test(pass)&&pass.length<11);
                    }
            </script>
    </head>
    <body>
        <div class="p-9 ">
                
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validate()">
                <div class="container border rounded">
                        <h3 class="text-center"> Login:</h3>
                <div class="row form-group">
                
                    <label class="form-control col col-lg-2 offset-lg-4 offset-md-4 offset-sm-2 col-md-4 text-center">Username :</label><input type="text" id="user" class="form-control col col-lg-2 col-md-4" name="user"/>
                </div>
                <div class="form-group row">
                        <label class="form-control col col-lg-2 offset-lg-4 offset-md-4 offset-sm-2 col-md-4 text-center">Password :</label><input type="password" class="form-control col col-lg-2  col-md-4 text-center" id="pass" name="pass"/>
                </div>
                <div class="form-group row">
                    <input type="reset" class="form-control col col-lg-2 offset-lg-4 offset-md-4 offset-sm-2 col-md-4 text-center" value="Reset"><input type="submit" class="form-control col col-lg-2  col-md-4 text-center" value="Submit">
                </div>
                <div class="form-group row text-center" ><a href="register.php" class="form-group col col-lg-12 col-md-12 col-sm-12 ">New User Click Here</a></div>
            </div>
        </form>
    </div>
    </body>
</html>