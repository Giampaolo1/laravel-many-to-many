@extends('layouts.base')
@section("content")
  <h1>Employees:</h1>
  <ul>
  @foreach ($employees as $employee)
    <li>
      <h3>{{ $employee -> firstname }}</h3>
      <br>
      Cognome: {{ $employee -> lastname }}
      <br>

      <?php // facciamo la relazione ?>
      <ul>

      @foreach ($employee -> tasks as $task)
        <li>
          <a href="#">X</a>
          {{ $task -> title }}
        </li>

      @endforeach
    </ul>
    <hr>
    </li>
  @endforeach
  </ul>

@endsection
