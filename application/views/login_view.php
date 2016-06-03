<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Jabatan Fungsional</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bootstrap/css/bootstraplogin.css">
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bootstrap/css/bootstrap/css/bootsrap.css">
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bootstrap/css/bootstrap/css/bootsrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bootstrap/css/bootstrap/css/bootsrap-responsive.css">
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bootstrap/css/bootstrap/css/bootsrap-responsive.min.css">
  <div class="login-page">
    <center><h1>Sistem Informasi Jabatan Fungsional</h1></center>
    <div class="form">
      <?php echo isset($error) ? $error : ''; ?>
      <?php echo form_open("login/process");?>
      <table border="0">
        <form class="login-form">
          <tr>
            <input type="text" placeholder="Username" name="username"/>
          </tr>
          <tr>
            <input type="password" placeholder="Password" name="password"/>
          </tr>
          <tr>
            Level <select name="level" >
                  <option selected="selected">Admin</option>
                  <option>Pejabat Fungsional</option>
                  <option>Tim Sekretariat</option>
                  <option>Tim Penilai</option>
                </select>     
          </tr>
          <tr><br></br></tr>
          <tr>
            <button name="submit">Login</button>
          </tr>
          <tr>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
          </tr>
        </form>
      </table>
      <?php echo form_close(); ?>
    </div>
 </div>
 <script src="<?php echo base_url()."assets/"; ?>bootstrap/css/bootstrap/js/bootstrap.min.js"></script>
 <script src="<?php echo base_url()."assets/"; ?>bootstrap/css/bootstrap/js/bootstrap.js"></script>
 <script src="<?php echo base_url()."assets/"; ?>bootstrap/js/bootstraplogin.js"></script>
</body>
</html>
