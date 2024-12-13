{{--za voa nema od kaj da gledam pa gpt go prasav--}}
<h1>Category Details</h1>

<h2>{{ $category->name }}</h2>
<p><strong>Slug:</strong> {{ $category->slug }}</p>

<h3>Blog Posts in this Category</h3>

@if($category->posts->isEmpty())
    <p>No blog posts found for this category.</p>
@else
    <table border="1">
        <thead>
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($category->posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ Str::limit($post->description, 50) }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}">View</a>
                    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                onclick="return confirm('Are you sure you want to delete this post?')">Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif

<a href="{{ route('categories.index') }}">Back to Categories</a>
