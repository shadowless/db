<?PHP
######################################
# Скрипт GENERAL MONEY
# Автор SEOCOLA.RU
# ICQ: 614936
# Skype: SEOCOLA
######################################
$_OPTIMIZATION["title"] = "Контакты";
$_OPTIMIZATION["description"] = "Связь с администрацией";
$_OPTIMIZATION["keywords"] = "Связь с администрацией проекта";
?>
<div class="cl-right">
<div class="s-bk-lf">
	<div class="hst-title">Контакты</div>
</div>
<div class="clr"></div>	<div style="display:none;"> <a href="http://seocola.ru">Скрипты </a></div> 
<?PHP

$db->Query("SELECT contacts FROM db_conabrul WHERE id = '1'");
$xt = $db->FetchRow();
echo $xt;
?>

<div class="clr"></div>	
</div>