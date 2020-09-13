<h1>Dettagli Auto</h1>

<h2> {{ $car->manifacturer}} {{ $car->engine }}</h2>
<div>
  <p>Type:</p>
  <ul>
    @foreach ($car->tags as $tag)
        <li>{{$tag->name}}</li>
    @endforeach
</div>

<ul>
  <li>Year: {{ $car->year }}</li>
  <li>Plate: {{ $car->plate }}</li>
</ul>

<h3>Owner details</h3>
<p>
  <b>{{ $car->user->name}}</b>
</p>
<p>
  For contacts: <br>
  <i>{{ $car->user->email}}</i>
</p>
<div>
  <a href="{{ route('cars.edit', $car)}}">Modifica</a>
</div>
<div>
  <form action="{{ route('cars.destroy', $car)}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Elimina">
  </form>
</div>
<div>
  <a href="{{ route('cars.index')}}">go back</a>
</div>
