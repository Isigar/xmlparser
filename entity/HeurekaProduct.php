<?php
/**
 * Created by PhpStorm.
 * User: Isigar
 * Date: 6/26/2018
 * Time: 12:25 PM
 */

namespace Relisoft\XMLParser\Entity;
use Tracy\Debugger;


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
     * @var string
     */
    private $ppchitname;

    /**
     * @var array
     */
    private $param;
    /**
     * @var string
     */
    private $ean;
    /**
     * @var int
     */
    private $itemgroup_id;
    /**
     * @var string
     */
    private $manufacturer;

    /**
     * HeurekaProduct constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        try{
            $this->setId(isset($data['ITEM_ID']) ? $data['ITEM_ID'] : null);
            $this->setProductname(isset($data['PRODUCTNAME']) ? $data['PRODUCTNAME'] : null);
            $this->setProduct(isset($data['PRODUCT']) ? $data['PRODUCT'] : null);
            $this->setUrl(isset($data['URL']) ? $data['URL'] : null);
            $this->setImg(isset($data['IMGURL']) ? $data['IMGURL'] : null);
            $this->setDescription(isset($data['DESCRIPTION']) ? $data['DESCRIPTION'] : null);
            $this->setCategorytext(isset($data['CATEGORYTEXT']) ? $data['CATEGORYTEXT'] : null);
            $this->setDeliveryDate(isset($data['DELIVERY_DATE']) ? $data['DELIVERY_DATE'] : null);
            $this->setPriceVat(isset($data['PRICE_VAT']) ? $data['PRICE_VAT'] : null);
            $this->setEan(isset($data['EAN']) ? $data['EAN'] : null);
            $this->setItemgroupId(isset($data['ITEMGROUP_ID']) ? $data['ITEMGROUP_ID'] : null);
            $this->setPpchitname(isset($data['PPCHITNAME']) ? $data['PPCHITNAME'] : null);
            $this->setManufacturer(isset($data['MANUFACTURER']) ? $data['MANUFACTURER'] : null);
            if(isset($data["PARAM"])){
                foreach ($data["PARAM"] as $param){
                   if(is_array($param)){
                       $this->param[] = new HeurekaProductParam($param);
                   }else{
                       $this->param[] = new HeurekaProductParam($data["PARAM"]);
                   }
                }
            }
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
     * @return string
     */
    public function getPpchitname(): string
    {
        return $this->ppchitname;
    }

    /**
     * @param string $ppchitname
     */
    public function setPpchitname(string $ppchitname): void
    {
        $this->ppchitname = $ppchitname;
    }

    /**
     * @return array
     */
    public function getParam(): array
    {
        return $this->param;
    }

    /**
     * @param array $param
     */
    public function setParam(array $param): void
    {
        $this->param = $param;
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     */
    public function setEan(string $ean): void
    {
        $this->ean = $ean;
    }

    /**
     * @return int
     */
    public function getItemgroupId(): int
    {
        return $this->itemgroup_id;
    }

    /**
     * @param int $itemgroup_id
     */
    public function setItemgroupId(int $itemgroup_id): void
    {
        $this->itemgroup_id = $itemgroup_id;
    }

    /**
     * @return string
     */
    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    /**
     * @param string $manufacturer
     */
    public function setManufacturer(string $manufacturer): void
    {
        $this->manufacturer = $manufacturer;
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