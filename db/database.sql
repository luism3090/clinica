CREATE TABLE IF NOT EXISTS `mi_clinica`.`usuarios` (
  `id_usuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `ape_paterno` VARCHAR(50) NOT NULL,
  `ape_materno` VARCHAR(50) NOT NULL,
  `genero` CHAR(1) NULL,
  `especialidad` VARCHAR(100) NULL,
  `nombre_usuario` VARCHAR(50) NOT NULL,
  `password` VARCHAR(20) NOT NULL,
  `id_tipo_usuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id_usuario`),
  INDEX `fk_usuarios_cat_tipo_usuarios1_idx` (`id_tipo_usuario` ASC),
  CONSTRAINT `fk_usuarios_cat_tipo_usuarios1`
    FOREIGN KEY (`id_tipo_usuario`)
    REFERENCES `mi_clinica`.`cat_tipo_usuarios` (`id_tipo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `mi_clinica`.`cat_tipo_usuarios` (
  `id_tipo_usuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo_usuario` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_tipo_usuario`))
ENGINE = InnoDB