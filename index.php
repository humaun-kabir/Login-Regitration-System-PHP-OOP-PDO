<?php
    include 'inc/header.php';

?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>User list <span class="pull-right"><strong>Welcome!</strong>Humaun</span></h2>
            </div>

            <div class="panel-body">
                <table class="table table-striped">
                    <th width="20%">Serial</th>
                    <th width="20%">Name</th>
                    <th width="20%">Username</th>
                    <th width="20%">Email Address</th>
                    <th width="20%">Action</th>

                    <tr>
                        <td>01</td>
                        <td>Humaun kabir</td>
                        <td>Borhan</td>
                        <td>sizer@gmail.com</td>
                        <td>
                            <a class="btn btn-primary" href="profile.php?id=1">View</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

<?php
    include 'inc/footer.php';
?>