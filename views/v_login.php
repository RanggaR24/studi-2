<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .form{
        margin-top: 170px;
        margin-left: 750px;
        margin-right: 750px;
        padding: 20px;
        background: lightgrey;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
        border-radius: 10px;
    }
    h1{
        text-align: center;
        color: black;
    }
    table{
        padding:5px;
    }
    td{
        padding:10px;
        color: black;
    }
    a{
        text-decoration: none;
        color: whitesmoke;
    }
    button{
        border: none;
        padding: 7px 10px;
        background-color: cadetblue;
        border-radius: 20px;
        color: whitesmoke;
        padding: 13px 20px;
        margin-top: 7px;
    }
    button[type='submit']:hover{
        background-color: whitesmoke;
        color: black;
    }
    .button:hover{
        background-color: whitesmoke;
    }
    a:hover{
        color: black;
    }
    button[type='submit']{
        background-color:cadetblue;
    }

    input[type="text"], input[type="password"], input[type="checkbox"]{
        border: none;
        padding: 10px;
        padding-right: 30px;
        border-radius: 10px;
        border: ;
    }
    select{
        border: none;
        padding: 5px;
        border-radius: 10px;
        border: ;
    }
    .button{
        margin-left: 10px;
}   
    </style>
</head>
<body>
    <div class="form">
        <h1 align="center">Login</h1>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>: <input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: <input type="password" name="password" placeholder="Password" id="inputPassword"><input type="checkbox" onclick="myFunction()"></td>
            </tr>
            <tr>
                <td align="center" colspan=2><button type="submit" >Login</button></td>
            </tr>
        </table>

    </form>
</div>
</body>
    <script>
        function myFunction() {
            var x = document.getElementById("inputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

</html>