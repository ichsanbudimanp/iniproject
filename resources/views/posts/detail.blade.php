<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- JS Bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Berita - {{$post->judul}}</title>
</head>
<body>
    <div class="container mt-4">
        <a href="/posts" class="btn btn-warning">Kembali</a>
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">{{$post->judul}}</h2>
            <p class="blog-post-meta">Last updated {{date("d M Y H:i:s", strtotime($post->updated_at))}} <a href="#">Mark</a></p>

            <p>
                {{$post->konten}}
                {{$post->konten}}
                {{$post->konten}}
                {{$post->konten}}
                {{$post->konten}}
                {{$post->konten}}
                {{$post->konten}}
                {{$post->konten}}
                {{$post->konten}}
                {{$post->konten}}
                {{$post->konten}}
                {{$post->konten}}
                {{$post->konten}}
                {{$post->konten}}
                {{$post->konten}}
                {{$post->konten}}
            </p>
        </article>
    </div>
</body>
</html>