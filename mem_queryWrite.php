<?
	$a = "abc";
	$b = "n";
	$c = "M";
	$d = "email";
	echo "id : $id<br>";
	$connect = mysql_connect("localhost","root","apmsetup");
	if (!$connect)
		die( "mysql!".mysql_error());
	mysql_select_db("test",$connect);
	$sql = "insert into id_table(id,name,passwd,gender,email)";
	// ���̰Ǿȵ��� ? 
	/*
		id : jh2
		���� ����
		jh2,kjh2,,,jihwan@naver.com
		Duplicate entry '$id' for key 'PRIMARY'
	*/
	//$sql.= 'values("$id","$b","1234","$c.","d");';
	$sql.= sprintf("values('%s','%s','%s','%s','%s')",$id,$name,$passwd,$gender,$email);
	$result = mysql_query($sql);
	if ($result)
		echo "���� �Ϸ�";
	else{
		echo "���� ����<br>";
		echo "$id,$name,$passwd,$gemder,$email@$address<br>";
		echo mysql_error();
	}
	mysql_close($connect);

?>