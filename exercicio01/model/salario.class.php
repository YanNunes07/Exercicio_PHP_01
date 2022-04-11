<?php
   
   class Salario{
   
    private $salarioFixo;
    private $valorVendas;
    private $valorComissao;
    private $comissao;
    private $valorTotal;
      

    public function getSalarioFixo()
    {
        return $this->salarioFixo;
    }
 
    public function setSalarioFixo($salarioFixo)
    {
        $this->salarioFixo = 2200.00;

        return $this;
    }

    public function getValorVendas()
    {
        return $this->valorVendas;
    }
 
    public function setValorVendas($valorVendas)
    {
        $this->valorVendas = $valorVendas;

        return $this;
    }

    public function getValorComissao()
    {
        return $this->valorComissao;
    }

    public function setValorComissao($valorComissao)
    {
        $this->valorComissao = $valorComissao;

        return $this;
    }

    public function getComissao()
    {
        return $this->comissao;
    }

    public function setComissao($comissao)
    {
        $this->comissao = $comissao;

        return $this;
    }
 
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    public function comissao(){
        return $this->valorVendas * $this->valorComissao / 100;
    }

    public function total(){
        return $this->salarioFixo + $this->comissao();
    }
    
   }


?>