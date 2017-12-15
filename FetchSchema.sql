SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema Fetch
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Fetch` DEFAULT CHARACTER SET utf8 ;
USE `Fetch` ;

-- -----------------------------------------------------
-- Table `Fetch`.`Hair`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fetch`.`Hair` (
  `Hair_Product_id` INT(11) NOT NULL AUTO_INCREMENT,
  `Hair_product_name` VARCHAR(100) NULL DEFAULT NULL,
  `Hair_tag_name` VARCHAR(100) NULL DEFAULT NULL,
  `Hair_tag_id` INT(11) NULL DEFAULT NULL,
  `Hair_image` VARCHAR(200) NULL DEFAULT NULL,
  `Hair_product_details` VARCHAR(600) NULL DEFAULT NULL,
  PRIMARY KEY (`Hair_Product_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 21
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Fetch`.`Skin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fetch`.`Skin` (
  `Skin_product_id` INT(11) NOT NULL AUTO_INCREMENT,
  `skin_product_name` VARCHAR(45) NULL DEFAULT NULL,
  `skin_tag_name` VARCHAR(500) NULL DEFAULT NULL,
  `skin_tag_id` VARCHAR(500) NULL DEFAULT NULL,
  `skin_image` VARCHAR(500) NULL DEFAULT NULL,
  `skin_product_detial` VARCHAR(600) NULL DEFAULT NULL,
  PRIMARY KEY (`Skin_product_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 21
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Fetch`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fetch`.`User` (
  `User_Id` INT(11) NOT NULL AUTO_INCREMENT,
  `User_description` VARCHAR(45) NULL DEFAULT NULL,
  `email_address` VARCHAR(55) NULL DEFAULT NULL,
  `Number_of_post` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`User_Id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Fetch`.`User_has_hair_products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fetch`.`User_has_hair_products` (
  `Hair_post_id` INT(11) NOT NULL AUTO_INCREMENT,
  `User_id` INT(11) NOT NULL,
  `Hair_product_id` INT(11) NULL DEFAULT NULL,
  `Hair_Product_name` VARCHAR(200) NULL DEFAULT NULL,
  `Hair_tag_name` VARCHAR(200) NULL DEFAULT NULL,
  `Review` VARCHAR(500) NULL DEFAULT NULL,
  `Rating` INT(11) NULL DEFAULT NULL,
  `User_User_Id` INT(11) NOT NULL,
  `Hair_Hair_Product_id` INT(11) NOT NULL,
  PRIMARY KEY (`Hair_post_id`),
  INDEX `fk_User_has_hair_products_User1_idx` (`User_User_Id` ASC),
  INDEX `fk_User_has_hair_products_Hair1_idx` (`Hair_Hair_Product_id` ASC),
  CONSTRAINT `fk_User_has_hair_products_User1`
    FOREIGN KEY (`User_User_Id`)
    REFERENCES `Fetch`.`User` (`User_Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_has_hair_products_Hair1`
    FOREIGN KEY (`Hair_Hair_Product_id`)
    REFERENCES `Fetch`.`Hair` (`Hair_Product_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Fetch`.`User_has_skin_product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fetch`.`User_has_skin_product` (
  `skin_post_id` INT(11) NOT NULL AUTO_INCREMENT,
  `User_Id` INT(11) NULL DEFAULT NULL,
  `Skin_prodcut_id` INT(11) NULL DEFAULT NULL,
  `skin_product_name` VARCHAR(500) NULL DEFAULT NULL,
  `skin_tag_name` VARCHAR(500) NULL DEFAULT NULL,
  `review` VARCHAR(600) NULL DEFAULT NULL,
  `rating` INT(11) NULL DEFAULT NULL,
  `User_User_Id` INT(11) NOT NULL,
  `Skin_Skin_product_id` INT(11) NOT NULL,
  PRIMARY KEY (`skin_post_id`, `Skin_Skin_product_id`),
  INDEX `fk_User_has_skin_product_User_idx` (`User_User_Id` ASC),
  INDEX `fk_User_has_skin_product_Skin1_idx` (`Skin_Skin_product_id` ASC),
  CONSTRAINT `fk_User_has_skin_product_User`
    FOREIGN KEY (`User_User_Id`)
    REFERENCES `Fetch`.`User` (`User_Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_has_skin_product_Skin1`
    FOREIGN KEY (`Skin_Skin_product_id`)
    REFERENCES `Fetch`.`Skin` (`Skin_product_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
