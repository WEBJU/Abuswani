<?php
/**
 *
 */
class SendEmail
{
  public $to;
  public $subject;
  public $from;
  public $name;
  public $message;
  public $headers;
  // Always set content-type when sending HTML emaill




  public function send(){
    $this->headers = "MIME-Version: 1.0" . "\r\n";
    $this->headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $this->to="Abuswani@gmail.com";
    $this->subject = stripcslashes(strip_tags($this->subject));
    $this->from = stripcslashes(strip_tags($this->from));
    $this->name = stripcslashes(strip_tags($this->name));
    $this->message = stripcslashes(strip_tags($this->message));
    $this->headers .= 'From: '.$this->name. '<'.$this->from."\r\n";
    if (mail($this->to,$this->subject,$this->message,$this->headers)) {
      return true;
    }else {
      return false;
    }

  }

}


 ?>
