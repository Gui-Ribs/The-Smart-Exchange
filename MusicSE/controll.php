<?php

$avar = $_POST['avaria'];

if($avar == "China"){
    echo "Enfim, todos nós se curvaremos a primeira potência mundial.";
}
else {
    header("Location: ./index.php");
}

?>