<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        body
        {
            background:url("result.jpg") no-repeat center center fixed ;
            color:white;    
            background-size:cover;
        }
    </style>
</head>
<body>
    <?php 
        session_start();
        $user=$_SESSION['user'];
        $gend=$_POST['gender'];
        $minage=$_POST['minage']-1;
        $maxage=$_POST['maxage']+1;
        $conn=mysqli_connect("localhost","root","")or die("Error creating connection");
        $sql="use testing;";
        if(mysqli_query($conn,$sql))
        {
            $sql="select * from user_info where gender='$gend'and username!='$user' and age between $minage and $maxage;";   
            if($result=mysqli_query($conn,$sql))
            {
            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<h1>Match Found : ".$row['username']."</h1>";
                }
            }
            else
            {
                echo "No mathing result";
            }
            }
            else
            {
                echo "error in querry";
            }
        }
         
    ?>
</body>
</html>