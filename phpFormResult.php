<?
	$info = $_POST;
	mail('erichonan@gmail.com', 'Message from ' . $_POST["userName"], $_POST["userMessage"]);
?>