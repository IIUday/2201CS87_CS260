<?php
      function dbcon(){
        $con=mysqli_connect('db','user','pass','project');
        return $con;
      }
      ?>