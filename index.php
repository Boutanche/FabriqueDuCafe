<?php
header('content-type: text/html; charset=utf-8');
include ('./config/config_lafabrique_fidel.php');
include ('./lib/get_page.php');
include('./include/layout/head.php');
include('./include/page/'.$page.'.php');
include('./include/layout/footer.php');


