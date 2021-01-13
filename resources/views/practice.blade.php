<form action="/upload" enctype="multipart/form-data" method="post">
    @csrf
    <input type="file" name="imgpath">
    <input type="submit" value="アップロードする">
    <img src=" {{asset('storage/二郎.jpg') }}">
    <img src="{{ Storage::url('二郎.jpg') }}">
</form>