<?php use_helper('Date') ?>

<div class="head-formulario">
<img src="images/forms/comunidad.jpg" border="0" height="90" width="120">
<span class="titulo-form"><b>FORMATO ÚNICO (FNSOC-001)</b></span>
<img src="images/forms/unimed.png" border="0" height="70" width="120">
</div>

<h3><b>DECISIÓN 516</b></h3>
<h3><b>COMERCIALIZACIÓN DE LOS PRODUCTOS COSMÉTICOS</b></h3>

<?php $tipo_form = $form->getTipoTramiteFormularioId()?>
<table class="tbl-tipo-form" cellpadding="4">
    <tr>
        <td><?php echo $tipo_form == 1 ? ' x ' : ' '?><span>Notificación Sanitaria Obligatoria (NSO)</span></td>
    </tr>    
    <tr>
        <td><?php echo $tipo_form == 2 ? ' x ' : ' '?><span>Solicitud de Renovación del código de identificación de la NSO</span></td>
    </tr>    
    <tr>
        <td><?php echo $tipo_form == 3 ? ' x ' : ' '?><span>Solicitud de Reconocimiento del código de identificación de la NSO</span></td>
    </tr>    
    <tr>
        <td><?php echo $tipo_form == 4 ? ' x ' : ' '?><span>Información de Cambios</span></td>
    </tr>
</table>

<p></p>
<table class="tbl-generica" cellpadding="4">
    <tr>
        <td colspan="2">
            <?php if($form->getDatos() === 'TITULAR'): ?>
                <b>I. DATOS DEL x TITULAR _ RESPONSABLE DE LA COMERCIALIZACIÓN</b><br />
            <?php else: ?>
                <b>I. DATOS DEL _ TITULAR x RESPONSABLE DE LA COMERCIALIZACIÓN</b><br />
            <?php endif; ?> 
            <span class="metadato">Artículo 7, numeral 1, literales a) y c); y Artículo 12 de la Decisión 706</span>
        </td>
    </tr>
    <tr>
        <td colspan="2">Nombre o razón social:<br />
            <?php echo $form->Cosmetico->Empresa ?>
        </td>
    </tr>
    <tr>
        <td>Domicilio o dirección:<br />
            <?php echo $form->Cosmetico->Empresa->getDireccion() ?>
        </td>
        <td>Ciudad / Distrito / Provincia / Departamento:<br />
            <?php echo $form->Cosmetico->Empresa->Ciudad->getNombre() ?>
        </td>
    </tr>
    <tr>
        <td>País: <?php echo $form->Cosmetico->Empresa->Ciudad->Pais->getNombre() ?></td>
        <td>Teléfono: <?php echo $form->Cosmetico->Empresa->getTelefono1() ?></td>
    </tr>
    <tr>
        <td>Fax: <?php echo $form->Cosmetico->Empresa->getFax() ?></td>
        <td>e-mail: <?php echo $form->Cosmetico->Empresa->getFax() ?></td>
    </tr>
    <!--<>-->
    <tr>
        <td colspan="2">
            <?php if($form->getDatosTitular() === 'Representante Legal'): ?>
                <b>Nombre del:</b> Representante Legal x Apoderado _
            <?php else: ?>
                <b>Nombre del:</b> Representante Legal _ Apoderado x
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <?php echo $form->Cosmetico->Empresa->RepresentanteLegal ?>
        </td>
    </tr>
    <tr>
        <td>Teléfono: <?php echo $form->Cosmetico->Empresa->RepresentanteLegal->Persona->getTelefono() ?></td>
        <td>e-mail: <?php echo $form->Cosmetico->Empresa->RepresentanteLegal->Persona->getEmail() ?></td>
    </tr>
    <!--<>-->
    <tr>
        <td colspan="2"><b>Nombre del:</b> Responsable Técnico (Químico Farmacéutico)
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <?php echo $form->Cosmetico->Empresa->RegenteFarmaceutico ?>
        </td>
    </tr>
    <tr>
        <td>Teléfono: <?php echo $form->Cosmetico->Empresa->RegenteFarmaceutico->Persona->getTelefono() ?>
        </td>
        <td>Fax: <?php echo $form->Cosmetico->Empresa->RegenteFarmaceutico->Persona->getFax() ?>
        </td>
    </tr>
    <tr>
        <td colspan="2">e-mail: <?php echo $form->Cosmetico->Empresa->RegenteFarmaceutico->Persona->getEmail() ?>
        </td>
    </tr>
    <!--<>-->
    <tr>
        <td colspan="2"><b>II. DATOS DEL FABRICANTE O FABRICANTES</b><br />
            <span class="metadato">Artículo 7, numeral 1, literal d) de la Decisión 516 y Artículo 21 
            de la Resolución 797<br />
            (Para notificación, solicitud de renovación y reconocimiento)</span>
        </td>
    </tr>
    <tr>
        <td colspan="2">Nombre o razón social: <br />
            <?php echo $form->Cosmetico->LaboratorioFabricante ?>
        </td>
    </tr>
    <tr>
        <td>Domicilio o dirección: <br />
            <?php echo $form->Cosmetico->LaboratorioFabricante->getDireccion() ?>
        </td>
        <td>Ciudad / Distrito / Provincia / Departamento: <br />
            <?php echo $form->Cosmetico->LaboratorioFabricante->Ciudad->getNombre() ?>
        </td>
    </tr>
    <tr>
        <td>País: <?php echo $form->Cosmetico->LaboratorioFabricante->Ciudad->Pais->getNombre() ?></td>
        <td>Teléfono: <?php echo $form->Cosmetico->LaboratorioFabricante->getTelefono() ?></td>
    </tr>
    <tr>
        <td>Fax: <?php echo $form->Cosmetico->LaboratorioFabricante->getFax() ?></td>
        <td>e-mail: <?php echo $form->Cosmetico->LaboratorioFabricante->getEmail() ?></td>
    </tr>
    <!--<>-->
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

