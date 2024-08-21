<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>汽車列表</title>
</head>

<body>
    <div class="container">
        <div class="text-end">
            <a href="{{ route('cars.create') }}" class="btn btn-success">ADD</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <td>編號</td>
                    <td>車名</td>
                    <td>顏色</td>
                    <td>速度</td>
                    <td>編輯</td>
                    <td>刪除</td>
                </tr>
            </thead>
            <tbody>
                <?php
            foreach ($cars as $key => $value) :?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['color'] ?></td>
                    <td><?= $value['speed'] ?></td>
                    <td>
                        <button class="btn btn-primary"
                            onclick="location.href='{{ route('cars.edit', ['car' => $value['id']]) }}'">編輯</button>

                    </td>
                    <td>
                        <button class="btn btn-danger"
                            onclick="location.href='cars/<?= $value['id'] ?>/del'">刪除</button>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</body>

</html>
