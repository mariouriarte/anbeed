<?php use_helper('Date') ?>

<div class="body-form">
<h3><b>DECISION 706</b></h3>
<h3><b>PRODUCTOS DE HIGIENE DOMESTICA (PHD) Y PRODUCTOS <br />ABSORBENTES DE HIGIENE PERSONAL (PAHP)</b></h3>
<p></p>
<?php $tipo_form = $form->getTipoTramiteFormularioId()?>
<table class="tbl-tipo-tramite" cellpadding="4">
    <tr>
        <td class="tramite-x">
            <?php if($tipo_form == 1): ?>
                <img src="images/forms/cuadrado-x.png" border="0">
            <?php else:?>
                <img src="images/forms/cuadrado.png" border="0">
            <?php endif;?>
        </td>
        <td class="tramite-desc">Notificación Sanitaria Obligatoria (NSO)</td>
    </tr>    
    <tr>
        <td class="tramite-x">
            <?php if($tipo_form == 2): ?>
                <img src="images/forms/cuadrado-x.png" border="0">
            <?php else:?>
                <img src="images/forms/cuadrado.png" border="0">
            <?php endif;?>
        </td>
        <td class="tramite-desc">Solicitud de Renovación del código de identificación de la NSO</td>
    </tr>    
    <tr>
        <td class="tramite-x">
            <?php if($tipo_form == 3): ?>
                <img src="images/forms/cuadrado-x.png" border="0">
            <?php else:?>
                <img src="images/forms/cuadrado.png" border="0">
            <?php endif;?>
        </td>
        <td class="tramite-desc">Solicitud de Reconocimiento del código de identificación de la NSO</td>
    </tr>    
    <tr>
        <td class="tramite-x">
            <?php if($tipo_form == 4): ?>
                <img src="images/forms/cuadrado-x.png" border="0">
            <?php else: ?>
                <img src="images/forms/cuadrado.png" border="0">
            <?php endif; ?>
        </td>
        <td class="tramite-desc">Información de Cambios</td>
    </tr>
</table>

