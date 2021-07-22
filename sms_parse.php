<?php

$number = $_POST['From'];
$body = $_POST['Body'];
$pic = "https://media.vanityfair.com/photos/59653e9a3a5a726a87a6302d/master/pass/Idris-Elba.jpg";

header('Content-Type: text/xml');
?>

<Response>

	<Message>
	Hello <?php echo $number ?>.
	You said <?php echo $body ?>
	<?php file_put_contents("message.php", $body); ?>
	<Media><?php echo $pic ?></Media>
	</Message>

</Response>