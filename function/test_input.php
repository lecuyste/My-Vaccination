<?php
function test_input(string $data) : string {
    $data = trim(strip_tags($data));
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>