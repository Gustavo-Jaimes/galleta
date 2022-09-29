
<div class="modal fade" id="uneteEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Introduce los datos de contacto</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="contact-form-style-02" id="formVacantes" action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col col-sm-12 py-2 card-body">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group ">
                                    <label for="vacantesDisponibles" class="">Vacantes Disponibles <span
                                            class="text-danger">*</span></label>
                                    <select name="vacantesDisponibles" class="md-input border-radius-5">
                                        <option value="">...</option>
                                        <option value="Diseñador gráfico Jr" style="color: black;">Diseñador gráfico Jr
                                        </option>
                                        <option value="Creador y editor multimedia - Diseño multimedia"
                                            style="color: black;">Creador y editor multimedia - Diseño multimedia
                                        </option>
                                        <option value="Community manager Jr" style="color: black;">Community manager Jr
                                        </option>
                                        <option value="Becario diseño multimedia" style="color: black;">Becario diseño multimedia
                                        </option>
                                        <option value="Programador web Jr" style="color: black;">Programador web Jr
                                        </option>
                                        <option value="Marketing digital" style="color: black;">Marketing digital
                                        </option>
                                    </select>
                                    <span id="vacantesDisponibles_error" class="text-danger"
                                        style="font-size: 12px;"></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="nombre" class="">Nombre <span class="text-danger">*</span></label>
                                    <input type="text" name="nombreVacante" class="md-input style-02 border-radius-5"
                                        id="nombreVacante">
                                    <span id="nombreVacante_error" class="text-danger" style="font-size: 12px;"></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="nombre" class="">Correo electrónico <span
                                            class="text-danger">*</span></label>
                                    <input type="email" name="emailVacante" class="md-input style-02 border-radius-5"
                                        id="emailVacante">
                                    <span id="emailVacante_error" class="text-danger" style="font-size: 12px;"></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="telefono" class="">Telefono <span class="text-danger">*</span></label>
                                    <input type="tel" name="telefonoVacante" class="md-input style-02 border-radius-5"
                                        id="telefonoVacante">
                                    <span id="telefonoVacante_error" class="text-danger"
                                        style="font-size: 12px;"></span>
                                </div>
                            </div>
                            <hr style="border-top: 1px solid rgb(171 177 184 / 50%);">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="galleryOne">Adjunta tu CV <span class="text-danger">*</span></label>
                                    <input class="form-control" type="file" name="cv" id="cv"
                                        accept=".doc, .docx, .pdf" />
                                    <span id="archivo_error" class="text-danger" style="font-size: 12px;"></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="nombre" class="">URL de tu portafolio <span class="text-danger">
                                            (Opcional)</span></label>
                                    <input type="text" name="portafolioVacante"
                                        class="md-input style-02 border-radius-5" id="portafolioVacante">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LcJvVIaAAAAAIf6_p4jQXJzMmmZ6VlimVC10_4P">
                                    </div>
                                    <span id="captcha_error" class="text-danger" style="font-size: 12px;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark btn-rounded remove-margin" type="button"
                        data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="sendEmail" id="sendEmail"
                        class="btn btn-color btn-rounded remove-margin">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Vacante 1 -->
<div class="modal fade" id="modalVacante1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descripcion de la vacante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body vacante-body">

            </div>
            <div class="modal-footer">
                <button class="btn btn-dark btn-rounded remove-margin" type="button"
                    data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Vacante 2 -->
