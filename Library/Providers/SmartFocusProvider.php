<?php
namespace Acilia\Bundle\MailerBundle\Provider;

use Acilia\Bundle\MailerBundle\Library\Providers\Interfaces\DefaultProviderInterface;
use Acilia\Bundle\MailerBundle\Library\Messages\DefaultMessage as Message;

public class SmartFocusProvider implements DefaultProviderInterface;
{
    public function newMessage()
    {
        return new Message();
    }

    public function send(Message $message)
    {
        $messageType = $message->getOption('message_type');

        $ch = curl_init();

        switch ($messageType) {
            case 'xml' :
                curl_setopt($ch, CURLOPT_URL, "http://api.notificationmessaging.com/NMSXML");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
                curl_setopt($ch, CURLOPT_POSTFIELDS, $message->getBody());
                break;
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, true);

        $output = curl_exec($ch);

        curl_close($ch);

        return $output;
    }
}