<p></p>
<table class="tbl-generica" cellpadding="4">
    <tr>
        <td colspan="2">
            <?php if($form->getDatos() === 'IMPORTADOR'): ?>
                <b>I. DATOS DEL TITULAR <img src="images/forms/cuadrado.png" border="0"> IMPORTADOR <img src="images/forms/cuadrado-x.png" border="0">  </b><br />
            <?php else: ?>
                <b>I. DATOS DEL TITULAR <img src="images/forms/cuadrado-x.png" border="0"> IMPORTADOR <img src="images/forms/cuadrado.png" border="0">  </b><br />
            <?php endif; ?> 
            <span class="metadato">Artículo 7, numeral 1, literales a) y c); y Artículo 12 de la Decisión 706</span>
        </td>
    </tr>
    <tr>
        <td colspan="2"><b>Nombre o razón social:</b><br />
            <b><?php echo $form->Higiene->Empresa ?></b>
        </td>
    </tr>
    <tr>
        <td>Domicilio o dirección:<br />
            <?php echo $form->Higiene->Empresa->getDireccion() ?>
        </td>
        <td class="titulo-pequeno">Ciudad / Distrito / Provincia / Departamento:<br />
            <?php echo strtoupper($form->Higiene->Empresa->Ciudad->getNombre()) ?>
        </td>
    </tr>
    <tr>
        <td>País: <?php echo strtoupper($form->Higiene->Empresa->Ciudad->Pais->getNombre()) ?>
        </td>
        <td>Teléfono: <?php echo $form->Higiene->Empresa->getTelefono1() ?>
        </td>
    </tr>
    <tr>
        <td>Fax: <?php echo $form->Higiene->Empresa->getFax() ?>
        </td>
        <td>e-mail: <?php echo $form->Higiene->Empresa->getEmail() ?>
        </td>
    </tr>
    <tr>
        <td colspan="2">
        <?php if($form->getDatosTitular() === 'Apoderado'): ?>
            <b>Nombre del Representante Legal <img src="images/forms/cuadrado.png" border="0"> Apoderado <img src="images/forms/cuadrado-x.png" border="0"></b></td>
        <?php else: ?>
            <b>Nombre del Representante Legal <img src="images/forms/cuadrado-x.png" border="0"> Apoderado <img src="images/forms/cuadrado.png" border="0"></b></td>
        <?php endif; ?>
    </tr>
    <tr>
        <td colspan="2"><?php echo $form->Higiene->Empresa->RepresentanteLegal ?></td>
    </tr>
    <tr>
        <td>Teléfono: <?php echo $form->Higiene->Empresa->RepresentanteLegal->Persona->getTelefono() ?></td>
        <td>e-mail: <?php echo $form->Higiene->Empresa->RepresentanteLegal->Persona->getEmail() ?></td>
    </tr>
    <tr>
        <td colspan="2"><b>Responsable del:</b> Responsable Técnico (Químico Farmacéutico)</td>
    </tr>
    <tr>
        <td colspan="2">Nombre o razón social:<br />
            <b><?php echo $form->getRescomNombre() ?></b>
        </td>
    </tr>
    <tr>
        <td>Domicilio o dirección:<br />
            <?php echo $form->getRescomDireccion() ?>
        </td>
        <td class="titulo-pequeno">Ciudad / Distrito / Provincia / Departamento:<br />
            <?php echo strtoupper($form->Ciudad->getNombre()) ?>
        </td>
    </tr>
    <tr>
        <td>País: <?php echo strtoupper($form->Ciudad->Pais->getNombre()) ?></td>
        <td>Teléfono: <?php echo $form->getRescomTelefono() ?></td>
    </tr>
    <tr>
        <td>Fax: <?php echo $form->getRescomFax() ?></td>
        <td>e-mail: <?php echo $form->getRescomEmail() ?></td>
    </tr>
    <tr>
        <td colspan="2"><b>II. DATOS DEL FABRICANTE O FABRICANTES</b><br />
            <span class="metadato">Artículo 7, numeral 1, literal c), y Artículo 12, segundo párrafo de la Decisión 706<br />
            (Envasador/empacador/acondicionador)</span>
        </td>
    </tr>
    <tr>
        <td colspan="2" nobr="true">Nombre o razón social:<br />
            <?php echo $form->Higiene->LaboratorioFabricante ?>
        </td>
    </tr>
    <tr>
        <td>Domicilio o dirección:<br />
            <?php echo $form->Higiene->LaboratorioFabricante->getDireccion() ?>
        </td>
        <td class="titulo-pequeno">Ciudad / Distrito / Provincia / Departamento:<br />
            <?php echo strtoupper($form->Higiene->LaboratorioFabricante->Ciudad->getNombre()) ?>
        </td>
    </tr>
    <tr>
        <td>País: <?php echo $form->Higiene->LaboratorioFabricante->Pais->getNombre() ?></td>
        <td>Teléfono: <?php echo $form->Higiene->LaboratorioFabricante->getTelefono() ?></td>
    </tr>
    <tr>
        <td>Fax: <?php echo $form->Higiene->LaboratorioFabricante->getFax() ?></td>
        <td>e-mail: <?php echo $form->Higiene->LaboratorioFabricante->getEmail() ?></td>
    </tr>
    <tr>
        <td colspan="2"><b>Nombre del Responsable Técnico</b></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo $form->Higiene->Empresa->RegenteFarmaceutico->Persona ?></td>
    </tr>
    <tr>
        <td>Teléfono: <?php echo $form->Higiene->Empresa->RegenteFarmaceutico->Persona->getTelefono() ?></td>
        <td>E-mail: <?php echo $form->Higiene->Empresa->RegenteFarmaceutico->Persona->getEmail() ?></td>
    </tr>
    <tr>
        <td>Fax: <?php echo $form->Higiene->Empresa->RegenteFarmaceutico->Persona->getFax() ?></td>
        <td class="titulo-pequeno">Número de Registro o Colegiatura Profesional:<br />
            <?php echo $form->Higiene->Empresa->RegenteFarmaceutico->getMatriculaProfesional() ?>
        </td>
    </tr>
    <tr>
        <td colspan="2">En el caso de maquila:<br />
            Nombre del:<br />
            <?php if($form->getMaquilaTipo() === 'Envasador'): ?>
            <table class="maquila">
                <tr>
                    <td class="maquila-tipo">Envasador</td>
                    <td class="maquila-x">x</td>
                    <td class="maquila-nombre"><?php echo $form->getMaquila() ?></td>
                </tr>
                <tr>
                    <td class="maquila-tipo">Empacador</td>
                    <td class="maquila-x"></td>
                    <td class="maquila-nombre">__________________________________</td>
                </tr>
                <tr>
                    <td class="maquila-tipo">Acondicionador</td>
                    <td class="maquila-x"></td>
                    <td class="maquila-nombre">__________________________________</td>
                </tr>
            </table>
            <?php elseif($form->getMaquilaTipo() === 'Empacador'): ?>
            <table class="maquila">
                <tr>
                    <td class="maquila-tipo">Envasador</td>
                    <td class="maquila-x"></td>
                    <td class="maquila-nombre">__________________________________</td>
                </tr>
                <tr>
                    <td class="maquila-tipo">Empacador</td>
                    <td class="maquila-x">x</td>
                    <td class="maquila-nombre"><?php echo $form->getMaquila() ?></td>
                </tr>
                <tr>
                    <td class="maquila-tipo">Acondicionador</td>
                    <td class="maquila-x"></td>
                    <td class="maquila-nombre">__________________________________</td>
                </tr>
            </table>
            <?php elseif($form->getMaquilaTipo() === 'Acondicionador'): ?>
            <table class="maquila">
                <tr>
                    <td class="maquila-tipo">Envasador</td>
                    <td class="maquila-x"></td>
                    <td class="maquila-nombre">__________________________________</td>
                </tr>
                <tr>
                    <td class="maquila-tipo">Empacador</td>
                    <td class="maquila-x"></td>
                    <td class="maquila-nombre">__________________________________</td>
                </tr>
                <tr>
                    <td class="maquila-tipo">Acondicionador</td>
                    <td class="maquila-x">x</td>
                    <td class="maquila-nombre"><?php echo $form->getMaquila() ?></td>
                </tr>
            </table>
            <?php endif; ?>
            Fabricado para: <?php echo $form->getMaquilaFabricado() ?>
        </td>
    </tr>
