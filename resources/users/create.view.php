<html>
    <head>
        <title>Lista de Usuarios</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3>FORMULARIO DE REGISTRO DE USUARIO</h3>
                <form method="post" action="/users/store" role="form">
                    <div class="form-group">
                        <label for="username">USERNAME</label>
                        <input name="username" id="username" type="text" placeholder="USERNAME" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">E-MAIL</label>
                        <input name="email" id="email" type="email" placeholder="EMAIL" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <input name="password" id="password" type="password" placeholder="PASSWORD" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="role">ROLE</label>
                        <select name="role" id="role" class="form-control">
                            <option value="root">ROOT</option>
                            <option value="student">STUDENT</option>
                            <option value="teacher">TEACHER</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="status">STATUS</label>
                        <select name="status" id="status" class="form-control">
                            <option value="enable">ENABLE</option>
                            <option value="disable">DISABLE</option>
                            <option value="delete">DELETE</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <a class="btn btn-danger" href="/users">CANCELAR</a>
                        <button type="submit" class="btn btn-success">GUARDAR</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
