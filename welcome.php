<?php echo $_POST["username"];?>
<?php 
    echo "This page will save your username.";
    setcookie("test_cookie", "test", time() + 3600, '/');
?>
<?php 
  if(count($_COOKIE) > 0){
    //set the cookie
  }else{
    echo "We can't save your username if cookies aren't enabled!";
  }
?>
