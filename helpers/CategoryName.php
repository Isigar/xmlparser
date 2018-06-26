<?php
/**
 * Created by PhpStorm.
 * User: Isigar
 * Date: 6/26/2018
 * Time: 12:19 PM
 */

namespace Relisoft\XMLParser\Helpers;


use Nette\Utils\Strings;

class CategoryName
{
    public function __construct()
    {

    }

    public function heureka($category){
        $exp = explode(' | ',$category);
        return $exp[count($exp)-1];
    }
}