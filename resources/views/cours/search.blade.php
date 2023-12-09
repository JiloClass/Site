@extends("base")
@section("title", "JiloClass | Cours")

@section("link")
    <link rel="stylesheet" href="{{ asset("css/cours.css") }}">
@endsection
@section("content")
    <div class="content">
        <div class="container mb-4">
            <div class="header">
                <div class="header-left">
                    <h4>Cours</h4>
                </div>
                <div class="header-right">
                    <a class="btn-tags noselect" onclick="if (document.getElementById('etiquettes').style.display == 'block') {
                        document.getElementById('etiquettes').style.display = 'none'} else {
                            document.getElementById('etiquettes').style.display = 'block'
                        }">Étiquettes({{ $count_tags }}) <i class="fa-solid fa-chevron-down"></i></a>
                    <div class="dropdown-tags" id="etiquettes">
                        <ul>
                            @foreach($tags as $tag)
                                <a href="
                                @if(!in_array($tag->slug, explode(",", $etiquette)))
                                    {{ route("courses.search", ["etiquette" => $tag->slug]) }}
                                @else
                                    {{ route("courses.search", ["etiquette" => $tag->slug]) }}
                                @endif"
                                @class(["noselect", "active" => in_array($tag->slug, explode(",", $etiquette ))])>
                                @if(in_array($tag->slug, explode(",", $etiquette )))
                                    <i class="fa-regular fa-circle-xmark"></i>
                                @endif
                                <img src="data:image/png;base64,{{ base64_encode($tag->icon) }}" width="20px" height="20px"/> {{ $tag->name }}</a>
                            @endforeach
                            <a href="{{ route("courses.index") }}">Tous supprimer</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-4">
            {{ $courses->links() }}
            <div class="cards">
                @foreach ($courses as $course)
                    <div class="card">
                        <div class="card-content">
                            <div class="card-content-left">
                                <img class="noselect" src="data:image/png;base64, {{ base64_encode($course->image) }}"/>
                            </div>
                            <div class="card-content-right">
                                <div class="title-img-user">
                                    <div class="title-user">
                                        <div class="title">
                                            <h4>{{ $course->title }}</h4>
                                            <p>de {{ $course->user->pseudo }}</p>
                                        </div>
                                    </div>
                                    @if($course->certified)<i data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Certifié" class="fa-solid fa-circle-check fa-2x" title="Certifié"></i>@endif
                                </div>
                                <p class="desc">{{ Str::limit($course->description, 40, '...')}}</p>
                                <a class="start-learn" href="{{ route("courses.show", ["id" => $course->id ])}}">Apprendre</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $courses->links() }}
        </div>
    </div>
@endsection
