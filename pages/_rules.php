<?PHP
######################################
# Скрипт GENERAL MONEY
# Автор SEOCOLA.RU
# ICQ: 614936
# Skype: SEOCOLA
######################################
$_OPTIMIZATION["title"] = "Правила";
$_OPTIMIZATION["description"] = "Общие правила проекта";
$_OPTIMIZATION["keywords"] = "Правила, помятка пользователя, правила проекта";
?>
<div class="cl-right">
<div class="s-bk-lf">
	<div class="hst-title">Правила проекта</div>
</div>
<div class="clr"></div>	
<?PHP

$db->Query("SELECT rules FROM db_conabrul WHERE id = '1'");
$xt = $db->FetchRow();
echo $xt;
?>

<div class="clr"></div>	
</div>