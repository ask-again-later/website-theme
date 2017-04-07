<header class="banner">
  <div class="container">
    <div class="row between-xs middle-xs">
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
        <div class="search">
          <a href="#"><i class="fa fa-search"></i></a>
          {!! get_search_form(false) !!}
        </div>
      </nav>
      <button class="hamburger hamburger--collapse" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>
  </div>
</header>
