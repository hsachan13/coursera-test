<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Himanshu Sachan</title>
  </head>
  <body>
    <h1>
      Welcome to my guessing game
    </h1>
<p>

<?php
$number=55;


if(!isset($_GET['guess'])){
  echo ("Missing guess parameter");
}
else if(strlen($_GET['guess'])<1){
  echo("Your guess is too short");
}
else if($_GET['guess']<$number){
  echo ("Your guess is too low");
}
else if($_GET['guess']>$number){
  echo ("Your guess is too high");
  }
  else{
    echo ("Congratulations - You are right");
  }


       ?>
     </p>

  </body>
</html>
