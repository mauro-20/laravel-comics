@extends('layout.base')

@section('pageContent')
  <section>
    {{-- @dd($comics) --}}
    <ul>
      @foreach ($comics as $comic)
      <li>
        {{$comic['title']}}
        <img src="{{$comic['thumb']}}" alt="">
      </li>
      @endforeach
    </ul>
  </section>
    
@endsection