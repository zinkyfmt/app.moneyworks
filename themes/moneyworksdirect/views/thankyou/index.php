<?php $user_id = Yii::app()->user->getState('user_id');
$model = Users::model()->findByPk($user_id);
$agentModel = Agents::model()->findByPk($model->agent_id);
$receiverEmail = $agentModel->email;
				
?>
<p>Thank you for your submission. A funding specialist will contact you shortly after reviewing your application. </p><p>If you haven't uploaded your bank statements please email your rep here: <a href="mailto:<?php echo $receiverEmail;?>"><?php echo $receiverEmail;?></a> </p> 