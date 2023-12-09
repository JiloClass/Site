@extends("base")
@section("title", "JiloClass | Cours")

@section("link")
    <link rel="stylesheet" href="{{ asset("css/cours.css") }}">
@endsection

@section("content")
    <div class="content">
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
                                <a class="start-learn" href="cours.php?id={{ $course->id }}">Apprendre</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $courses->links() }}
        </div>
    </div>
@endsection
