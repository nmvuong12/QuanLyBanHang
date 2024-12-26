<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loại hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container w-50">
        <h1 class="text-primary text-center">Thêm loại hàng</h1>
        <form action="{{route('nhacungcap.store')}}" method="POST">
            @csrf
            <input type="hidden" name="action" value="create">
            <label for="ten"><strong>Tên Loại hàng: </strong></label>
            <input type="text" class="form-control" id="ten" name="ten" placeholder="Nhập tên" required>
            <br>
            <label for="diachi"><strong>Mô tả: </strong></label>
            <textarea name="mota" rows="4" cols="70" placeholder="Nhập mô tả tại đây" class="form-control"></textarea>
            <br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success me-2">Save</button>
                <input class="btn btn-primary me-2" type="reset" value="Reset">
                <a href="{{route('loaihang.index')}}" type="button" class="btn btn-secondary">Quay lại</a>
            </div>
            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
