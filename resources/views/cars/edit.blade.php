<h1>Modifica Auto</h1>

{{-- Validazione form --}}
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('cars.update', $car)}}" method="post">
  @csrf
  @method('PUT')
  <label>Manifacturer:</label><br>
    <input type="text" name="manifacturer" value="{{ $car->manifacturer }}"><br>

    <label>Engine:</label><br>
    <input type="text" name="engine" value='{{ $car->engine }}'></input><br>

    <label>Year:</label><br>
    <input type="number" name="year" value="{{ $car->year }}"><br>

    <label>Plate:</label><br>
    <input type="text" name="plate" value="{{ $car->plate }}"><br>

    <div class="chekboxes">
      <span>Type:</span>
      @foreach ($tags as $tag)
        <div>
          <input type="checkbox" name="tags[]" {{ ($car->tags->contains($tag)) ? 'checked' : '' }} value="{{$tag->id}}">
          <label>{{$tag->name}}</label>
        </div>
      @endforeach
    </div>
    <br>
    <div>
      <select name="user_id">
        @foreach ($users as $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
      </select>
    </div>
    <br>
    <input type="submit" value="Modifica">
</form>
