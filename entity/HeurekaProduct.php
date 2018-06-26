<?php
/**
 * Created by PhpStorm.
 * User: Isigar
 * Date: 6/26/2018
 * Time: 12:25 PM
 */

namespace Relisoft\XMLParser\Entity;


/**
 * Class HeurekaProduct
 * @package Relisoft\XMLParser\Entity
 */
class HeurekaProduct
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $productname;
    /**
     * @var string
     */
    private $product;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $categorytext;
    /**
     * @var string
     */
    private $url;
    /**
     * @var string
     */
    private $img;
    /**
     * @var float
     */
    private $price_vat;
    /**
     * @var int
     */
    private $delivery_date;

    /**
     * HeurekaProduct constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        try{
            $this->setId($data['ITEM_ID']);
            $this->setProductname($data['PRODUCTNAME']);
            $this->setProduct($data['PRODUCT']);
            $this->setUrl($data['URL']);
            $this->setImg($data['IMGURL']);
            $this->setDescription($data['DESCRIPTION']);
            $this->setCategorytext($data['CATEGORYTEXT']);
            $this->setDeliveryDate($data['DELIVERY_DATE']);
            $this->setPriceVat($data['PRICE_VAT']);
        }catch (\Exception $e){
            throw new \UnexpectedValueException('Wrong data schema!');
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getProductname()
    {
        return $this->productname;
    }

    /**
     * @param mixed $productname
     */
    public function setProductname($productname)
    {
        $this->productname = $productname;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCategorytext()
    {
        return $this->categorytext;
    }

    /**
     * @param mixed $categorytext
     */
    public function setCategorytext($categorytext)
    {
        $this->categorytext = $categorytext;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getPriceVat()
    {
        return $this->price_vat;
    }

    /**
     * @param mixed $price_vat
     */
    public function setPriceVat($price_vat)
    {
        $this->price_vat = $price_vat;
    }

    /**
     * @return mixed
     */
    public function getDeliveryDate()
    {
        return $this->delivery_date;
    }

    /**
     * @param mixed $delivery_date
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->delivery_date = $delivery_date;
    }


}