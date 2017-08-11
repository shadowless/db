<?PHP
$_OPTIMIZATION["title"] = "Конкурс рефералов";
$_OPTIMIZATION["description"] = "Конкурс рефералов";
$_OPTIMIZATION["keywords"] = "Конкурс, конкурс рефералов";
?>
<div class="cl-right">


<?PHP

# Список конкурсов
if(isset($_GET["list"])){


 # Список пользователей
 $db->Query("SELECT * FROM db_competition WHERE status > 0");
 if($db->NumRows() > 0){
 
 ?>
 
 
 <?PHP
  while($data = $db->FetchArray()){
  
  ?>
   
  <?PHP
  }

 }else echo "<center><b><font color = 'red'></font></b></center><BR />";


?>

<div class="clr"></div> 
<?PHP

return;
}


$db->Query("SELECT * FROM db_competition WHERE status = 0 LIMIT 1");
if($db->NumRows() == 1){
$comp = $db->FetchArray(); 
 ?>

 <?PHP
 
 # Список пользователей
 $db->Query("SELECT * FROM db_competition_users ORDER BY points DESC LIMIT 100");
 if($db->NumRows() > 0){
 
 ?>
 
 
</table>
<BR />
 <?PHP
 
}else echo "<center><b><font color = 'red'></font></b></center><BR />";

}else echo "<center><b><font color = 'red'></font></b></center><BR />";

?>



 <br>
 <div class="silver-bk"
  <h3 style="font-size: 17;text-align:center; ">
  <font color="red">
  <b>Запущен</b>
  </font>
  <a href="/competition">конкурс рефералов №<?=$comp["id"]; ?></a>
  <font color="red">
  <b>с призовым фондом <?=$comp["1m"]+$comp["2m"]+$comp["3m"]; ?> руб.!</b>
  </font>
  <br>
  </h3>
  </div>
  <br>
  <table>
  <tbody>
  <tr>
  <td>
 
  
  
  
  <center><div style="display:none;"> <a href="http://seocola.ru">Скрипты </a></div> 
  
 
  
  </div>
  </td>
  <td>
  <h1>
<div style="width:565px;" >
<h3 style=" font-size: 17; text-align: center; ">
Проект открыт!!! При пополнении от 100 рублей
<br>
<font color="white">
Вы получите
<b>+300% в подарок!</b>
<b>Акция действует с 15.12.2014 по 20.01.2015</b>
</font>
</h3>
</div>
<br>
<div style="width:565px;" >
<h3 style=" font-size: 17; text-align: center; ">
За пополнение свыше 500 RUB
<br>
<font color="white">
<b>2 звания Ефрейтора в подарок!</b>
</font>
</h3>
</div>
<br>
<div style="width:565px;" >
<h3 style=" font-size: 17; text-align: center; ">
За пополнение свыше 1500 RUB
<br>
<font color="white">
<b>1 Сержанта в Подарок!</b></font>
</h3>
</div>
<br>
</h1>
</td>
</tr>
</tbody>
</table>  

 

  </div>