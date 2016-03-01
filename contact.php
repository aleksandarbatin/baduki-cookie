<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];
$field_subject = $_POST['subject'];

$mail_to = 'ivana@badukicookie.dx.am';
$subject = 'Vrsta poruke: '.$field_subject;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Hvala sto ste nas kontaktirali. Uskoro cemo vam se javiti.');
		window.location = 'http://www.badukicookie.dx.am';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Neuspela poruka. Molimo vas, posaljite email na badukicookie@gmail.com');
		window.location = 'http://www.badukicookie.dx.am';
	</script>
<?php
}
?>