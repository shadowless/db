<?PHP
######################################
# ������ GENERAL MONEY
# ����� SEOCOLA.RU
# ICQ: 614936
# Skype: SEOCOLA
######################################
$_OPTIMIZATION["title"] = "�������";
$_OPTIMIZATION["description"] = "������� ������������";
$_OPTIMIZATION["keywords"] = "�������, ������ �������, ������������";

# ���������� ������
if(!isset($_SESSION["user_id"])){ Header("Location: /"); return; }

if(isset($_GET["sel"])){
		
	$smenu = strval($_GET["sel"]);
			
	switch($smenu){
		
		case "404": include("pages/_404.php"); break; // �������� ������
		case "stats": include("pages/account/_story.php"); break; // ����������
		case "referals": include("pages/account/_referals.php"); break; // ��������
		case "farm": include("pages/account/_farm.php"); break; // ��� �����
		case "competition": include("pages/_competition.php"); break; // ��������
		case "store": include("pages/account/_store.php"); break; // �����
		case "swap": include("pages/account/_swap.php"); break; // �������� �����
		case "market": include("pages/account/_market.php"); break; // �����
		case "payment": include("pages/account/_payment.php"); break; // ������� WM
		case "payment_qiwi": include("pages/account/_payment_qiwi.php"); break; // ������� QIWI
		case "insert": include("pages/account/_insert.php"); break; // ���������� �������
		case "config": include("pages/account/_config.php"); break; // ���������
		case "bonus": include("pages/account/_bonus.php"); break; // ���������� �����
		case "set": include("pages/account/_set.php"); break; // ����
		case "lottery": include("pages/account/_lottery.php"); break; // �������
		case "knb": include("pages/account/_knb.php"); break; // KNB
		case "chat": include("pages/account/_chat.php"); break; // ���
		case "pay_points": include("pages/account/_pay_points.php"); break; // ��������� �����
		case "donations": include("pages/account/_donations.php"); break; // ������ �������
		
		
				
		case "exit": @session_destroy(); Header("Location: /"); return; break; // �����
				
	# �������� ������
	default: @include("pages/_404.php"); break;
			
	}
			
}else @include("pages/account/_user_account.php");

?>