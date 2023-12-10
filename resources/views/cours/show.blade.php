@extends("base")
@section("title", "JiloClass | $course->title")

@section("head")
    <link rel="stylesheet" href="{{ asset("css/cours.css") }}">
@endsection

@section("content")
    <div class="content">
        <div class="container mb-4">
            <div class="header">
                <div class="header-left">
                    <h4>{{ $course->title }} - Cours</h4>
                </div>
            </div>
        </div>
    </div>

@endsection
