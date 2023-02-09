<style><?php include 'styles.css'; ?></style>
<html>
    <body>
        <h1 style="text-align:center;">Merit List</h1>
    </body>
</html>
<div >
    <table class="table3">
    
    <tr>
    <th>
        Roll_no
    </th>
    <th>
        Name
    </th>
    <th>
        Percentage
    </th>
    
    <?php
include 'connection.php';
$selectquery = "select roll_no,name,percentage from percentage
order by percentage desc";
$query = mysqli_query($conn, $selectquery);
$nums = mysqli_num_rows($query);
while ($res = mysqli_fetch_array($query)) {

    ?>
    <tr>
    <td><?php echo $res['roll_no']; ?></td>
    <td><?php echo $res['name']; ?></td>
    <td><?php echo $res['percentage']; ?></td>
    
  </tr>
  <?php
}
?>
</table>
    </div>