</table>

<p></p>
<table class="tbl-generica" cellpadding="4">
    <tr>
        <td colspan="2"><b>III. DATOS GENERALES DEL PRODUCTO</b><br />
            <span class="metadato">Artículo 7, numeral 1, literal b), y Artículo 12 de la Decisión 706</span>
        </td>
    </tr>
    <tr>
        <td colspan="2">Nombre del producto:<br />
            <?php if($form->Higiene->getNombreDetalle() === 'PHD'): ?>
                <table class="maquila">
                    <tr>
                        <td class="maquila-tipo">PHD</td>
                        <td class="maquila-x">x</td>
                        <td class="maquila-nombre"><?php echo $form->Higiene->getNombre() ?></td>
                    </tr>
                    <tr>
                        <td>PAHP</td>
                        <td class="maquila-x"></td>
                        <td>_______________________________________________________</td>
                    </tr>
                </table>
            <?php else: ?>
                <table class="maquila">
                    <tr>
                        <td class="maquila-tipo">PHD</td>
                        <td class="maquila-x"></td>
                        <td class="maquila-nombre">_______________________________________________________</td>
                    </tr>
                    <tr>
                        <td>PAHP</td>
                        <td class="maquila-x">x</td>
                        <td><?php echo $form->Higiene->getNombre() ?></td>
                    </tr>
                </table>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td colspan="2">Grupo <span class="metadato">(especificar según el Anexo 1 Decisión 706):</span><br />
            <?php echo $form->Higiene->getGrupoHigiene() ?>
        </td>
    </tr>
    <tr>
        <td colspan="2">Variedades:<br />
            <?php echo $form->Higiene->getVariedades().' - '.$form->Higiene->getPresentacion() ?>
        </td>
    </tr>
    <tr>
        <td colspan="2">Marca(s):<br />
            <?php echo $form->Higiene->getMarca() ?>
        </td>
    </tr>
    <!--<>-->
    <tr>
        <td rowspan="2"><span class="metadato">(Incluir en el caso de solicitud de renovación, 
            reconocimiento e información de cambios, y notificación de un nuevo importador)</span>
        </td>
        <td>Código de identificación de la NSO<br />
            <?php echo $form->Higiene->getCodigoNso() ?>
        </td>
    </tr>
    <tr>
        <td>Número de Expediente<br />
            <?php echo $form->Higiene->getExpediente() ?>
        </td>
    </tr>
    <!--<>-->
    <tr>
        <td rowspan="2"><span class="metadato">(Incluir en el caso de solicitud de reconocimiento)</span></td>
        <td>Vigencia del Código de identificación de la NSO<br />
            <?php echo format_date($form->Higiene->getVigenciaNso(), "dd/MM/yyyy") ?>
        </td>
    </tr>
    <tr>
        <td>País que emitió el Código de identificación de la NSO 
            <?php echo $form->Higiene->Pais->getNombre() ?>
        </td>
    </tr>
    <!--<>-->
    <tr>
        <td colspan="2"><b>IV. INFORMACIÓN TÉCNICA DEL PRODUCTO</b><br />
            <span class="metadato">Artículo 7, numeral 2, literales a), b), c), d), e), f), g), h), i) y  j) de la Decisión 706</span>
        </td>
    </tr>
    <tr>
        <td colspan="2"><span class="metadato">Adjuntar para NSO, renovación y reconocimiento</span></td>
    </tr>
    <tr>
        <td colspan="2">1. La descripción y la composición del producto con indicación de su 
            fórmula cuali-cuantitativa básica y secundaria con nombre genérico y 
            nomenclatura IUPAC, cuando corresponda
        </td>
    </tr>
    <tr>
        <td colspan="2">2. Especificaciones organolépticas y fisicoquímicas del producto terminado.
        </td>
    </tr>
    <tr>
        <td colspan="2">3. Justificación de las bondades y proclamas cuando represente un 
            problema para la salud
        </td>
    </tr>
    <tr>
        <td colspan="2">4. Proyecto de arte de la etiqueta o rotulado
        </td>
    </tr>
    <tr>
        <td colspan="2">5. Instrucciones de uso del producto, cuando corresponda
        </td>
    </tr>
    <tr>
        <td colspan="2">6. Material del envase primario y secundario, cuando corresponda
        </td>
    </tr>
    <tr>
        <td colspan="2">7. Advertencias, precauciones y restricciones, cuando corresponda
        </td>
    </tr>
    <tr>
        <td colspan="2">8. Forma de presentación
        </td>
    </tr>
    <tr>
        <td colspan="2">9. Número de lote o sistema de codificación de producción
        </td>
    </tr>
    <tr>
        <td colspan="2">10. Información de las propiedades desinfectantes y/o bactericida 
            del producto, de acuerdo con las propiedades especiales conferidas al mismo
        </td>
    </tr>
