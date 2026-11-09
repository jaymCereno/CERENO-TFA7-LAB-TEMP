<h1>Create User</h1>

<form method="POST" action="/users/store">

    @csrf

    Username:
    <input type="text" name="username">

    <br><br>

    Full Name:
    <input type="text" name="full_name">

    <br><br>

    <button type="submit">
        Save User
    </button>

</form>