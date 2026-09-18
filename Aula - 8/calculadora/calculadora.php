<?php

class calculadora {
     
    //Atributos
    private $num1;
    private $num2;


    //Métodos
    public function somar() {
        //Somar os num1 e num2
        $soma = $this->num1 + $this->num2 ;
        return $soma;
    }

    //GETs E SETs   


    /**
     * Get the value of num1
     */
    public function getNum1()
    {
        return $this->num1;
    }

    /**
     * Set the value of num1
     */
    public function setNum1($num1): self
    {
        $this->num1 = $num1;

        return $this;
    }

    /**
     * Get the value of num2
     */
    public function getNum2()
    {
        return $this->num2;
    }

    /**
     * Set the value of num2
     */
    public function setNum2($num2): self
    {
        $this->num2 = $num2;

        return $this;
    }
}
?>
