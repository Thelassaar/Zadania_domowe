<?php 
function peselValidate($pesel)
{   
	$arrSteps = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3); // tablica z odpowiednimi wagami
	$intSum = 0;
	for ($i = 0; $i < 10; $i++)
	{
		$intSum += $arrSteps[$i] * $str[$i]; //mnożymy każdy ze znaków przez wagć i sumujemy wszystko
	}
	$int = 10 - $intSum % 10; //obliczamy sumć kontrolną
	$intControlNr = ($int == 10)?0:$int;
	if ($intControlNr == $str[10]) //sprawdzamy czy taka sama suma kontrolna jest w ciągu
	{
		return true;
	}
	return false;
?>