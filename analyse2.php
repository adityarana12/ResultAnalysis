<style><?php include 'styles.css'; ?></style>
<html>
    <body>
        <h1 style="text-align:center;">Ranks</h1>
    </body>
</html>
<div >
    <table class="table4 ">
    
    <tr>
    <th>
        Roll_no
    </th>
    <th>
        Name
    </th>
    <th>
        Rank
    </th>
    
    <?php
include 'connection.php';
$selectquery = "select roll_no,name,rank from percentage
order by rank ";
$query = mysqli_query($conn, $selectquery);
$nums = mysqli_num_rows($query);
while ($res = mysqli_fetch_array($query)) {

    ?>
    <tr>
    <td><?php echo $res['roll_no']; ?></td>
    <td><?php echo $res['name']; ?></td>
    <td><?php echo $res['rank']; ?></td>
    
  </tr>
  <?php
}
?>
</table>
    </div>