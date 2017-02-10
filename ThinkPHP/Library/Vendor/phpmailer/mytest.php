<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();                                      
$mail->Host = 'smtp.qq.com';                          
$mail->SMTPAuth = true;                               
$mail->Username = '654753115@qq.com';                      
$mail->Password = 'a654753115';                            
$mail->Port       = 25;                   
$mail->From = '654753115@qq.com';
$mail->FromName = '测试名字';
$mail->addAddress('654753115@qq.com');   //添加收件人
$mail->Subject = '邮件标题';
$mail->Body    = '<h3>邮件内容，这是只是测试内容，测试成功</h3>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
   echo '邮件不能发送.'.'<br>';
   echo '错误信息: ' . $mail->ErrorInfo;
   exit;
}
echo '邮件发送成功<br>';
echo '使用QQ开放端口'.$mail->Port;
?>