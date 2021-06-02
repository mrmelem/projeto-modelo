<?php $render = new views\View ?>

<aside id="dashboard-aside">
    <ul>
        <li>
            <a href="<?php echo INCLUDE_PATH ?>dashboard">
                <h1>Painel de controle</h1>
            </a>
        </li>

        <li>
            <a href="?product=add">
                <?php $render->svg('price-tag') ?>
                <span>Cadastrar</span>
            </a>
        </li>

        <li>
            <a href="?product=list">
                <?php $render->svg('open-box') ?>
                <span>Produtos</span>
            </a>
        </li>

    </ul>
</aside>