<?php

$data = $_POST;
extract($data);

//echo $whats;
if(strlen($whats) > 0 )
{
    header("Location: http://site.com");
    die();
}
else 
{
    $html = file_get_contents('template.html');
    echo $html;
}

