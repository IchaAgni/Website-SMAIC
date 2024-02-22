<?php

if (isset($_SESSION["alert"])) { ?>
    <div class="alert alert-danger">
        <?php echo $_SESSION["alert"] ?>
    </div>
<?php
    unset($_SESSION["alert"]);
}

?>