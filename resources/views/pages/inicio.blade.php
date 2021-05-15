@extends("template/main")
@push("css")
<link rel="stylesheet" href="{{mix('css/feed.scss.css')}}">
@endpush
@if (session('fk') != 2)
    @push("js")
    <script src="{{mix('js/pop-up.js')}}" defer></script>
    @endpush
@else
    @push("js")
    <script src="{{mix('js/pop-up2.js')}}" defer></script>
    @endpush
@endif
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
                    <p class="aviso">Nenhuma disciplina cadastrada</p>
                @endforelse
            </div>
        </article>
            <article>
                <div class="div-titulo">
                    <p>Professor(a)</p>
                    @if (session('fk') != 2)
                    <span class="fas fa-ellipsis-v prof"></span>
                    @endif
                </div>
                <div class="rolagem">
                    @forelse ( $prof as $profs )
                    <div class="div-campo">
                        @if (session('fk') != $profs->fk_funcao)
                        <a href="{{Route('painelProfessor', trim($profs->pk_id))}}">{{trim($profs->nome_usuario)}}</a>
                        @else
                        <p class="prof">{{trim($profs->nome_usuario)}}</p>
                        @endif
                    </div>
                @empty
                    <p class="aviso">Nenhum professor(a) cadastrado</p>
                @endforelse
                </div>
            </article>
            @if (session('fk') != 2)
            <div class="pop-up FormProf">
                <form method="POST" action="{{Route('Adicionar_professor')}}">
                    <span class="fas fa-times-circle close"></span>
                    <legend>Adicionar Professor</legend>
                    @csrf
                    <input type="url" name="userFoto" placeholder="Link da imagem">
                    <input type="text" name="username" placeholder="Nome do professor(a)">
                    <input type="password" name="password" placeholder="Senha">
                    <button type="submit">Adicionar</button>
                    <div class="erros">
                        @if($errors->any())
                            @foreach ($errors->all() as $error)
                            <span>{{$error}}</span>
                            @endforeach
                        @endif
                    </div>
                </form>
            </div>
            @endif
            <div class="pop-up FormDisc">
                <form method="POST" action="{{Route('Adicionar_disciplina')}}">
                    <span class="fas fa-times-circle close1"></span>
                    <legend >Adicionar Disciplina</legend>
                    @csrf
                    <input type="text" name="disc" placeholder="Disciplina">
                    <button type="submit">Adicionar</button>
                </form>
            </div>
    </section>
@endsection
