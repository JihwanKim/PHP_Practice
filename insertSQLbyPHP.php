<?	
	$connect = mysql_connect("localhost","root","apmsetup");
	mysql_select_db("test",$connect);
	$sql = "insert into biz_card(num,name,years)";
	$sql .= 'values (2,"jj",30)';
	$result = mysql_query($sql);
	if($result)
		echo "���ڵ� ���� �Ϸ�!";
	else
		echo "���ڵ� ���� ����!";
	mysql_close($connect);
?>
