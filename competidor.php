<?php
class Competidor{
	public $nome;
	public $idade;
	public $categoria;
	
    //construtor da classe
	function Competidor(){
		$this->nome = "";
        $this->idade = "";
        $this->categoria = "";
	}

	public function setNome($nome){
        $this->nome = $nome;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getCategoria(){
        return $this->categoria;
    }

} ?>