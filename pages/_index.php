<?PHP
$_OPTIMIZATION["title"] = "������� ���������";
$_OPTIMIZATION["description"] = "������� ���������";
$_OPTIMIZATION["keywords"] = "�������, ������� ���������";
?>
<div class="cl-right">


<?PHP

# ������ ���������
if(isset($_GET["list"])){


 # ������ �������������
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
 
 # ������ �������������
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
  <b>�������</b>
  </font>
  <a href="/competition">������� ��������� �<?=$comp["id"]; ?></a>
  <font color="red">
  <b>� �������� ������ <?=$comp["1m"]+$comp["2m"]+$comp["3m"]; ?> ���.!</b>
  </font>
  <br>
  </h3>
  </div>
  <br>
  <table>
  <tbody>
  <tr>
  <td>
 
  
  
  
  <center><div style="display:none;"> <a href="http://seocola.ru">������� </a></div> 
  
 
  
  </div>
  </td>
  <td>
  <h1>
<div style="width:565px;" >
<h3 style=" font-size: 17; text-align: center; ">
������ ������!!! ��� ���������� �� 100 ������
<br>
<font color="white">
�� ��������
<b>+300% � �������!</b>
<b>����� ��������� � 15.12.2014 �� 20.01.2015</b>
</font>
</h3>
</div>
<br>
<div style="width:565px;" >
<h3 style=" font-size: 17; text-align: center; ">
�� ���������� ����� 500 RUB
<br>
<font color="white">
<b>2 ������ ��������� � �������!</b>
</font>
</h3>
</div>
<br>
<div style="width:565px;" >
<h3 style=" font-size: 17; text-align: center; ">
�� ���������� ����� 1500 RUB
<br>
<font color="white">
<b>1 �������� � �������!</b></font>
</h3>
</div>
<br>
</h1>
</td>
</tr>
</tbody>
</table>  

 

  </div>