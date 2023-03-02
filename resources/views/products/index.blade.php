@extends('template.default')

{{-- <h1>{{ $title }}</h1>
<h2>{{ $heading }}</h2>
@foreach ($version1 as $list)
    <h3>{{ $list['flavor'] }}</h3>
    <p>{{ $list['desc'] }}</p>
@endforeach --}}
@section('content')
@foreach ($version1 as $list)

  <!-- Masthead-->
  <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">{{ $list['head'] }}</div>
                <div class="masthead-heading text-uppercase">{{ $list['body'] }}</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->

  @endforeach
  @endsection

