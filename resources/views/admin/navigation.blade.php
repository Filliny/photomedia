<nav class="nav flex-column">
    <a class="nav-link active" aria-current="page" href="/admin">Dashboard</a>
    <a class="nav-link " aria-current="page" href="{{ route('admin.categories.index') }}">Categories</a>
    <a class="nav-link " aria-current="page" href="{{ route('articles.index') }}">Articles</a>
    <a class="nav-link " aria-current="page" href="{{ route('admin.contacts.edit',['contact'=>1]) }}">Contacts</a>
</nav>
