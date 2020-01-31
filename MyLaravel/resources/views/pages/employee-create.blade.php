@extends('layouts.base')

@section("content")
  <form action={{route("employee.store")}} method="post">
    @csrf
    @method("POST")

    <label for="firstname">FIRSTNAME</label>
    <input type="text" name="firstname" value="">
    <label for="lastname">LASTNAME</label>
    <input type="text" name="lastname" value="">
    <br>
    <select name="tasks[]" multiple>
      @foreach ($tasks as $task)
        <option value="{{$task -> id}}">{{ $task -> title }}</option>
      @endforeach
    </select>
    <br>
    <input type="submit" name="" value="CREATE">
    <br>
  </form>
@endsection
