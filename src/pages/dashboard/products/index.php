<?php $render = new views\View;
$render->component('dashboard/aside');
?>


<pre>
    <?php print_r($render->getProducts()); ?>
</pre>