<?php include('elements/header.php');?>
<?php if( is_array($users) ) {
	extract($users);?>

<div class="container">
	<div class="page-header">

<h1><?php echo $email;?></h1>
  </div>


<?php echo $first_name; echo $last_name;?>

</div>
<?php }?>

<?php if( is_array($users) ) {?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($users as $u){?>
    <h3><a href="<?php echo BASE_URL?>membership/view/<?php echo $u['uID'];?>" email="<?php echo $u['email'];?>"><?php echo $u['email'];?></a></h3>
    <p><?php echo $u['first_name'];?>&nbsp<?php echo (''); echo $u['last_name'];?></p>
    <p><?php echo $u['email'];?></p>
    <hr>


<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>
