<div>
    <h1>{{ $big->title }}</h1>
    <p>{{ $big->text }}</p>
    <img src="{{ asset('storage/img/'.$big->image) }}" alt="">
    <p>{{ $big->auteur->auteur }}</p>
    <a href="/big/{{ $big->id }}/edit">edit</a>
    <form action="/big/{{ $big->id }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="SUPRIMER">
    </form>
</div>