@extends("../template/main")
@push("css")
<link rel="stylesheet" href="{{mix('css/criarQuestoes.css')}}">
@endpush
@section('content')
    <section class="campo-painel">
        <article>
            <div class="div-titulo">
                <p>Disciplinas</p>
            </div>
            <div class="rolagem">
                <div class="div-campo">
                    <form method="POST" action="{{Route('salvarQuestao', 'id')}}">
                        <input class="textarea" placeholder="Anunciado" name="questao"></input>
                        <input type="text" placeholder="alternativa A" name="alternativa_a">
                        <input type="text" placeholder="alternativa B" name="alternativa_b">
                        <input type="text" placeholder="alternativa C" name="alternativa_c">
                        <input type="text" placeholder="alternativa D" name="alternativa_d">
                        <input type="text" placeholder="alternativa E" name="alternativa_e">
                        <input type="text" placeholder="Gabarito" name="alternativa_d">
                        <div>
                            <a href="{{Route('painel','id')}}" class="fas fa-chevron-circle-left"><span>Voltar</span></a>
                            <button class="button" type="submit">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </section>
@endsection
