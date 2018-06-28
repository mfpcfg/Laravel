@foreach ($genre as $gn)

<option value="{{($gn->id or "")}}"
  @isset($genre->id)
    @if($genre->name == $gn->id)
    selected=""
    @endif

    @if($genre->id == $gn->id)
    hidden=""
    @endif

    @endisset
    >

    {!! $delimiter or "" !!}{{$gn->name or ""}}
  </option>

  @if (count($gn->name) > 0)

    @include('library.genre.partials.genres', [
      'genres' => $gn->name,
      'delimiter' => ' - ' . $delimiter
    ])

    @endif
    @endforeach
