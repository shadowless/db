<?PHP
$_OPTIMIZATION["title"] = "������� - �������";
$user_id = $_SESSION["user_id"];
$db->Query("SELECT * FROM db_users_a, db_users_b WHERE db_users_a.id = db_users_b.id AND db_users_a.id = '$user_id'");
$prof_data = $db->FetchArray();
?>
<br>

						<div class="s-bk-lf">
								<center>
									<div class="hst-title">��� �������</div>
									</center>
								</div>
								<div class="naz2">
								<p><center>���� ���� �����������: <font color="#000;"><?=date("d.m.Y � H:i:s",$prof_data["date_reg"]); ?></font></center></p>
								<center>
								<img src="/img/fermer.png">
								<span class="h-ferm" style="font-weight: normal;text-shadow: 1px 1px 1px #eee;color: #420;"><br><?=$_SESSION["user"]; ?></span>
								
								
</center>

<table div class="naz2" width="400" border="0" align="center" cellpadding="0" cellspacing="0">
 <font color="FFffff"> <tr><td colspan="2" align="center">&nbsp;</td></tr>
  <tr>
    <td align="left" style="padding:3px;">ID</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=$prof_data["id"]; ?></font></td>
  </tr>
  <tr>
    <td align="left" style="padding:3px;">���������</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=$prof_data["user"]; ?></font></td>
  </tr>
  <tr>
    <td align="left" style="padding:3px;">Email</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=$prof_data["email"]; ?></font></td>
  </tr>
  <tr>
    <td align="left" style="padding:3px;">������ (��� �������)</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=sprintf("%.2f",$prof_data["money_b"]); ?> �������</font></td>
  </tr>
  <tr>
    <td align="left" style="padding:3px;">������ (�� �����)</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=sprintf("%.2f",$prof_data["money_p"]); ?> �������</font></td>
  </tr>
  <tr>
    <td align="left" style="padding:3px;">���������� �� ���������</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=sprintf("%.2f",$prof_data["from_referals"]); ?> �������</font></td>
  </tr>
    <tr>
    <td align="left" style="padding:3px;">���������</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=sprintf("%.2f",$prof_data["payment_sum"]); ?> <?=$config->VAL; ?></font></td>
  </tr>
  <tr align="left">
    <td colspan="2" style="padding:3px;">&nbsp;</td>
    </tr>
  <tr>
    <td align="left" style="padding:3px;">��� ���������:</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=$prof_data["referer"]; ?> ��� ID <?=$prof_data["referer_id"]; ?></font></td>
  </tr>
  </font>
</table>

								<div class="clr"></div>	
								</div>
								