-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema apbus
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema apbus
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `apbus` DEFAULT CHARACTER SET utf8 ;
USE `apbus` ;

-- -----------------------------------------------------
-- Table `apbus`.`Onibus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apbus`.`Onibus` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `motorista` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `apbus`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apbus`.`Usuario` (
  `matricula` VARCHAR(100) NOT NULL,
  `nome_usual` VARCHAR(255) NOT NULL,
  `email` VARCHAR(250) NULL,
  `foto` VARCHAR(250) NULL,
  `tipo` INT NULL,
  `tipo_vinculo` VARCHAR(45) NULL,
  `data_nascimento` VARCHAR(250) NULL,
  `onibus_id` INT NULL,
  `curso` VARCHAR(255) NULL,
  PRIMARY KEY (`matricula`),
  INDEX `fk_Usuario_onibus1_idx` (`onibus_id` ASC) ,
  CONSTRAINT `fk_Usuario_onibus1`
    FOREIGN KEY (`onibus_id`)
    REFERENCES `apbus`.`Onibus` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `apbus`.`Pagamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apbus`.`Pagamento` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `status` VARCHAR(45) NULL,
  `valor` DOUBLE NULL,
  `dt_vencimento` DATE NULL,
  `Usuario_matricula` VARCHAR(100) NULL,
  `dt_pagamento` DATE NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Pagamento_Usuario_idx` (`Usuario_matricula` ASC) ,
  CONSTRAINT `fk_Pagamento_Usuario`
    FOREIGN KEY (`Usuario_matricula`)
    REFERENCES `apbus`.`Usuario` (`matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `apbus`.`Rota`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apbus`.`Rota` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `local` VARCHAR(255) NOT NULL,
  `hora` VARCHAR(45) NOT NULL,
  `onibus_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_rota_onibus1_idx` (`onibus_id` ASC),
  CONSTRAINT `fk_rota_onibus1`
    FOREIGN KEY (`onibus_id`)
    REFERENCES `apbus`.`Onibus` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `apbus`.`Despesa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apbus`.`Despesa` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `saida` VARCHAR(255) NOT NULL,
  `data` DATE NOT NULL,
  `valor` DOUBLE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `apbus`.`Valor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apbus`.`Valor` (
  `idValor` BIGINT NOT NULL,
  `valor` DOUBLE NOT NULL,
  PRIMARY KEY (`idValor`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
