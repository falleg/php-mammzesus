<?php 
/*			
Script Filtre ( BOA ) Lista domain ATT By XMed_Falleg :D

Gr33tz to F2rswi.X
*/
error_reporting(0);
echo '<html>
<title>PRV8 Filtre By FALLAGA_TN </title>
<body bgcolor=""><center>
<form action="" method="POST">
<h1 style="font-family: Georgia, Serif;color:#A4A4A4">New Script Filtre Lista BOA By XMed </h1>
<body background="https://i.ytimg.com/vi/VaeUM3PwmjE/maxresdefault.jpg"></body><center>
<p><p>
<img src="https://image.ibb.co/mRELkT/images.jpg" height="160" width="280"
</p>
/><br>
<textarea id=textarea name="emails" rows=15 cols=45></textarea><br><br>
<input name="submit" type="submit" value="OK BB :3">
<style>
textarea {
  border: 2px solid #ffff;
  border-radius: 25px;
  border-color: red;
  border-style: solid;
  height:250px;
}
</style>
</form>';http://1.bp.blogspot.com/-x4M3g7eOmkQ/VlS2NkpkdlI/AAAAAAAACuc/BMdXomNKtHM/s400/12279055_857263341112365_764835421177819995_n.jpg
$emails = $_POST['emails'];
$mails = array ("prodigy","snet","sbcglobal","flash","ameritech","bellsouth","nvbelllive","nvbell","att.net","comcast");
if (isset ($emails) && !empty ($emails)) {
	foreach (explode ("\n",$emails) as $email ) {
		foreach ($mails as $mail) {
			if (eregi('@'.$mail,$email)) {
				$save = fopen ($mail.'.txt','a+');
				fwrite ($save,"\n".$email);
				}else
					$sav = fopen ('other.txt','a+');
					fwrite($sav,"\n".$email);
			}	
		}
		echo ' <br> Filtred :D ';
}
	
?>