<nav class="nav flex-column">
    <a class="nav-link active" aria-current="page" href="/user">Dashboard</a>
    <a class="nav-link " aria-current="page" href="{{ route('articles.index') }}">Articles</a>
    <a class="nav-link " aria-current="page" href="{{ route('users.edit',['user'=>Auth::user()]) }}">User settings</a>
</nav>
