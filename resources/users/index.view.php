<html>
    <head>
        <title>Lista de Usuarios</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <a href="users/create" class="btn btn-primary">NUEVO USUARIO</a>
                <table class="table table-bordered">
                    <caption>LISTA DE USUARIOS</caption>
                    <thead>
                    <tr>
                        <th>USERNAME</th>
                        <th>E-MAIL</th>
                        <th>ROLE</th>
                        <th>STATUS</th>
                        <th>----</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    use App\Database\MySQL;
                    MySQL::connect();
                    $users = MySQL::query('SELECT * FROM users');
                    foreach ($users as $user)
                    {
                        $user = json_decode(json_encode($user));
                        echo '<tr>
                            <td>' . @$user->username .'</td>
                            <td>' . @$user->email .'</td>
                            <td>' . @$user->role .'</td>
                            <td>' . @$user->status .'</td>
                            <td>
                                <a href="users/edit?id='. @$user->id.'" class="btn btn-warning btn-xs">Editar</a>
                                <a href="users/delete?id='. @$user->id.'" class="btn btn-danger btn-xs">Eliminar</a>
                            </td>
                        ';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
