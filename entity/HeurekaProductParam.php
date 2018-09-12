<?php
/**
 * Created by PhpStorm.
 * User: Isigar
 * Date: 9/12/2018
 * Time: 9:10 AM
 */

namespace Relisoft\XMLParser\Entity;


class HeurekaProductParam
{
    private $param_name;
    private $val;

    public function __construct(array  $data)
    {
        $this->setParamName(isset($data["PARAM_NAME"]) ? $data["PARAM_NAME"] : null);
        $this->setVal(isset($data["VAL"]) ? $data["VAL"] : null);
    }

    /**
     * @return mixed
     */
    public function getParamName()
    {
        return $this->param_name;
    }

    /**
     * @param mixed $param_name
     */
    public function setParamName($param_name): void
    {
        $this->param_name = $param_name;
    }

    /**
     * @return mixed
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * @param mixed $val
     */
    public function setVal($val): void
    {
        $this->val = $val;
    }


}