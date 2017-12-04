<?php
include "connect.php";
include "library/function_noinject.php";
include_once('header.php');
 if(!isset($_SESSION['loggedin'])){ //Apabila user belum login

   if(isset($_POST['login'])){ //Apabila user mencoba melakukan login

     if((!empty($_POST['username']))&&(!empty($_POST['password']))){
       $username = antiinjeksi($_POST['username']);
       $password = antiinjeksi($_POST['password']);

       if(($username == 'admin') && ($password == 'admin')){
         session_start();
         $_SESSION['loggedin'] = $username;
         header("Location:admin.php");
       }else{
         echo "Maaf username atau password tidak valid."; //Apabila username atau password tidak valid
       }
     }

   }
 
?>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
  input[type=text],input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<div class="container" style="margin-top: 10%">
  <div class="row">
    <div class="col-sm-4">
      
    </div>
    <div class="col-sm-4">
         <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='POST'>
           <label for="fname">Username</label>
           <input name='username' placeholder='Username' required type='text'/>
           <label for="fname">Password</label>
           <input name='password' placeholder='Password' required type='password'/>
           <input name='login' type='submit' value="Submit">
         </form>
         <a href="index.html" style="margin-left: 90%;">BACK</a>
    </div>
    <div class="col-sm-4">
      
    </div>
  </div>
</div> 
<?php
 }else{
   header("Location:index.html");
 }
?>