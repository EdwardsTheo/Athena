<?php
/*$date = date('d-m-Y H:i:s');
$d = DateTime::createFromFormat('d-m-Y H:i:s', $date);
if ($d === false) {
    die("Incorrect date string");
} else {
    echo $d->getTimestamp();
}
$date2 = $d->getTimestamp();
echo '</br><br/>'.$date2;
*/
$i = 2;
$seconde_name ='Alexandre';
do{
    ?>
    <form action="" class="form_mdp" method="GET">
    <input type="submit" class="btn_index btn_add_exo btn_visu" value="Cours" id="btn"name='tg'>
    <input type="submit" class="btn_index btn_add_exo btn_visu" value="Exercices" id="btn">
    <input type="submit" class="btn_index btn_add_exo btn_visu" value="Profil" id="btn" name=<?php echo $seconde_name?>>
</form>
<?php $i++;
}while($i<=5);

//echo $_GET[$i];

?> 