</table>

<p></p>
<table class="tbl-title-noborder" cellpadding="4">
    <tr>
        <td><b>V. INFORMACIÓN DE CAMBIOS</b><br />
            <span class="metadato">Artículos 13, 14, 15 y 16 de la Decisión 706</span>
        </td>
    </tr>
</table>
<table class="tbl-generica" cellpadding="4">
    <tr>
        <td id="textarea"><?php echo $form->getInformacionCambios() ?></td>
    </tr>
</table>

<p></p>
<table class="tbl-title-noborder" cellpadding="4">
    <tr>
        <td><b>VI. DOCUMENTACIÓN QUE SE ANEXA</b><br />
        </td>
    </tr>
</table>
<table class="tbl-anexos" cellpadding="4">
    <tr>
        <td class="interesado" colspan="3">A ser presentada por el interesado</td>
        <td class="sanitaria" colspan="2">A ser llenado por la Autoridad Sanitaria</td>
    </tr>
    <tr>
        <td class="anexo-doc" colspan="2"><b>Documentación</b></td>
        <td class="folios"><b>Folios</b></td>
        <td class="cumple"><b>Cumple</b></td>
        <td class="no-cumple"><b>No cumple</b></td>
    </tr>
    <tr>
        <td colspan="5"><span class="metadato">Anexar para la NSO, solicitud de renovación y reconocimiento e 
            información de cambios</span>
        </td>
    </tr>
    <tr>
        <td class="num">1.</td>
        <td class="anexo-detalle">Documento que respalde la Representación Legal o la condición de
            apoderado del responsable de la comercialización y/o importador,
            cuando corresponda de acuerdo a la legislación interna de cada
            País Miembro.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5"><span class="metadato">Anexar para NSO, solicitud de renovación y reconocimiento</span>
        </td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Solicitud totalmente diligenciada y firmada por los responsables.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3.</td>
        <td>En caso de maquila, documento emitido por la Autoridad Competente
            de cada uno de los países que participe en la fabricación, que
            avale dichas actividades. En caso de no existir Autoridad Competente 
            se aceptará la declaración consularizada o apostille del fabricante 
            que avale dichas actividades.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Fórmula cuali-cuantitativa con nombre genérico y nomenclatura IUPAC, 
            cuando corresponda.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>5.</td>
        <td>Especificaciones organolépticas y fisicoquímicas de producto terminado.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>6.</td>
        <td>Material del envase primario y secundario, cuando corresponda.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>7.</td>
        <td>Comprobante de Pago.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5"><span class="metadato">Anexar para NSO y solicitud de renovación</span></td>
    </tr>
    <tr>
        <td>8.</td>
        <td>Certificado de libre venta (Cuando corresponda).
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>9.</td>
        <td>Especificaciones microbiológicas (Cuando corresponda). 
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>10.</td>
        <td>Proyecto de etiqueta o rotulado con instrucciones de uso del 
            producto,  advertencias, precauciones y restricciones, cuando 
            corresponda. Así como sus formas de presentación.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>11.</td>
        <td>Fotocopia de NSO anterior
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5"><span class="metadato">Anexar para NSO y Reconocimiento</span></td>
    </tr>
    <tr>
        <td>12.</td>
        <td>Autorización del fabricante al nuevo importador, cuando corresponda, 
            de acuerdo a la legislación interna de cada País Miembro. 
            (Artículo 12 de la Decisión 706)
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>13.</td>
        <td>Copia de la NSO (certificada por la Autoridad Sanitaria que la emite).
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>14.</td>
        <td>Proyecto de etiqueta o rotulado.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>15.</td>
        <td>Justificación de las bondades y proclamas atribuible al producto, 
            cuya no veracidad pueda representar un problema para la salud.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5"><span class="metadato">Anexar sólo para información de cambios, según corresponda</span></td>
    </tr>
    <!--<>-->
    <tr>
        <td>16.</td>
        <td colspan="4">Modificación / cambio / incorporación de fabricante<br />
        <span class="metadato">Artículos 7 y 13 de la Decisión 706</span>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>a. Certificado de libre venta o una autorización similar expedida 
            por la Autoridad Competente del país de origen o declaración 
            consularizada o apostille del responsable del producto en el país 
            de origen. Estos documentos no deben tener una fecha de expedición 
            con una antigüedad mayor a 2 años.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>b. Proyecto de arte de la etiqueta o rotulado con el nombre o la 
            razón social modificada.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>c. Comprobante de pago por derecho de trámite.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
