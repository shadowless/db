<?PHP
######################################
# Скрипт GENERAL MONEY
# Автор SEOCOLA.RU
# ICQ: 614936
# Skype: SEOCOLA
######################################
$_OPTIMIZATION["title"] = "Новости";
$_OPTIMIZATION["description"] = "Новости проекта";
$_OPTIMIZATION["keywords"] = "Новости нашего проекта";
?>
<div class="cl-right">
<div class="s-bk-lf">
	<div class="hst-title">Новости</div>
</div>
<div class="clr"></div>	
<?PHP

$db->Query("SELECT * FROM db_news ORDER BY id DESC");

if($db->NumRows() > 0){

	while($news = $db->FetchArray()){
	
	?>

            
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left"><h3><?=$news["title"]; ?></h3></td>
    <td align="right"><strong><?=date("d.m.Y",$news["date_add"]); ?></strong></td>
  </tr>

  <tr>
    <td colspan="2"><?=$news["news"]; ?></td>
  </tr>
</table> 
<BR /><div style="display:none;"> <a href="http://seocola.ru">Скрипты </a></div> 
	<?PHP
	
	}

}else echo "<center>Новостей нет :(</center>";

?>
</div>
<div class="clr"></div>	
</div>