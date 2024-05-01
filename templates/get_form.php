<?php
session_start();
?>

<h1>GET FORM</h1>

<form action="/get_form" method="get">
    <input type="text" name="text_input" value="qwerty"> <br>
    <input type="number" name="number_input" value="12345"><br>
    <input type="checkbox" name="checkbox_input"> checkbox<br>
    <input type="submit">
</form>

<h2>Current values:</h2>
<?php

foreach ($_SESSION as $s_key => $s_value){
    echo "$s_key = $s_value <br>";
}
?>
