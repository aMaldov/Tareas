<?php
echo '<!DOCTYPE>';
	echo '<html>';
		echo '<head>';
			echo '<body>';
			echo '<form name="pepe" method="get">';
				echo '<input type="text" name="pepe" >';
					echo '<button onclick="submit"> BOTON</button>';
				echo '</form>';
			$pepe=$_GET["pepe"];
			$cad1=str_replace(' ', '', $pepe);
			$lar=strlen($cad1);
			$m=0;
			$sal="ne";
			$pimienta="pe";
			for ($i=0;$i<=7;$i++)
			{
				if(substr($cad1,$i,1)!=null)
				{
				$lol[$m]=(substr($cad1,$i,1));
				}
				$m+=1;
			}		
			${1}="a";
if($lol[4]==null)
{
for ($i=0;$i<=3;$i++)
			{
			if($lol[$i]!=null)
				echo (" ");				
			else	
			{
			$ran=rand(1,5);	
			 $lol[$i]=${1};
			}
			}	
		$fin=implode("",$lol);	
  echo ("hash: ".$sal.$fin.$pimienta);			
}
else
{	
			if($lol[4]!=null)
{
	$cadfin=implode("",$lol);
	$lar=strlen($cadfin);
			for ($i=0;$i<=3;$i++)
			{
				$mat[$i]=(substr($cadfin,$i,1));			
			}
			$fin=implode("",$mat);
			echo ("hash: ".$sal.$fin.$pimienta);
}
}		
			echo '</body>';
		echo '</head>';
	echo '</html>';
?>