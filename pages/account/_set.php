<?PHP
$_OPTIMIZATION["title"] = "������� - FRUIT SET ������";
$_OPTIMIZATION["description"] = "������ �� ���������� �������";
?>
<div class="cl-right">
<br>
<div class="s-bk-lf">
 <div class="hst-title">��������� SET</div>
</div>

<font color="FFffff"><b>������ SET - ��� ������, ������� ������ ������������ ��� ���������� �������. <BR /></b>
������ SET ����������� � �������������� ������ ����� ������� ���������� �������. �������� ����� �������� ������ 1 ������ SET �� 1 ����������.<BR />
<BR /><font>
<b><font color = "red">�����:</font> <BR />- ������ ������ ��� �����! � ��� �� ���������� ����������� �����.</b> 
<div class="clr"></div>  

<BR />


<b><center>�������� ���������� �����</center></b><BR />
<form action="" method="post">
 
 <center>����������� �����: <input type="text" name="sum" value="<?=(isset($_POST["sum"])) ? intval($_POST["sum"]) : 100;?>" />
 <BR /><BR />
 <input  type="submit" value="��������� �����">
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
    <td colspan="5" align="center" style="padding:5px;"><b>��� ���������� �� ����� <?=$insum; ?> RUB �� ��������� ������:</b></td>
    </tr>
  <tr>
   <td align="center" width="20%"><div class="sm-line-nt"><img src="/img/fruit/lime-small.jpg" /> +<?=intval($marray["t_a"]);?> ��.</div></td>
 <td align="center" width="20%"><div class="sm-line-nt"><img src="/img/fruit/cherry-small.jpg" /> +<?=intval($marray["t_b"]);?> ��.</div></td>
    <td align="center" width="20%"><div class="sm-line-nt"><img src="/img/fruit/strawberries-small.jpg" /> +<?=intval($marray["t_c"]);?> ��.</div></td>
 <td align="center" width="20%"><div class="sm-line-nt"><img src="/img/fruit/kiwi-small.jpg" /> +<?=intval($marray["t_d"]);?> ��.</div></td>
    <td align="center" width="20%"><div class="sm-line-nt"><img src="/img/fruit/orange-small.jpg" /> +<?=intval($marray["t_e"]);?> ��.</div></td>

    
  </tr>
</table>



<BR />
   
</div>  

<?PHP
return;

}
 
?>
</div>