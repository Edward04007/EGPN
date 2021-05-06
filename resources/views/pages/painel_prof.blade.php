@extends("template/main")
@push("css")
<link rel="stylesheet" href="{{mix('css/painel.css')}}">
@endpush
@push("js")
<script src="{{mix('js/form-edite2.js')}}" defer></script>
@endpush
@section('content')
    <section class="campo-painel">
        <article>
            <div class="div-titulo">
                <p>Professor(a)</p>
            </div>
            <div class="rolagem">
                <div class="div-campo">
                    <form>
                        <input id="input" type="url" placeholder="foto de perfil">
                        <button class="button" type="submit">Salvar</button>
                    </form>
                </div>
                <div class="div-campo">
                    <form>
                        <input id="input2" type="text" value="Israel Furtado">
                        <button class="button2" type="submit">Salvar</button>
                    </form>
                </div>
                <div class="div-campo">
                    <form>
                        <input id="input3" type="new-password" placeholder="Nova senha">
                        <button class="button3" type="submit">Salvar</button>
                    </form>
                </div>
                <div class="div-campo">
                    <p class="CD">Apagar</p>
                </div>
            </div>
            <a href="{{Route('feed')}}" class="fas fa-chevron-circle-left back"><span>Voltar</span></a>
        </article>
        <div class="pop-up delete">
            <form method="POST" action="{{Route('deletarDisciplina', 'id')}}">
                @method('delete')
                @csrf
                <legend>Apagar Israel?</legend>
                <div>
                    <span class="close1">Não!</span>
                    <button type="submit">Sim!</button>
                </div>
            </form>
        </div>
    </section>
@endsection
