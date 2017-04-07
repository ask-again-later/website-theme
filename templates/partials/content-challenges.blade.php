@php
  include get_stylesheet_directory(). '/src/lib/Parsedown/Parsedown.php';
  $Parsedown = new Parsedown();
  $url = get_theme_mod('api_base_url').'api/challenges';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL, $url);
  $result = curl_exec($ch);
  curl_close($ch);

  $challenges = json_decode($result, true);
@endphp

@php(the_content())

@foreach($challenges as $challenge)
  <div class="item">
    <h3>{{ $challenge['name'] }}</h3>
    <div class="description">
      @php
        echo $Parsedown->text($challenge['description']);
      @endphp
    </div>
  </div>
@endforeach
