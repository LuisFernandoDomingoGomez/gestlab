/*Trigger para insercion multiple (Orden de Servicio - Reporte de Muestreo):*/
DELIMITER $$
CREATE OR REPLACE TRIGGER tg_orden_servicio AFTER INSERT ON orden_servicios FOR EACH ROW
BEGIN
    INSERT INTO reporte_muestreos (id ,cliente, atencion_a, obra, ubicacion, clave_obra, orden_servicio, fecha_muestreo, muestreador_asignado)
    VALUES (NEW.id,
	    NEW.cliente,
	    NEW.atencion_a,
	    NEW.obra,
	    NEW.ubicacion,
	    NEW.clave_obra,
	    NEW.orden_servicio, 
	    NEW.fecha_muestreo, 
	    NEW.muestreador_asignado);
END;$$


/*Trigger para modificacion en cascada (Orden de Servicio - Reporte de Muestreo):*/
DELIMITER $$
CREATE OR REPLACE TRIGGER tg_edit_orden AFTER UPDATE ON orden_servicios FOR EACH ROW
BEGIN
    UPDATE reporte_muestreos
    SET cliente= NEW.cliente, atencion_a= NEW.atencion_a,
			    obra= NEW.obra, ubicacion=NEW.ubicacion, clave_obra=NEW.clave_obra,
			    orden_servicio= NEW.orden_servicio, fecha_muestreo=NEW.fecha_muestreo,
			    muestreador_asignado=NEW.muestreador_asignado			    
    WHERE id= NEW.id;
END;$$


/*Trigger para eliminacion en cascada (Orden de Servicio - Reporte de Muestreo):*/
DELIMITER $$
CREATE OR REPLACE TRIGGER tg_deletemuestreo AFTER DELETE ON orden_servicios FOR EACH ROW
BEGIN
	DELETE FROM reporte_muestreos
	WHERE id = OLD.id;
END;$$


/*Trigger para insercion multiple (Reporte de Muestreo - Registro de cilindros):*/
DELIMITER $$
CREATE OR REPLACE TRIGGER tg_create_especimenes AFTER INSERT ON reporte_muestreos FOR EACH ROW
BEGIN
    INSERT INTO registro_cilindros (id, orden_laboratorio, cliente, obra, fecha_muestreo, fcproy, rev_obt)
    VALUES (NEW.id,
	    NEW.clave_obra,
	    NEW.cliente,
	    NEW.obra,
	    NEW.fecha_muestreo,
	    NEW.resistencia,
	    NEW.revenimiento);
END;$$


/*Trigger para modificacion en cascada (Reporte de Muestreo - Registro de cilindros):*/
DELIMITER $$
CREATE OR REPLACE TRIGGER tg_edit_muestreo AFTER UPDATE ON reporte_muestreos FOR EACH ROW
BEGIN
    UPDATE registro_cilindros
    SET orden_laboratorio= NEW.clave_obra, cliente= NEW.cliente,
			    obra= NEW.obra, fecha_muestreo=NEW.fecha_muestreo, fcproy=NEW.resistencia,
			    rev_obt= NEW.revenimiento			    
    WHERE id= NEW.id;
END;$$
