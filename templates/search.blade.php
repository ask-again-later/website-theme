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
            {{  __('Sorry, no results were found.', 'sage') }}
          </div>
          {!! get_search_form(false) !!}
        @endif

        @while(have_posts()) @php(the_post())
          @include('partials.content-search')
        @endwhile

        {!! get_the_posts_navigation() !!}
      </div>
    </div>
  </section>
@endsection
