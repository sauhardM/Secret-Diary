<?php 

  session_start();
  
  if(array_key_exists("id",$_COOKIE)){

      $_SESSION['id'] = $_COOKIE['id'];
  }


  if(array_key_exists("id",$_SESSION)){

      echo "<p>Logged In! <a href='index.php?logout=1'>Log out</a></p>";
      pre();
  } else {

    header("Location: index.php");
  }
  
  function pre(){
    echo"<pre>";
    print_r($_SESSION);
    echo"</pre>";
  }
  
?>