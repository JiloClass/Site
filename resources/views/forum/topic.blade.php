@extends("base")

@section("title", "JiloClass | $topic->title")

@section("head")
    <link rel="stylesheet" href="{{ asset("css/forum.css") }}">
    <link rel="stylesheet" href="{{ asset("css/prism.css") }}">
    <script src="https://cdn.tiny.cloud/1/dq00ffjnqk6ferjg8aczj2sxa4hywp2tczlm8iax2cxsm0w3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset("js/prism.js") }}"></script>
@endsection

@section("content")
    <!-- Forum Index -->
    <div class="content">
        <div class="container">
            <div class="header">
                <h4>{{ $topic->title }}</h4>
            </div>
        </div>
        <div class="container" style="margin-bottom: 15px;">
            <div class="card-message">
                <img class="user-img noselect" src="data:image/png;base64, {{ base64_encode($topic->user->image) }}"/>
                <div class="card-message-content">
                    <div class="card-message-user">
                        <h5>{{ $topic->user->pseudo }}</h5>
                        <p>{{ $topic->date }}</p>
                    </div>
                    {!! html_entity_decode($topic->content) !!}
                </div>
            </div>
        </div>
        @foreach($topic->messages as $message)
            <div class="container" style="margin-bottom: 15px;">
                <div class="card-message">
                    <img class="user-img noselect" src="data:image/png;base64, {{ base64_encode($message->user->image) }}"/>
                    <div class="card-message-content">
                        <div class="card-message-user">
                            <h5>{{ $message->user->pseudo }}</h5>
                            <p>{{ $message->date }}</p>
                        </div>
                        {!! html_entity_decode($message->content) !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        tinymce.init({
            selector: 'textarea',
            language: "fr_FR",
            plugins: 'code anchor autolink charmap codesample emoticons image link lists searchreplace table visualblocks wordcount',
            codesample_global_prismjs: true,
            icons: "fabric",
            <?php if(isset($_SESSION['theme']) AND $_SESSION['theme'] != 0){ ?>
            skin: "oxide-dark",
            content_css: "dark",
            <?php } ?>
            menubar: false,
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough codesample | image | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            fontsize_formats: "8pt 9pt 10pt 11pt 12pt 14pt 16pt 18pt 20pt 22pt 24pt 26pt 28pt 30pt 32pt 34pt 36pt 38pt 40pt 42pt 44pt 46pt 48pt 50pt"
        });
    </script>
@endsection
