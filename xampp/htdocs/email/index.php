<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trộm thư</title>
</head>
<body>
    <h1>Email tới bạn</h1>
    <style>
        h1{
            width: 400px;
	        padding-left: 10px;
	        padding-right: 10px;
	        margin: 0px auto;
        }
        .main{
            width: 400px;
            background-mau: #DDFFEE;
            padding-left: 10px;
            padding-right: 10px;
            margin: 0px auto;
        }
        .form-control{
            width: 100%;
            padding: 5px;
        }
        .btn {
        display: inline-block;
        font-weight: 500;
        text-align: center;
        border: 2px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: .357rem;
        background-color: #9AC0CD;
        }
    </style>
        <div class="main">
        <form action="mail.php" enctype="multipart/form-data" method="POST">
        <div class="info">
        <label for="email">Email</label><br>
        <input type="text" class="form-control" name="email" placeholder="Email">
        </div><br>
        <div class="info">
        <label for="tieude">Subject</label><br>
        <input type="text" class="form-control" name="tieude" placeholder="ten">
        </div><br>
        <div class="info">
        <label for="content">Nội dung</label><br>
        <textarea name="content" id="editor" class="form-control"></textarea>
        </div><br>
        <div class="info">
        <label for="file">File đính kèm</label><br>
        <input type="file" class="form-control" name="file"  >
        </div><br>
        <button type="submit" class="btn btn-primary" style="color: white">Gửi</button>
        </div>
</body>
</html>