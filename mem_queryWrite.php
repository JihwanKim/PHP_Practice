<meta http-equiv="Content-Type" content="text/html; charset=euc-kr"/>
<?
	echo "id : $id<br>";
	$connect = mysql_connect("localhost","root","apmsetup");
	mysql_select_db("test",$connect);
	$sql = "insert into id_table(id,name,passwd,gender,email)";
	$sql.= "values($id,$name,$passwd,$gender,$email."@".$address);";
	if (mysql_query($sql))
		echo "���� �Ϸ�";
	else
		echo "���� ����";
	mysql_close($connect);

?>