<div class="modal fade" id="modalVacante2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descripcion de la vacante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span
                        style="font-family: Calibri, sans-serif; font-size: 16px;"><em><strong>REQUISITOS:</strong></em></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Edad: 25 a 33
                            A&Ntilde;OS</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Escolaridad:
                            LICENCIATURA EN MERCADOTECNIA, DISE&Ntilde;O, COMUNICACI&Oacute;N O AFIN</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Experiencia: 1
                            A&Ntilde;O ADMINISTRANDO DIFERENTES CUENTAS EN REDES SOCIALES</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Sexo:
                            INDISTINTO</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">&nbsp;</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 16px;"><span
                            style="font-family: Calibri, sans-serif;"><em><strong>CONOCIMIENTOS:</strong></em></span></span>
                </p>
                <ul>
                    <li><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Administraci&oacute;n de redes
                                sociales.</span></span></li>
                    <li><span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Atenci&oacute;n
                                al cliente.</span></span></li>
                    <li><span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Paqueter&iacute;a
                                Adobe: Illustrator , Photoshop, Lightroom (Deseable).</span></span></li>
                    <li><span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Toma de
                                fotograf&iacute;as con C&aacute;mara profesional.</span></span></li>
                </ul>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">&nbsp;</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 16px;"><span
                            style="font-family: Calibri, sans-serif;"><em><strong>ACTIVIDADES PARA
                                    REALIZAR:</strong></em></span></span>
                </p>
                <ul>
                    <li><span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Gesti&oacute;n y
                                Administraci&oacute;n de Redes sociales.</span></span></li>
                    <li><span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Creaci&oacute;n
                                de calendario editorial para redes sociales.</span></span></li>
                    <li><span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Creaci&oacute;n
                                de copys para redes sociales.</span></span></li>
                    <li><span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Atenci&oacute;n a
                                clientes en redes sociales.</span></span></li>
                </ul>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">&nbsp;</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 16px;"><span
                            style="font-family: Calibri, sans-serif;"><em><strong>HABILIDADES/
                                    COMPETENCIAS:</strong></em></span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Excelente
                            Ortograf&iacute;a.</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Buena
                            actitud.</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span
                            style="font-family: Calibri, sans-serif;">Puntualidad.</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Empat&iacute;a y
                            Buena atenci&oacute;n con el cliente.</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Proactivo y
                            Responsable</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span
                            style="font-family: Calibri, sans-serif;">Organizaci&oacute;n</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">&nbsp;</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 16px;"><span
                            style="font-family: Calibri, sans-serif;"><strong><em>OFRECEMOS:</em></strong></span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">Horario: Lunes a
                            Viernes 09:00 am a 06:00 pm, S&aacute;bados HOME OFFICE de 09:00 am a 02:00
                            pm.</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">BONO DE
                            PUNTUALIDAD.</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">PRESTACIONES DE
                            LEY.</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">CAPACITACIONES
                            CONSTANTES.</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;">BUEN AMBIENTE
                            LABORAL.</span></span>
                </p>
                <p
                    style='margin-right:0cm;margin-left:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0cm;margin-bottom:12.0pt;line-height:107%;background:white;'>
                    <span style="font-family: Calibri, sans-serif; font-size: 15px;">CRECIMIENTO.</span>
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-dark btn-rounded remove-margin" type="button"
                    data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Vacante 3 -->
<div class="modal fade" id="modalVacante6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descripcion de la vacante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;"><strong><em><span
                                    style="font-size: 16px;">REQUISITOS:</span></em></strong></span></p>
                <p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; line-height: 1;"><span
                        style="font-family: Calibri, sans-serif;">Edad: 24 a 33 A&Ntilde;OS.</span></p>
                <p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; line-height: 1;"><span
                        style="font-family: Calibri, sans-serif;">Escolaridad: LIC. DISE&Ntilde;O GR&Aacute;FICO.</span>
                </p>
                <p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; line-height: 1;"><span
                        style="font-family: Calibri, sans-serif;">Experiencia: 1 A&Ntilde;O&nbsp; - Deseable.</span></p>
                <p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; line-height: 1;"><span
                        style="font-family: Calibri, sans-serif;">Sexo: INDISTINTO.</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;">&nbsp;</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;"><strong><em><span
                                    style="font-size: 16px;">CONOCIMIENTOS:</span></em></strong></span></p>
                <ul>
                    <li><span style="font-family: Calibri, sans-serif;">Paqueter&iacute;a Adobe: Illustrator, Photoshop,
                            Lightroom.</span></li>
                    <li><span style="font-family: Calibri, sans-serif;">(Deseable: Premier Pro, After Effects).</span>
                    </li>
                    <li><span style="font-family: Calibri, sans-serif;">Conocimiento en branding.</span></li>
                    <li><span style="font-family: Calibri, sans-serif;">Manejo y control de tiempos de entrega.</span>
                    </li>
                    <li><span style="font-family: Calibri, sans-serif;">Dise&ntilde;os para Redes Sociales y Medios
                            digitales.</span></li>
                </ul>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;">&nbsp;</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;"><em><strong><span style="font-size: 16px;">ACTIVIDADES
                                    PARA REALIZAR:</span></strong></em></span></p>
                <ul style="list-style-type: disc;">
                    <li><span style="font-family: Calibri, sans-serif;">Dise&ntilde;os para Redes Sociales y Medios
                            digitales, Banners y Landing page.</span></li>
                    <li><span style="font-family: Calibri, sans-serif;">Logotipos, Hojas membretadas, Tarjetas de
                            presentaci&oacute;n, etc.</span></li>
                    <li><span style="font-family: Calibri, sans-serif;">Red de display para campa&ntilde;as
                            digitales.</span></li>
                    <li><span style="font-family: Calibri, sans-serif;">Identidad de marca.</span></li>
                    <li><span style="font-family: Calibri, sans-serif;">Entre otros.</span></li>
                </ul>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;">&nbsp;</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;"><strong><em><span style="font-size: 16px;">HABILIDADES
                                    / COMPETENCIAS:</span></em></strong></span></p>
                <p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; line-height: 1;"><span
                        style="font-family: Calibri, sans-serif;">Puntualidad.</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;">Empat&iacute;a y Buena atenci&oacute;n con el
                        cliente.</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;">Proactivo y Responsable.</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;">Organizaci&oacute;n.</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;">Creativo y con&nbsp;Gusto por los detalles.</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;">Excelente actitud.</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;">&nbsp;</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;"><em><strong><span
                                    style="font-size: 16px;">OFRECEMOS:</span></strong></em></span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;">Horario: Lunes a Viernes 09:00 am a 06:00 pm,
                        S&aacute;bados HOME OFFICE de 09:00 am a 02:00 pm.</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;">Bono de puntualidad.</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;">PRESTACIONES DE LEY.</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;">CAPACITACIONES CONSTANTES.</span></p>
                <p style="margin: 0cm 0cm 8pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
                        style="font-family: Calibri, sans-serif;">BUEN AMBIENTE LABORAL.</span></p>
                <p
                    style="margin: 0cm 0cm 8pt 35.4pt; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif; text-indent: -35.4pt;">
                    <span style="font-family: Calibri, sans-serif;">CRECIMIENTO.</span>
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-dark btn-rounded remove-margin" type="button"
                    data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Vacante 3 -->
