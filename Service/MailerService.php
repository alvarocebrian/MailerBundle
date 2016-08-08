<?php
namespace Acilia\Bundle\MailerBundle\Service;

use Acilia\Bundle\MailerBundle\Providers\DefaultProviderInterface as ProviderInterface;

public class MailerService
{
    protected $providers;

    public function __construct ($providers)
    {
        $this->$providers = array();
    }

    public function getProvider ($provider)
    {
        if (isset($providers->[$provider])) {
            return $providers>[$provier];
        }
        return null;
    }

    public function addProvider(ProviderInterface $provider)
    {
        $this->providers[$provider->getName()] = $provider;
    }
}