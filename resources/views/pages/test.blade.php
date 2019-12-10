<!-- @extends('layouts.app') -->

<!-- @section('content') -->

<ul>
@foreach($articles as $row)
<li>{{$row->userId}}</li>
<li>{{$row->title}}</li>
<li>{{$row->description}}</li>
@endforeach
</ul>
<!-- @endsection -->