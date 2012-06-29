<?php
class MyClass{
	private $price;
	private $title;
	private $cpu;
	
	public function __construct($price, $title, $cpu){
		$this->price = $price;
		$this->title = $title;
		$this->upc = $cpu;
	}
	
	/*public function getWord(){
		return $this->words;
	}*/
	
	public function getThree(){
		$tmp = '';
		$tmp .= $this->price;
		$tmp .= ' - '.$this->title;
		$tmp .= ' - '.$this->upc;
		return $tmp;
	}
}

//$word = new MyClass('bob');
//$word2 = new MyClass('php is fun');
//echo $word->getWord();
//echo '<br>'.$word2->getWord();

$three = new MyClass(12.00, 'Cool PHP', '112019029102');
echo $three->getThree();
$four = new MyClass(18.00, 'Cool PHP 3', '112019029102fffgfggfg');
echo '<br>';
echo $four->getThree();
?>