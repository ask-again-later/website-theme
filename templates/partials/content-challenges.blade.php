@php
  $url = get_theme_mod('api_base_url').'api/challenges';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL, $url);
  $result = curl_exec($ch);
  curl_close($ch);

  $challenges = json_decode($result, true);
@endphp

@foreach($challenges as $challenge)
  <div class="item">
    <h3>{{ $challenge['name'] }}</h3>
    <div class="description">
      @php
        echo $challenge['description'];
      @endphp
    </div>
  </div>
@endforeach
