<?PHP
######################################
# Скрипт GENERAL MONEY
# Автор SEOCOLA.RU
# ICQ: 614936
# Skype: SEOCOLA
######################################
$_OPTIMIZATION["title"] = "О проекте";
$_OPTIMIZATION["description"] = "О нашем проекте";
$_OPTIMIZATION["keywords"] = "Немного о нас и о нашем проекте";
?>
<div class="cl-right">
<div class="s-bk-lf">
	<div class="hst-title">О проекте</div>
</div>
<div class="clr"></div>	
<?PHP

$db->Query("SELECT about FROM db_conabrul WHERE id = '1'");
$xt = $db->FetchRow();
echo $xt;
?>
</div>
<div class="clr"></div>	
</div>