<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            background-image:url(pic3.avif);
        }
        .rf{
            width: 400px;
            height: 400px;
            border: 10px inset;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform:translate(-50%,-50%);
            border-radius: 10px;
            background: linear-gradient(rgb(168, 168, 243),rgb(210, 125, 125),rgb(201, 216, 216));
        }
        h1{
            margin-bottom: 30px;
            color:yellow;
            font-weight:bold;
        }
        #name,#email,#password{
            width: 280px;
            height: 30px;
            text-align: center;
            border-radius: 20px;
            border: 2px solid;
        }
        #signin{
            width: 80px;
            height: 40px;
            margin-left: 30px;
            margin-top: 15px;
            background-color: rgb(207, 1, 1);
            border-radius: 10px;
            box-shadow: 0px 0px 4px 4px rgb(54, 50, 50);
            border: 3px inset white;
            cursor: pointer;
            font-weight: bold;
            font-size: 15px;
            transition: all 1s;
        }
        #signin:hover{
            background: white;
            color:rgb(207, 1, 1);
            opacity: 0.7;
        }
         #signin:active{
             opacity: 0.7;

        }

        #signup{
             width: 80px;
            height: 40px;
            margin-left: 30px;
            margin-top: 15px;
            box-shadow: 0px 0px 4px 4px rgb(54, 50, 50);
            background-color: rgb(50, 136, 147);
            border-radius: 10px;
            border: 3px inset white;
            font-weight: bold;
            font-size: 15px;
            transition: all 1s;
            cursor: pointer;
        }
        #signup:hover{
            background: white;
            color:rgb(50, 136, 147);
        }
        #signup:active{
             opacity: 0.7;

        }
        .rf label{
                 font-size: 16px;
                 font-weight: bold;
                 color: rgb(41, 2, 2);
        }
       
    </style>
</head>
<body>
  <div class="rf">
        <h1>Form SignIN/SignUP</h1>
        <form action="" method="post">
            <label for="name">Name :</label><br>
            <input type="text" name="name" id="name" placeholder="Enter your name"><br><br>
            <label for="email">Email :</label><br>
            <input type="email" name="email" id="email" placeholder="Enter your email"><br><br>
            <label for="password">Password :</label><br>
            <input type="password" name="password" id="password" placeholder="Password"><br><br>
            <input type="submit" class="btn" value="SignUP" name="signup" id="signup">
            <input type="submit" class="btn" value="SignIN" name="signin" id="signin">
        </form>
    </div>
     <?php
    if(isset($_POST['signup']))
	{  
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$mycon=mysqli_connect('localhost','root',"",'webp');
        $q="insert into users values ('$name','$email','$password')";
		$res=mysqli_query($mycon,$q);
		echo $res."Signup Completed!";
		
	}


    if(isset($_POST['signin']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mycon=mysqli_connect("localhost","root","","webp");
    $q="select * from users where email='$email' and password='$password'";
    $rec=mysqli_query($mycon,$q);
    
    if(mysqli_num_rows($rec)>0)
    {
        echo "Login!";
    }
    else{
        echo "login fail because invalid email or password!";
    }

}

?>
</body>
</html>