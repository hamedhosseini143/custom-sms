<?php

namespace Drupal\sms_custom;

/**
 * Interface SmsFramworkServiceInterface.
 */
interface SmsFramworkServiceInterface {
    /**
     * @param mixed $tel
     * @param mixed $message
     * 
     * @return [type]
     */
    public function sendSms($tel, $message);
}
