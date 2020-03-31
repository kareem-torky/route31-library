<h1>All authors</h1>

@foreach($authors as $author)

  <hr>

  <a href="{{ route('showAuthor', $author->id) }}">
    <h2>{{ $author->name }}</h2>
  </a>
  
  <p>{{ $author->bio }}</p>

@endforeach


{!! $authors->render() !!}

