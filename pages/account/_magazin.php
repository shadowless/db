<div class="section_w500">
<h2>Фермерский магазин</h2>
<p>В этом магазине Вы можете приобрести саженцы различных растений. Каждое растение приносит особые плоды которые можно потом продать на рынке и обменять на реальные деньги. Каждое растение даёт разное количество плодов, чем дороже оно тем больше плодоносит. Вы можете покупать любое их количество, растения не засыхают, не исчезают и будут плодоносить всегда. </p><p><font color="#808e04">Перед тем как докупить саженцы следует собрать урожай на складе!</font></p>
                               </div>
							   
							   
<center>							   
<br>
<br>
<table>
<tr>
 <td>
 <a href="/account/farm" class="farm-a" align="right"></a>
 </td>
 <td>
 <a href="/account/farmo" class="farm-b" align="right"></a>
 </td>
 </tr>
</table>
<?PHP
$_OPTIMIZATION["title"] = "Аккаунт - Магмзин";
$usid = $_SESSION["user_id"];
$refid = $_SESSION["referer_id"];
$usname = $_SESSION["user"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();

# Покупка нового дерева
if(isset($_POST["item"])){

$array_items = array(1 => "a_t", 2 => "b_t", 3 => "c_t", 4 => "d_t", 5 => "e_t");
$array_name = array(1 => "Лайм", 2 => "Вишня", 3 => "Клубника", 4 => "Киви", 5 => "Апельсин");
$item = intval($_POST["item"]);
$citem = $array_items[$item];

	if(strlen($citem) >= 3){
		
		# Проверяем средства пользователя
		$need_money = $sonfig_site["amount_".$citem];
		if($need_money <= $user_data["money_b"]){
		
			if($user_data["last_sbor"] == 0 OR $user_data["last_sbor"] > ( time() - 60*20) ){
				
				$to_referer = $need_money * 0.1;
				# Добавляем дерево и списываем деньги
				$db->Query("UPDATE db_users_b SET money_b = money_b - $need_money, $citem = $citem + 1,  
				last_sbor = IF(last_sbor > 0, last_sbor, '".time()."') WHERE id = '$usid'");
				
				# Вносим запись о покупке
				$db->Query("INSERT INTO db_stats_btree (user_id, user, tree_name, amount, date_add, date_del) 
				VALUES ('$usid','$usname','".$array_name[$item]."','$need_money','".time()."','".(time()+60*60*24*15)."')");
				
				echo "<center><font color = 'green'><b>Вы успешно посадили саженец</b></font></center><BR />";
				
				$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
				$user_data = $db->FetchArray();
				
			}else echo "<center><font color = 'red'><b>Перед тем как докупить саженцы следует собрать урожай на складе!</b></font></center><BR />";
		
		}else echo "<center><font color = 'red'><b>Недостаточно серебра для покупки</b></font></center><BR />";
	
	}else echo 222;

}

?>

<div class="clr"></div>
