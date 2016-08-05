<html>
<head>
  <meta charset="UTF-8">
  <title>CHRS | Log in</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- iCheck -->
  <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
  <link href="boostrap/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
<body class="login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Career Hunter</b></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form name="form1" method="post" action="php4.php">
        <div class="form-group has-feedback">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          <input type="text" class="form-control" placeholder="Email" name="user1" id='user1'/>

        </div>
        <div class="form-group has-feedback">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <input type="password" class="form-control" placeholder="Password" name="pass1" id='pass1'/>

        </div>
        <div class="row">
          <div class="col-xs-8">
          </div>
          <div class="col-xs-4">
            <input type = "submit" value="Sign In" name="submit"class="btn btn-success btn-md"/>
          </div><!-- /.col -->
        </div>
      </form>
    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->

  <!-- jQuery 2.1.3 -->
  <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap-dialog.min.js" type="text/javascript"></script>
  <!-- iCheck -->
  <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
increaseArea: '20%' // optional
});
    });
  </script>
</body>
</html>