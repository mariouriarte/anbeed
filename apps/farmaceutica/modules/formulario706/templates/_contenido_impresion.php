<h3>Anexo I</h3>

<h3>INSTRUCTIVO PARA EL LLENADO DEL FORMATO FNSOHA-001</h3>

<p>El objeto del formato FNSOHA-001 será definido por el interesado en calidad 
de Declaración Jurada y lo hará de conocimiento de la Autoridad Nacional 
Competente (ANC) colocando una “X”, según sea el caso.</p>

<p>Los demás campos del Formato FNSOHA-001 serán llenados obligatoriamente, 
independientemente del objeto del formato, salvo indicación en contrario 
registrada en el propio campo.</p>

<p>En todo momento, el interesado deberá regirse por lo establecido en la 
Decisión 706 señalado en los campos del Formato FNSOAH-001.</p>

<table border="1">
    <tr>
        <th>OBJETO</th>
        <th>DESCRIPCIÓN</th>
    </tr>
    <tr>
        <td>Notificación Sanitaria Obligatoria (NSO)</td>
        <td>Esta notificación será presentada por el interesado en comercializar 
            y/o importar productos de higiene doméstica o absorbentes de higiene 
            personal,  por primera vez en la Subregión (Artículo 5 de la Decisión
            706) o cuando éste declara su intención de ser un nuevo importador 
            de un producto con código de identificación de la NSO vigente (tercer
            párrafo del Artículo 12 de la Decisión 706). En este último caso,
            deberá colocar adicionalmente una "X" en la Parte I del formato
            FNSOHA-001, como sigue:
            
            <?php 
            if($form_706->getDatos() == 'TITULAR'):
            ?>
                I. DATOS DEL  TITULAR X IMPORTADOR<br />
            <?php else: ?>
                I. DATOS DEL  TITULAR IMPORTADOR X<br />
            <?php endif ?>
            La ANC en respuesta a esta notificación, emitirá el Formato FNSOHA-002.
        </td>
    </tr>
    <tr>
        <td>Solicitud de Renovación del código de identificación de la NSO</td>
        <td>Esta solicitud deberá ser presentada por el titular de un código de 
            identificación de la NSO vigente, antes de la expiración del período 
            de vigencia correspondiente (Artículo 18 de la Decisión 706)<br />
            La ANC en respuesta a esta solicitud, emitirá el Formato FNSOHA-002.</td>
    </tr>
    <tr>
        <td>Solicitud de Reconocimiento del código de identificación de la NSO </td>
        <td>Esta solicitud deberá ser presentada por el titular,  importador de
            un producto PHD y PAHP con código de identificación de la NSO vigente,
            que esté interesado en comercializar dicho producto en otro País
            Miembro (Artículos 9 y 11 de la Decisión 706)<br />
            La ANC en respuesta a esta solicitud, emitirá el Formato FNSOHA-003.</td>
    </tr>
    <tr>
        <td>Información de Cambios</td>
        <td>El interesado comunicará el (los) cambio(s) a la ANC del País Miembro
            que otorgó el código de identificación de la NSO, en forma resumida 
            en la parte V del Formato FNSOHA-001, adjuntando los requisitos que
            dicho Formato establece según el cambio correspondiente.<br />
            La ANC revisará que el formato, al momento de su presentación por 
            parte del interesado, esté acompañado de los requisitos establecidos 
            en la Decisión 706. <br />
            El interesado deberá presentar dicho documento recepcionado por la 
            ANC del país de residencia del titular, a las demás ANC donde pretenda
            comercializar sus productos, con la copia de los documentos presentados
            que sustentan los cambios efectuados.</td>
    </tr>
</table>

<h3>FORMATO ÚNICO (FNSOHA-001)</h3>
<h3>DECISION 706</h3>
<h3>PRODUCTOS DE HIGIENE DOMESTICA (PHD) Y PRODUCTOS ABSORBENTES DE HIGIENE PERSONAL (PAHP)</h3>

<table border="1">
    <tr>
        <td>
            <?php echo ($form_706->getTipoTramiteFormularioId() == 1) ? 'X' : '' ?>
            Notificación Sanitaria Obligatoria (NSO)
        </td>
    </tr>    
    <tr>
        <td>
            <?php echo ($form_706->getTipoTramiteFormularioId() == 2) ? 'X' : '' ?>
            Solicitud de Renovación del código de identificación de la NSO
        </td>
    </tr>    
    <tr>
        <td>
            <?php echo ($form_706->getTipoTramiteFormularioId() == 2) ? 'X' : '' ?>
            Solicitud de Reconocimiento del código de identificación de la NSO
        </td>
    </tr>    
    <tr>
        <td>
            <?php echo ($form_706->getTipoTramiteFormularioId() == 2) ? 'X' : '' ?>
            Información de Cambios
        </td>
    </tr>    
