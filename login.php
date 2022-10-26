
<?php
session_start();
if(isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<head>
<title>Form Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
<style>
* {
  box-sizing: border-box;
  margin: 0;
}
body {
  background-color: white;
  color: #333;
  font-family: sans-serif;
  font-size: 16px;
  height: 100%;
  position: relative;
  width: 100%;
}
form {
  border: 0;
  border-radius: 5px;
  box-shadow: 0 0 0 1px rgba(0,0,30,.1), 0 5px 15px rgba(0,0,30,.1);
  margin: 20% auto;
  max-width: 557px;
  padding: 30px 30px 10px;
  position: relative;
  width: 90%;
}
form h5 {
  border-bottom: 1px solid rgba(0,0,30,.1);
  color: black;
  font-size: 1.15em;
  font-weight: 550;
  margin-bottom: 20px;
  padding-bottom: 5px;
  text-align: center;
}
form .row {
  margin: 30px 0;
  position: relative;
}
form .row .error {
  color: brown;
  font-size: .8em;
  height: 18px;
  line-height: 18px;
}
form .row label {
  color: #555;
  font-size: .9em;
  font-weight: 450;
}
form input {
  background-color: white;
  border: 0;
  border-radius: 2px;
  box-shadow: 0 0 0 1px rgba(0,0,30,.1);
  display: block;
  margin: 5px 0;
  padding: 12px 10px;
  transition: all .25s ease-in-out;
  width: 100%;
}
form .row input:focus {
  box-shadow: 0 0 0 1px rgba(30,144,255,.15), 0 0 1px 4px rgba(30,144,255,.15);
  outline-style: none;
}
form .row input::placeholder {
  font-family: monospace;
}
form .row.mtop {
  margin-top: 50px;
}
form .row button[type=submit] {
  background-color: rgba(30,144,255);
  border: 0;
  border-radius: 3px;
  box-shadow: 0 0 0 1px rgba(0,0,30,.15), 2px 2px 3px rgba(0,0,30,.1);
  color: white;
  cursor: pointer;
  display: block;
  font-size: 1.25em;
  letter-spacing: .035em;
  margin: 0 auto;
  max-width: 200px;
  padding: 12px;
  text-transform: uppercase;
  transition: all .25s ease-in-out;
  width: 100%;
}
form .row button[type=submit]:hover {
  opacity: .9;
  transform: scale(.9);
}
</style>
</head>
<body>
<form autocomplete="off" id="form_login">
<h5>Masukkan Email & Password</h5>
<div class="row">
<label for="email">Email</label>
<input type="email" name="email" id="email" placeholder="Masukkan email Anda"/>
<div class="error"></div>
</div>
<div class="row">
<label for="password">Password</label>
<input type="password" name="password" id="password" placeholder="password"/>
<div class="error"></div>
</div>
<div class="row mtop">
<button type="submit" name="proccess_login" id="btn_login" value="check_data">Login</button>
</div>
</form>
