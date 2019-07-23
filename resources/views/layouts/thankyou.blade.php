@extends('layouts.master')

@section('content')
<div class="main_div" style="padding:0;" >    
<div class="header" style="">
  <div class="inner-header thank" style="">
    <div class="logo">
      <img src="http://magicconversion.com/belief/resources/assets/img/logo.png">
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
	<div class="container">
		<div  class="formclass">
		  @foreach ($q as $key => $questions)
		 <p>{{  $questions }}</p>
         
          @endforeach 
	</div>
	
	</div>

@endsection



 <style>
        .formclass{
   width: 70%;   
   margin: auto;  
   font-size: 32px;
    color: #000;
    justify-content: center;
    flex-direction: column;
        }
    </style>
