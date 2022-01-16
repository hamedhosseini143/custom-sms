How Use:

for sms framwork :

\Drupal::service('sms_custom.smsframwork')->sendSms($tel, $message);

for http:
\Drupal::service('sms_custom.smshttp')->sendSms($message, $tel, $pattern);