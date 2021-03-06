@extends('base')
@section('title', 'Who is online?')
@stop 
@section('main')

<div class="doc-content-box">
      @if($results->count() > 0)
      <legend>Who is online?</legend>
  <table class="table table-striped table-condensed">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Level</th>
        <th>Vocation</th>
        <th>Date registered</th>
        <th>Role</th>
        </tr>
  </thead>
<tbody>

        <?php $count = 0;?>
        @foreach($results as $result) 
      <?php $count++;?>
      <tr>

        <td>{{ $count }}. </td>

        <td>{{ $result->name }}</td>

        <td>{{ $result->level }}</td>

        <td><?php 
        $vocations = array(

        1 => "Sorcerer",
        2 => "Druid",
        3 => "Paladin",
        4 => "Knight",
        5 => "Master Sorcerer",
        6 => "Elder Druid",
        7 => "Royal Paladin",
        8 => "Elite Knight"
        
        );

    echo $vocations[$result->vocation];?></td>
        
        <td>{{ $result->created_at }}</td>
        
        <td><?php 
        $groups = array(

         1=> "Player",
         2=>"Gamemaster",
         3=>"God"

         );

         echo $groups[$result->group_id];?></td>

      </tr>
      @endforeach 
</tbody>

  </table>
  @else

{{ "There are no players online." }}

@endif
</div>
</div>

@stop 