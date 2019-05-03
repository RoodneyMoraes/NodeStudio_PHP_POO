<?php

    // INTERFACES SERVE PRA TER UM MODELO PARA SER USADO EM OUTRAS CLASSES
    // OS METODOS DAS INTERFACES DEVEM SER PUBLICOS

    interface Animal {

        public function andar($n);
        public function correr($n);
        public function voar($n);
        public function nadar($n);
    
    }

?>