<div class="modal fade" id="modalVacante3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descripcion de la vacante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="line-height: 1;"><span
                        style="font-size: 16px; font-family: Calibri, sans-serif;"><strong><em>REQUISITOS:</em></strong></span>
                </p>
                <p><span style="font-family: Calibri, sans-serif;"><span style="font-size: 15px;">Edad: 20 a 26
                            A&Ntilde;OS.</span></span></p>
                <p><span style="font-family: Calibri, sans-serif;"><span style="font-size: 15px;">Escolaridad:
                            &Uacute;ltimo semestre en LIC. MEDIOS AUDIOVISUALES, LIC. C. COMUNICACI&Oacute;N, LIC.
                            FOTOGRAF&Iacute;A O AF&Iacute;N.</span></span></p>
                <p><span style="font-family: Calibri, sans-serif;"><span style="font-size: 15px;">Sexo:
                            indistinto.</span></span></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;">&nbsp;</span></span></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 16px;"><strong><em>CONOCIMIENTOS:</em></strong></span></span></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;">Software: Adobe Premiere, After effects, Photoshop, Illustrador,
                            Lightroom.</span></span></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;">&nbsp;Toma y edici&oacute;n de material audiovisual.</span></span>
                </p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;"><br></span></span></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;"><strong><em>CONOCIMIENTOS DESEABLES:</em></strong></span></span>
                </p>
                <ul>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">Creaci&oacute;n de dise&ntilde;o multimedia y contenidos
                                digitales web y multimedia.</span></span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">Experiencia en creaci&oacute;n de contenido audiovisual con
                                fines publicitarios.</span></span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">Animaci&oacute;n a trav&eacute;s de elementos gr&aacute;ficos,
                                im&aacute;genes, VECTORES Y TEXTO. &nbsp;</span></span></li>
                </ul>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;">&nbsp;</span></span></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 16px;"><strong><em>PRINCIPALES ACTIVIDADES PARA
                                    REALIZAR:</em></strong></span></span></p>
                <ul>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">Creaci&oacute;n de contenido audiovisual con
                                fines publicitarios.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">&nbsp;Toma, edici&oacute;n y animaci&oacute;n
                                de material audiovisual.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">&nbsp; Material audiovisual para redes
                                sociales.&nbsp;</span></span></li>
                </ul>
                <p style="line-height: 1;"><span style="font-size: 16px;"><span
                            style="font-family: Calibri, sans-serif;"><br></span></span></p>
                <p style="line-height: 1;"><span style="font-size: 16px;"><span
                            style="font-family: Calibri, sans-serif;"><strong><em>HABILIDADES/
                                    COMPETENCIAS:</em></strong></span></span></p>
                <ul>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">Puntualidad.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">Trabajo en equipo.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">Dise&ntilde;o y ejecuci&oacute;n de planes de
                                trabajo.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">Inter&eacute;s en aprender e investigar sobre
                                tendencias de dise&ntilde;o, marketing digital y contenido audiovisual.</span></span>
                    </li>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">Creativo.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">Proactivo y Responsable.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">&nbsp;Anal&iacute;tico.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">Organizado y Excelente actitud.</span></span>
                    </li>
                </ul>
                <p style="line-height: 1;"><span style="font-size: 16px;"><br></span></p>
                <p style="line-height: 1;"><span style="font-size: 16px;"><span
                            style="font-family: Calibri, sans-serif;"><strong><em>OFRECEMOS:
                                </em></strong></span></span></p>
                <ul style="margin-left: 20px;">
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">Horario: lunes a viernes 09:00 am a 01:30 pm o
                                1.30 a 6.00 pm.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">Sueldo + Bono Puntualidad.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">Prestaciones De Ley.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">Capacitaciones Constantes.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">Excelente Ambiente Laboral.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 16px;"><span
                                style="font-family: Calibri, sans-serif;">Crecimiento.</span></span></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button class="btn btn-dark btn-rounded remove-margin" type="button"
                    data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Vacante 4 -->
