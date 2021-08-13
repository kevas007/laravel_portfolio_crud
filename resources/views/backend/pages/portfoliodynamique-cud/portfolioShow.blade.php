
@extends('backend.template.main')
{{-- @include('template.flash') --}}
@section('content')
    <section>
        <div class="container">
            <H1>{{$show->image}}</H1>
            <p>{{$show->lienImage}}</p>
            <H1>{{$show->lienDetails}}/5</H1>
            <div class="d-flex">
                <a class="btn btn-primary text-white mt-5 me-5" href="/portfolioImageDimayque/{{$show->id}}/edit">Modifier</a>
                <form class="mt-5" action="/portfolioImageDimayque//{{$show->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger text-white" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    </section>
@endsection
