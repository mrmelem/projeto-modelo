<?php $render = new views\View;
$render->component('dashboard/aside');
?>


<form method="POST">
    <h1>Cadastro de produtos</h1>

    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" id="title" name="title">
    </div>

    <div class="form-group">
        <label for="slug">slug</label>
        <input type="text" readonly name="slug" id="slug">
        <small>Este campo é para melhorar as buscas no seu site.</small>
    </div>

    <div class="form-group">
        <label for="price">Preço</label>
        <input type="number" name="price">
    </div>

    <div class="form-group">
        <label for="category">Categoria</label>
        <select name="category" id="category">
            <option value="" hidden disabled selected></option>
            <option value="1">Moda Praia</option>
            <option value="2">Verão</option>
        </select>
    </div>

    <div class="form-group">
        <label for="description">Descrição do produto</label>
        <textarea name="descrption" id="description" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group sizes">
        <h3>Tamanhos</h3>
        <div class="sizes-options">

            <div class="option">
                <label>Tamanho: P</label>
                <input type="number" name="quant-p">
            </div>

            <div class="option">
                <label>Tamanho: M</label>
                <input type="number" name="quant-m">
            </div>

            <div class="option">
                <label>Tamanho: G</label>
                <input type="number" name="quant-g">
            </div>

            <div class="option">
                <label>Tamanho: GG</label>
                <input type="number" name="quant-gg">
            </div>

        </div>
    </div>

    <div class="form-group btn">
        <input type="submit" name="acao" value="Cadastrar!">
    </div>
    
</form>