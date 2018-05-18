<?php	
	$num=$_GET["num"];
	$_SESSION["num"] = $num;
$a=1;
$b=2;
$c=3;
$d=4;
$e=5;
$f=6;
$g=7;
$h=8;
$i=9;
$j=11;
$k=22;
$l=33;
$m=44;
$n=55;
$o=66;
$p=77;
$q=88;
$r=99;
$s=111;
$t=222;
$u=333;
$v=444;
$x=555;
$y=666;
$z=777;
$ñ=888;
$mat=str_replace(' ', '', $num);
$je=ctype_digit($mat);
if ($je!=1)
{
$lar=strlen($mat);
$m=0;
for ($i=0;$i<=$lar-1;$i++)
	{
		$lol[$m]=(substr($mat,-$i,1));

		$m+=1;
	}
	echo ("cadena: ".$num);
	echo "</br>";
	echo ("La cadena codificada es: ");
for ($i=0;$i<=$lar;$i++)	
{
	$no{$i}=$lol[$i];
	$cad=$no{$i};
	$cadfin{$i}=(${$cad});
	echo ($cadfin{$i});
}
}
else
	echo("no metas numeros");
?>