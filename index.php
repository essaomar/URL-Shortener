<?php 

 
include('db.php');

 
if (!empty($_GET['url'])) {
	$redirect = mysql_fetch_assoc(mysql_query("SELECT url_link FROM urls WHERE url_short = '".addslashes($_GET['url'])."'"));
	$redirect = "http://".str_replace("http://","",$redirect[url_link]);
	header('HTTP/1.1 301 Moved Permanently');  
	header("Location: ".$redirect);  
}
 
if (isset($_POST['url'])) {

 
$short = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 5);

mysql_query("INSERT INTO urls (url_link, url_short, url_ip, url_date) VALUES

	(
	'".addslashes($_POST['url'])."',
	'".$short."',
	'".$_SERVER['REMOTE_ADDR']."',
	'".time()."'
	)

");

$redirect = "?s=$short";
header('Location: '.$redirect); die;

}
 
?>
<!DOCTYPE html>
<html>
<head>

<title>URL shorting</title>
 
</head>

<body style="text-align: center;;">


<h1> enter the URL</h1>
<form id="form1" name="form1" method="post" action="">
  <input name="url" type="text" id="url" value="" size="75" />
  <input type="submit" name="Submit" value="submit" />
</form>

 
<?php if (!empty($_GET['s'])) { ?>
<br />
<h2>Here's the short URL: <a href="<?php echo $server_name; ?><?php echo $_GET['s']; ?>" target="_blank"><?php echo $server_name; ?><?php echo $_GET['s']; ?></a></h2>
<?php } ?>
 
 

</body>
</html>