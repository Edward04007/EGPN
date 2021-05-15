@extends("template/main")
@push("css")
<link rel="stylesheet" href="{{mix('css/viewQuestoes.scss.css')}}">
@endpush
@section('content')
    <section class="campo-painel">
        <article>
            <div class="div-titulo">
                <p>Disciplinas</p>
            </div>
            <div class="rolagem">
                <div class="div-campo">

                    @foreach ($var_id as $date )
                    <form {{--method="POST"  action="{{Route('salvarQuestao', 'id')}}" --}}>
                        @csrf
                        <textarea class="textarea" name="questao">{{$date->questao}}</textarea>
                        <input type="text" value="{{$date->alternativa_a}}" name="alternativa_a">
                        <input type="text" value="{{$date->alternativa_b}}" name="alternativa_b">
                        <input type="text" value="{{$date->alternativa_c}}" name="alternativa_c">
                        <input type="text" value="{{$date->alternativa_d}}" name="alternativa_d">
                        <input type="text" value="{{$date->alternativa_e}}" name="alternativa_e">
                        <input type="text" value="{{$date->gabarito}}" name="gabarito">
                        <input type="hidden" name="fk_assunto" value="{{$date->pk_id}}">
                        <input type="hidden" name="fk_dis" value="{{$date->fk_disciplina}}">
                        <div class="div-buttons">
                            <div>
                                <a href="{{Route('painelDisciplina', $date->fk_disciplina)}}" class="painel">Painel</a>
                               {{--  <button class="button" type="submit">Salvar</button> --}}
                            </div>
                            <div class="div-page">
                                @if ($var_id->previousPageUrl() != null)
                                <a href="{{$var_id->previousPageUrl()}}">Voltar</a>
                                @endif
                                @if ($var_id->nextPageUrl() != null)
                                <a href="{{$var_id->nextPageUrl()}}">Próximo</a>
                                @endif
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </article>
    </section>
@endsection
