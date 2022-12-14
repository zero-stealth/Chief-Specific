<?php

$port = "3000";

$user_url = "http://127.0.0.1:${port}/api/user/read.php";

$userjson_data = file_get_contents($user_url);

$user_data = json_decode($userjson_data);

$users = $user_data->body;

$users = array_splice($users, 0, 10);


?>

<div class="account-manager">
<!-- the name & button section -->
<h1>User management</h1>
<div class="manager-acc-container">
    <div class="manager-btn">
        <button class="btn-manager"><span><a href="/watcher/User/forms/userform.php">Add user</span></a></button>
    </div>
  <!-- the account management section -->
  <div class="manager-section-container">
    <?php foreach ($users as $user) {?>
    <div class="manager-section">
<div class="account-managed">
    <div class="inner-account">
        <img src="/watcher/assets/mwala-07.jpg" alt="account image" class="circle-img inner-img">
    </div>
    <div>
    <h4><?php echo $user->user_name ?></h4>
    <span>Active</span>
    </div>
</div>
<div>
<a href="/watcher/include/userdelete.inc.php" class="delete"><span>Delete</span></a>
</div>
    </div>
    <?php }?>
        <!-- the end account management section -->
    </div>
<style>
    @import '/watcher/Style/accountManagement.css';
</style>