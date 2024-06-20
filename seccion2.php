
<link rel="stylesheet" type="text/css" href="./css/stylesRegistro.css">
<script defer src="./js/validar.js"></script>



<div class="container-lg">
    <div class="row justify-content-center">
        <div class="col">
            <div style="position: relative;">
                <div style="position: absolute; width: 100%; height: 100%; z-index: -1;">
                    <img src="./img/bas.png"
                        style="width: 50%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
                    <br>
                    <img src="./img/bus_copia.png"
                        style="width: 50%; height: 100%; object-fit: cover; position: absolute; top: 0; right:0;">
                </div>
                <div class="datos">

                    <p
                        style="color: white; font-size: 40px; font-family: 'Arial Black', sans-serif; text-align: center; margin-top: 20px; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">
                        REGISTRATE
                    </p>
                    <div class="card-body">
                        <form action="guardar.php">

                            <div class="form-group">
                                <label for="fullName">Documento </label>
                                <input type="int" class="form-control" id="fullName" name="documento" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="nombreusuario">Nombres</label>
                                <input type="text" class="form-control" id="nombreusuario" name="nombres"
                                    placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="dateOfBirth"> Apellidos </label>
                                <input type="text" class="form-control" id="dateOfBirth" name="apellidos">
                            </div>
                            <div class="form-group">
                                <label for="email_nombre">Correo </label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">Repetir Contraseña:</label>
                                <input type="password" id="confirm-password" name="confirm-password" required>
                            </div>
                            <div class="form-group">
                                <label for="edad">edad</label>
                                <input type="number" class="form-control" id="date" name="edad" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="fechcumple">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="fechcumple" name="fecha_nacimiento"
                                    placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Telefono</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono"
                                    placeholder="">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="termsAndConditions" required>
                                <label class="form-check-label" for="termsAndConditions">Acepta los <a href="#">términos y condiciones</a> </label>
                            </div>
                            <input type="submit" class="button" name="REGISTRAR">
                            
                        </form>
                        <p><a href="seccion4.php">¿Ya tengo Cuenta?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

