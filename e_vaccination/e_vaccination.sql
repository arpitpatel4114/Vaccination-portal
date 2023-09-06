-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2021 at 08:44 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- Database:  e_vaccination 
--

-- --------------------------------------------------------

--
-- Table structure for table  admin 
--

CREATE TABLE IF NOT EXISTS  admin(username VARCHAR(15) NOT NULL primary key,lastname VARCHAR(15),
gender VARCHAR(8) NOT NULL, city VARCHAR(30), birth DATE, type VARCHAR(10), email VARCHAR(30) UNIQUE, pass VARCHAR(25));



--
-- Table structure for table  parent 
--

CREATE TABLE IF NOT EXISTS  parent(p_username 
VARCHAR(15) NOT NULL primary key, p_lastname VARCHAR(15), p_gender VARCHAR(8) NOT NULL, 
p_city VARCHAR(30), p_birth DATE, type VARCHAR(10), p_email VARCHAR(30) UNIQUE, p_pass VARCHAR(25));



--
-- Table structure for table  child 
--

CREATE TABLE IF NOT EXISTS  child(c_name VARCHAR(15) NOT NULL, 
c_gender VARCHAR(8), c_city VARCHAR(30), c_birth DATE, c_age INT(3), 
c_weight INT(5), c_height INT(5), c_vaccine VARCHAR(100), p_username VARCHAR(15), 
FOREIGN KEY(p_username) REFERENCES parent(p_username));



--
-- Table structure for table  vaccine 
--

CREATE TABLE IF NOT EXISTS  vaccine(name VARCHAR(50) NOT NULL primary key,timing VARCHAR(20) NOT NULL);



--
-- Table structure for table  vaccine_dates 
--

CREATE TABLE IF NOT EXISTS  vaccine_dates  (
   name  varchar(50) NOT NULL,
   v_date  date DEFAULT NULL,
   timing  varchar(20) NOT NULL,
   c_name  varchar(15) DEFAULT NULL,
   p_username  varchar(15) DEFAULT NULL,
   status  varchar(6) DEFAULT NULL,
   FOREIGN KEY(p_username) REFERENCES parent(p_username),
 FOREIGN KEY(c_name) REFERENCES child(c_name),
FOREIGN KEY(name) REFERENCES vaccine(name)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



