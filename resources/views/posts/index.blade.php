<div>
    <h1>Categories</h1>
    <a href="{{ route('categories.create') }}">Add Category</a>



    <form action="{{ route('posts.index') }}" method="GET">
        <select name="category_id">
            <option value="">Сите категории</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit">Филтрирај</button>
    </form>

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
                        <a href="{{ route('categories.edit', $category->id) }}">Update</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this category?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
