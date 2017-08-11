<div class="cl-right">
<div class="s-bk-lf">
	
</div>
<div class="s-bk-lf">
	<div class="hst-title">Магазин</div>
</div><font color="#FFffff">
В армии Вы можете купить себе воинское  звание. 
<br>
За каждое воинское звание Вам будет начисляться сигареты. 
<br>
Каждое воинское звание даёт разное количество сигарет, чем выше звание - тем больше сигарет Вы получите. 
<br>
Вы можете покупать любое количество званий, сигареты за звания Вы будете получать всегда. </font>


</p><p><font color="#fff000">Перед тем как купить звание, следует получить сигареты на складе!</font></p>
                               
<?PHP
$_OPTIMIZATION["title"] = "Аккаунт - Ферма";
$usid = $_SESSION["user_id"];
$refid = $_SESSION["referer_id"];
$usname = $_SESSION["user"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();

# Покупка нового звания
if(isset($_POST["item"])){

$array_items = array(1 => "a_t", 2 => "b_t", 3 => "c_t", 4 => "d_t", 5 => "e_t");
$array_name = array(1 => "Рядовой", 2 => "Ефрейтор", 3 => "Мл. Сержант", 4 => "Сержант", 5 => "Старшина");
$item = intval($_POST["item"]);
$citem = $array_items[$item];

	if(strlen($citem) >= 3){
		
		# Проверяем средства пользователя
		$need_money = $sonfig_site["amount_".$citem];
		if($need_money <= $user_data["money_b"]){
		
			if($user_data["last_sbor"] == 0 OR $user_data["last_sbor"] > ( time() - 60*20) ){
				
				$to_referer = $need_money * 0.1;
				# Добавляем звание и списываем деньги
				$db->Query("UPDATE db_users_b SET money_b = money_b - $need_money, $citem = $citem + 1,  
				last_sbor = IF(last_sbor > 0, last_sbor, '".time()."') WHERE id = '$usid'");
				
				# Вносим запись о покупке
				$db->Query("INSERT INTO db_stats_btree (user_id, user, tree_name, amount, date_add, date_del) 
				VALUES ('$usid','$usname','".$array_name[$item]."','$need_money','".time()."','".(time()+60*60*24*15)."')");
				
				echo "<center><font color = 'green'><b>Вы успешно купили звание</b></font></center><BR />";
				
				$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
				$user_data = $db->FetchArray();
				
			}else echo "<center><font color = 'red'><b>Перед тем как купить звание, следует получить сигареты на складе!</b></font></center><BR />";
		
		}else echo "<center><font color = 'red'><b>Недостаточно сигарет для покупки</b></font></center><BR />";
	
	}else echo 222;

}

?>



<div class="fr-block">
	<form action="" method="post">
	<div class="cl-fr-lf">
		<img src="/img/fruit/lime.jpg" />
	</div>
	
	<div class="cl-fr-rg" style="padding-left:20px;">
		<div class="fr-te-gr-title"><b>Рядовой</b></div>
		<div class="fr-te-gr">Сигарет: <font color="#FFD800"><?=$sonfig_site["a_in_h"]; ?> в час</font></div>
		<div class="fr-te-gr">Стоимость: <font color="#FFD800"><?=$sonfig_site["amount_a_t"]; ?> серебра</font></div>
		<div class="fr-te-gr">Куплено: <font color="#FFD800"><?=$user_data["a_t"]; ?> шт.</font></div>
		<input type="hidden" name="item" value="1" />
		<input type="submit" value="Купить звание" style="height: 30px; margin-top:10px;" />
	</div>
	</form>
</div>

<div class="fr-block">
	<form action="" method="post">
	<div class="cl-fr-lf">
		<img src="/img/fruit/cherry.jpg" />
	</div>
	
	<div class="cl-fr-rg" style="padding-left:20px;">
		<div class="fr-te-gr-title"><b>Ефрейтор</b></div>
		<div class="fr-te-gr">Сигарет: <font color="#FFD800"><?=$sonfig_site["b_in_h"]; ?> в час</font></div>
		<div class="fr-te-gr">Стоимость: <font color="#FFD800"><?=$sonfig_site["amount_b_t"]; ?> серебра</font></div>
		<div class="fr-te-gr">Куплено: <font color="#FFD800"><?=$user_data["b_t"]; ?> шт.</font></div>
		<input type="hidden" name="item" value="2" />
		<input type="submit" value="Купить звание" style="height: 30px; margin-top:10px;">
	</div>
	</form>
</div>

<div class="fr-block">
	<form action="" method="post">
	<div class="cl-fr-lf">
		<img src="/img/fruit/strawberries.jpg" />
	</div>
	
	<div class="cl-fr-rg" style="padding-left:20px;">
		<div class="fr-te-gr-title"><b>Мл.Сержант</b></div>
		<div class="fr-te-gr">Сигарет: <font color="#FFD800"><?=$sonfig_site["c_in_h"]; ?> в час</font></div>
		<div class="fr-te-gr">Стоимость: <font color="#FFD800"><?=$sonfig_site["amount_c_t"]; ?> серебра</font></div>
		<div class="fr-te-gr">Куплено: <font color="#FFD800"><?=$user_data["c_t"]; ?> шт.</font></div>
		<input type="hidden" name="item" value="3" />
		<input type="submit" value="Купить звание" style="height: 30px; margin-top:10px;">
	</div>
	</form>
</div>

<div class="fr-block">
	<form action="" method="post">
	<div class="cl-fr-lf">
		<img src="/img/fruit/kiwi.jpg" />
	</div>
	
	<div class="cl-fr-rg" style="padding-left:20px;">
		<div class="fr-te-gr-title"><b>Сержант</b></div>
		<div class="fr-te-gr">Сигарет: <font color="#FFD800"><?=$sonfig_site["d_in_h"]; ?> в час</font></div>
		<div class="fr-te-gr">Стоимость: <font color="#FFD800"><?=$sonfig_site["amount_d_t"]; ?> серебра</font></div>
		<div class="fr-te-gr">Куплено: <font color="#FFD800"><?=$user_data["d_t"]; ?> шт.</font></div>
		<input type="hidden" name="item" value="4" />
		<input type="submit" value="Купить звание" style="height: 30px; margin-top:10px;">
	</div>
	</form>
</div>

<div class="fr-block">
	<form action="" method="post">
	<div class="cl-fr-lf">
		<img src="/img/fruit/orange.jpg" />
	</div>
	
	<div class="cl-fr-rg" style="padding-left:20px;">
		<div class="fr-te-gr-title"><b>Старшина</b></div>
		<div class="fr-te-gr">Сигарет: <font color="#FFD800"><?=$sonfig_site["e_in_h"]; ?> в час</font></div>
		<div class="fr-te-gr">Стоимость: <font color="#FFD800"><?=$sonfig_site["amount_e_t"]; ?> серебра</font></div>
		<div class="fr-te-gr">Куплено: <font color="#FFD800"><?=$user_data["e_t"]; ?> шт.</font></div>
		<input type="hidden" name="item" value="5" />
		<input type="submit" value="Купить звание" style="height: 30px; margin-top:10px;">
	</div>
	</form>
</div>
<div class="clr"></div>
</div>


