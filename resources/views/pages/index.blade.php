@extends("template/main")
@push("css")
<link rel="stylesheet" href="{{mix('css/index.css')}}">
@endpush
@section('content')
    <section class="form">
        <form method="POST" action="">
            <legend>ENTRAR</legend>
            @csrf
            <input type="text" name="username" placeholder="Usuário" id="user">
            <input type="password" name="password" placeholder="Senha" id="pass">
            <button type="submit">Entrar</button>
        </form>
    </section>
@endsection
