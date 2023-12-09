@extends("base")
@section("title", "JiloClass | {{ $course->title }}")

@section("link")
    <link rel="stylesheet" href="{{ asset("css/cours.css") }}">
@endsection

@section("content")
    <div class="container mb-4">
        <div class="header">
            <div class="header-left">
                <h4><?= $rcg['titre'] ?> - Cours</h4>
            </div>
        </div>
    </div>

@endsection
