<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Registro de Usuario</h4>
            </div>
            <div class="card-body">
                <?php if(isset($error)): ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
                
                <form action="index.php?controller=auth&action=registro" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmar_password" class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="confirmar_password" name="confirmar_password" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </div>
                </form>
                
                <div class="mt-3 text-center">
                    <p>¿Ya tienes una cuenta? <a href="/FINALWAP/views/login/login.php">Iniciar Sesión</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
