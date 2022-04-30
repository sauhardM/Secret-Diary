<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;1,500&display=swap" rel="stylesheet">
  <title>Secret Dairy</title>

  <style>

    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: -1;
        background-image:url(background.jpg); 
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;      
     }

     .container{
        
        text-align: center;
        width: 30%;
        color:black;
        font-family:'system-ui';
     }

     #homePageContainer{
      margin-top:14%;
     }

     #loggedInPageContainer{

       margin-top: 70px;
     }
     #logInForm{
        
        margin-top: 5%;
        display: none;
     }

     #signUpForm{

        margin-top: 5%;
        width: 70%;
        margin-left: 15%;
     }

     #logInForm{

        margin-top: 5%;
        width: 70%;
        margin-left: 15%;
     }

     .toggleForms{
          
      font-weight: bold;
     }

     .toggleForms:hover{

       cursor:pointer;
     }

     #diary{
       /* border: 2px solid red; */
       width: 100%;
       height: 100vh;
     }
     
     @media (max-width:550px) {

      body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: -1;
        background-image:url(unsplash.jpg); 
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;      
     }

       
      .container{

        width: 75%;
        /* margin-top: 40%; */
        color:whitesmoke;
      }

      #homePageContainer{
      margin-top:40%;
     }

      #signUpForm{

        width: 90%;
        margin-left: 7%;
      }

      #logInForm{
        width: 90%;
        margin-left: 7%;
      }
      .toggleForms{
        color: whitesmoke;
        padding: 5px;
        background-color: #494949;
      }
     }

  </style>
</head>

<body>