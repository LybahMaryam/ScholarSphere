@foreach ($users as $user)
    <a href="{{ route('profiles.view', ['id' => $user->id]) }}">{{ $user->name }}</a><br>
@endforeach

