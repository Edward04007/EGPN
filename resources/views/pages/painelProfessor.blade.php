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
                    @foreach ( $prof as $profs)
                        <form method="POST" action="{{Route('AtualizarFoto', trim($profs->pk_id))}}">
                        @method('put')
                        @csrf
                        <input type="url" name="userFoto" id="input" placeholder='{{trim($profs->foto_usuario)}}'>
                        <button class="button" type="submit">Salvar</button>
                    </form>
                    @endforeach
                </div>
                <div class="div-campo">
                    @foreach ( $prof as $profs)
                    <form method="POST" action="{{Route('RenomearProfessor', trim($profs->pk_id))}}">
                        @method('put')
                        @csrf
                        <input type="text" name="userProf" id="input2" value='{{trim($profs->nome_usuario)}}'>
                        <button class="button2" type="submit">Salvar</button>
                    </form>
                    @endforeach
                </div>
                <div class="div-campo">
                    @foreach ( $prof as $profs)
                    <form method="POST" action="{{Route('AtualizarSenha',trim($profs->pk_id))}}">
                        @method('put')
                        @csrf
                        <input id="input3" name="userSenha" type="password" placeholder="Nova senha">
                        <button class="button3" type="submit">Salvar</button>
                    </form>
                    @endforeach
                </div>
                <div class="div-campo">
                    <p class="CD">Apagar</p>
                </div>
            </div>
            <a href="{{Route('inicio')}}" class="fas fa-chevron-circle-left back"><span>Voltar</span></a>
        </article>
        <div class="pop-up delete">
            @foreach ( $prof as $profs)
            <form method="POST" action="{{Route('deletarProfessor', trim($profs->pk_id))}}">
                @method('delete')
                @csrf
                <legend>Apagar {{trim($profs->nome_usuario)}}?</legend>
                <div>
                    <span class="close1">Não!</span>
                    <button type="submit">Sim!</button>
                </div>
            </form>
            @endforeach
        </div>
    </section>
@endsection
