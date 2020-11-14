<html>

<head>
    <title>ITF-work</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
    body {
        background-color: rgba(0, 0, 0, 0.125);
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabdb.mysql.database.azure.com', 'thetimes@itflab', 'PooMlmp99', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
                <table class="table table-light my-4 shadow-sm" width="100%">
                    <thead>
                        <tr>
                            <th>
                                <div align="center">Name</div>
                            </th>
                            <th>
                                <div align="center">Comment </div>
                            </th>
                            <th>
                                <div align="center">Link </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
while($Result = mysqli_fetch_array($res))
{
?>
                        <tr>
                            <td><?php echo $Result['Name'];?>
            </div>
            </td>
            <td><?php echo $Result['Comment'];?></td>
            <td><?php echo $Result['Link'];?></td>
            </tr>
            <?php
}
?>
            </tbody>
            </table>
            <?php
mysqli_close($conn);
?>
        </div>
    </div>
    </div>
</body>

</html>