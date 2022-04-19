<?php
declare(strict_types=1);
require('Models/ManagerElements.php');
include('View/ViewDelete.php');

if (!empty($_POST['delete'])){

    if($_POST['delete'] == 'yes'){
        ManagerElements::delete();
        echo "<div class='container'>";
        echo '<p class="text-danger mt-3"><strong>Element supprimé</strong></p>';
        echo "</div>";
    }elseif($_POST['delete'] == 'no'){
        echo "<div class='container'>";
        echo '<p class="text-success mt-3"><strong>Element non supprimé</strong></p>';
        echo "</div>";
    }


    
}