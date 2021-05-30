<?php $render = new views\View ?>

<aside>
    <ul>
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