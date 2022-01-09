<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<main class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style=" margin-left:400px ; margin-top:30px;color:orange">Thêm thông tin của nhân viên </h2>
                    <form action="process-add.php" method="post">
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Mã nhân viên </label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtma" name="txtma">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Họ và tên</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtten" name="txtten">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Chức vụ</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtchucvu" name="txtchucvu">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Phòng ban</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtphongban" name="txtphongban">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Lương </label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtluong" name="txtluong">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Ngày vào làm </label>
                            <div class="col-sm-10">
                            <input type="" class="form-control" id="txtdate" name="txtdate">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-warning" name="btnSave">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>