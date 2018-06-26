<?php
/**
 * Created by PhpStorm.
 * User: Isigar
 * Date: 6/26/2018
 * Time: 12:17 PM
 */

namespace Relisoft\XMLParser\DI;


use Nette\DI\CompilerExtension;
use Relisoft\XMLParser\Parser\Heureka;

class XMLParserExtension extends CompilerExtension
{
    public $defaults = [];

    public function loadConfiguration()
    {
        $config = $this->validateConfig($this->defaults);
        $builder = $this->getContainerBuilder();
        $builder->addDefinition($this->prefix("heureka"))
            ->setFactory(Heureka::class);
        parent::loadConfiguration();
    }
}