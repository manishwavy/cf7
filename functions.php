add_action( 'wpcf7_before_send_mail', 'my_dynamic_attachments' );
function my_dynamic_attachments($cf7)
{
     if($cf7->id==109)
     {	

		$mail = $cf7->prop('mail_2');
		$mail['attachments'] = str_replace('[myfieldname]', 'uploads/temp/c43ef9ee8febdb00e661e0e7d6125324.pdf', $mail['attachments']);
		$cf7->set_properties(array(
			"mail_2" => $mail
		));
		return $cf7;
     }
}
