<?php
// you will need to change the name of the 
// servername, username, password to your own
// in terminal, type php ./remote.php, then it should show it's now connected

$conid = mysqli_connect("localhost", "root", "1234", "ClassRegistration");

    if($conid){
        echo "It's now connected! ". mysqli_get_host_info($conid);
    }
    else {
        echo "It cannot connect! " . mysqli_connect_errno() . " " . mysqli_connect_error();
    }
    mysqli_close($conid);

?>
