<?php
    class room {
        private $name;
        private $price;

        public function __construct($n, $p){
            $this -> name = $n;
            $this -> price = $p;
        }

        /**
         * @return string
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @return float
         */
        public function getPrice()
        {
            return $this->price;
        }

        public function __toString()
        {
            // TODO: Implement __toString() method.
            return $this->getName().' - '.$this->getPrice();
        }

        public function toHTML() {
            $name = $this->getName();
            $price = $this->getPrice();
            return <<<ENDE
                <div class="product">
                    <h1>$name</h1>
                    <p>$price</p>
                </div>
ENDE;
        }
    }
