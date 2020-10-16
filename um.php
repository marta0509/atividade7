<?php

$temperatura =0;

echo '<h1>A temperatura é de ' .$temperatura. 'º<h1>';

if($temperatura <=3){
	echo 'Dia Gelado';
}
elseif($temperatura >3 && $temeperatura <15){
	echo 'Dia Frio';
}
elseif($temperatura >15 && $temeperatura <=29){
	echo'Dia Agradável';
}
else {
	echo '...começa a ficar demasiado calor';
}

?>