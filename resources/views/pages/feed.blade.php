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
                @forelse ( $disc as $discs )
                    <div class="div-campo">
                        <a href="{{Route('painelDisciplina', trim($discs->pk_id))}}">{{trim($discs->disciplina)}}</a>
                    </div>
                @empty
                    <p>Não tem nada</p>
                @endforelse
            </div>
        </article>
            <article >
                <div class="div-titulo">
                    <p>Professor(a)</p>
                    <span class="fas fa-ellipsis-v prof"></span>
                </div>
                <div class="rolagem">
                    <div class="div-campo">
                        <a href="{{Route('painelProfessor', 'id')}}">Israel</a>
                    </div>
                </div>
            </article>
            <div class="pop-up">
                <form id="form" method="POST" action="{{Route('CriarDisciplina')}}">
                    <span class="fas fa-times-circle close"></span>
                    <legend id="legend"></legend>
                    @csrf
                    <input type="url" id="hidden0" name="userFoto" placeholder="Link da imagem">
                    <input type="text" id="input" name="" placeholder="">
                    <input type="password" id="hidden1" name="userSenha" placeholder="Senha">
                    <button type="submit">Adicionar</button>
                </form>
            </div>
    </section>
@endsection