</table>

<table border="1">
    <tr>
        <td colspan="2">
            <?php if($form_706->getDatos() == 'TITULAR'): ?>
                I. DATOS DEL TITULAR X IMPORTADOR  <br />
            <?php else: ?>
                I. DATOS DEL TITULAR IMPORTADOR X<br />
            <?php endif; ?>
            Artículo 7, numeral 1, literales a) y c); y Artículo 12 de la Decisión 706
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Nombre o razón social:
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Nombre o razón social:
        </td>
    </tr>
    <tr>
        <td>
            Domicilio o dirección: 
        </td>
        <td>
            Ciudad / Distrito / Provincia / Departamento:
        </td>
    </tr>
    <tr>
        <td>
            País:
        </td>
        <td>
            Teléfono:
        </td>
    </tr>
    <tr>
        <td>
            Fax:
        </td>
        <td>
            e-mail:
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Nombre del Representante Legal X Apoderado X
        </td>
    </tr>
    <tr>
        <td>
            Teléfono:
        </td>
        <td>
            e-mail:
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Responsable de la Comercialización
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Nombre o razón social:
        </td>
    </tr>
    <tr>
        <td>
            Domicilio o dirección:
        </td>
        <td>
            Ciudad / Distrito / Provincia / Departamento:
        </td>
    </tr>
    <tr>
        <td>
            País:
        </td>
        <td>
            Teléfono:
        </td>
    </tr>
    <tr>
        <td>
            Fax:
        </td>
        <td>
            e-mail:
        </td>
    </tr>
    <tr>
        <td colspan="2">
            II. DATOS DEL FABRICANTE O FABRICANTES<br />
            Artículo 7, numeral 1, literal c), y Artículo 12, segundo párrafo de la Decisión 706<br />
            (Envasador/empacador/acondicionador)
        </td>
    </tr>
    <tr>
        <td colspan="2">Nombre o razón social:</td>
    </tr>
    <tr>
        <td>Domicilio o dirección:</td>
        <td>Ciudad / Distrito / Provincia / Departamento:</td>
    </tr>
    <tr>
        <td>
            País:
        </td>
        <td>
            Teléfono:
        </td>
    </tr>
    <tr>
        <td>
            Fax:
        </td>
        <td>
            e-mail:
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Nombre del Responsable Técnico
        </td>
    </tr>
    <tr>
        <td colspan="2">

        </td>
    </tr>
    <tr>
        <td>
            Teléfono:
        </td>
        <td>
            E-mail:
        </td>
    </tr>
    <tr>
        <td>
            Fax:
        </td>
        <td>
            Número de Registro o Colegiatura Profesional
        </td>
    </tr>
    <tr>
        <td colspan="2">
            En el caso de maquila:<br />
            Nombre del:<br />
            Envasador<br />
            Empacador<br />
            Acondicionador<br />
            Fabricado para:
        </td>
    </tr>
</table>

<table border="1">
    <tr>
        <td colspan="2">
            III. DATOS GENERALES DEL PRODUCTO<br />
            Artículo 7, numeral 1, literal b), y Artículo 12 de la Decisión 706
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Nombre del producto:<br />
            PHD<br />
            PAHP<br />
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Grupo (especificar según el Anexo 1 Decisión 706):
        </td>
    </tr>
    <tr>
        <td colspan="2">Variedades:
        </td>
    </tr>
    <tr>
        <td colspan="2">Marca(s):
        </td>
    </tr>
    <!--<>-->
    <tr>
        <td rowspan="2">
            (Incluir en el caso de solicitud de renovación, 
            reconocimiento e información de cambios, y notificación de un nuevo importador)
        </td>
        <td>Código de identificación de la NSO
        </td>
    </tr>
    <tr>
        <td>Número de Expediente
        </td>
    </tr>
    <!--<>-->
    <tr>
        <td rowspan="2">
            (Incluir en el caso de solicitud de reconocimiento)
        </td>
        <td>Vigencia del Código de identificación de la NSO
        </td>
    </tr>
    <tr>
        <td>País que emitió el Código de identificación de la NSO
        </td>
    </tr>
    <!--<>-->
    <tr>
        <td colspan="2">
            IV. INFORMACIÓN TÉCNICA DEL PRODUCTO<br />
            Artículo 7, numeral 2, literales a), b), c), d), e), f), g), h), i) y  j) de la Decisión 706
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Adjuntar para NSO, renovación y reconocimiento
        </td>
    </tr>
    <tr>
        <td colspan="2">
            1. La descripción y la composición del producto con indicación de su 
            fórmula cuali-cuantitativa básica y secundaria con nombre genérico y 
            nomenclatura IUPAC, cuando corresponda
        </td>
    </tr>
    <tr>
        <td colspan="2">
            2. Especificaciones organolépticas y fisicoquímicas del producto terminado.
        </td>
    </tr>
    <tr>
        <td colspan="2">
            3. Justificación de las bondades y proclamas cuando represente un 
            problema para la salud
        </td>
    </tr>
    <tr>
        <td colspan="2">
            4. Proyecto de arte de la etiqueta o rotulado
        </td>
    </tr>
    <tr>
        <td colspan="2">
            5. Instrucciones de uso del producto, cuando corresponda
        </td>
    </tr>
    <tr>
        <td colspan="2">
            6. Material del envase primario y secundario, cuando corresponda
        </td>
    </tr>
    <tr>
        <td colspan="2">
            7. Advertencias, precauciones y restricciones, cuando corresponda
        </td>
    </tr>
    <tr>
        <td colspan="2">
            8. Forma de presentación
        </td>
    </tr>
    <tr>
        <td colspan="2">
            9. Número de lote o sistema de codificación de producción
        </td>
    </tr>
    <tr>
        <td colspan="2">
            10. Información de las propiedades desinfectantes y/o bactericida 
            del producto, de acuerdo con las propiedades especiales conferidas al mismo
        </td>
    </tr>
