<?php

namespace Drupal\sms_custom;

/**
 * Interface SmsHttpServiceInterface.
 */
interface SmsHttpServiceInterface {

    /**
     * @param mixed $message
     * @param mixed $tel
     * @param mixed $pattern
     * 
     * @return [type]
     */
    public function sendSms($message, $tel, $pattern);
}
