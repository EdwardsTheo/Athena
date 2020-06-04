<?php
$date = date('d-m-Y H:i:s');
$d = DateTime::createFromFormat('d-m-Y H:i:s', $date);
if ($d === false) {
    die("Incorrect date string");
} else {
    echo $d->getTimestamp();
}
$date2 = $d->getTimestamp();
echo '</br><br/>'.$date2;
?> 