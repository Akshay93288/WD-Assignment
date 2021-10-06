
<?php  
if(isset($_POST["submit"])){
    @$username = $_POST['username'];
    @$email = $_POST['email'];
    @$Password = $_POST['Password'];
    @$size = count($_POST['adm_num']);
    @$size = count($_POST['ca1']);
    @$size = count($_POST['ca2']);
    @$size = count($_POST['ca3']);

    $i = 0;
    while ($i < $size) {
        $ca1= $_POST['ca1'][$i];
        $ca2= $_POST['ca2'][$i];
        $ca3= $_POST['ca3'][$i];
        $adm_num = $_POST['adm_num'][$i];
    }
}
if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif
?>