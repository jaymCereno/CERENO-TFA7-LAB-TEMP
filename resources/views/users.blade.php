@foreach($users as $user)

<tr>

<td>

@if($user->avatar)

<img src="{{ asset('storage/' . $user->avatar) }}"
     width="80">

@else

<img src="https://via.placeholder.com/80"
     width="80">

@endif

</td>

<td>{{ $user->username }}</td>

<td>{{ $user->full_name }}</td>

<td>
    <a href="/users/{{ $user->id }}/edit">
        Edit
    </a>
</td>

</tr>

@endforeach