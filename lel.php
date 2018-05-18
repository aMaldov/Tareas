<?php
$num=$_GET["nom"];
$_SESSION["nom"] = $num; 
$cad1=str_replace(' ', '', $num);
$lar=strlen($num);
if ($lar<=30)
{
	//echo($cad1);
	$lam=31-$lar;
	echo ("Tu cadena es:".$num);
	for ($i=0;$i<=$lam;$i++)
	{
		$cad2=$cad1."x";
		${$i}=$cad2;
		$cad1=${$i};
		$fin=${$i};
	}
	/*echo "</br>";
	echo($fin);
	echo (strlen($fin));*/
	$mat=[5][4];
	echo "</br>";
	$m=0;
	$n=0;
	for ($i=-32;$i<=-3;$i++)
	{
		$mat[$m][$n]=(substr($fin,$i,1));
		if($n==4)
		{
			$m+=1;
			$n=-1;
		}
		$n+=1;
	}
	//print_r($mat);
	$g=0;
	$j=0;
	$cadfin="";
	for ($h=0;$h<=29;$h++)
	{	
		$cad3=$cadfin.$mat[$g][$j];
		${$h}=$cad3;
		$cadfin=${$h};
		if($g==5)
		{
			$j+=1;
			$g=-1;
		}
	$g+=1;
	}
	echo ("El playfair es:".$cadfin);
	//echo(strlen($cadfin));
}
else
		echo ("Tu cadena debe ser menor de 30 caracteres");
?>