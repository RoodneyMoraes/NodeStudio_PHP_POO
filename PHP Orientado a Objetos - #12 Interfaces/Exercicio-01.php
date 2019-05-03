<form>
    <h1>SISTEMA PARA ANALIZAR OS ANIMAIS! </h1>
    Animal:
        <select name="animal" id="animal" required>
            <option value="" selected disabled>Escolha um Animal</option>
            <option value="cachorro">Cachorro</option>
            <option value="gato">Gato</option>
            <option value="cobra">Cobra</option>
            <option value="passaro">Passaro</option>
            <option value="porco">Porco</option>
            <option value="baleia">Baleia</option>
        </select>

        <button>Verificar as ações do animal</button>
        <button type="reset">Limpar dado</button>
        <a href="Exercicio-01.php">Voltar</a>
</form>


<?php

    // CLASS INTERFACE DADOSANIMAIS
    require_once 'inc/animais.class.php';

    // PEGANDO DADOS DO FORMULARIO
    $nomeAnimal = $_GET['animal'];

    // INSTANCIANDO A CLASSE DADOSANIMAIS
    $animal = new DadosAnimais();
    $andar = $animal->andar($nomeAnimal);
    $correr = $animal->correr($nomeAnimal);
    $voar = $animal->voar($nomeAnimal);
    $nadar = $animal->nadar($nomeAnimal);

    // VERIFICANDO SE EXISTE ALGUM ANIMAL
    if(!empty($nomeAnimal)){

        switch ($nomeAnimal) {

            case 'cachorro':
                echo "O animal $nomeAnimal pode $andar, $correr e $nadar!";  
                break;
            
            case 'gato':
                echo "O animal $nomeAnimal pode $andar, $correr e $nadar!";  
                break;
            
            case 'cobra':
                echo "O animal $nomeAnimal pode $nadar!";  
                break;

            case 'passaro':
                echo "O animal $nomeAnimal pode $andar, $voar e $nadar!"; 
                break;
                
            case 'porco':
                echo "O animal $nomeAnimal pode $andar, $correr e $nadar!";  
                break;

            case 'baleia':
                echo "O animal $nomeAnimal pode $nadar!";  
                break;

            case '':
                echo "O combo está vazio!";  
                break;
                
            default:
                echo "O animal informado não existe no combo!";  
                break;

        }
        
    }

?>