<!--<>-->
<table class="tbl-generica" cellpadding="4">
    <tr>
        <td colspan="2"><b>III. DATOS GENERALES DEL PRODUCTO</b><br />
            <span class="metadato">Artículo 7, numeral 1, literales b) y c), 
                Artículos 10, 11 y 23 de la Decisión 516
            </span>
        </td>
    </tr>
    <tr>
        <td colspan="2">Nombre del producto: <?php echo $form->Cosmetico ?></td>
    </tr>
    <tr>
        <td>Forma Cosmética:<br />
            <?php echo $form->Cosmetico->FormaCosmetica->getNombre() ?>
        </td>
        <td rowspan="2">Grupo cosmético: (Tonos o variedades)<br />
            <?php echo $form->Cosmetico->GrupoCosmetico->getNombre() ?>
            Variedades:<br />
            <?php echo $form->Cosmetico->getVariedades().' - '.$form->Cosmetico->getPresentacion() ?>
        </td>
    </tr>
    <tr>
        <td>Marca(s):<br />
            <?php echo $form->Cosmetico->getMarca() ?>
        </td>
    </tr>
    <tr>
        <td rowspan="2"><span class="metadato">(Incluir en caso de solicitud de 
            renovación, reconocimiento e información de cambios)</span>
        </td>
        <td>Código de identificación de la NSO<br />
            <?php echo $form->Cosmetico->getCodigoNso() ?>
        </td>
    </tr>
    <tr>
        <td>Número de Expediente<br />
            <?php echo $form->Cosmetico->getExpediente() ?>
        </td>
    </tr>
    <!--<>-->
    <tr>
        <td rowspan="2"><span class="metadato">(Incluir en el caso de solicitud 
            de reconocimiento)</span>
        </td>
        <td>Vigencia del Código de identificación de la NSO<br />
            <?php echo format_date($form->Cosmetico->getVigenciaNso(), "dd/MM/yyyy") ?>
        </td>
    </tr>
    <tr>
        <td>País que emitió el Código de identificación de la NSO<br />
            <?php echo $form->Cosmetico->Pais->getNombre() ?>
        </td>
    </tr>
    <!--<>-->
    <tr>
        <td colspan="2"><b>IV. INFORMACIÓN TÉCNICA DEL PRODUCTO</b><br />
            <span class="metadato">Artículo 7, numeral 2, literales f), g), h), i), j), k), l), m) y 
            Artículo 23 de la Decisión 516</span>
        </td>
    </tr>
    <tr>
        <td colspan="2">Adjuntar para notificación, solicitud de renovación y de reconocimiento
        </td>
    </tr>
    <tr>
        <td colspan="2">1. Fórmula cualitativa básica y secundaria en nomenclatura INCI.
        </td>
    </tr>
    <tr>
        <td colspan="2">2. Fórmula cuantitativa para sustancias de uso restringido y 
            activos con parámetros establecidos en nomenclatura INCI.
        </td>
    </tr>
    <tr>
        <td colspan="2">3. Especificaciones organolépticas y fisicoquímicas del producto 
            terminado.
        </td>
    </tr>
    <tr>
        <td colspan="2">4. Especificaciones microbiológicas, cuando corresponda.
        </td>
    </tr>
    <tr>
        <td colspan="2">5. Instrucciones de uso del producto, cuando corresponda.
        </td>
    </tr>
    <tr>
        <td colspan="2"><span class="metadato">Adjuntar para notificación y solicitud de renovación</span>
        </td>
    </tr>
    <tr>
        <td colspan="2">6. Justificación de las bondades y proclamas cuando represente 
            problemas para la salud.
        </td>
    </tr>
    <tr>
        <td colspan="2">7. Proyecto de arte de etiqueta o rotulado (especificar los 
            contenidos netos a comercializar).
        </td>
    </tr>
    <tr>
        <td colspan="2">
            8. Material del envase primario.
        </td>
    </tr>
