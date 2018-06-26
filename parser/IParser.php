<?php
/**
 * Created by PhpStorm.
 * User: Isigar
 * Date: 6/26/2018
 * Time: 12:32 PM
 */

namespace Relisoft\XMLParser\Parser;


interface IParser
{
    /**
     * Get data in entitiy
     * @return mixed
     */
    public function getData();

    /**
     * @param $parsedData
     * @return mixed
     */
    public function associateData($parsedData);

}