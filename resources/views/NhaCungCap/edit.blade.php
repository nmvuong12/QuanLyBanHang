<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container w-50">
        <h1 class="text-primary text-center">Edit</h1>
        <form action="{{route('nhacungcap.update', $nhacungcap->id)}}" method="POST">
            @csrf
            @method ('PUT')
            <input type="hidden" name="action" value="create">
            <label for="ten"><strong>Tên nhà cung cấp: </strong></label>
            <input type="text" class="form-control" id="ten" name="ten" value="{{$nhacungcap->ten}}">
            <br>
            <label for="diachi"><strong>Địa chỉ: </strong></label>
            <input type="text" class="form-control" id="diachi" name="diachi" value="{{$nhacungcap->diachi}}">
            <br>
            <label for="sdt"><strong>Số điện thoại: </strong></label>
            <input type="text" class="form-control" id="sdt" name="sdt" value="{{$nhacungcap->sdt}}">
            <br>
            <label for="website"><strong>Website: </strong></label>
            <input type="text" class="form-control" id="website" name="website" value="{{$nhacungcap->website}}">
            <br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success me-2">Update</button>
                <a href="{{route('nhacungcap.index')}}" type="button" class="btn btn-secondary">Quay lại</a>
            </div>    
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
