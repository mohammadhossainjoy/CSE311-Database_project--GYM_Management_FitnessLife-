<?php
if(isset($_SESSION['message']))
{
    ?>
<div class="alert alert-dismissible fade show" role="alert">
    <strong>Hey!</strong><?=$_SESSION['message'];?>
    <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button></button></button></button>
    < </div>
</div>



<?php
        unset($_SESSION['message']);
 } 
 ?>