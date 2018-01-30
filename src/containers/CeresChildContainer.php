<?php
 
namespace CeresChild\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class CeresChildContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresChild::content.CeresChild');
    }
}