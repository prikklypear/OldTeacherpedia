<?php 

//include user control code
include "../user/user_cp.php";
include "link.php";

//If user is logged in, select appropriate header
if(isset($_SESSION['id'])) {
    include "header.php";
} else {
    include "header_nousr.php";
}
    
// Load body
include "footer.php";

?>