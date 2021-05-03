@extends("template/main")
@push("css")
<link rel="stylesheet" href="{{mix('css/painel.css')}}">
@endpush
@push("js")
<script src="{{mix('js/form-edite.js')}}" defer></script>
@endpush
@section('content')
    <section class="campo-painel">
        <article>
            <div class="div-titulo">
                <p>Disciplinas</p>
            </div>
            <div class="rolagem">
                <div class="div-campo">
                    <form>
                        <input id="input" type="text" value="Laboratório Web">
                        <button class="button" type="submit">Salvar</button>
                    </form>
                </div>
                <div class="div-campo">
                    <p class="CD">Apagar</p>
                </div>
                <div class="div-campo">
                    <p class="CP">Criar prova</p>
                </div>
                <div class="div-campo">
                    <a href="{{Route('VisualizarProva')}}">Visualizar prova</a>
                </div>
            </div>
            <a href="{{Route('feed')}}" class="fas fa-chevron-circle-left back"><span>Voltar</span></a>
        </article>
        <div class="pop-up create">
            <form id="form" method="POST" action="{{Route('ConteudoProva')}}">
                <span class="fas fa-times-circle close"></span>
                @csrf
                <legend id="legend">Assunto da prova</legend>
                <input type="text" name="" placeholder="Exemplo: Primeria Guerra Mundial">
                <button type="submit">Adicionar</button>
            </form>
        </div>
        <div class="pop-up delete">
            <form method="POST" action="{{Route('deletarDisciplina', 'id')}}">
                @method('delete')
                @csrf
                <legend>Apagar Laboratório Web?</legend>
                <div>
                    <span class="close1">Não!</span>
                    <button type="submit">Sim!</button>
                </div>
            </form>
        </div>
    </section>
@endsection
