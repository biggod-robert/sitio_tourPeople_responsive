

<link rel="stylesheet" href="css/seccionLoguin.css">

<div class="contenedor_informacion">

        <div class="container-lg" style=" background-size: cover; background-position: center;">
            <div class="row justify-content-center">
                <div class="col">
                    <div style="position: relative;">
                        <div style="position: absolute; width: 100%; height: 100%; z-index: -1;">
                            <img src="./img/bus_copia.png"
                                style="width: 50%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
                            <br>
                            <img src="./img/bas.png"
                                style="width: 50%; height: 100%; object-fit: cover; position: absolute; top: 0; right:0;">
                            <br>
                            <img src="./img/bus_copia.png"
                                style="width: 50%; height: 100%; object-fit: cover; position: absolute; top: 0; right:0;">
                        </div>
                        <div class="datos">
                            <p
                                style="color: white; font-size: 40px; font-family: 'Arial Black', sans-serif; text-align: center; margin-top: 20px; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">
                                TOUR PEOPLE
                            </p>
                            <div class="card-body">
                                <form action="./autenticar/datos_autenticar.php">
                                    <div class="form-group">
                                        <label for="correo"
                                            style="display: block; margin-bottom: 2px; color: white; font-family: 'Gill Sans MT (Cuerpo)', sans-serif; font-size: 30px; text-align: center; margin-left: 30px; text-shadow: 0 0 8px yellow, 0 0 8px yellow, 0 0 8px black, 1px -1px 0 yellow;">Documento</label>
                                        <input type="text" class="form-control" id="fullcorreo" name="documento"
                                            style="display: block; margin-bottom: 36px; box-shadow: 0px 0px 40px rgba(0, 0, 0, 60); margin-left: 40px; width: 520PX; height: 56px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="password"
                                            style="display: block; margin-bottom: 2px; color: white; font-family: 'Gill Sans MT (Cuerpo)', sans-serif; font-size: 30px; text-align: center; margin-left: 30px; text-shadow: 0 0 8px yellow, 0 0 8px yellow, 0 0 8px black, 1px -1px 0 yellow;">Contraseña</label>
                                        <input type="password" class="form-control" name="password" placeholder=""
                                            style="display: block; margin-bottom: 36px; box-shadow: 0px 0px 40px rgba(0, 0, 0, 60); margin-left: 40px; width: 520PX; height: 56px;">
                                    </div>
                                    <input type="submit" class="button" name="INGRESAR">

                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>