<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title>PIDATA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                margin-top: 0;
                background-color: #4ABDAC;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: bold;
            
                margin: 0;
            }

            h1{
                text-align: center;
                font-size: 75px;
            }
            h2{
                text-align: center;
            }
            .container{ 
                margin-left: 10%;
                display: flex;
                justify-content: center;
                width: 80%;
                height: 60px;
                background-color: #F7B733;
                align-items: center;
                border-radius: 10px;
                
            }
            .cont{
                margin: 30px;
            }
            a{
                text-decoration: none;
                font-size: 20px;
                color: white;
                font-weight: bold;
            }
            a:hover{
                color: #DFDCE3;  
            }
        </style>
    </head>
    <body>
        <H1>WELCOME TO PIDATA</H1>
      <h2>In this site you can organizated all your data </h2>

        <div class="container">
<div class="cont"> <p><a href="<?php echo route('about')?>">About us</a></p></div>
<div class="cont"> <p><a href="<?php echo route('history')?>">History</a></p></div>
<div class="cont"> <p><a href="<?php echo route('mision')?>">mision</a></p></div>
<div class="cont"> <p><a href="<?php echo route('vision')?>">vision</a></p></div>
<div class="cont"> <p><a href="<?php echo route('inspire')?>">our inspiration</a></p></div>
<div class="cont"> <p><a href="<?php echo route('my_space')?>">Personal Space</a></p></div>
     
  
        </div>
   
    </body>
</html>