</table>

<p></p>
<table class="tbl-title-noborder" cellpadding="4">
    <tr>
        <td><b>V. INFORMACIÓN DE CAMBIOS</b><br />
            <span class="metadato">Artículos 11, 12 y 14 de la Decisión 516</span>
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
        <td class="interesado-516" colspan="2"><span class="metadato">A ser presentada por el interesado</span></td>
        <td class="sanitaria-516" colspan="3"><span class="metadato">A ser llenado por la Autoridad Sanitaria</span></td>
    </tr>
    <tr>
        <td class="anexo-doc" colspan="2">Documentación</td>
        <td class="folios">Folios</td>
        <td class="cumple">Cumple</td>
        <td class="no-cumple">No cumple</td>
    </tr>
    <tr>
        <td colspan="5"><span class="metadato">Anexar para notificación, 
            solicitud de renovación y de reconocimiento e información de cambios</span>
        </td>
    </tr>
    <tr>
        <td class="num">1.</td>
        <td class="anexo-detalle">Documento que respalde la representación legal 
            o la condición de apoderado según la normativa nacional vigente.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5"><span class="metadato">Anexar para notificación, 
            solicitud de renovación y de reconocimiento</span>
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
        <td>Declaración del fabricante en caso de maquila.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Fórmula cualitativa, en nomenclatura INCI.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>5.</td>
        <td>Fórmula cuantitativa, en nomenclatura INCI, (cuando corresponda).
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>6.</td>
        <td>Especificaciones organolépticas y fisicoquímicas del producto 
            terminado.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>7.</td>
        <td>Especificaciones microbiológicas (cuando corresponda).
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5"><span class="metadato">Anexar para NSO y solicitud 
            de renovación</span></td>
    </tr>
    <tr>
        <td>8.</td>
        <td>
            Comprobante de pago por derecho de trámite.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5"><span class="metadato">Anexar para notificación y 
            solicitud de renovación</span>
        </td>
    </tr>
    <tr>
        <td>9.</td>
        <td><span class="metadato">Autorización del fabricante al responsable de la comercialización, 
            en la que deberá indi-carse nombre, dirección, teléfono, fax, país, 
            e-mail del responsable o de los responsables de la comercialización, 
            si fuera el caso.</span>
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>10.</td>
        <td>Certificado de Libre Venta - CLV (cuando corresponda).
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>11.</td>
        <td>Proyecto de arte de la etiqueta o rotulado (especificar los 
            contenidos netos a comercializar).
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5">Anexar para NSO y Reconocimiento</td>
    </tr>
    <tr>
        <td>12.</td>
        <td>Justificación de las bondades y proclamas de carácter cosmético, 
            cuya no veracidad pueda representar un problema para la salud.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5"><span class="metadato">Anexar para solicitud de 
            reconocimiento</span></td>
    </tr>
    <tr>
        <td>13.</td>
        <td>Instrucciones de uso del producto (cuando corresponda).
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>14.</td>
        <td>Copia de la Notificación Sanitaria Obligatoria, certificada por la 
            Autoridad Nacional Competente del primer País Miembro de 
            comercialización.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5"><span class="metadato">Anexar sólo para información de
            cambios, según corresponda</span>
        </td>
    </tr>
    <tr>
        <td>15.</td>
        <td colspan="4">Modificación / cambio / incorporación de fabricante 
            (Dentro o fuera de los Países Miembros de la CAN)<br />
            Artículo 11 de la Decisión 516
        </td>
    </tr>
    <tr>
        <td></td>
        <td>a. Copia de nuevo contrato de fabricación u otro documento que 
            acredite el cambio; y/o<br />
            En caso de terceros países adicionalmente el CLV o una autorización 
            similar emitida por la Autoridad Competente del país de origen; y/o<br />
            En caso de maquila, la declaración del fabricante.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>b. Proyecto de arte de la etiqueta o rotulado con la incorporación 
            del nuevo fabricante.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>c. Documento que respalde la existencia y representación legal del 
            nuevo fabricante, (cuando corresponda).
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>d. Comprobante de pago por derecho de trámite.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>16.</td>
        <td colspan="4">Modificación / cambio de razón social del titular de la NSO o del 
            fabricante<br />
            Artículo 11 de la Decisión 516 
        </td>
    </tr>
    <tr>
        <td></td>
        <td>a. Documento que acredite el cambio. 
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>b. Proyecto de arte de la etiqueta o rotulado con la razón social modificada.
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
    <tr>
        <td>17.</td>
        <td colspan="4">Modificación / cambio de información contenida en el rotulado<br />
            Artículo 11 de la Decisión 516
        </td>
    </tr>
    <tr>
        <td></td>
        <td>a. Justificación en caso de cambio de bondades y proclamas.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>b. Proyecto de etiqueta en la que conste el cambio solicitado.
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
    <tr>
        <td>18.</td>
        <td colspan="4">Modificación / cambio de material de envase<br />
            Artículo 11 de la Decisión 516
        </td>
    </tr>
    <tr>
        <td></td>
        <td>a. Declarar el material del envase.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>b. Comprobante de pago por derecho de trámite.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>19.</td>
        <td colspan="4">Modificación / cambio de nombre de un producto cosmético 
            (Dentro o fuera de los Países Miembros de la CAN)<br />
            Artículo 11 de la Decisión 516
        </td>
    </tr>
    <tr>
        <td></td>
        <td>a. Proyecto de arte de la etiqueta en la que conste el cambio 
            solicitado.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>b. Declaración del fabricante o titular del nuevo nombre.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>c. En caso de terceros países: cuando se produce el cambio del 
            nombre se deberá presentar el CLV en el que conste el cambio 
            efectuado o autorización similar emitida por la Autoridad 
            Competente; en caso que el cambio ocurra en un País Miembro, 
            deberá presentar la autorización del fabricante; en caso de 
            maquila sólo se requiere la declaración del titular.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>d. Comprobante de pago por derecho de trámite.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>20.</td>
        <td colspan="4">Modificación / cambio de marca<br />
            Artículo 11 de la Decisión 516
        </td>
    </tr>
    <tr>
        <td></td>
        <td>a. Proyecto de arte de la etiqueta en la que conste el 
            cambio solicitado.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>b. En caso de terceros países: cuando se produce el cambio de la 
            marca se deberá presentar el CLV en el que conste el cambio 
            efectuado o autorización similar emitida por la Autoridad Competente.
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
    <tr>
        <td>21.</td>
        <td colspan="4">Modificación / cambio de titular<br />
            Artículo 11 de la Decisión 516
        </td>
    </tr>
    <tr>
        <td></td>
        <td>a. Documento que respalde la existencia y representación legal 
            del nuevo titular.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>b. Declaración del fabricante para el nuevo titular en el caso de 
            subcontratación o maquila.
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
    <tr>
        <td>22.</td>
        <td colspan="4">Modificación / cambio de componentes secundarios en la 
            fórmula de productos cosméticos<br />
            Artículo 12 de la Decisión 516
        </td>
    </tr>
    <tr>
        <td></td>
        <td>a. Justificación del cambio.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>b. Fórmula señalando el cambio, con la concentración de uso 
            (cuando corresponda).
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>c. Declaración del fabricante o del titular, cuando se trate de 
            maquila, señalando dicho cambio.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>d. Nuevas especificaciones técnicas del producto terminado.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>e. Proyecto de arte de la etiqueta o rotulado.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>f. Comprobante de pago por derecho de trámite.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>23.</td>
        <td colspan="4">
            Ampliación de la NSO (inclusión / cambios de nuevos tonos y 
            variedades en fragancias y sabores)<br />
            <span class="metadato">Artículos 7 y 14 de la Decisión 516 
                (El interesado deberá presentar la información del artículo 7, 
                excepto los literales j, l y m)
            </span>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>a. Fórmulas señalando el cambio.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>b. Proyecto de etiqueta en la que conste el cambio solicitado.
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
<?php $regente =  $form->Cosmetico->Empresa->RegenteFarmaceutico ?>
<p>Yo, <b><?php echo $regente ?></b>, 
    identificado con <b><?php echo $regente->Persona->getCi().' '. $regente->Persona->getExpedido() ?></b>,
    actuando en mi condición de químico farmacéutico 
    titulado y con registro profesional No. <b><?php echo $regente->getMatriculaProfesional() ?></b>
    de (País Miembro correspondiente) certifico técnicamente que el producto cosmético 
    descrito no perjudica la salud humana, siempre que se apliquen las 
    condiciones normales o razonablemente previsibles de uso.
