<!doctype html>
<html lang="ja">
  	<head>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    	<title>問題2 回答</title>
  	</head>
  	<body>
    	<div class="container py-4" id="contact">
		  	<h1>登録確認</h1>
		  	<form action="regist.php" method="post">
            	<div class="form-group">
             		<label for="exampleInputName">名前：</label>
					<input name="name" type="text" readonly class="form-control-plaintext" id="exampleInputName" value="">
            	</div>
            	<div class="form-group">
              		<label for="exampleInputUrl">Url：</label>
					<input name="url" type="text" readonly class="form-control-plaintext" id="exampleInputUrl" value="">
            	</div>
            	<button type="submit" class="btn btn-success">送信</button>
            	<button type="button" class="btn btn-danger" onclick="javascript:history.back();">戻る</button>
		  	</form>
		</div>

    	<!-- Optional JavaScript -->
    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</body>
</html>
