@extends('layouts.master')

@section('content')
<div class="main_div" style="padding:0;" >    
<div class="header" style="">
  <div class="inner-header thank" style="">
    <div class="logo">
      <img src="http://localhost/belief/resources/assets/img/logo.png">
    </div>
    <p style="">username</p>
  </div>
</div>
</div>
<div class="container">
	<div class="result">
		  @foreach ($final as $finalans)
		<p>{{ $finalans->content }}</p>

          @endforeach 
	</div>
</div>

@endsection