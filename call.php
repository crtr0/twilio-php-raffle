<? header('Content-type: text/xml') ?>
<Response>
	<Dial callerId="<?= $_POST['FromNumber'] ?>"><?= $_POST['ToNumber'] ?></Dial>
</Response>