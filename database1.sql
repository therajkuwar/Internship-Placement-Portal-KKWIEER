-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2013 at 08:21 PM
-- Server version: 5.5.28
-- PHP Version: 5.4.3


SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";     /*If set don't generate an AUTO_INCREMENT on INSERT of zero in an AUTO_INCREMENT column.
                                            Normally both zero and NULL generate new AUTO_INCREMENT values.*/
SET time_zone = "+00:00";                 /*????????????*/


--
-- Database: `agat`

-- Table structure for table student

CREATE TABLE IF NOT EXISTS student 
(
	STUDENT_ID varchar(50) NOT NULL,
	S_PASSWORD varchar(100) NOT NULL,
	STUDENT_NAME varchar(100) NOT NULL,
    GENDER varchar(100) NOT NULL,
    DOB date NOT NULL,
    EMAIL varchar(100) NOT NULL,
	ADDRESS varchar(100) NOT NULL,
	CONTACT_NO varchar(100) NOT NULL,
	BRANCH varchar(100) NOT NULL,
	TENTH_PER varchar(100) NOT NULL,
	TENTH_PASS_YEAR int NOT NULL,
	TWELTH_PER varchar(100) NOT NULL,
	TWELTH_PASS_YEAR int NOT NULL,
	CGPA double NOT NULL,
	PASSING_YEAR int NOT NULL,
	BACKLOGS int(11) NOT NULL,
	APPLY_FOR varchar(100) NOT NULL,         /*internship/placement*/
	STATUS varchar(50) DEFAULT "NS",        /*NS means Not Selected*/
	APPLY_COUNT int DEFAULT 0,
	ABSENT int DEFAULT 0,
	IMAGE longblob NOT NULL,
    PRIMARY KEY (STUDENT_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Table structure for table company
--

CREATE TABLE IF NOT EXISTS company 
(
	COMPANY_ID varchar(50) NOT NULL,
    COMPANY_NAME varchar(100) NOT NULL,
    C_PASSWORD varchar(100) NOT NULL,
   -- C_TYPE varchar(50) NOT NULL,           /*internship/placement*/
    WEBSITE varchar(100) NOT NULL,
	ADDRESS varchar(100) NOT NULL,
	STATUS varchar(50) DEFAULT "visiting",   /*visited/visiting*/
	COMING_DATE date NOT NULL,
	APPROVAL varchar(50) DEFAULT "not approved", 
    PRIMARY KEY (COMPANY_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Table structure for table companybranch
--

CREATE TABLE IF NOT EXISTS companybranch 
(
    COMPANY_NAME varchar(100) NOT NULL,
    C_TYPE varchar(50) NOT NULL,            /*internship/placement*/
    BRANCH varchar(50),	
	MIN_CGPA double ,
	MAX_BACKLOGS int DEFAULT 0,
	MAX_SALARY double,
	MAX_STIPEND double,
	JOB_PROFILE varchar(100),
	PLACE_OF_POSTING varchar(100),
    PRIMARY KEY (COMPANY_NAME,C_TYPE,BRANCH)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- Table structure for table student_placement
--

CREATE TABLE IF NOT EXISTS student_placement 
(
  STUDENT_ID varchar(50) NOT NULL,
  COMPANY_ID varchar(100) NOT NULL,
  STUDENT_NAME varchar(100) NOT NULL,
  COMPANY_NAME varchar(100) NOT NULL,
  PACKAGE double NOT NULL,
  --PLACEMENT_DATE date NOT NULL,
  PRIMARY KEY (STUDENT_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Table structure for table student_internship
--

CREATE TABLE IF NOT EXISTS student_internship 
(
	STUDENT_ID varchar(50) NOT NULL,
    COMPANY_ID varchar(100) NOT NULL,
    STUDENT_NAME varchar(100) NOT NULL,
    COMPANY_NAME varchar(100) NOT NULL,
	STIPEND double NOT NULL,
	--TRAINING_DURATION int NOT NULL,      /*IN months*/
	PRIMARY KEY (STUDENT_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- Table structure for table admin
--

CREATE TABLE IF NOT EXISTS admin
(
	ADMIN_ID varchar(50) NOT NULL,
    ADMIN_NAME varchar(100) NOT NULL,
    A_PASSWORD varchar(100) NOT NULL,
    POST varchar(100) NOT NULL,
	EMAIL varchar(100) NOT NULL,  
	CONTACT_NO varchar(100) NOT NULL,
	DOB date NOT NULL,  
	QUALIFICATION varchar(100) NOT NULL,
	PRIMARY KEY (ADMIN_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- Table structure for table registered students for internship
--

CREATE TABLE IF NOT EXISTS registered_interns
(
	STUDENT_ID varchar(50) NOT NULL,
    STUDENT_NAME varchar(100) NOT NULL,
    COMPANY_NAME varchar(100) NOT NULL,
	PRIMARY KEY (STUDENT_ID,COMPANY_NAME)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Table structure for table registered students for placement


CREATE TABLE IF NOT EXISTS registered_placements
(
	STUDENT_ID varchar(50) NOT NULL,
    STUDENT_NAME varchar(100) NOT NULL,
    COMPANY_NAME varchar(100) NOT NULL,
	PRIMARY KEY (STUDENT_ID,COMPANY_NAME)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS intern_notification 
(
    noti varchar(200),
    PRIMARY KEY (noti)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS place_notification 
(
    noti varchar(200),
    PRIMARY KEY (noti)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


