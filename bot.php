<?php

$botToken = "825314558:AAHeemnpInf-H4ZiCiFp0aVYWlms17yWVao";

$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_content($website"/getupdates");



print_r($update);


?>