</p>
<table class="tbl-firma" cellpadding="4">
    <tr>
        <td class="firma-persona"></td><td></td>
    </tr>
    <tr>
        <td colspan="2"><b>FIRMA DEL RESPONSABLE TÉCNICO</b></td>
    </tr>
    <tr>
        <td colspan="2">Nombre completo: <b><?php echo $regente ?></b></td>
    </tr>
    <tr>
        <td colspan="2">Número de Registro o Colegiatura Profesional: <b><?php echo $regente->getMatriculaProfesional() ?></b></td>
    </tr>
</table>

<table class="tbl-title-noborder" cellpadding="4">
    <tr>
        <td><b>VIII. DECLARACION JURADA.</b><br />
        </td>
    </tr>
</table>

<?php $representante =  $form->Cosmetico->Empresa->RepresentanteLegal ?>
<p>
    Yo, <b><?php echo $representante ?></b>, identificado con 
    <b><?php echo $representante->Persona->getCi().' '.$representante->Persona->getExpedido() ?></b>, 
    actuando en condición de Representante legal o Apoderado, 
    declaro bajo la gravedad de juramento, que el presente documento y la 
    información suministrada adjunta son auténticos y veraces, y cumplen con 
    todos los requisitos establecidos por la Decisión 516 de Comisión de la 
    Comunidad Andina y la Resolución 797 de la Secretaría General de la 
    Comunidad Andina. Asimismo, declaro que la comercialización será posterior 
    a la presentación del presente documento cumpliendo estrictamente con las 
    especificaciones de calidad definidas para el producto.
</p>

<table class="tbl-firma" cellpadding="4">
    <tr>
        <td class="firma-persona"></td><td></td>
    </tr>
    <tr>
        <td colspan="2"><b>FIRMA DEL REPRESENTANTE LEGAL O APODERADO</b></td>
    </tr>
    <tr>
        <td colspan="2">Nombre completo: <b><?php echo $representante ?></b></td>
    </tr>
    <tr>
        <td colspan="2">Número de identificación: <b><?php echo $representante->Persona->getCi().' '.$representante->Persona->getExpedido() ?></b></td>
    </tr>
    <tr>
        <td><b>La Paz - Bolivia, <?php echo format_date($form->getCreatedAt(), "dd MMMM yyyy") ?></b></td>
    </tr>
</table>