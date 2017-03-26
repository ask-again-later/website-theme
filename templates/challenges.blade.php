{{--
  Template Name: Challenges
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    <section class="lead"<?php if (has_post_thumbnail($get_thumb_from)) : ?> style="background-image: url('<?= wp_get_attachment_image_src(get_post_thumbnail_id($get_thumb_from->ID), 'banner')[0]; ?>')"<?php endif; ?>>
      @include('partials.page-header')
    </section>
    <section class="main">
      <div class="container">
        <div class="content-row">
          @include('partials.content-challenges')
        </div>
      </div>
    </section>
  @endwhile
@endsection