<div class="modal fade" id="modalVacante4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descripcion de la vacante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="line-height: 1;"><span
                        style="font-size: 16px; font-family: Calibri, sans-serif;"><strong><em>REQUISITOS:</em></strong></span>
                </p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;">Edad: 21 a 28 a&ntilde;os.</span></span></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;">Escolaridad: Ing. en Sistemas, Programador WEB o carrera
                            af&iacute;n.</span></span></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;">Experiencia: 1 a&ntilde;o (Deseable).</span></span></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;">Sexo: INDISTINTO.</span></span></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;"><br></span></span></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 16px;"><strong><em>CONOCIMIENTOS / EXPERIENCIA COMPROBABLE
                                    EN:</em></strong></span></span></p>
                <ul>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">HTML5.</span></span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">CSS3.</span></span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">JavaScript</span></span></li>
                    <li style="line-height: 1;"><span
                            style="color: rgba(0, 0, 0, 0.87); font-family: Calibri, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline !important;">jQuery</span><span
                            style="font-size: 15px; font-family: Calibri, sans-serif;">&nbsp;</span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;"><span style="font-family: Calibri, sans-serif;"><span
                                        style="font-size: 15px;">WordPress.</span></span></span></span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">PHP &amp; MySQL.</span></span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">Bootstrap 4+.</span></span></li>
                </ul>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;"><br></span></span></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 16px;"><strong><em>ACTIVIDADES PARA REALIZAR:</em></strong></span></span>
                </p>
                <ul>
                    <li style="line-height: 1;"><span
                            style="font-family: Calibri, sans-serif; font-size: 15px;">Creaci&oacute;n de Sitios Web
                            Personalizados (Desde cero y Wordpress).</span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Mantenimiento / actualizaciones a sitios
                                webs.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Modificaci&oacute;n de Themes
                                Premium.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Soporte remoto de email a
                                clientes.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Creaci&oacute;n de boletines de promociones en
                                HTML.</span></span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif; font-size: 15px;">Entre
                            otros.</span></li>
                </ul>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;"><br></span></span></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;"><strong>HABILIDADES / COMPETENCIAS:</strong></span></span></p>
                <ul>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">Puntualidad.</span></span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">Proactivo y Responsable.</span></span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">Organizaci&oacute;n.</span></span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">Excelente actitud.&nbsp;</span></span></li>
                </ul>
                <p><span style="font-family: Calibri, sans-serif;"><span style="font-size: 15px;"><br></span></span></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;"><strong><em>INTERESADOS INDISPENSABLE MANDAR CURRICULUM Y
                                    PORTAFOLIO (CON AL MENOS UN LINK DE SITIO WEB
                                    DESARROLLADO)</em></strong></span></span></p>
                <p style="line-height: 1;"><br></p>
                <p style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                            style="font-size: 15px;"><strong><em>OFRECEMOS:</em></strong></span></span></p>
                <ul>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">Horario: lunes a viernes de 09:00 am a 06:00 pm. -
                                &nbsp;s&aacute;bados HOME OFFICE de 09:00 am a 02:00 pm</span></span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">-Sueldo Quincenal.</span></span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">-Bono De Puntualidad + Bonos Por Proyecto.</span></span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">-Prestaciones De Ley.</span></span></li>
                    <li style="line-height: 1;"><span style="font-family: Calibri, sans-serif;"><span
                                style="font-size: 15px;">-Capacitaciones Constantes.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px; font-family: Calibri, sans-serif;">-Buen
                            Ambiente Laboral.</span></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button class="btn btn-dark btn-rounded remove-margin" type="button"
                    data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Vacante 5 -->
