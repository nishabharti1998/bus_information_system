<?php
include("variable.php");
$conn=mysqli_connect($servername,$username,$password,$db);
$text_value=$_GET['q'];
if(!empty($text_value)) {
      $query ="SELECT stoppage_name FROM stoppage_details WHERE stoppage_name like '$text_value'.%' ORDER BY stoppage_name LIMIT 0,6";
      $result = mysqli_query($conn,$query);
      if(!empty($result)) {
      ?>
      <ul id="stoppage-list">
      <?php
      foreach($result as $stoppage) {
        ?>
        <li onClick="selectstoppage('<?php echo $stoppage["stoppage_name"]; ?>');"><?php echo $stoppage["stoppage_name"]; ?></li>
        <?php } ?>
        </ul>
        <?php } } ?>