</table>

<h3>V. INFORMACIÓN DE CAMBIOS</h3>
<p>Artículos 13, 14, 15 y 16 de la Decisión 706</p>

<h3>VI. DOCUMENTACIÓN QUE SE ANEXA</h3>
<table border="1">
    <tr>
        <td colspan="3">A ser presentada por el interesado</td>
        <td colspan="2">A ser llenado por la Autoridad Sanitaria</td>
    </tr>
    <tr>
        <th colspan="2">Documentación</th>
        <th>Folios</th>
        <th>Cumple</th>
        <th>No cumple</th>
    </tr>
    <tr>
        <td colspan="5">
            Anexar para la NSO, solicitud de renovación y reconocimiento e 
            información de cambios
        </td>
    </tr>
    <tr>
        <td>1.</td>
        <td>Documento que respalde la Representación Legal o la condición de
            apoderado del responsable de la comercialización y/o importador,
            cuando corresponda de acuerdo a la legislación interna de cada
            País Miembro.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5">
            Anexar para NSO, solicitud de renovación y reconocimiento
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
        <td colspan="5">Anexar para NSO y solicitud de renovación</td>
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
        <td colspan="5">Anexar para NSO y Reconocimiento</td>
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
        <td>Anexar sólo para información de cambios, según corresponda</td>
    </tr>
    <!--<>-->
    <tr>
        <td>16.</td>
        <td>Justificación de las bondades y proclamas atribuible al producto, 
            cuya no veracidad pueda representar un problema para la salud.
        </td>
        <td>DEL...........AL.................FOLIO</td>
        <td></td>
        <td></td>
    </tr>
</table>

<h3>VII. CERTIFICACION DE LA INFORMACION TECNICA DEL PRODUCTO</h3>

<p>Yo, ____________________________________________, identificado con 
    (DNI)______________, actuando en mi condición de químico farmacéutico 
    titulado y con registro profesional No. ________ de (País Miembro 
    correspondiente) certifico técnicamente que el (PHD / PAHP) descrito no 
    perjudica la salud humana, siempre que se apliquen las condiciones normales 
    o razonablemente previsibles de uso.</p>

<table border="1">
    <tr>
        <td>FIRMA DEL RESPONSABLE TÉCNICO</td>
    </tr>
    <tr>
        <td>Nombre completo:</td>
    </tr>
    <tr>
        <td>Número de Registro o Colegiatura Profesional:</td>
    </tr>
</table>

<h3>VIII. DECLARACION JURADA.</h3>
<p>Yo, __________________________________________, identificado con 
    (DNI)________________, actuando en condición de Representante legal o 
    Apoderado, declaro bajo la gravedad de juramento, que el presente 
    documento y la información suministrada adjunta son auténticos y 
    veraces, y cumplen con todos los requisitos establecidos por la 
    Decisión 706 de la Comisión de la Comunidad Andina. Asimismo, declaro 
    que la comercialización será posterior a la presentación del presente 
    documento cumpliendo estrictamente con las especificaciones de calidad 
    definidas para el producto.</p>

<table>
    <tr>
        <td>FIRMA DEL REPRESENTANTE LEGAL O APODERADO</td>
    </tr>
    <tr>
        <td>Nombre completo:</td>
    </tr>
    <tr>
        <td>Número de identificación:</td>
    </tr>
</table>

<p>Lugar y fecha,</p>