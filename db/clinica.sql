-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema mi_clinica
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mi_clinica
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mi_clinica` DEFAULT CHARACTER SET latin1 ;
USE `mi_clinica` ;

-- -----------------------------------------------------
-- Table `mi_clinica`.`cat_tipo_usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mi_clinica`.`cat_tipo_usuarios` (
  `id_tipo_usuario` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo_usuario` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_tipo_usuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mi_clinica`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mi_clinica`.`usuarios` (
  `id_usuario` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `ape_paterno` VARCHAR(50) NOT NULL,
  `ape_materno` VARCHAR(50) NOT NULL,
  `genero` VARCHAR(20) NULL DEFAULT NULL,
  `especialidad` VARCHAR(100) NULL DEFAULT NULL,
  `nombre_usuario` VARCHAR(50) NOT NULL,
  `password` VARCHAR(20) NOT NULL,
  `id_tipo_usuario` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_usuario`),
  CONSTRAINT `fk_usuarios_cat_tipo_usuarios1`
    FOREIGN KEY (`id_tipo_usuario`)
    REFERENCES `mi_clinica`.`cat_tipo_usuarios` (`id_tipo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `fk_usuarios_cat_tipo_usuarios1_idx` ON `mi_clinica`.`usuarios` (`id_tipo_usuario` ASC);


-- -----------------------------------------------------
-- Table `mi_clinica`.`ficha_identificacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mi_clinica`.`ficha_identificacion` (
  `num_ficha` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fecha_hora_elaboracion` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipo_interrogatorio` VARCHAR(10) NULL DEFAULT NULL,
  `nombre_acompanante` VARCHAR(50) NULL DEFAULT NULL,
  `ape_paterno_acompanante` VARCHAR(50) NULL DEFAULT NULL,
  `ape_materno_acompanante` VARCHAR(50) NULL DEFAULT NULL,
  `parentesco_acompanante` VARCHAR(50) NULL DEFAULT NULL,
  `estado_civil` VARCHAR(50) NULL DEFAULT NULL,
  `lugar_origen` VARCHAR(100) NULL DEFAULT NULL,
  `localidad_residencia` VARCHAR(50) NULL DEFAULT NULL,
  `municipio_residencia` VARCHAR(50) NULL DEFAULT NULL,
  `estado_residencia` VARCHAR(50) NULL DEFAULT NULL,
  `colonia_residencia` VARCHAR(50) NULL DEFAULT NULL,
  `calle_residencia` VARCHAR(50) NULL DEFAULT NULL,
  `num_exterior` VARCHAR(50) NULL DEFAULT NULL,
  `num_interior` VARCHAR(50) NULL DEFAULT NULL,
  `escolaridad` VARCHAR(50) NULL DEFAULT NULL,
  `carrera` VARCHAR(50) NULL DEFAULT NULL,
  `ocupacion` VARCHAR(50) NULL DEFAULT NULL,
  `religion` VARCHAR(50) NULL DEFAULT NULL,
  `tel_movil` INT(10) NULL DEFAULT NULL,
  `tel_casa` INT(10) NULL DEFAULT NULL,
  `correo_electronico` VARCHAR(50) NULL DEFAULT NULL,
  `id_medico` INT(10) UNSIGNED NOT NULL,
  `id_enfermera` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`num_ficha`),
  CONSTRAINT `fk_ficha_identificacion_usuarios1`
    FOREIGN KEY (`id_medico`)
    REFERENCES `mi_clinica`.`usuarios` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ficha_identificacion_usuarios2`
    FOREIGN KEY (`id_enfermera`)
    REFERENCES `mi_clinica`.`usuarios` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `fk_ficha_identificacion_usuarios1_idx` ON `mi_clinica`.`ficha_identificacion` (`id_medico` ASC);

CREATE INDEX `fk_ficha_identificacion_usuarios2_idx` ON `mi_clinica`.`ficha_identificacion` (`id_enfermera` ASC);


-- -----------------------------------------------------
-- Table `mi_clinica`.`pacientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mi_clinica`.`pacientes` (
  `id_paciente` VARCHAR(14) NOT NULL,
  `nombre` VARCHAR(50) NOT NULL,
  `ape_paterno` VARCHAR(50) NOT NULL,
  `ape_materno` VARCHAR(50) NOT NULL,
  `genero` VARCHAR(20) NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `edad` INT(10) NOT NULL,
  `num_ficha` INT(11) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id_paciente`),
  CONSTRAINT `FK_paciente_ficha_identificacion`
    FOREIGN KEY (`num_ficha`)
    REFERENCES `mi_clinica`.`ficha_identificacion` (`num_ficha`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `FK_paciente_ficha_identificacion_idx` ON `mi_clinica`.`pacientes` (`num_ficha` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
