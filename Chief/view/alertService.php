<?php 
session_start();
$port = "3000";
// api endpoint
$alert_url = "http://127.0.0.1:${port}/api/chief/alert/read.php";

$json_data = file_get_contents($alert_url);

$alert_data = json_decode($json_data);

$alert = $alert_data->body;

$alert = array_splice($alert, 0, 1);

?>

<div class="alert-section">
    <div class="alert-title">
        <h1>Send Alerts</h1>
    </div>
    <div class="alert-container">
        <form action="/watcher/include/alert.inc.php" method="post" class="alert-form">
            <input type="text" class="alert-input" name="alert_type" placeholder="Type of alert">
            <input type="text" class="alert-input" name="title" placeholder="The alert title">
            <input type="text" name="message" class="alert-input alert-msg" placeholder="Write your alert" />
            <div class="alert-btn-c">
                <button class="alert-btn" type="submit">Send an alert</button>

            </div>
        </form>
    </div>
    <div class="container-alert">
        <div class="alert-c-title">
            <h1>Alert Management</h1>
        </div>
        <!-- loop start's here -->
        <?php foreach ($alert as $rp)
           // storing id in session            
           $_SESSION["id"] = $rp->id;
        {?>
        <div class="alert-management">
           
          
              <?php echo "<h1>$rp->title</h1>"; ?>
              <?php  echo "<h2>$rp->alert_type</h2>"; ?>
               <?php echo "<p>$rp->message</p>"; ?>  
           
            <div class="alert-delete">
            <a href="/watcher/include/accountupdate.php">Update alert</a>
            <a href="/watcher/include/alertdelete.inc.php" class="delete-a">Remove alert</a>    
            </div>
        </div>
        <?php }?>
        <!-- loop end's here  -->
    </div>
</div>
<style>
    @import '/watcher/Style/alert.css';
</style>