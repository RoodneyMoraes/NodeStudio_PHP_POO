<?php
    // INTERFACES SERVE PRA TER UM MODELO PARA SER USADO EM OUTRAS CLASSES
    // OS METODOS DAS INTERFACES DEVEM SER PUBLICOS

    interface Crud {

        public function create($data);
        public function read();
        public function update();
        public function delete();
    
    }

    class Noticias implements Crud {

        public function create($data){
            // AQUI IRÁ COLOCAR A LÓGICA PARA CRIAR UMA NOTICIA
        }

        public function read(){
            // AQUI IRÁ COLOCAR A LÓGICA PARA LER UMA NOTICIA
        }

        public function update(){
            // AQUI IRÁ COLOCAR A LÓGICA PARA ATUALIZAR UMA NOTICIA
        }

        public function delete(){
            // AQUI IRÁ COLOCAR A LÓGICA PARA EXCLUIR UMA NOTICIA
        }

    }

?>