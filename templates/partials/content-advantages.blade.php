@php
  include get_stylesheet_directory(). '/src/lib/Parsedown/Parsedown.php';
  $Parsedown = new Parsedown();
  $url = get_theme_mod('api_base_url').'api/advantages';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL, $url);
  $result = curl_exec($ch);
  curl_close($ch);

  $advantages = json_decode($result, true);
@endphp

@php(the_content())

@foreach($advantages as $advantage)
  <div class="item" id="{{ strtolower(str_replace(" ", "-", $advantage['name'])) }}">
    <h3>{{ $advantage['name'] }} ( {{ join(", ", explode(",", $advantage['allowed_ratings'])) }})</h3>
    <div class="description">
      @php
        echo $Parsedown->text($advantage['description']);
      @endphp
    </div>
  </div>
@endforeach
