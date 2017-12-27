<?php
$lifetime = 10;
session_set_cookie_params($lifetime, null, null, null);
session_name("HELLO");
session_start();
echo session_name();
