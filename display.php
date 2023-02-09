<style><?php include 'styles.css'; ?></style>
<html>
    <head>
        <?php
        include 'links.php';
        include 'styles.php'
         ?>
    </head>
    <header>
        <div id="nav-placeholder">
            <script>
                $(function(){
                  $("#nav-placeholder").load("navbar.html");
                });
                </script>
        </div>
    </header>
    <div  class="div_name" style="width:100%; ">
        <table  class="table table-bordered-dark"   >
            <tr>
                <th>Name:</th>
                <?php
                include 'connection.php';
                  $rollno = $_POST["rollno"];
                $selectquery = "select distinct name from paper where roll_no=$rollno";
                $query = mysqli_query($conn, $selectquery);
                $nums = mysqli_num_rows($query);
                $res = mysqli_fetch_array($query);
                ?>
                <td>
                    <?php echo $res[0]?>
                </td>

            </tr>
            <tr>
                <th>
                    Rollno:
                </th>
               
                <td><?php  echo $rollno?> </td>
            </tr>
            <tr>
                <th>
                    University:
                </th>
               
                <td>Guru Gobind Singh Indraprastha University </td>
            </tr>
        </table>
    </div>
    <div>
    <table class="table table-bordered-dark ">
    
    <tr>
    <th>
        Paper_Code
    </th>
    <th>
        Subject
    </th>
    <th>
        Internal
    </th>
    <th>
        External
    </th>
    <th>
        Total
    </th>

    <?php
include 'connection.php';
    $rollno = $_POST["rollno"];
$selectquery = "select DISTINCT (p.paper_code),p.subject,m.internal,m.external,m.total from marks p inner join paper m on p.paper_code=m.Paper_code
where m.roll_no=$rollno";
$query = mysqli_query($conn, $selectquery);
$nums = mysqli_num_rows($query);
while ($res = mysqli_fetch_array($query)) {

    ?>
    <tr>
    <td><?php echo $res['paper_code']; ?></td>
    <td><?php echo $res['subject']; ?></td>
    <td><?php echo $res['internal']; ?></td>
    <td><?php echo $res['external']; ?></td>
    <td><?php echo $res['total']; ?></td>
  </tr>
  <?php
}
?>
</table>
    </div>
</html>
