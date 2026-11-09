<h1>Edit Customer</h1>

<form method="POST"
      action="/customers/{{ $customer->id }}/update">

    @csrf

    Full Name:
    <input type="text"
           name="full_name"
           value="{{ $customer->full_name }}">

    <br><br>

    Email:
    <input type="email"
           name="email"
           value="{{ $customer->email }}">

    <br><br>

    Phone:
    <input type="text"
           name="phone"
           value="{{ $customer->phone }}">

    <br><br>

    <button type="submit">
        Update Customer
    </button>

</form>