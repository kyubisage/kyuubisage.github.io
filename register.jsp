<html>
    <head>
        <title>Register for hell</title>
        <style>
            
                table 
                {
                        text-emphasis-color: aliceblue; color:gainsboro;
                        margin-left: auto;
                        margin-right: auto;
                        
                }
                body{background-image: url("indexpic.jpg"); text-emphasis-color: aliceblue color: darkseagreens}
        </style>
        <script>
                function register()
                {
                        var user=document.getElementById("user").value;
                        var pass=document.getElementById("pass").value;
                        var email=document.getElementById("email").value;
                       // var selector=document.getElementById("gender");
                       // var gender= selector[selector.selectedIndex].value;
                        var age=document.getElementById("age").value;
                        var Address=document.getElementById("address").value;
                        var contact=document.getElementById("phn").value;
                        console.log(user,pass,email,age,Address,contact);
                        

                        var mysql = require('mysql');
                        var con = mysql.createConnection
                        ({
                                host: "localhost",
                                user: "yourusername",
                                password: "yourpassword",
                                database: "mydb"
                        });

                                con.connect(function(err) {
                                if (err) throw err;
                                var sql = "INSERT INTO VALUES (user,pass,email,'Male',age,Address,contact)";
                                con.query(sql, function (err, result) {
                                if (err) throw err;
                                console.log("1 record inserted, ID: " + result.insertId);
                                });
                                });
                }
        </script>
    </head>
    <body>
        <table>
            <tr style="align-items: center">
                    <td>Username :</td><td><input type="text" id="user" name="user"></td>
            </tr>
            <tr>
                    <td>Password :</td><td><input type="password" id="pass" name="pass"></td>
            </tr>
            <tr>
                    <td>Email :</td><td><input type="Email" id="email" name="email"></td>
            </tr>
            <tr>
                    <td>Gender :</td><td><select name="gender"><option value="male">Male</option><option value="female">Female</option></select></td>
            </tr>
            <tr>
                    <td>Age :</td><td><input type="text" id="age" name="age"></td>
            </tr>
            <tr>
                    <td>Address :</td><td><textarea name="address" id="address"></textarea></td>
            </tr>
            <tr>
                    <td>Contact Number :</td><td><input type="text" id="phn" name="phn"></td>
            </tr>
            <tr>
                    <td><input type="submit" value="Submit Details" onclick="register()"></td><td><input type="reset" value="Reset"></td>
            </tr>
        </table>

        <% out.print(2*5); %>
    </body>
</html>