<?php
/**
 * Available variables
 * 
 * $account object - drupal user account
 * $name string - the account's formatted and linked name 
 * $mail string - the account's email address
 */
?>
<table style=width:100%>
  <tr>
    <th>Pofile</th>
    <th>Name</th>
    <th>Department</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Operations</th>
  </tr>
  <?php 
    foreach($variables['element'] as $key) {
      global $base_url; 
      $file = file_load($key['image']);
      $uri = $file->uri;
      $url = file_create_url($uri);
      $link = $base_url."/student/".$key["sid"];
      $data =  "<tr>
          <td> <a href=".$link." > <img src = ".$url." width=100 height=100 ></a></td>
          <td> ". $key["name"]. "</td>
          <td> ". $key["steam"]. "</td>
          <td> ". $key["email"]. "</td>
          <td> ". $key["mobile"]. "</td>
          <td> ". $key["operation"]. "</td>
        </tr>";
      print_r($data);
    }
  ?>

</table>