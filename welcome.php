<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style>
            body
            {
                background: url('welcomep.jpg') no-repeat center center fixed; 
                    color:white;
                    background-size: cover;
            }
            a:visited
            {
                color:orange;
            }
        </style>
    </head>
    <body>
        <h2 style="text-align:center; color:#6AC800">Welcome &nbsp; 
        <?php
        session_start();
        $user=$_SESSION['user'];
        echo $user;
        /*$conn=mysqli_connect("localhost","root","") or die("Error connecting databse");
        $sql="use testing";
        if(mysqli_query($conn,$sql))
        {
            $sql="Select  from user_info"
        }
        else
        {
            echo "Error selecting database";
        }
        */
        ?>
    </h2>
    <hr>
    <navbar class="navbar navbar-inverse bg-dark col offset-lg-1 col-lg-10" style="border-radius:10px; ">
        <button class="nav-link btn btn-info" onclick="window.location.href='vprofile.php'">View Profile</a><br>
        <button class="nav-link btn btn-info" onclick="window.location.href='eprofile.php'">Edit Profile</a><br>
        <button class="nav-link btn btn-info" onclick="window.location.href='searchm.php'">Search demon</a><br>
    </navbar>
    </body>
</html>