<?php
$to = "shail@spm-automation.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: admin@shailpatel.ca" . "\r\n" .
"CC: shailpatel1996@gmail.com";

mail($to,$subject,$txt,$headers);
?>