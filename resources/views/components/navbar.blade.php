<nav style="background: #244675; padding: 18px 0;">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center;">

        <h2 style="color: white;">BookSpace</h2>

        <div style="display: flex; gap: 25px;">
            <a href="{{ route('login') }}" style="color: white;">Login</a>
            <a href="{{ route('dashboard', ['username' => request('username')]) }}"
               style="color: white;">Dashboard</a>
            <a href="{{ route('pengelolaan') }}"
               style="color: white;">Pengelolaan</a>
            <a href="{{ route('profile', ['username' => request('username')]) }}"
               style="color: white;">Profile</a>
        </div>

    </div>
</nav>