<?php

namespace Acilia\Bundle\MailerBundle\Library\Providers\Interfaces;

public interface class DefaultProviderInterface
{
    public function newMessage();

    public function send(Message $message);
}
