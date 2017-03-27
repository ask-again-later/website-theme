{{--
  Template Name: True Selves
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @php
      $get_thumb_from = get_post();
      if(!has_post_thumbnail() && (wp_get_post_parent_id($get_thumb_from->ID) !== 0)) {
        $get_thumb_from = get_post(wp_get_post_parent_id($get_thumb_from));
      }
    @endphp
    <section class="lead"<?php if (has_post_thumbnail($get_thumb_from)) : ?> style="background-image: url('<?= wp_get_attachment_image_src(get_post_thumbnail_id($get_thumb_from->ID), 'banner')[0]; ?>')"<?php endif; ?>>
      @include('partials.page-header')
    </section>
    <section class="main">
      <div class="container">
        <div class="content-row">
          @include('partials.content-true-selves')
        </div>
      </div>
    </section>
  @endwhile
@endsection
