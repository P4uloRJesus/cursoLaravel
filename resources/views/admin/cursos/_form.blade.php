<div class="input-field">
    <input type="text" name="titulo" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}">
    <label>Título</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
    <label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{ isset($registro->valor) ? $registro->valor : '' }}">
    <label>Valor</label>
</div>

<div class="file-field input-field">

    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if (isset($registro->imagem))
    <div class="input-field">
        <img width="150px" src="{{ asset('$registro->imagem') }}" alt="Imagem do curso">
    </div>
@endif

<div>
    <p>
        <input name="publicado" type="checkbox" id="publicar"
            {{ isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} value="true">

        <label for="publicar">Publicar?</label>
    </p>
    <br>
</div>
