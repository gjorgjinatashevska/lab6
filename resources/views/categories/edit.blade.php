{{--<h1>Edit Reservation</h1>--}}

{{--<form action="{{ route('reservations.update', $reservation->id) }}" method="POST">--}}
{{--    @csrf--}}
{{--    @method('PUT')--}}

{{--    <label for="guest_name">Guest Name:</label><br>--}}
{{--    <input type="text" id="guest_name" name="guest_name" value="{{ $reservation->guest_name }}" required><br><br>--}}

{{--  --}}

{{--    <button type="submit">Update Reservation</button>--}}
{{--</form>--}}
<h1>Edit Category</h1>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Category Name:</label><br>
    <input type="text" id="name" name="name" value="{{ $category->name }}" required><br><br>

    <button type="submit">Update Category</button>
</form>
{{--//so ustvari treba da pisam u webphp?--}}
