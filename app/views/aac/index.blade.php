@extends('base')
@section('title', 'Home')
@stop 
@section('main')


@foreach($newss as $news)
  <div class="doc-content-box">
      <legend>{{ $news->title }} <div id="spaceholder"></div>
        
        <p>
          <h6><i class="icon-calendar"></i> {{ $news->created_at }} &nbsp;&nbsp;&nbsp;&nbsp;<a href="/profile/{{ $news->author }}">{{ $news->author }}</a>
        </p>
      </h6>
      </legend>
      
  <div style="margin-top:7px">
    
<p>{{ $news->content }}</p>

@if (Auth::check())

                    @if ($roles == 5)

  <div class="btn-group">
    <a class="btn btn-success" href="#"><i class="icon-pencil"></i> Edit</a>
    
    <a class="btn btn-danger" href="{{ URL::action('NewsController@delete', ['id' => $news->id]) }}"><i class="icon-trash icon-large"></i> Delete</a>
  </div>

                        @endif

                        @endif
    
  </div>
</div>
@endforeach
          
@stop 