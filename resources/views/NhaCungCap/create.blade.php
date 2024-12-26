<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm dữ liệu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container w-50">
        <h1 class="text-primary text-center">Create</h1>
        <form action="{{route('nhacungcap.store')}}" method="POST">
            @csrf
            <input type="hidden" name="action" value="create">
            <label for="ten"><strong>Tên nhà cung cấp: </strong></label>
            <input type="text" class="form-control" id="ten" name="ten" placeholder="Nhập tên" required>
            <br>
            <label for="diachi"><strong>Địa chỉ: </strong></label>
            <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Nhập địa chỉ" required>
            <br>
            <label for="sdt"><strong>Số điện thoại: </strong></label><br>
            <input type="text" class="form-control" id="sdt" name="sdt" placeholder="Nhập số điện thoại" required>
            <br>
            <label for="website"><strong>Website: </strong></label><br>
            <input type="text" class="form-control" id="website" name="website" placeholder="Nhập website" required>
            <br>
            <label for="trangthai"><strong>Trạng thái: </strong></label><br>
            <select class="form-control" id="trangthai" name="trangthai">
                <option value="1">Còn giao dịch</option>
                <option value="0">Ngừng giao dịch</option>
            </select>
            <br>
            <!-- <label for="author"><strong>Ngày tạo: </strong></label>
            <input type="text" class="form-control" id="title" name="author" placeholder="Nhập người viết">
            <br> -->
            <!-- <label for="create_at"><strong>Ngày tạo: </strong></label>
            <input type="date" class="form-control" id="create_at" name="create_at" placeholder="Nhập ngày đăng">
            <br> -->
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success me-2">Save</button>
                <input class="btn btn-primary me-2" type="reset" value="Reset">
                <a href="{{route('nhacungcap.index')}}" type="button" class="btn btn-secondary">Quay lại</a>
            </div>
            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
