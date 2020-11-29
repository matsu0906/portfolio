<?php
$header = "From:".mb_encode_mimeheader("問い合わせフォーム")."<".$_POST['mail'].">";
$mailto = "info@example.com";
$subject = $_POST['name']."からの問い合わせ";
$message = $_POST['comment'];
if(mb_send_mail($mailto,$subject,$message,$header)){
    $mail_alert = "送信しました。";
}else{
    $mail_alert = "送信が失敗しました。";
}
?>

<script type='text/javascript'>
alert('<?php echo $mail_alert ?>');
location.href = "http://";
</script>
