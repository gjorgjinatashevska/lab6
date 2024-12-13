{{--<div>--}}
{{--    <h1>Reservations</h1>--}}
{{--    <a href="{{ route('reservations.create') }}">Add Reservation</a>--}}

{{--    @if($reservations->isEmpty())--}}
{{--        <p>No reservations found.</p>--}}
{{--    @else--}}
{{--        <table border="1">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>Guest Name</th>--}}
{{--                <th>Number of Guests</th>--}}
{{--                <th>Room Number</th>--}}
{{--                <th>Check-In Date</th>--}}
{{--                <th>Check-Out Date</th>--}}
{{--                <th>Actions</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach ($reservations as $reservation)--}}
{{--                <tr>--}}
{{--                    <td>{{ $reservation->guest_name }}</td>--}}
{{--                    <td>{{ $reservation->num_guests }}</td>--}}
{{--                    <td>{{ $reservation->num_room }}</td>--}}
{{--                    <td>{{ $reservation->check_in_date }}</td>--}}
{{--                    <td>{{ $reservation->check_out_date }}</td>--}}
{{--                    <td>--}}
{{--                        <a href="{{ route('reservations.edit', $reservation->id) }}">Update</a>--}}
{{--                        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST"--}}
{{--                              style="display:inline;">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit"--}}
{{--                                    onclick="return confirm('Are you sure you want to delete this reservation?')">--}}
{{--                                Delete--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    @endif--}}
{{--</div>--}}
<div>
    <h1>Categories</h1>
    <a href="{{ route('categories.create') }}">Add Category</a>

    @if($categories->isEmpty())
        <p>No categories found.</p>
    @else
        <table border="1">
            <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
{{--sega saka fala bogu!--}}
