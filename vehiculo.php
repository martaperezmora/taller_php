<?php

class vehiculo{
        public $matricula;
        public $marca;
        public $modelo;
        public $color;
        public $revisado;
        
        function vehiculo($matricula,$marca,$modelo, $color){
            $this -> matricula = $matricula;
            $this -> marca = $marca;
            $this -> modelo = $modelo;
            $this -> color = $color;
            $this -> revisado = 'N';
        }

        function setMatricula($matricula){
            $this -> matricula = $matricula;
        }
        function setMarca($marca){
            $this -> marca = $marca;
        }
        function setModelo($modelo){
            $this -> modelo = $modelo;
        }
        function setColor($color){
            $this -> color = $color;
        }
        function setRevisado($revisado){
            $this -> revisado = $revisado;
        }

        function getMatricula(){
            return $this->matricula;
        }
        function getMarca(){
            return $this->marca;
        }
        function getModelo(){
            return $this->modelo;
        }
        function getColor(){
            return $this->color;
        }
        function getRevisado(){
            return $this->revisado;
        }
    }
?>