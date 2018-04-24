<?php 
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $age=$_POST['age'];
        $address=$_POST['address'];
        $contact=$_POST['phn'];
       //echo '<span style="color:#AFA; text-align:center;">'.$user." ".$pass." ".$email." ".$gender." ".$age." ".$address." ".$contact.'</span>';
        $conn=mysqli_connect("localhost","root","") or die("could not connect to mysql".mysqli_connect_error());
        $sql="use testing;";
        if(!$conn)
        {
            echo "error";
        }
        else
        {
        if(!mysqli_query($conn,$sql))
        {
            mysqli_close($conn);
            echo "error using db";
        }
        else
        {
        $sql="insert into user_info values('$user','$pass','$email','$gender',$age,'$address',$contact);";
        if(!mysqli_query($conn,$sql))
        {
            $sql="select * from user_info;";
            $var=mysqli_query($conn,$sql);
            if($row=mysqli_fetch_assoc($var)>0)
            {
                echo "<script type=text/javascript>alert('username already exists. Try logging in')</script>";
                
                //echo $row['contact']."<br>";
            }
            mysqli_close($conn);
           // echo "<span style='color:white'>error inserting values</span>";
            
        }
        else
        {
            mysqli_close($conn);
           header("Location:index.html");
           exit();
        }
        }
    }
    }
?>
<html>
    <head>
        <title>Register for hell</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style>
            
                table 
                {
                        text-emphasis-color: aliceblue; color:gainsboro;
                        margin-left: auto;
                        margin-right: auto;
                        
                }
                body
                {
                    background: url("register.jpg") no-repeat center center fixed; text-emphasis-color: aliceblue color: darkseagreens;
                    color: aliceblue;  
                    background-size:cover;  
                }
        </style>
        <script type="text/javascript">
                function validate()
                {
                        if(!vuser()&&vpass()&&vemail()&&vphn()&&vage())
                        {
                            alert("Wrong Input");
                            return false;
                        }
                        else{return true;}
                }
                function vuser()
                {
                    var user=document.getElementById("user").value;
                    var patt=/\w+/;
                    console.log(user.length);
                   return (patt.test(user)&&user.length<21);
                }
                function vpass()
                {
                    var pass=document.getElementById("pass").value;
                    var patt=/\w/;
                    console.log(pass.length);
                   return (patt.test(pass)&&pass.length<21);
                }
                function vemail()
                {
                    var email=document.getElementById("email").value;
                    var patt=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return (patt.test(email)&&email.length<21);
                }
                function vphn()
                {
                    var patt=/\d+/;
                    var contact=document.getElementById("phn").value;
                    return (patt.test(contact)&&contact.length==10);
                }
                function vage()
                {
                    var age=document.getElementById("age").value;
                    return (age>18&&age<100);
                }
        </script>
        <style>
                #d1
                {
                    position: absolute;
                    top: 10%;
                    left:10%;
                    width: 80%;
                }
            </style>
    </head>
    <body>
        
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validate()">
            <div class="container p-3" id="d1">
                <div class="row form-group">
                    <label class="form-control-label col col-lg-2 offset-lg-4 offset-md-4 offset-sm-2 col-md-4 text-center"> Username :</label><input type="text" class="form-control col col-lg-2 col-md-4 text-center" id="user" name="user" required >
                </div>
                <div class="row form-group">
                    <label class="form-control-label col col-lg-2 offset-lg-4 offset-md-4 offset-sm-2 col-md-4 text-center">Password :</label><input type="password" class="form-control col col-lg-2 col-md-4 text-center" id="pass" name="pass" required>
                </div>
                <div class="row form-group">
                    <label class="form-control-label col col-lg-2 offset-lg-4 offset-md-4 offset-sm-2 col-md-4 text-center"> Email :</label><input type="Email" class="form-control col col-lg-2 col-md-4 text-center" id="email" name="email" required>
                </div>
                <div class="row form-group">
                    <label class="form-control-label col col-lg-2 offset-lg-4 offset-md-4 offset-sm-2 col-md-4 text-center"> Gender :</label><select id="gender" class="form-control col col-lg-2 col-md-4 text-center select-control" name="gender"><option value="male">Male</option><option value="female">Female</option></select>
                </div>
                <div class="row form-group">
                    <label class="form-control-label col col-lg-2 offset-lg-4 offset-md-4 offset-sm-2 col-md-4 text-center">  Age :</label><input type="text" class="form-control col col-lg-2 col-md-4 text-center" id="age" name="age" required>
                </div>
                <div class="row form-group">
                    <label class="form-control-label col col-lg-2 offset-lg-4 offset-md-4 offset-sm-2 col-md-4 text-center"> Address :</label><textarea name="address" class="form-control col col-lg-2 col-md-4 text-center" id="address" required></textarea>
                </div>
                <div class="row form-group">
                    <label class="form-control-label col col-lg-2 offset-lg-4 offset-md-4 offset-sm-2 col-md-4 text-center"> Contact Number :</label><input type="text" class="form-control col col-lg-2 col-md-4 text-center" id="phn" name="phn" required>
                </div>
                <div class="row form-group">
                    <input type="reset" class="form-control col col-lg-2 offset-lg-4 col-md-4 text-center btn-primary" value="Reset"><input type="submit" class="form-control col col-lg-2 btn-success col-md-4 text-center" value="Submit Details">
                </div>
            </form>
    </body>
</html>
