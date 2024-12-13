{{--<h1>Create Reservation</h1>--}}
{{--od prof jordan--}}
{{--<form action="{{ route('reservations.store') }}" method="POST">--}}

{{--    @csrf--}}

{{--    <label for="guest_name">Guest Name:</label><br>--}}
{{--    <input type="text" id="guest_name" name="guest_name" required><br><br>--}}

{{--   --}}
{{--    <button type="submit">Create Reservation</button>--}}
{{--</form>--}}
<h1>Create Category</h1>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    <label for="name">Category Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <button type="submit">Create Category</button>
</form>