</table>

<p></p>
<table class="tbl-title-noborder" cellpadding="4">
    <tr>
        <td><b>VII. CERTIFICACION DE LA INFORMACION TECNICA DEL PRODUCTO</b><br />
        </td>
    </tr>
</table>
    
<p>Yo, <b><?php echo $form->Higiene->Empresa->RegenteFarmaceutico->Persona ?></b>, 
    identificado con (DNI) <b><?php echo $form->Higiene->Empresa->RegenteFarmaceutico->Persona->getCi().' '.$form->Higiene->Empresa->RegenteFarmaceutico->Persona->getExpedido() ?></b>,
    actuando en mi condición de químico farmacéutico 
    titulado y con registro profesional No. 
    <b><?php echo $form->Higiene->Empresa->RegenteFarmaceutico->getMatriculaProfesional() ?></b>
    de (País Miembro correspondiente) certifico técnicamente que el (PHD / PAHP) descrito no 
    perjudica la salud humana, siempre que se apliquen las condiciones normales 
    o razonablemente previsibles de uso.
</p>

<table class="tbl-firma" cellpadding="4">
    <tr>
        <td class="firma-persona"></td><td></td>
    </tr>
    <tr>
        <td colspan="2"><b>FIRMA DEL RESPONSABLE TÉCNICO</b></td>
    </tr>
    <tr>
        <td colspan="2">Nombre completo: <b><?php echo $form->Higiene->Empresa->RegenteFarmaceutico->Persona ?></b></td>
    </tr>
    <tr>
        <td colspan="2">Número de Registro o Colegiatura Profesional: <b><?php echo $form->Higiene->Empresa->RegenteFarmaceutico->getMatriculaProfesional() ?></b></td>
    </tr>
