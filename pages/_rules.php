<?PHP
######################################
# ������ GENERAL MONEY
# ����� SEOCOLA.RU
# ICQ: 614936
# Skype: SEOCOLA
######################################
$_OPTIMIZATION["title"] = "�������";
$_OPTIMIZATION["description"] = "����� ������� �������";
$_OPTIMIZATION["keywords"] = "�������, ������� ������������, ������� �������";
?>
<div class="cl-right">
<div class="s-bk-lf">
	<div class="hst-title">������� �������</div>
</div>
<div class="clr"></div>	
<?PHP

$db->Query("SELECT rules FROM db_conabrul WHERE id = '1'");
$xt = $db->FetchRow();
echo $xt;
?>

<div class="clr"></div>	
</div>