CREATE TABLE ciudad (id BIGSERIAL, pais_id BIGINT, nombre VARCHAR(150), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE cosmetico (id BIGSERIAL, producto_id BIGINT NOT NULL, empresa_id BIGINT NOT NULL, laboratorio_fabricante_id BIGINT NOT NULL, forma_cosmetica_id BIGINT NOT NULL, grupo_cosmetico_id BIGINT NOT NULL, marca VARCHAR(255) NOT NULL, pais_id BIGINT, nombre VARCHAR(255) NOT NULL, codigo_nso VARCHAR(250), vigencia_nso VARCHAR(250), expediente VARCHAR(250), registro_sanitario VARCHAR(50), descripcion VARCHAR(2000), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE datos_formulario27 (id BIGSERIAL, nombre VARCHAR(30) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE detalle_formula_cc (id BIGSERIAL, formula_cc_id BIGINT NOT NULL, ingrediente_id BIGINT, cantidad NUMERIC(5,2) NOT NULL, unidad VARCHAR(20) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE dispositivo_medico (id BIGSERIAL, producto_id BIGINT NOT NULL, empresa_id BIGINT NOT NULL, laboratorio_fabricante_id BIGINT NOT NULL, nombre_comercial VARCHAR(255) NOT NULL, nombre_generico VARCHAR(255) NOT NULL, clasificacion_riesgo VARCHAR(1000), codigo_internacional VARCHAR(255), manual BOOLEAN DEFAULT 'false', indicaciones VARCHAR(2000), presentacion VARCHAR(2000), condicion_empaque VARCHAR(2000), vida_util VARCHAR(2000), metodo_desecho VARCHAR(2000), registro_sanitario VARCHAR(50), descripcion VARCHAR(2000), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE empresa (id BIGSERIAL, representante_legal_id BIGINT, regente_farmaceutico_id BIGINT, ciudad_id BIGINT NOT NULL, razon_social VARCHAR(255) NOT NULL UNIQUE, fecha_registro DATE, num_resolucion VARCHAR(30) UNIQUE, fecha_resolucion DATE, fax VARCHAR(20), direccion VARCHAR(255), casilla VARCHAR(20), telefono1 VARCHAR(20) NOT NULL, telefono2 VARCHAR(20), email VARCHAR(255) UNIQUE, actividad VARCHAR(255) NOT NULL, registro_camara VARCHAR(30), fundempresa VARCHAR(30) NOT NULL, nit VARCHAR(30) NOT NULL UNIQUE, licencia_funcionamiento VARCHAR(30) NOT NULL UNIQUE, is_active BOOLEAN DEFAULT 'true' NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE etapa (id BIGSERIAL, formulario_id BIGINT, tipo_etapa_id BIGINT NOT NULL, fecha DATE NOT NULL, observacion VARCHAR(2000), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE forma_cosmetica (id BIGSERIAL, nombre VARCHAR(250) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE forma_farmaceutica (id BIGSERIAL, nombre VARCHAR(255) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE formula_cc (id BIGSERIAL, observaciones VARCHAR(2000), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE formulario (id BIGSERIAL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE formulario11 (id BIGSERIAL, formulario_id BIGINT NOT NULL, fecha DATE, vigencia SMALLINT, fecha_inicio_vigencia DATE, empresa_id BIGINT NOT NULL, tipo_despacho_id BIGINT NOT NULL, otro VARCHAR(250) NOT NULL, sustancias_quimicas BOOLEAN NOT NULL, licencia_previa BOOLEAN NOT NULL, licencia_resolucion VARCHAR(150) NOT NULL, licencia_fecha DATE NOT NULL, numero_item BIGINT NOT NULL, foja BIGINT NOT NULL, pais_id BIGINT NOT NULL, factura VARCHAR(150) NOT NULL, factura_fecha DATE NOT NULL, para VARCHAR(150) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE formulario12 (id BIGSERIAL, formulario_id BIGINT NOT NULL, fecha DATE, vigencia SMALLINT, fecha_inicio_vigencia DATE, numero_ruta BIGINT, reactivo_id BIGINT NOT NULL, tipo_tramite_formulario12_id BIGINT NOT NULL, origen_formulario_id BIGINT NOT NULL, modificacion VARCHAR(250) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE formulario27 (id BIGSERIAL, formulario_id BIGINT NOT NULL, fecha DATE, vigencia SMALLINT, fecha_inicio_vigencia DATE, numero_ruta BIGINT, tipo_tramite_formulario27_id BIGINT NOT NULL, origen_formulario_id BIGINT NOT NULL, datos_formulario27_id BIGINT NOT NULL, dispositivo_medico_id BIGINT NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE formulario5 (id BIGSERIAL, formulario_id BIGINT NOT NULL, fecha DATE, vigencia SMALLINT, fecha_inicio_vigencia DATE, numero_ruta BIGINT, tipo_tramite_formulario5_id BIGINT NOT NULL, tipo_producto_formulario5_id BIGINT NOT NULL, origen_formulario_id BIGINT NOT NULL, medicamento_id BIGINT NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE formulario516 (id BIGSERIAL, formulario_id BIGINT NOT NULL, fecha DATE, cosmetico_id BIGINT NOT NULL, vigencia SMALLINT, fecha_inicio_vigencia DATE, numero_ruta BIGINT, tipo_tramite_formulario_id BIGINT NOT NULL, datos VARCHAR(150) NOT NULL, datos_titular VARCHAR(150) NOT NULL, maquila_embasador VARCHAR(255), maquila_empacador VARCHAR(255), maquila_acondicionador VARCHAR(255), maquila_fabricado_para VARCHAR(255), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE formulario7 (id BIGSERIAL, formulario_id BIGINT NOT NULL, fecha DATE, vigencia SMALLINT, fecha_inicio_vigencia DATE, referencia_aval VARCHAR(50), producto_id BIGINT NOT NULL, tipo_calificacion_id BIGINT NOT NULL, via_administracion_id BIGINT NOT NULL, accion_terapeutica VARCHAR(1000) NOT NULL, dosis VARCHAR(2000) NOT NULL, indicaciones VARCHAR(5000) NOT NULL, contraindicaciones VARCHAR(5000) NOT NULL, precauciones VARCHAR(5000) NOT NULL, efectos_secundarios VARCHAR(5000) NOT NULL, observaciones VARCHAR(2000), comision VARCHAR(100), calificacion VARCHAR(150), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE formulario706 (id BIGSERIAL, formulario_id BIGINT NOT NULL, fecha DATE, higiene_id BIGINT NOT NULL, vigencia SMALLINT, fecha_inicio_vigencia DATE, numero_ruta BIGINT, tipo_tramite_formulario_id BIGINT NOT NULL, datos VARCHAR(150) NOT NULL, datos_titular VARCHAR(150) NOT NULL, rescom_nombre VARCHAR(150), rescom_direccion VARCHAR(150), rescom_ciudad_id BIGINT, rescom_telefono VARCHAR(20), rescom_fax VARCHAR(20), rescom_email VARCHAR(255), maquila_tipo VARCHAR(255), maquila VARCHAR(255), maquila_fabricado VARCHAR(255), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE grupo_cosmetico (id BIGSERIAL, nombre VARCHAR(250) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE grupo_higiene (id BIGSERIAL, nombre VARCHAR(250) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE higiene (id BIGSERIAL, producto_id BIGINT NOT NULL, empresa_id BIGINT NOT NULL, laboratorio_fabricante_id BIGINT NOT NULL, grupo_higiene_id BIGINT, marca VARCHAR(255) NOT NULL, pais_id BIGINT, nombre VARCHAR(255) NOT NULL, nombre_detalle VARCHAR(5) NOT NULL, variedades VARCHAR(2000), codigo_nso VARCHAR(250), vigencia_nso VARCHAR(250), expediente VARCHAR(250), registro_sanitario VARCHAR(50), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE ingrediente (id BIGSERIAL, nombre VARCHAR(100) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE laboratorio_fabricante (id BIGSERIAL, pais_id BIGINT NOT NULL, ciudad_id BIGINT NOT NULL, nombre VARCHAR(255) NOT NULL UNIQUE, bajo_licencia VARCHAR(255), para VARCHAR(255), direccion VARCHAR(255), telefono VARCHAR(150), fax VARCHAR(150), email VARCHAR(255) UNIQUE, observaciones VARCHAR(2000), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE marca (id BIGSERIAL, nombre VARCHAR(250) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE medicamento (id BIGSERIAL, producto_id BIGINT NOT NULL, empresa_id BIGINT NOT NULL, laboratorio_fabricante_id BIGINT NOT NULL, forma_farmaceutica_id BIGINT NOT NULL, via_administracion_id BIGINT NOT NULL, tipo_venta_id BIGINT NOT NULL, formula_cc_id BIGINT, nombre_comercial VARCHAR(255) NOT NULL, nombre_generico VARCHAR(255) NOT NULL, concentracion VARCHAR(150) NOT NULL, accion_terapeutica VARCHAR(2000), conservacion VARCHAR(255), periodo_validez VARCHAR(50), especificacion_envase VARCHAR(2000), envase_clinico VARCHAR(2000), aval VARCHAR(255), registro_sanitario VARCHAR(50), certificado_control VARCHAR(30), descripcion VARCHAR(2000), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE origen_formulario (id BIGSERIAL, nombre VARCHAR(30) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE pais (id BIGSERIAL, nombre VARCHAR(150), bandera VARCHAR(50), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE persona (id BIGSERIAL, nombre VARCHAR(50) NOT NULL, ap_paterno VARCHAR(30) NOT NULL, ap_materno VARCHAR(30) NOT NULL, ci VARCHAR(12) NOT NULL UNIQUE, expedido VARCHAR(2) NOT NULL, direccion VARCHAR(255), telefono VARCHAR(20), celular VARCHAR(20), fax VARCHAR(20), casilla VARCHAR(10), email VARCHAR(255) UNIQUE, fecha_nacimiento DATE, is_active BOOLEAN DEFAULT 'true' NOT NULL, foto VARCHAR(50), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE producto (id BIGSERIAL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE reactivo (id BIGSERIAL, producto_id BIGINT NOT NULL, empresa_id BIGINT NOT NULL, laboratorio_fabricante_id BIGINT NOT NULL, nombre_comercial VARCHAR(255) NOT NULL, catalogo VARCHAR(255) NOT NULL, uso VARCHAR(1000) NOT NULL, presentacion VARCHAR(255), conservacion VARCHAR(255), periodo_validez VARCHAR(50), componente VARCHAR(5000), registro_sanitario VARCHAR(50), descripcion VARCHAR(2000), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE regente_farmaceutico (id BIGSERIAL, persona_id BIGINT NOT NULL, matricula_profesional VARCHAR(20), carnet_colegiado VARCHAR(20), is_active BOOLEAN DEFAULT 'true' NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE representante_legal (id BIGSERIAL, persona_id BIGINT NOT NULL, is_active BOOLEAN DEFAULT 'true' NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE tipo_calificacion (id BIGSERIAL, nombre VARCHAR(30) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE tipo_etapa (id BIGSERIAL, nombre VARCHAR(250) NOT NULL, descripcion VARCHAR(2000), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE tipo_producto_formulario5 (id BIGSERIAL, nombre VARCHAR(30) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE tipo_tramite_formulario (id BIGSERIAL, nombre VARCHAR(100) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE tipo_tramite_formulario12 (id BIGSERIAL, nombre VARCHAR(30) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE tipo_tramite_formulario27 (id BIGSERIAL, nombre VARCHAR(30) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE tipo_tramite_formulario5 (id BIGSERIAL, nombre VARCHAR(30) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE tipo_venta (id BIGSERIAL, nombre VARCHAR(100) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE via_administracion (id BIGSERIAL, nombre VARCHAR(100) NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_forgot_password (id BIGSERIAL, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at TIMESTAMP NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_group (id BIGSERIAL, name VARCHAR(255) UNIQUE, description VARCHAR(1000), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(group_id, permission_id));
CREATE TABLE sf_guard_permission (id BIGSERIAL, name VARCHAR(255) UNIQUE, description VARCHAR(1000), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_remember_key (id BIGSERIAL, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_user (id BIGSERIAL, persona_id BIGINT NOT NULL, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active BOOLEAN DEFAULT 'true', is_super_admin BOOLEAN DEFAULT 'false', last_login TIMESTAMP, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(user_id, group_id));
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(user_id, permission_id));
CREATE INDEX is_active_idx ON sf_guard_user (is_active);
ALTER TABLE ciudad ADD CONSTRAINT ciudad_pais_id_pais_id FOREIGN KEY (pais_id) REFERENCES pais(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE cosmetico ADD CONSTRAINT cosmetico_producto_id_producto_id FOREIGN KEY (producto_id) REFERENCES producto(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE cosmetico ADD CONSTRAINT cosmetico_pais_id_pais_id FOREIGN KEY (pais_id) REFERENCES pais(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE cosmetico ADD CONSTRAINT cosmetico_laboratorio_fabricante_id_laboratorio_fabricante_id FOREIGN KEY (laboratorio_fabricante_id) REFERENCES laboratorio_fabricante(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE cosmetico ADD CONSTRAINT cosmetico_grupo_cosmetico_id_grupo_cosmetico_id FOREIGN KEY (grupo_cosmetico_id) REFERENCES grupo_cosmetico(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE cosmetico ADD CONSTRAINT cosmetico_forma_cosmetica_id_forma_cosmetica_id FOREIGN KEY (forma_cosmetica_id) REFERENCES forma_cosmetica(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE cosmetico ADD CONSTRAINT cosmetico_empresa_id_empresa_id FOREIGN KEY (empresa_id) REFERENCES empresa(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE detalle_formula_cc ADD CONSTRAINT detalle_formula_cc_formula_cc_id_formula_cc_id FOREIGN KEY (formula_cc_id) REFERENCES formula_cc(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE dispositivo_medico ADD CONSTRAINT dlli FOREIGN KEY (laboratorio_fabricante_id) REFERENCES laboratorio_fabricante(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE dispositivo_medico ADD CONSTRAINT dispositivo_medico_producto_id_producto_id FOREIGN KEY (producto_id) REFERENCES producto(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE dispositivo_medico ADD CONSTRAINT dispositivo_medico_empresa_id_empresa_id FOREIGN KEY (empresa_id) REFERENCES empresa(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE empresa ADD CONSTRAINT empresa_representante_legal_id_representante_legal_id FOREIGN KEY (representante_legal_id) REFERENCES representante_legal(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE empresa ADD CONSTRAINT empresa_regente_farmaceutico_id_regente_farmaceutico_id FOREIGN KEY (regente_farmaceutico_id) REFERENCES regente_farmaceutico(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE empresa ADD CONSTRAINT empresa_ciudad_id_ciudad_id FOREIGN KEY (ciudad_id) REFERENCES ciudad(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE etapa ADD CONSTRAINT etapa_tipo_etapa_id_tipo_etapa_id FOREIGN KEY (tipo_etapa_id) REFERENCES tipo_etapa(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE etapa ADD CONSTRAINT etapa_formulario_id_formulario_id FOREIGN KEY (formulario_id) REFERENCES formulario(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario11 ADD CONSTRAINT formulario11_pais_id_pais_id FOREIGN KEY (pais_id) REFERENCES pais(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario11 ADD CONSTRAINT formulario11_formulario_id_formulario_id FOREIGN KEY (formulario_id) REFERENCES formulario(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario11 ADD CONSTRAINT formulario11_empresa_id_empresa_id FOREIGN KEY (empresa_id) REFERENCES empresa(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario12 ADD CONSTRAINT ftti FOREIGN KEY (tipo_tramite_formulario12_id) REFERENCES tipo_tramite_formulario12(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario12 ADD CONSTRAINT formulario12_reactivo_id_reactivo_id FOREIGN KEY (reactivo_id) REFERENCES reactivo(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario12 ADD CONSTRAINT formulario12_origen_formulario_id_origen_formulario_id FOREIGN KEY (origen_formulario_id) REFERENCES origen_formulario(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario12 ADD CONSTRAINT formulario12_formulario_id_formulario_id FOREIGN KEY (formulario_id) REFERENCES formulario(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario27 ADD CONSTRAINT ftti_1 FOREIGN KEY (tipo_tramite_formulario27_id) REFERENCES tipo_tramite_formulario27(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario27 ADD CONSTRAINT formulario27_origen_formulario_id_origen_formulario_id FOREIGN KEY (origen_formulario_id) REFERENCES origen_formulario(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario27 ADD CONSTRAINT formulario27_formulario_id_formulario_id FOREIGN KEY (formulario_id) REFERENCES formulario(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario27 ADD CONSTRAINT formulario27_dispositivo_medico_id_dispositivo_medico_id FOREIGN KEY (dispositivo_medico_id) REFERENCES dispositivo_medico(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario27 ADD CONSTRAINT formulario27_datos_formulario27_id_datos_formulario27_id FOREIGN KEY (datos_formulario27_id) REFERENCES datos_formulario27(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario5 ADD CONSTRAINT ftti_3 FOREIGN KEY (tipo_producto_formulario5_id) REFERENCES tipo_producto_formulario5(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario5 ADD CONSTRAINT ftti_2 FOREIGN KEY (tipo_tramite_formulario5_id) REFERENCES tipo_tramite_formulario5(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario5 ADD CONSTRAINT formulario5_origen_formulario_id_origen_formulario_id FOREIGN KEY (origen_formulario_id) REFERENCES origen_formulario(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario5 ADD CONSTRAINT formulario5_medicamento_id_medicamento_id FOREIGN KEY (medicamento_id) REFERENCES medicamento(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario5 ADD CONSTRAINT formulario5_formulario_id_formulario_id FOREIGN KEY (formulario_id) REFERENCES formulario(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario516 ADD CONSTRAINT ftti_4 FOREIGN KEY (tipo_tramite_formulario_id) REFERENCES tipo_tramite_formulario(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario516 ADD CONSTRAINT formulario516_formulario_id_formulario_id FOREIGN KEY (formulario_id) REFERENCES formulario(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario516 ADD CONSTRAINT formulario516_cosmetico_id_cosmetico_id FOREIGN KEY (cosmetico_id) REFERENCES cosmetico(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario7 ADD CONSTRAINT formulario7_via_administracion_id_via_administracion_id FOREIGN KEY (via_administracion_id) REFERENCES via_administracion(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario7 ADD CONSTRAINT formulario7_tipo_calificacion_id_tipo_calificacion_id FOREIGN KEY (tipo_calificacion_id) REFERENCES tipo_calificacion(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario7 ADD CONSTRAINT formulario7_producto_id_producto_id FOREIGN KEY (producto_id) REFERENCES producto(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario7 ADD CONSTRAINT formulario7_formulario_id_formulario_id FOREIGN KEY (formulario_id) REFERENCES formulario(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario706 ADD CONSTRAINT ftti_5 FOREIGN KEY (tipo_tramite_formulario_id) REFERENCES tipo_tramite_formulario(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario706 ADD CONSTRAINT formulario706_rescom_ciudad_id_pais_id FOREIGN KEY (rescom_ciudad_id) REFERENCES pais(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario706 ADD CONSTRAINT formulario706_rescom_ciudad_id_ciudad_id FOREIGN KEY (rescom_ciudad_id) REFERENCES ciudad(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario706 ADD CONSTRAINT formulario706_higiene_id_higiene_id FOREIGN KEY (higiene_id) REFERENCES higiene(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE formulario706 ADD CONSTRAINT formulario706_formulario_id_formulario_id FOREIGN KEY (formulario_id) REFERENCES formulario(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE higiene ADD CONSTRAINT higiene_producto_id_producto_id FOREIGN KEY (producto_id) REFERENCES producto(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE higiene ADD CONSTRAINT higiene_pais_id_pais_id FOREIGN KEY (pais_id) REFERENCES pais(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE higiene ADD CONSTRAINT higiene_laboratorio_fabricante_id_laboratorio_fabricante_id FOREIGN KEY (laboratorio_fabricante_id) REFERENCES laboratorio_fabricante(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE higiene ADD CONSTRAINT higiene_empresa_id_empresa_id FOREIGN KEY (empresa_id) REFERENCES empresa(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE laboratorio_fabricante ADD CONSTRAINT laboratorio_fabricante_pais_id_pais_id FOREIGN KEY (pais_id) REFERENCES pais(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE laboratorio_fabricante ADD CONSTRAINT laboratorio_fabricante_ciudad_id_ciudad_id FOREIGN KEY (ciudad_id) REFERENCES ciudad(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE medicamento ADD CONSTRAINT medicamento_via_administracion_id_via_administracion_id FOREIGN KEY (via_administracion_id) REFERENCES via_administracion(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE medicamento ADD CONSTRAINT medicamento_tipo_venta_id_tipo_venta_id FOREIGN KEY (tipo_venta_id) REFERENCES tipo_venta(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE medicamento ADD CONSTRAINT medicamento_producto_id_producto_id FOREIGN KEY (producto_id) REFERENCES producto(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE medicamento ADD CONSTRAINT medicamento_laboratorio_fabricante_id_laboratorio_fabricante_id FOREIGN KEY (laboratorio_fabricante_id) REFERENCES laboratorio_fabricante(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE medicamento ADD CONSTRAINT medicamento_formula_cc_id_formula_cc_id FOREIGN KEY (formula_cc_id) REFERENCES formula_cc(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE medicamento ADD CONSTRAINT medicamento_forma_farmaceutica_id_forma_farmaceutica_id FOREIGN KEY (forma_farmaceutica_id) REFERENCES forma_farmaceutica(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE medicamento ADD CONSTRAINT medicamento_empresa_id_empresa_id FOREIGN KEY (empresa_id) REFERENCES empresa(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE reactivo ADD CONSTRAINT reactivo_producto_id_producto_id FOREIGN KEY (producto_id) REFERENCES producto(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE reactivo ADD CONSTRAINT reactivo_laboratorio_fabricante_id_laboratorio_fabricante_id FOREIGN KEY (laboratorio_fabricante_id) REFERENCES laboratorio_fabricante(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE reactivo ADD CONSTRAINT reactivo_empresa_id_empresa_id FOREIGN KEY (empresa_id) REFERENCES empresa(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE regente_farmaceutico ADD CONSTRAINT regente_farmaceutico_persona_id_persona_id FOREIGN KEY (persona_id) REFERENCES persona(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE representante_legal ADD CONSTRAINT representante_legal_persona_id_persona_id FOREIGN KEY (persona_id) REFERENCES persona(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_user ADD CONSTRAINT sf_guard_user_persona_id_persona_id FOREIGN KEY (persona_id) REFERENCES persona(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
