<?php

  class Ingresso{
    
    private $valorDoIngresso;
    private $quantidade;
    private $formaDePagamento;
    private $desconto;


    public function getValorDoIngresso()
    {
        return $this->valorDoIngresso;
    }
 
    public function setValorDoIngresso($valorDoIngresso)
    {
        $this->valorDoIngresso = $valorDoIngresso;

        return $this;
    }

   
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

   
    public function getFormaDePagamento()
    {
        return $this->formaDePagamento;
    }

    
    public function setFormaDePagamento($formaDePagamento)
    {
        $this->formaDePagamento = $formaDePagamento;

        return $this;
    }

    
    public function getDesconto()
    {
        return $this->desconto;
    }

    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;

        return $this;
    }

    public function valorTotal(){
        return $this->valorDoIngresso * $this->quantidade;
    }
    
    public function totalComDesconto(){
        return $this->valorTotal() * $this->desconto / 100;
    }

    public function total(){
        return $this->valorTotal() - $this->totalComDesconto();
    }
    
  }








?>