<div class="modal fade" id="modalVacante5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descripcion de la vacante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="line-height: 1;"><span
                        style="font-family: Calibri, sans-serif; font-size: 16px;"><strong><em>REQUISITOS:</em></strong></span>
                </p>
                <p style="line-height: 1;"><span style="font-size: 15px;"><span
                            style="font-family: Calibri, sans-serif;">Edad: 26 a 33 a&ntilde;os.</span></span></p>
                <p style="line-height: 1;"><span style="font-size: 15px;"><span
                            style="font-family: Calibri, sans-serif;">Escolaridad: Licenciatura en Marketing Digital,
                            publicidad o a fin.</span></span></p>
                <p style="line-height: 1;"><span style="font-size: 15px;"><span
                            style="font-family: Calibri, sans-serif;">Experiencia de 1 a 2 a&ntilde;os en Agencia de
                            Marketing.</span></span></p>
                <p style="line-height: 1;"><span style="font-size: 15px;"><span
                            style="font-family: Calibri, sans-serif;">Sexo: Indistinto.</span></span></p>
                <p style="line-height: 1;"><span style="font-size: 15px;"><span
                            style="font-family: Calibri, sans-serif;"><br></span></span></p>
                <p style="line-height: 1;"><span style="font-size: 16px;"><span
                            style="font-family: Calibri, sans-serif;"><strong><em>CONOCIMIENTOS:</em></strong></span></span>
                </p>
                <ul>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Buena ortograf&iacute;a y
                                redacci&oacute;n.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Gesti&oacute;n de
                                campa&ntilde;as.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">M&iacute;nimo una certificaci&oacute;n
                                comprobable por Google y Facebook.</span></span></li>
                </ul>
                <p style="line-height: 1;"><span style="font-size: 15px;"><span
                            style="font-family: Calibri, sans-serif;"><br></span></span></p>
                <p style="line-height: 1;"><span style="font-size: 16px;"><span
                            style="font-family: Calibri, sans-serif;"><strong><em>ACTIVIDADES PARA
                                    REALIZAR:</em></strong></span></span></p>
                <ul>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Planeaci&oacute;n y ejecuci&oacute;n de
                                campa&ntilde;as en Google Ads y Facebook Ads.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">An&aacute;lisis de la
                                competencia.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Creaci&oacute;n de campa&ntilde;as y grupos de
                                anuncios.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">An&aacute;lisis y optimizaci&oacute;n de
                                campa&ntilde;as SEM.</span></span></li>
                </ul>
                <p style="line-height: 1;"><span style="font-size: 15px;"><span
                            style="font-family: Calibri, sans-serif;"><br></span></span></p>
                <p style="line-height: 1;"><span style="font-size: 15px;"><span
                            style="font-family: Calibri, sans-serif;"><strong><em>HABILIDADES /
                                    COMPETENCIAS:</em></strong></span></span></p>
                <ul>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Empat&iacute;a.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Escucha activa.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Actitud de Servicio.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Proactividad e Iniciativa.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Gusto por tecnolog&iacute;a y
                                tendencias.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Trabajo en equipo y Capacidad de
                                an&aacute;lisis.</span></span></li>
                </ul>
                <p style="line-height: 1;"><span style="font-size: 15px;"><span
                            style="font-family: Calibri, sans-serif;"><br></span></span></p>
                <p style="line-height: 1;"><span style="font-size: 15px;"><span
                            style="font-family: Calibri, sans-serif;"><strong><em>OFRECEMOS:</em></strong></span></span>
                </p>
                <ul>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Horario: lunes a viernes 09:00 am a 06:00 pm.
                                -s&aacute;bados HOME OFFICE de 09:00 am a 02:00 pm.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Sueldo Quincenal.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Bono de puntualidad.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Prestaciones De Ley.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Capacitaciones Constantes.</span></span></li>
                    <li style="line-height: 1;"><span style="font-size: 15px;"><span
                                style="font-family: Calibri, sans-serif;">Excelente ambiente Laboral.</span></span></li>
                    <li style="line-height: 1;"><span
                            style="font-family: Calibri, sans-serif; font-size: 15px;">Crecimiento Profesional.</span>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button class="btn btn-dark btn-rounded remove-margin" type="button"
                    data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Vacante 6 -->
<div class="modal fade" id="modalVacante6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descripcion de la vacante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button class="btn btn-dark btn-rounded remove-margin" type="button"
                    data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>