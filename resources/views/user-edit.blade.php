<h1>Edit User</h1>

<form method="POST"
      action="/users/{{ $user->id }}/update"
      enctype="multipart/form-data">

    @csrf

    Username:
    <input type="text"
           name="username"
           value="{{ $user->username }}">

    <br><br>

    Full Name:
    <input type="text"
           name="full_name"
           value="{{ $user->full_name }}">

    <br><br>

    Avatar:
    <input type="file"
           name="avatar">

    <br><br>

    <button type="submit">
        Update User
    </button>

</form>