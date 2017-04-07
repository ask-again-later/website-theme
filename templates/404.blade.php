@extends('layouts.base')

@section('content')
  <section class="lead">
    @include('partials.page-header')
  </section>
  <section class="main">
    <div class="container">
      <div class="content-row">
        @if (!have_posts())
          <div class="alert alert-warning">
            {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
          </div>
          {!! get_search_form(false) !!}
        @endif

        {!! get_the_posts_navigation() !!}
      </div>
    </div>
  </section>
@endsection
