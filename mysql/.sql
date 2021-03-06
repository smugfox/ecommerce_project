-- MySQL Script generated by MySQL Workbench
-- 06/16/14 16:41:40
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema eshop
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `eshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `eshop` ;

-- -----------------------------------------------------
-- Table `eshop`.`Customers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eshop`.`Customers` ;

CREATE TABLE IF NOT EXISTS `eshop`.`Customers` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `First_Name` VARCHAR(45) NOT NULL,
  `Last_Name` VARCHAR(45) NOT NULL,
  `Address` VARCHAR(45) NOT NULL,
  `Address_2` VARCHAR(45) NULL,
  `City` VARCHAR(45) NOT NULL,
  `Zip` INT NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Username` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eshop`.`Orders`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eshop`.`Orders` ;

CREATE TABLE IF NOT EXISTS `eshop`.`Orders` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Customer_ID` INT NOT NULL,
  `Order_Date` DATETIME NOT NULL,
  `Order_Status` VARCHAR(45) NOT NULL,
  `Customers_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Customers_ID`),
  INDEX `fk_Orders_Customers_idx` (`Customers_ID` ASC),
  CONSTRAINT `fk_Orders_Customers`
    FOREIGN KEY (`Customers_ID`)
    REFERENCES `eshop`.`Customers` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eshop`.`Products`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eshop`.`Products` ;

CREATE TABLE IF NOT EXISTS `eshop`.`Products` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Product_Name` VARCHAR(45) NOT NULL,
  `Product_Description` VARCHAR(45) NOT NULL,
  `Quantity` INT NOT NULL,
  `Price` DECIMAL(7,2) NOT NULL,
  `Image` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eshop`.`Items`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eshop`.`Items` ;

CREATE TABLE IF NOT EXISTS `eshop`.`Items` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Product_Quantity` INT NOT NULL,
  `Orders_ID` INT NOT NULL,
  `Orders_Customers_ID` INT NOT NULL,
  `Products_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Orders_ID`, `Orders_Customers_ID`, `Products_ID`),
  INDEX `fk_Items_Orders1_idx` (`Orders_ID` ASC, `Orders_Customers_ID` ASC),
  INDEX `fk_Items_Products1_idx` (`Products_ID` ASC),
  CONSTRAINT `fk_Items_Orders1`
    FOREIGN KEY (`Orders_ID` , `Orders_Customers_ID`)
    REFERENCES `eshop`.`Orders` (`ID` , `Customers_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Items_Products1`
    FOREIGN KEY (`Products_ID`)
    REFERENCES `eshop`.`Products` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eshop`.`Categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eshop`.`Categories` ;

CREATE TABLE IF NOT EXISTS `eshop`.`Categories` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Category_Name` VARCHAR(45) NOT NULL,
  `Products_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Products_ID`),
  INDEX `fk_Categories_Products1_idx` (`Products_ID` ASC),
  CONSTRAINT `fk_Categories_Products1`
    FOREIGN KEY (`Products_ID`)
    REFERENCES `eshop`.`Products` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
