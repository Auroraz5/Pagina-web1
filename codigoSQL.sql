-- MySQL Script generated by MySQL Workbench
-- Wed Apr 29 14:01:03 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `idusuario` VARCHAR(45) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `username` VARCHAR(16) NOT NULL,
  `password` VARCHAR(32) GENERATED ALWAYS AS () VIRTUAL,
  `telefono` VARCHAR(45) NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`asunto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`asunto` (
  `idasunto` VARCHAR(45) NOT NULL,
  `asunto` VARCHAR(45) NULL,
  PRIMARY KEY (`idasunto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`login` (
  `idcliente` VARCHAR(45) NOT NULL,
  `correo/nombre` VARCHAR(225) NOT NULL,
  `contraseña` VARCHAR(45) NOT NULL,
  `usuario_idusuario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcliente`),
  INDEX `fk_login_usuario1_idx` (`usuario_idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_login_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `mydb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`agendar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`agendar` (
  `idsolicitud` INT NOT NULL AUTO_INCREMENT,
  `dia` FLOAT NOT NULL,
  `mes` FLOAT NOT NULL,
  `año` FLOAT NOT NULL,
  `usuario_idusuario` VARCHAR(45) NOT NULL,
  `asunto_idasunto` INT NOT NULL,
  `login_idcliente` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idsolicitud`),
  UNIQUE INDEX `idsolicitud_UNIQUE` (`idsolicitud` ASC) VISIBLE,
  INDEX `fk_agendar_usuario_idx` (`usuario_idusuario` ASC) VISIBLE,
  INDEX `fk_agendar_asunto1_idx` (`asunto_idasunto` ASC) VISIBLE,
  INDEX `fk_agendar_login1_idx` (`login_idcliente` ASC) VISIBLE,
  CONSTRAINT `fk_agendar_usuario`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `mydb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_agendar_asunto1`
    FOREIGN KEY (`asunto_idasunto`)
    REFERENCES `mydb`.`asunto` (`idasunto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_agendar_login1`
    FOREIGN KEY (`login_idcliente`)
    REFERENCES `mydb`.`login` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;