<?php
    class CRectangulo {
        private $l;
        private $a;
        public function __construct($l, $a) {
            $this->l = $l;
            $this->a = $a;
        }

        private function calcularPerimetro() {
            $c=($this->l+$this->a)*2;
            return $c;
        }

        private function calcularArea() {
            $f=$this->a*$this->l;
            return $f;
        }

        public function mostrarDatos() {
            echo("Largo del rectangulo: ".$this->l."<br>");
            echo("Ancho del rectangulo: ".$this->a."<br>");
            echo ("Perimetro del rectangulo: ".$this->calcularPerimetro()."<br>");
            echo("Area del rectangulo: ".$this->calcularArea());
        }
    }

?>