<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Finder</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border box;
            font-family:'Muli';
        
        }
        h1{
            text-align:center;
            line height:40px;
            padding:10px 30px 4px;
            margin:25px 120px 1px;;
            text-decoration:underline;
            display:flex;
            background-color:grey;
            border-radius:250px;
            justify-content:center;
            border:solid black;
            color: white;
            font-size:25px;
            box-shadow: 20px 20px 20px 10px rgb(90, 90, 90);
            
        
        }
        .main-div{
            width:100%;
            height:80vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .left-side{
            box-shadow:black;
  
          }
        .left-side img{
            max-width:400px;
            height:auto;
            box-shadow: 20px 20px 20px 10px white;
        
        }
        .right-side{
            width:400px;
            height:300px;
            background-color:grey;
            border-radius:15px;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            border:solid black;
            box-shadow: 20px 20px 20px 10px rgb(90, 90, 90);
        }
        .input1{
            width:250px;
            height:40px;
            padding:4px;
            margin:10px;
            border-radius:20px;
            border:solid black;
        }
        .selection{
            background-color:grey;
            border-radius:30px;
            color:white;
            font-style:bold;
            width:70%;
            margin:20px 50px 10px;
        }
        .btn{
            padding:10px 16px;
            border-radius:5px;
            outline:none;
            border-radius:20px;
            background-color:white;
            margin: 20px 70px;
            border:solid black;
            font-style:bold;
        }
       p{
        margin:20px 0 0 ;
        font-style:bold;
        color:white;
        text-decoration:underline;
        font-size:large;

       }
        </style>
</head>
<body>
<header>

<h1>TEMPERATURE CONVERSION</h1>
    <div class="main-div">
        <div class="left-side">
            <img src="sun-rain-cloud-3d-weather-png.webp">
        </div>
        <div class="right-side">
            <form method="POST">
                <input type="text" name="num" placeholder="Enter the Temperature" class="input1">
                    <div class="selection">
                      <lable>Celcious</lable>
                <input type="radio" name="units" value="feh">


                     <lable>Franenite</lable>
                <input type="radio" name="units" value="cel">
                     </div>
                <input type="submit" name="submit" value="Convert Now" class="btn">
            </form>
                <p>
                    <?php
                    if(isset($_POST['submit'])){
                        $num=$_POST['num'];
                        $temp=$_POST['units'];

                        if($temp=="cel"){
                            $result=$num *9 /5+32;
                            echo"Answer :: Celius in Farenite is " .$result;
                        } else{
                            $result=($num-32)*5/9;
                            echo"Answer :: Farenite in Celcius is" .$result;
                        }
                    }
               ?>
            </p>
    </div>
</body>
</html>