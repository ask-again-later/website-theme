@php
  $url = get_theme_mod('api_base_url').'api/characters';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL, $url);
  $result = curl_exec($ch);
  curl_close($ch);

  $characters = json_decode($result, true);
@endphp

@php(the_content())

@foreach($characters as $character)
  <div class="item">
    <h3>{{ $character['name'] }}</h3>
    <p><strong>Played By:</strong> {{ $character['player'] }}</p>
    <div class="description">
      @php
        echo $character['public_blurb'];
      @endphp
    </div>
  </div>
@endforeach
