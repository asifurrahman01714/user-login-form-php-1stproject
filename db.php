
  <?php
    $connect = mysqli_connect('localhost', 'root', '', 'php1');
    if ($connect) {
        echo "Database Conected Successfully !!!";
        
    }
    else{
        die ("Database connection Fail");
    }

  ?>
    