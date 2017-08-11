<div class="cl-right">

<div class="s-bk-lf">
	<div class="hst-title">Рефералы</div>
</div>

<?PHP
$_OPTIMIZATION["title"] = "Аккаунт - Партнерская программа";
$user_id = $_SESSION["user_id"];
$db->Query("SELECT COUNT(*) FROM db_users_a WHERE referer_id = '$user_id'");
$refs = $db->FetchRow();
?>  

<font color="FFffff">Приглашайте в игру своих друзей и знакомых, Вы будете получать 10% от каждого пополнения баланса  
приглашенным Вами человеком. Доход ни чем не ограничен. Даже несколько приглашенных могут 
принести вам более 100 000 сахара. 
Ниже представлена ссылка для привлечения и количество приглашенных Вами людей.<br /><br /><font>
<img src="/img/piar-link.png" style="vertical-align:-2px; margin-right:5px;" /><font color="#000;">http://<?=$_SERVER['HTTP_HOST']; ?>/?i=<?=$_SESSION["user_id"]; ?></font>
<p><center>Количество ваших рефералов: <font color="#000;"><?=$refs; ?> чел.</font></center></p>

<table cellpadding='3' cellspacing='0' border='0' bordercolor='#336633' align='center' width='98%'>
<tr height='25' valign=top align=center>
	    		 <td style="border: 1px dashed #db8;" align="center" class="m-tb"> Логин </td>
	    		 <td style="border: 1px dashed #db8;" align="center" class="m-tb"> Дата регистрации </td>
	    		 <td style="border: 1px dashed #db8;" align="center" class="m-tb"> Доход от партнера </td>
</tr>

<?PHP
  $all_money = 0;
  $db->Query("SELECT db_users_a.user, db_users_a.date_reg, db_users_b.to_referer FROM db_users_a, db_users_b 
  WHERE db_users_a.id = db_users_b.id AND db_users_a.referer_id = '$user_id' ORDER BY to_referer DESC");
  
	if($db->NumRows() > 0){
  
  		while($ref = $db->FetchArray()){
		
		?>
		<tr height="25" class="htt" valign="top" align="center">
			    		 <td style="border: 1px dashed #db8;" align="center"> <?=$ref["user"]; ?> </td>
	    		 <td style="border: 1px dashed #db8;" align="center"> <?=date("d.m.Y в H:i:s",$ref["date_reg"]); ?> </td>
			    		 <td style="border: 1px dashed #db8;" align="center"> <?=sprintf("%.2f",$ref["to_referer"]); ?> </td>
		</tr>

		<?PHP
		$all_money += $ref["to_referer"];
		}
  
	}else echo '<tr><td align="center" colspan="3">У вас нет рефералов</td></tr>'
  ?>

</table>

<div class="clr"></div>	
</div>

<div class="clr"></div>	
</div>