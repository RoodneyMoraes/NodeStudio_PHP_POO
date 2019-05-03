
<form action="inc/equipamento.class.php" method="POST">
    <h3>CADASTRO DE EQUIPAMENTO!</h3>
    Equipamento:
        <select name="equipamento" id="Equipamento" required>
            <option value="" selected disabled>Escolha um equipamento</option>
            <option value="celular">Celular</option>
            <option value="notebook">Notebook</option>
        </select>
    Marca:
        <select name="marca" id="marca" required>
            <option value="" selected disabled>Escolha uma marca</option>
            <option value="motorola">Motorola</option>
            <option value="samsung">Samsung</option>
            <option value="dell">Dell</option>
            <option value="azuz">Azuz</option>
        </select>
    Ano:
        <select name="ano" id="ano" required>
            <option value="" selected disabled>Escolha o ano</option>
            <?php
                for ($i=date("Y"); $i >= date("Y")-8 ; $i--) { 
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
            ?> 
        </select>
    Cor:
        <select name="cor" id="cor" required>
            <option value="" selected disabled>Escolha uma cor</option>
            <option value="azul">Azul</option>
            <option value="preto">Preto</option>
            <option value="vermelho">Vermelho</option>
            <option value="amarelo">Amarelo</option>
        </select>
    Peso:
    <select name="peso" id="peso" required>
        <option value="" selected disabled>Informe o peso</option>
        <?php
            for ($i=2000; $i >= 50 ; $i-=50) { 
                echo '<option value="'.$i.'g">'.$i.' Gramas</option>';
            }
        ?> 
    </select>
    <button>Cadastrar</button>
    <button type="reset">Limpar dados</button>

</form>


