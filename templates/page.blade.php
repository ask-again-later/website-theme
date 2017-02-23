@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    <section class="lead">
      @include('partials.page-header')
    </section>
    <section class="main">
      <div class="container">
        <div class="content-row">
          @include('partials.content-page')
        </div>
      </div>
    </section>
  @endwhile
@endsection
