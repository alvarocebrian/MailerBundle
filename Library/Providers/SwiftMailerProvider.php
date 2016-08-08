<?php
namespace Acilia\Bundle\MailerBundle\Provider;

use Acilia\Bundle\MailerBundle\Library\Providers\Interfaces\DefaultProviderInterface;
use Swift_Message;
use Swift_Mailer;


public class SmartFocusProvider implements DefaultProviderInterface;
{
    protected $generalMailerService;

    public function __construct(Swift_Mailer $generalMailerService)
    {
        $this->mailerService = $generalMailerService;
    }

    public function newMessage()
    {
        return Swift_Message::newInstance();
    }

    public function send($message)
    {
        return $this->mailerService->send($message);
    }
}