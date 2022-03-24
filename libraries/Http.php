<?php
  class Http{
      public static function redirect($path):void{
          header("location:$path");
          exit();
      } 
  }
?>