@extends("template/main")
@push("css")
<link rel="stylesheet" href="{{mix('css/index.scss.css')}}">
@endpush
@section('content')
    <section class="form">
        <form method="POST" action="{{Route('logar')}}">
            <legend>ENTRAR</legend>
            @csrf
            <input type="text" name="username" placeholder="Usuário" value="{{old('username')}}">
            <input type="password" name="password" placeholder="Senha">
            <button type="submit">Entrar</button>
            <div class="erros">
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                    <span>{{$error}}</span>
                    @endforeach
                @endif
            </div>
        </form>
    </section>
@endsection
