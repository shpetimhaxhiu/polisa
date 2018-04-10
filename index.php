<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kjo eshte Polica</title>
</head>
<body>
	
</body>
</html>


<?php 
require 'classes/Polica.php';

$polica = new Polica();


echo '<pre>';


// var_dump($polica);


echo 'IDPOL: ', $polica->merrIdPolices(), '<br>';
echo 'merrDatenPrej: ', $polica->merrDatenPrej(), ' - ',$polica->merrDatenDeri(),  '<br>';
echo 'merrNumrinSerik: ', $polica->merrNumrinSerik(), '<br><br>';


$polica->vendosNumrinSerik(72);
$polica->vendosDatenPrej('2018-12-31');



if($polica->dataValide('2018-03-31', '2018-03-01')) {
	echo 'Eshte valide';
} else {
	echo 'nuk eshte valide';
}


$polica->vendosDatenDeri('2019-12-31');


echo 'IDPOL: ', $polica->merrIdPolices(), '<br>';
echo 'merrDatenPrej: ', $polica->merrDatenPrej(), ' - ',$polica->merrDatenDeri(),  '<br>';
echo 'merrNumrinSerik: ', $polica->merrNumrinSerik(), '<br>';
echo 'TEST:', $polica->ditetValide('2018-03-10', '2018-03-10'), 'TEST<br>';

// echo $polica->ditetValide('2018-03-31', '2018-03-31');
// echo '<pre>';
// echo $polica->ditetValide('2018-03-01', '2018-03-31');

$polica->ruajPolicen();

?>