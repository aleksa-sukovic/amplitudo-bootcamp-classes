<?php

if (isset($_GET['name'])) {
    echo 'Name =>' . $_GET['name'];
}

if (isset($_POST['last_name'])) {
    echo 'Last Name => ' . $_POST['last_name'];
}

//echo '<br/>';
//echo urlencode('Marko Markovic');
//echo '<br/>';
//echo rawurlencode('Marko Markovic');
?>

<a href="../1/index.php?name=Marko&last_name=Markovic" target="_blank">Pogledajte Petlje</a>













