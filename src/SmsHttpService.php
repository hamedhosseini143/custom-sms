<?php

namespace Drupal\sms_custom;

/**
 * Class SmsHttpService.
 */
class SmsHttpService implements SmsHttpServiceInterface {

  /**
   * @param mixed $message
   * @param mixed $tel
   * @param mixed $pattern
   * 
   * @return [type]
   */
  public function sendSms($message, $tel, $pattern){
    $http         = new \GuzzleHttp\Client;
    $username     = "username";
    $password     = 'password';
    $from         = "+985000125475";
    $pattern_code = $pattern;
    $to           = [$tel];
    $input_data   = $message;
    $url          = "https://ippanel.com/patterns/pattern?username=" . $username . "&password=" . urlencode($password) . "&from=$from&to=" . json_encode($to) . "&input_data=" . urlencode(json_encode($input_data)) . "&pattern_code=$pattern_code";
    $response     = $http->post($url);
  
    if (!$response) {
     return false;
    }
    return true;
  
  }

}
