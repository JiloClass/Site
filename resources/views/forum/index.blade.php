@extends("base")
@section("title", "JiloClass | Forum")
@section("head")
    <link rel="stylesheet" href="{{ asset("css/forum.css") }}">
@endsection

@section("content")
    <div class="content">
        <div class="container">
            <div class="header">
                <h4>Forum</h4>
            </div>
        </div>
        <div class="container">
            @foreach($categories as $categorie)
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-left">
                            <div class="card-title"><a class="category-title" href="forum?category={{ $categorie->slug }}">{{ $categorie->name }}</a></div>
                            <div class="card-subtitle">
                                @foreach($categorie->subcategories as $subcategory)
                                    <div class="subtitle-forum">{{ $subcategory->name }}</div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-header-right">
                            <a href="forum/creertopic.php?categorie={{ $categorie->id }}" class="btn btn-primary button-add-msg"><i class="fas fa-add"></i></a>
                        </div>
                    </div>
                    <div class="card-topic">
                        @forelse($categorie->topics as $topic)
                        <div class="topic">
                            <div class="topic-header">
                                <a class="topic-title" href="{{ route("forum.topic", ["topic_id" => $topic->id]) }}">
                                    @if(isset($topic->resolve) AND $topic->resolve == 1)
                                        <i data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Résolu" class="fa-solid fa-check-to-slot"></i>
                                    @endif
                                    {{ $topic->title }}
                                </a>
                                <div class="topic-user">
                                    De {{ $topic->user->pseudo }}
                                </div>
                            </div>
                            <div class="topic-body">
                                <div class="topic-view">{{ $topic->messages->count() }} messages</div>
                                <div class="topic-view">{{ $topic->suivis->count() }} suivis</div>
                                <div class="topic-infos">
                                    <p>Par {{ $topic->user->pseudo }}</p>
                                    <p>{{ $topic->date }}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="topic">
                            <div class="topic-header">
                                <h4>Il n'y a aucun topic avec comme catégorie "{{ $categorie->name }}"</h4>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
