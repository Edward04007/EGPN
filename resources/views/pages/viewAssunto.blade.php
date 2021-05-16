@extends("template/main")
@push("css")
<link rel="stylesheet" href="{{mix('css/painel.scss.css')}}">
@endpush
@push("js")
<script src="{{mix('js/form-edite2.js')}}" defer></script>
@endpush
@section('content')
    <section class="campo-painel">
        <article >
            <div class="div-titulo">
                <p>Conteúdo da prova</p>
            </div>
            <div class="rolagem">
                <div class="div-campo">
                    @foreach ($var_id as $datas )
                    <a href="{{Route('VisualizarQuestoes', trim($datas->pk_id))}}">{{trim($datas->assunto)}}</a>
                    @endforeach
                </div>
            </div>
        </article>
    </section>
@endsection
