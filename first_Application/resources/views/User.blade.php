<h1>User page</h1>
{{-- <h2>Name:{{ $user }}</h2> --}}
{{-- <h2>City:{{ !empty($city) ? $city : 'No city'  }}</h2> --}}
{{-- <h2>{!! $scripts !!}</h2> --}}

@foreach ($users as $id => $user)
    <h2>{{$id}}.{{$user['name']}} | {{$user['city']}} | {{$user['email']}} |</h2>
    <a href="{{route('view.user',$id)}}">Show</a>
@endforeach