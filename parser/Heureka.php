<?php
/**
 * Created by PhpStorm.
 * User: Isigar
 * Date: 6/26/2018
 * Time: 12:31 PM
 */

namespace Relisoft\XMLParser\Parser;


use Relisoft\XMLParser\Entity\HeurekaProduct;

class Heureka extends Parser implements IParser
{

    private $data;

    /**
     * Get data in entitiy
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $parsedData
     * @return mixed
     */
    public function associateData($parsedData)
    {
        $this->data = [];
        foreach($parsedData['SHOPITEM'] as $product){
            $this->data[] = new HeurekaProduct($product);
        }
        return true;
    }
}