<h1>Create Customer</h1>

<form method="POST" action="/customers/store">
    @csrf

    Full Name:
    <input type="text" name="full_name"><br><br>

    Email:
    <input type="email" name="email"><br><br>

    Phone:
    <input type="text" name="phone"><br><br>

    <button type="submit">
        Save Customer
    </button>
</form>