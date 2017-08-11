
<div class="cl-right">
<br>


<div class="s-bk-lf">

	<div class="hst-title">Обменник</div>
	
</div>
<?PHP
$_OPTIMIZATION["title"] = "Аккаунт - Обменник";
$usid = $_SESSION["user_id"];
$usname = $_SESSION["user"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();
?>  
<font color="FFffff">В обменном пункте Вы можете обменять сахар для вывода на сахар для покупок. 
При обмене сахара Вы получаете +<?=$sonfig_site["percent_swap"]; ?>% на счет для покупок.<br /><br /><font>
<center><font color="red">Обмен возможен только в одну сторону</font></p></center>


<?PHP

if(isset($_POST["sum"])){

$sum = intval($_POST["sum"]);

	if($sum >= 1000){
	
		if($user_data["money_p"] >= $sum){
		
		$add_sum = ($sonfig_site["percent_swap"] > 0) ? ( ($sonfig_site["percent_swap"] / 100) * $sum) + $sum : $sum;
		
		$ta = time();
		$td = $ta + 60*60*24*15;
		
		$db->Query("UPDATE db_users_b SET money_b = money_b + $add_sum, money_p = money_p - $sum WHERE id = '$usid'");
		$db->Query("INSERT INTO db_swap_ser (user_id, user, amount_b, amount_p, date_add, date_del) VALUES ('$usid','$usname','$add_sum','$sum','$ta','$td')");
		
		echo "<center><font color = 'green'><b>Обмен произведен</b></font></center><BR />";
		
		}else echo "<center><font color = 'red'><b>Недостаточно сахара для обмена</b></font></center><BR />";
	
	}else echo "<center><font color = 'red'><b>Минимальная сумма для обмена 1000 сахара</b></font></center><BR />";

}

?>
<form action="" method="post">

<table width="400" border="0" align="center">
  <tr>
    <td><font color="#000;">Отдаете сахара для вывода</font> [мин. 1000]: </td>
    <td align="center"><input type="text" class="lg" name="sum" id="sum" value="1000" onkeyup="GetSumPer();" style="margin:0px; width:60px;"/></td>
  </tr>
  <tr>
    <td><font color="#000;">Получаете сахара для покупок</font> [+<?=$sonfig_site["percent_swap"]; ?>%]: </td>
    <td align="center"><span id="res_sum" name="res">0.00</span>
		<input type="hidden" name="per" id="percent" value="<?=$sonfig_site["percent_swap"]; ?>" disabled="disabled"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><BR /><input type="submit" name="swap" value="Обменять" class="btn_kup" style="height: 30px; margin-top:5px;"/></td>
  </tr>
</table>
<BR />
								
<div class="clr"></div>	
</form>


<script language="javascript">GetSumPer();</script>
</div>

