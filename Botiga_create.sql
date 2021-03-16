-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema Botiga
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Botiga` ;

-- -----------------------------------------------------
-- Schema Botiga
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Botiga` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `Botiga` ;

-- -----------------------------------------------------
-- Table `Botiga`.`Compra`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Botiga`.`Compra` ;

CREATE TABLE IF NOT EXISTS `Botiga`.`Compra` (
  `idCompra` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Producto` VARCHAR(45) NOT NULL,
  `Quantitat` INT NULL DEFAULT NULL,
  `Preu` FLOAT NOT NULL,
  PRIMARY KEY (`idCompra`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4; 

COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
