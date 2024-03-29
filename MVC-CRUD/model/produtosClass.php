<?php
    class Produtos{
        private $codigo;
        private $foto;
        private $nome;
        private $preco;
        private $descricao;
        private $destaque;
        private $introDestaque;
        private $descricaoDestaque;
        private $desconto;
        private $status;

        public function __construct(){

        }

        // Retorna o código
        public function getCodigo(){
            return $this->codigo;
        }

        // Recebe o código
        public function setCodigo($codigo){
            return $this->codigo = $codigo;
        }

        // Retorna o nome
        public function getNome(){
            return $this->nome;
        }

        // Recebe o nome
        public function setNome($nome){
            return $this->nome = $nome;
        }

        // Retorna o preco
        public function getPreco(){
            return $this->preco;
        }

        // Recebe o preco
        public function setPreco($preco){
            return $this->preco = $preco;
        }
        
        // Retorna o descricao
        public function getDescricao(){
            return $this->descricao;
        }

        // Recebe o descricao
        public function setDescricao($descricao){
            return $this->descricao = $descricao;
        }

        // Retorna o destaque
        public function getDestaque(){
            return $this->destaque;
        }

        // Recebe o destaque
        public function setDestaque($destaque){
            return $this->destaque = $destaque;
        }

        // Retorna o introDestaque
        public function getIntroDestaque(){
            return $this->introDestaque;
        }

        // Recebe o introDestaque
        public function setIntroDestaque($introDestaque){
            return $this->introDestaque = $introDestaque;
        }

        // Retorna o descricaoDestaque
        public function getDescricaoDestaque(){
            return $this->descricaoDestaque;
        }

        // Recebe o descricaoDestaque
        public function setDescricaoDestaque($descricaoDestaque){
            return $this->descricaoDestaque = $descricaoDestaque;
        }

        // Retorna o desconto
        public function getDesconto(){
            return $this->desconto;
        }

        // Recebe o desconto
        public function setDesconto($desconto){
            return $this->desconto = $desconto;
        }
        
        // Retorna a foto
        public function getFoto(){
            return $this->foto;
        }

        // Recebe a foto
        public function setFoto($foto){
            return $this->foto = $foto;
        }

        // Retorna o status
        public function getStatus(){
            return $this->status;
        }

        // Recebe o status
        public function setStatus($status){
            return $this->status = $status;
        }
        
    }

?>