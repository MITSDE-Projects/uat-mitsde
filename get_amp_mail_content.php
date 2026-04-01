<?php
echo "Hi Mahesh....";

$post = file_get_contents('php://input');
$string = $post;

print_r($string);
?>