<div>
    @include('livewire.user.links')
    <h1>User - Change Password</h1>
    <div>
        @if (Session::has('password_success'))
            <div class="alert alert-success" role="alert">{{ Session::get('password_success') }}</div>
        @endif
        @if (Session::has('password_error'))
            <div class="alert alert-danger" role="alert">{{ Session::get('password_error') }}</div>
        @endif
        <form wire:submit.prevent="changePassword">
            <div class="form-group">
                <label for="currentpass">Current Password</label>
                <input type="password" class="form-control" wire:model="current_password">
                @error('current_password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="newpass">New Password</label>
                <input type="password" class="form-control" id="newpass" wire:model="password">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="confirmnewpass">Confirm New Password</label>
                <input type="password" class="form-control" id="confirmnewpass" wire:model="password_confirmation">
                @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
