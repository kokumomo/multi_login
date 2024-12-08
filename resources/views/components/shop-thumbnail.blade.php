<div class="">
  @if(empty($filename))
  <img src="{{ asset('img/no_image.jpeg')}}">
  @else
  <img src="{{ asset('storage/shops/' . $filename)}}">
  @endif
</div>