<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ITF - work</title>
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>

<body>
    <?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabdb.mysql.database.azure.com', 'thetimes@itflabdb', 'PooMlmp99', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<<<<<<< HEAD
    <table id="myTable" style="width: 100%;" class="display">
=======
    <table id="myTable" style="width: 100%;">
>>>>>>> main
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><?php echo $Result['Name'];?></td>
                <td><?php echo $Result['Comment'];?></td>
                <td><?php echo $Result['Link'];?></td>
            </tr>
        </tbody>

    </table>
    <script>
    $(document).ready(function() {
        $("#myTable").DataTable();
    });
    </script>
    <?php
mysqli_close($conn);
?>
</body>
<!--<body>
    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th width="100">
                    <div align="center">Name</div>
                </th>
                <th width="350">
                    <div align="center">Comment </div>
                </th>
                <th width="150">
                    <div align="center">Link </div>
                </th>
            </tr>
        </thead>
</body>-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

</html>