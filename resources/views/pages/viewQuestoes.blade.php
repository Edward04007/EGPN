@extends("template/main")
@push("css")
<link rel="stylesheet" href="{{mix('css/criarQuestoes.scss.css')}}">
@endpush
@section('content')
    <section class="campo-painel">
        <article>
            <div class="div-titulo">
                <p>Disciplinas</p>
            </div>
            <div class="rolagem">
                <div class="div-campo">
                    <div class="links">
                        @if ($var_id->previousPageUrl() != null)
                        <a href="{{$var_id->previousPageUrl()}}" class="fas fa-angle-left font"></a>
                        @endif
                        @if ($var_id->nextPageUrl() != null)
                        <a href="{{$var_id->nextPageUrl()}}" class="fas fa-angle-right font"></a>
                        @endif
                    </div>
                    @foreach ($var_id as $date )
                    <form method="POST" {{-- action="{{Route('salvarQuestao', 'id')}}" --}}>
                        @csrf
                        <input class="textarea" value="{{$date->questao}}" name="questao"></input>
                        <input type="text" value="{{$date->alternativa_a}}" name="alternativa_a">
                        <input type="text" value="{{$date->alternativa_b}}" name="alternativa_b">
                        <input type="text" value="{{$date->alternativa_c}}" name="alternativa_c">
                        <input type="text" value="{{$date->alternativa_d}}" name="alternativa_d">
                        <input type="text" value="{{$date->alternativa_e}}" name="alternativa_e">
                        <input type="text" value="{{$date->gabarito}}" name="gabarito">
                        <input type="hidden" name="fk_assunto" value="{{$date->pk_id}}">
                        <input type="hidden" name="fk_dis" value="{{$date->fk_disciplina}}">
                        <div>
                            <a href="{{Route('painelDisciplina', $date->fk_disciplina)}}" class="fas
                            fa-chevron-circle-left"><span>Voltar</span></a>
                            {{-- <button class="button" type="submit">Salvar</button> --}}
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </article>
    </section>
@endsection
