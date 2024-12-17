@php
if($type === 'shops'){
$path = 'storage/shops/';
}
if($type === 'products'){
$path = 'storage/product/';
}

@endphp

<div class="">
  @if(empty($filename))
  <img src="{{ asset('img/no_image.jpeg')}}">
  @else
  <img src="{{ asset($path . $filename)}}">
  @endif
</div>