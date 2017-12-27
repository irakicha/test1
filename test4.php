<?php
var_dump(session_save_path());
session_save_path('/var/www/test1/session-edu');
session_start();
