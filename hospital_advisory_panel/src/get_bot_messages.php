<?php

include('database.inc.php');


$txt=mysqli_real_escape_string($conn,$_POST['txt']);

$sql = "select question,reply from chatbot_hints where question like '%$txt%'";
if($sql){
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)> 0){
    
            $row = mysqli_fetch_assoc($res);
           
            echo $row['reply'];

              }
            else{
                 
                echo"not able to understand";
    }
}else{
    $txt = "";
}



?>

<script>
    var v1 = document.getElementById('#btn1').val();
    alert(v1);
  </script>



 