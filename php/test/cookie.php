<?php
  if(!isset($_COOKIE["hypergo"])) {
    setcookie("hypergo", "cookie value", time() + 10);
  }
  
  if (isset($_COOKIE["hypergo"])) {
    echo "cookie存在";
  } else {
    echo "cookie过期";
  }
  
?>