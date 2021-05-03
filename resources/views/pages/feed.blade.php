@extends("template/main")
@push("css")
<link rel="stylesheet" href="{{mix('css/feed.css')}}">
@endpush
@push("js")
<script src="{{mix('js/pop-up.js')}}" defer></script>
@endpush
@section('content')
    <section class="campo-feed">
        <article>
            <div class="div-titulo">
                <p>Disciplinas</p>
                <span class="fas fa-ellipsis-v dis"></span>
            </div>
            <div class="rolagem">
                <div class="div-campo">
                    <a href="{{Route('painel', 'id')}}">Laboratório Web</a>
                </div>
            </div>
        </article>
            <article >
                <div class="div-titulo">
                    <p>Professor(a)</p>
                    <span class="fas fa-ellipsis-v prof"></span>
                </div>
                <div class="rolagem">
                    <div class="div-campo">
                        <a>Israel</a>
                    </div>
                </div>
            </article>
            <div class="pop-up">
                <form id="form" method="POST" action="">
                    <span class="fas fa-times-circle close"></span>
                    <legend id="legend"></legend>
                    @csrf
                    <input type="text" id="hidden0" name="userFoto" placeholder="Link da imagem">
                    <input type="text" id="input" name="" placeholder="">
                    <input type="password" id="hidden1" name="userSenha" placeholder="Senha">
                    <button type="submit">Adicionar</button>
                </form>
            </div>
    </section>
@endsection
