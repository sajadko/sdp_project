<div>
    @include('livewire.user.links')
    <h1>User Dashboard</h1>
    <div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-primary" type="submit">Logout</button>
        </form>
    </div>
</div>
