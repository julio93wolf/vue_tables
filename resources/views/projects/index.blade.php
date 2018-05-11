@extends('layout.app')

@section('content')
  <projects :projects="{{ json_encode($projects) }}" />
@endsection