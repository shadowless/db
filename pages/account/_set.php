<?PHP
$_OPTIMIZATION["title"] = "Аккаунт - FRUIT SET Бонусы";
$_OPTIMIZATION["description"] = "Бонусы за пополнение баланса";
?>
<div class="cl-right">
<br>
<div class="s-bk-lf">
 <div class="hst-title">Фруктовый SET</div>
</div>

<font color="FFffff"><b>Звания SET - это звание, которые даются пользователю при пополнении баланса. <BR /></b>
Звание SET начисляется в автоматическом режиме после каждого пополнения баланса. Максимум можно получить только 1 Звание SET за 1 пополнение.<BR />
<BR /><font>
<b><font color = "red">ВАЖНО:</font> <BR />- Звание даются как бонус! У вас НЕ забирается пополняемая сумма.</b> 
<div class="clr"></div>  

<BR />


<b><center>Показать получаемый бонус</center></b><BR />
<form action="" method="post">
 
 <center>Пополняемая сумма: <input type="text" name="sum" value="<?=(isset($_POST["sum"])) ? intval($_POST["sum"]) : 100;?>" />
 <BR /><BR />
 <input  type="submit" value="Расчитать бонус">
 </center>
 
</form>
 


<?PHP
$wmset = new wmset();

if(isset($_POST["sum"])){

$insum = (intval($_POST["sum"]) > 0 AND intval($_POST["sum"]) <= 1000000) ? intval($_POST["sum"]) : 0;

$marray = $wmset->GetSet($insum);

?>
<BR /><BR />

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="5" align="center" style="padding:5px;"><b>При пополнении на сумму <?=$insum; ?> RUB Вы получаете званий:</b></td>
    </tr>
  <tr>
   <td align="center" width="20%"><div class="sm-line-nt"><img src="/img/fruit/lime-small.jpg" /> +<?=intval($marray["t_a"]);?> шт.</div></td>
 <td align="center" width="20%"><div class="sm-line-nt"><img src="/img/fruit/cherry-small.jpg" /> +<?=intval($marray["t_b"]);?> шт.</div></td>
    <td align="center" width="20%"><div class="sm-line-nt"><img src="/img/fruit/strawberries-small.jpg" /> +<?=intval($marray["t_c"]);?> шт.</div></td>
 <td align="center" width="20%"><div class="sm-line-nt"><img src="/img/fruit/kiwi-small.jpg" /> +<?=intval($marray["t_d"]);?> шт.</div></td>
    <td align="center" width="20%"><div class="sm-line-nt"><img src="/img/fruit/orange-small.jpg" /> +<?=intval($marray["t_e"]);?> шт.</div></td>

    
  </tr>
</table>



<BR />
   
</div>  

<?PHP
return;

}
 
?>
</div>