<?php
/**
 * Availabel variables
 * 
 * $account object - drupal user account
 * $name string - the account's formatted and linked name 
 * $mail string - the account's email address
 */
if(!empty($variables['element'])){
    $fid = $variables['element']['profilepic'];
    $file = file_load($fid);
    $uri = $file->uri;
    $url = file_create_url($uri);
    ?>
    <div class='container'>
        <div class='left-container'>
            <div class='student'>
                <img id='student-image' src="<?php echo $url ?>"></img>
            </div>
        </div>
        <div class='right-container'>
            <div class='student'><label>Name : </label> <?php echo $variables['element']['name'] ?></div>
            <div class='student'><label>Steam: </label><?php echo $variables['element']['steam'] ?></div>
            <div class='student'><label>Subscription: </label><?php echo $variables['element']['subscription'] ?></div>
            <div class='student'><label>Mother Name: </label><?php echo $variables['element']['mother_name'] ?></div>
            <div class='student'><label>Father Name: </label><?php echo $variables['element']['father_name'] ?></div>
            <div class='student'><label>Address: </label><?php echo $variables['element']['address'] ?></div>
            <div class='student'><label>Email: </label><?php echo $variables['element']['email'] ?></div>
            <div class='student'><label>Mobile: </label><?php echo $variables['element']['mobile'] ?></div>
        </div>      
    </div><?php
}else{?>
    <div><h1>No Record Found</h1></div> 
<?php
}
?>
