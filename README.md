# xmlparser
Nette XML parser, heureka parser

### Setup

> config.neon
```
extensions:
    xmlparse: Relisoft\XMLParser\DI\XMLParserExtension
```

### Heureka parse example
> any presenter you want

```
/**
* @var Heureka
* @inject
*/
public $heureka;

public function actionDefault(){
    $heureka = $this->heureka;
    $data = $heureka->decode(FileSystem::read('https://.../feed_heureka.xml'),'xml');
    $heureka->associateData($data);
    $data = $heureka->getData();
    Debugger::barDump($data,"Data");
}
```

#### Return:
```
0 => Relisoft\XMLParser\Entity\HeurekaProduct #9e27
  id private => "1"
  productname private => "Swardman Edwin Standard 55" (26)
  product private => "Swardman Edwin Standard 55" (26)
  description private => "Benzínová zahradní vřetenová sekačka s pojezdem. 
 Sekačka má záběr sečení 55 cm.
 Vhodná pro trávníky s plochou do 2000 m2." (139)
  categorytext private => "Heureka.cz | Dům a zahrada | Zahrada | Sekačky" (48)
  url private => "https://www.swardman.com/cz/e-shop/edwin-standard-55/edwin-standard-55/" (71)
  img private => "https://www.swardman.com/obj/files/7/sys_media_5769.png" (55)
  price_vat private => "39999" (5)
  delivery_date private => "0"
```

#### Functions:
```
$heureka->decode(XML INPUT, FILE TYPE = XML)
```
> Decoded heureka xml input to array

```
$heureka->associateData(DATA FROM DECODE FUNC)
```
> Associate decoded data to heureka product classes


```
$heureka->getData()
```
> Get data from associate function

