@extends("template/main")
@push("css")
<link rel="stylesheet" href="{{mix('css/feed.css')}}">
@endpush
@section('content')
    <section class="campo-feed">
        <article>
            <div class="div-titulo">
                <div>
                    <p>Disciplinas</p>
                </div>
                <span class="fas fa-ellipsis-v"></span>
            </div>
            <div class="rolagem">
                <div class="div-campos">
                    <p>Laboratório Web</p>
                </div>
            </div>
        </article>
            <article >
                <div class="div-titulo">
                    <p>Professor(a)</p>
                    <span class="fas fa-ellipsis-v"></span>
                </div>
                <div class="rolagem">
                    <div class="div-campos">
                        <p>Israel</p>
                    </div>
                </div>
            </article>
    </section>
@endsection
