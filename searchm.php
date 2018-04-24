<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search Your Demon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
       /* body
        {
            background-image:url("match.jpg");
            color:white;    
            background-repeat: no-repeat;
        }*/
        body 
        { 
        background: url('match.jpg') no-repeat center center fixed; 
        color:white;
        background-size: cover;
        }
        #d1
                {
                    position: absolute;
                    top: 26%;
                    left: 8%;
                    width: 100%;
                }
    </style>
    <script type="text/javascript">
        function validate()
        {
            var minage=document.getElementById("minage").value;
            var maxage=document.getElementById("maxage").value;
            console.log(minage);
            console.log(maxage);
            if(minage>17&&minage<100&&maxage>18&&maxage<101)
            {
                return true;
            }
            else
            {
                alert("Wrong values entered");
               return false;
            }
        }
    </script>
</head>
<body>
    <div class="container" id="d1">
        <form action="result.php" method="POST" class="form" onsubmit="return validate()">
            <span class="row form-group">
                <label class="col form-control-label text-center col-lg-2 offset-4">Gender : </label><select name="gender" id="gender" class="col col-lg-2 form-control "><option value="male">Male</option><option value="female">Female</option></select>
            </span>
            <span class="row from-group">
            <label class="col form-control-label col-lg-2 text-center offset-4">Minimum Age :</label><input type="text" name="minage"  class="col form-control col-lg-2" id="minage" required></input>
            </span>
            <br>
            <span class="row form-group">
                <label class="col form-control-label text-center col-lg-2 offset-4">Maximum Age :</label><input type="text" name="maxage" class="col form-control col-lg-2" id="maxage" required></input>
            </span>
            <span class="row form-group">
                <input type="submit" value="Submit" class="col form-control col-lg-2 offset-5 btn btn-success">
            </span>
        </form>
    </div>
</body>
</html>