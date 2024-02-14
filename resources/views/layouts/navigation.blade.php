<nav>
    <!-- Primary Navigation Menu -->
    <ul>
        <li>
            <a href="{{ route('dashboard') }}">
                {{ __('Dashboard') }}
            </a>
        </li>
        <li>
            <a href="{{ route('posts.myPosts') }}">
                {{ __('my posts') }}
            </a>
        </li>
        <li>
            <a href="{{ route('posts.index') }}">
                {{ __('posts') }}
            </a>
        </li>
        <li>
            <a href="{{ route('profile.edit') }}">
                {{ __('profile') }}
            </a>
        </li>
    </ul>

    <p>
        Welcome {{ Auth::user()->first_name }}
    </p>

    <!-- Authentication -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Logout') }}
        </a>
    </form>
</nav>
