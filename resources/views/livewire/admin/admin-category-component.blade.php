<div>
    @include('livewire.admin.links')
    <h1>Admin - Categories</h1>
    <div>
        <a href="{{ route('admin.categories.add') }}" class="btn btn-success mb-5 mt-3">Add Category</a>
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', ['category_slug' => $category->slug]) }}"
                                class="btn btn-primary">Edit</a>
                            <a href="#" onclick="confirm('Are you sure ?') || event.stopImmediatePropagation()"
                                wire:click.prevent="deleteCategory({{ $category->id }})"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $categories->links('pagination::bootstrap-4') !!}
    </div>
</div>
