<?php
    class SubcategoriasController{

        private $subcategorias;

        public function __construct(){
            require_once('model/SubcategoriasClass.php');
            require_once('model/DAO/SubcategoriasDAO.php');

            if($_SERVER['REQUEST_METHOD'] == "POST"){

                $this->subcategorias = new Subcategorias();

                $this->subcategorias->setNome($_POST['txtnome']);
                $this->subcategorias->setCategoria($_POST['sltcat']);
            }
        }

        // Insere nova categoria
        public function novaSubcategoria(){
            $subcategoriasDAO = new SubcategoriasDAO();

            $this->subcategorias->setStatus(1);

            if($subcategoriasDAO->insertSubcategoria($this->subcategorias)){
                header('location: subcategoriasindex.php');
            }else{
                echo('<script>alert("Erro ao Inserir no DB")</script>');
                header('location: subcategoriasindex.php');
            }
        }

        public function listaSubcategorias(){
            $subcategoriasDAO = new SubcategoriasDAO();
            $listDados = $subcategoriasDAO->selectAllSubcategorias();
            if($listDados){
                return $listDados;
            }else{
                die(); 
            }
        }

        public function deletaSubcategorias($id){
            // Instancia da classe contatoDAO
            $subcategoriasDAO = new SubcategoriasDAO();
            
            // método para excluir o registro do bd
            if($subcategoriasDAO->deleteSubcategorias($id)){
                header('location: subcategoriasindex.php');    
            }else{
                echo('Erro ao excluir o registro no bd!');
            }
        }


    }

?>