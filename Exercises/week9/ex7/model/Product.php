<?php
// ============
// INSTRUCTIONS
// ============
// 1.  Create class Product

	class Product {

	// 	a.  Has several properties: name, price, and GST. GST is a constant of value 0.07.
		private $name;
		private $price;
		const GST = 0.07;

	// 	b.	Has several getter methods for name and price
		public function getName() {
			return $this->name;
		}
		public function getPrice(){
			return $this->price;
		}
	
	// 	c.  Has a constructor that takes in two parameters name and price 
	//      to initialize its two properties (1) name and (2) price.
		public function __construct($name, $price) {
			$this->name = $name;
			$this->price = $price;
		}
	
	// d.  Has a getGSTPrice() function that returns the price after GST.
	// 			price X (1 + GST)
		public function getGSTPrice() {
			return $this->price*(1+self::GST);
		}

	// 	e.  Has a toString() function that returns a String representation of the object in the following format:
	// 		 	<name> costs $<price>; after GST $<GST price>
	// 		where <name> and <price> are the values of its two properties, and <GST price> is price after GST.  
	//      E.g.
	// 		 	Pizza costs $9.95; after GST $10.6465
		public function toString() {
			return "$this->name costs \${$this->price}; after GST \${$this->getGSTPrice()}";
		}

	}
?>