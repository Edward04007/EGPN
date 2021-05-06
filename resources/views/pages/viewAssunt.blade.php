@extends("template/main")
@push("css")
<link rel="stylesheet" href="{{mix('css/painel.css')}}">
@endpush
@push("js")
<script src="{{mix('js/form-edite2.js')}}" defer></script>
@endpush
@section('content')
    <section class="campo-painel">
        <article >
            <div class="div-titulo">
                <p>Conteúdo da prova</p>
                <span class="fas fa-ellipsis-v prof"></span>
            </div>
            <div class="rolagem">
                <div class="div-campo">
                    <a href="{{Route('painelProfessor', 'id')}}">Laboratório Web</a>
                </div>
                <div class="div-campo">
                    <a href="{{Route('painelProfessor', 'id')}}">Laboratório Hardware</a>
                </div>
                <div class="div-campo">
                    <a href="{{Route('painelProfessor', 'id')}}">Laboratório Software</a>
                </div>
            </div>
        </article>
    </section>
@endsection
