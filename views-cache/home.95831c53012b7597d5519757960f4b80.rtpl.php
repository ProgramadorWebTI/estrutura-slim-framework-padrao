<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container-x">
    <table class="tabela" id="tabela">
        <h3>Usuários:</h3>
        <?php foreach ($usuarios as $u): ?>

            <tr>
                <td><?php echo $u['nome'] . "<br>"; ?></td>
                <td><?php echo $u['nome'] . "<br>"; ?></td>
                <td><?php echo $u['nome'] . "<br>"; ?></td>
            </tr>

        <?php endforeach; ?>

    </table>
</div>