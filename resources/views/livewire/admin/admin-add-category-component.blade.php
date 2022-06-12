<div>
    @include('livewire.admin.links')
    <h1>Add Category</h1>
    <div>
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
        @endif
        <form class="mt-5" wire:submit.prevent="storeCategory">
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Category Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Category Name"
                        wire:model="name" wire:keyup="generateSlug">
                    @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputSlug" class="col-sm-2 col-form-label">Category Slug</label>
                <div class="col-sm-10">
                    <input type="text" name="slug" class="form-control" id="inputSlug" placeholder="Category Slug"
                        wire:model="slug">
                    @error('slug')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </form>
    </div>
</div>
