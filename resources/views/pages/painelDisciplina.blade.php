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
                    @foreach ( $disc as $discs )
                        <form method="POST" action="{{Route('RenomearDisciplina', trim($discs->pk_id))}}">
                            @method('put')
                            @csrf
                            <input name="renome" id="input" value='{{trim($discs->disciplina)}}'>
                            <button class="button" type="submit">Salvar</button>
                        </form>
                    @endforeach
                </div>
                <div class="div-campo">
                    <p class="CD">Apagar</p>
                </div>
                <div class="div-campo">
                    <p class="CP">Criar prova</p>
                </div>
                <div class="div-campo">
                    @foreach ( $disc as $discs )
                    <a href="{{Route('VisualizarAssunto', trim($discs->pk_id))}}">Visualizar prova</a>
                    @endforeach
                </div>
            </div>
            <a href="{{Route('inicio')}}" class="fas fa-chevron-circle-left back"><span>Voltar</span></a>
        </article>
        <div class="pop-up create">
            @foreach ( $disc as $discs )
            <form id="form" method="POST" action="{{Route('CriarConteudo')}}">
                <span class="fas fa-times-circle close"></span>
                @csrf
                <legend id="legend">Assunto da prova</legend>
                <input type="hidden" name="id" value="{{trim($discs->pk_id)}}">
                <input type="text" name="assunto" placeholder="Exemplo: Primeria Guerra Mundial">
                <button type="submit">Adicionar</button>
            </form>
            @endforeach
        </div>
        <div class="pop-up delete">
            @foreach ( $disc as $discs )
            <form method="POST" action="{{Route('deletarDisciplina', trim($discs->pk_id))}}">
                @method('delete')
                @csrf
                <legend>Apagar Laboratório Web?</legend>
                <div>
                    <span class="close1">Não!</span>
                    <button type="submit">Sim!</button>
                </div>
            </form>
            @endforeach
        </div>
    </section>
@endsection
