<?php
namespace Acilia\Bundle\MailerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Acilia\Bundle\MailerBundle\DependencyInjection\LoaderCompilerPass;

class AciliaVideoProviderBundle extends Bundle
{
    parent::build($container);

    $container->addCompilerPass(new LoaderCompilerPass());
}