</table>

<table class="tbl-title-noborder" cellpadding="4">
    <tr>
        <td><b>VIII. DECLARACION JURADA.</b><br />
        </td>
    </tr>
</table>

<p>Yo, <b><?php echo $form->Higiene->Empresa->RepresentanteLegal->Persona ?></b>, 
    identificado con 
    (DNI) <b><?php echo $form->Higiene->Empresa->RepresentanteLegal->Persona->getCi() .' '. $form->Higiene->Empresa->RepresentanteLegal->Persona->getExpedido() ?></b>,
    actuando en condición de Representante legal o 
    Apoderado, declaro bajo la gravedad de juramento, que el presente 
    documento y la información suministrada adjunta son auténticos y 
    veraces, y cumplen con todos los requisitos establecidos por la 
    Decisión 706 de la Comisión de la Comunidad Andina. Asimismo, declaro 
    que la comercialización será posterior a la presentación del presente 
    documento cumpliendo estrictamente con las especificaciones de calidad 
    definidas para el producto.</p>

<table class="tbl-firma" cellpadding="4">
    <tr>
        <td class="firma-persona"></td><td></td>
    </tr>
    <tr>
        <td colspan="2"><b>FIRMA DEL REPRESENTANTE LEGAL O APODERADO</b></td>
    </tr>
    <tr>
        <td colspan="2">Nombre completo: <b><?php echo $form->Higiene->Empresa->RepresentanteLegal->Persona ?></b></td>
    </tr>
    <tr>
        <td colspan="2">Número de identificación: <b><?php echo $form->Higiene->Empresa->RepresentanteLegal->Persona->getCi() .' '. $form->Higiene->Empresa->RepresentanteLegal->Persona->getExpedido() ?></b></td>
    </tr>
    <tr>
        <td><b>La Paz - Bolivia, <?php echo format_date($form->getCreatedAt(), "dd MMMM yyyy") ?></b></td>
    </tr>
</table>
</div>