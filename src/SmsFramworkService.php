<?php

namespace Drupal\sms_custom;

/**
 * Class SmsFramworkService.
 */
class SmsFramworkService implements SmsFramworkServiceInterface {

  /**
   * @param mixed $tel
   * @param mixed $message
   * 
   * @return [type]
   */
  public function sendSms($tel, $message){
       /** @var \Drupal\sms\Provider\SmsProviderInterface $sms_service */
       $sms_service = \Drupal::service('sms.provider');
       $sms = (new \Drupal\sms\Message\SmsMessage())
         ->setMessage($message)
         ->addRecipient($tel)
         ->setDirection(\Drupal\sms\Direction::OUTGOING);
       $sms_service->queue($sms);
       return TRUE;
  }

}
