<?php
if(isset($_SESSION['id']))
{
 echo $_SESSION['name'];
}
else{
    echo header('location: index.php?msg=invalidaccess');
}

?>