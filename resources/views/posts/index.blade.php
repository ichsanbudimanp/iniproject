<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- JS Bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Berita</title>
</head>
<body>
    <hr>
    <center>
        <a href="/posts/create" class="btn btn-success">Tambah</a>
    </center>
    <hr>
    @foreach($posts as $post)
        <div class="container mt-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{$post->judul}}</h5>
                    <p class="card-text">{{$post->deskripsi}}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated {{date("d M Y H:i:s", strtotime($post->updated_at))}}</small></p>
                    <div class="container d-flex">
                        <a href="/posts/{{$post->id}}" class="btn btn-primary m-2">Selengkapnya</a>
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-warning m-2">Edit</a>
                        <form action="{{ url('posts/' . $post->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger m-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</body>
</html>