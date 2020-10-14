<form action="{{route('post.store')}}" method="POST">
    @csrf
    <input type="text" name="title" id="" placeholder="title">
    <textarea name="body" id="" cols="30" rows="10" placeholder="body"></textarea>
    <button type="submit">create</button>
</form>