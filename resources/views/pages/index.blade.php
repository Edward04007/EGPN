@extends("template/main")
@push("css")
<link rel="stylesheet" href="{{mix('css/index.css')}}">
@endpush
@section('content')
    <section class="form">
        <form>
            <legend>ENTRAR</legend>
            <label for="user"></label>
                <input type="text" name="username" placeholder="Usuário" id="user">
            <label for="pass"></label>
                <input type="password" name="password" placeholder="Senhar" id="pass">
                <button type="submit">Entrar</button>
        </form>
    </section>
@endsection
