-- database StarHelperAgency for WAD lab test 2

drop database if exists star_helper_agency;
create database star_helper_agency ;
use star_helper_agency ;

-- --------------------------------------------------------

--
-- Table structure for table user_account
--

CREATE TABLE IF NOT EXISTS user_account (
  mobile_no varchar(128) NOT NULL,
  name varchar(128) NOT NULL,
  hashed_password varchar(128) NOT NULL,
  role varchar(128) NOT NULL,
  PRIMARY KEY (mobile_no)
) ;

--
-- Loaddata for table user_account
--

INSERT INTO user_account (mobile_no, name, hashed_password, role) VALUES ('00', 'Mary', '$2y$10$7x.NcnzIsCBRpPk/cc0wf.cIvB92U9sC2FR68/0LXXzbdLsTa6X1u', 'helper');
INSERT INTO user_account (mobile_no, name, hashed_password, role) VALUES ('11', 'Sam', '$2y$10$5X1GeCseVKuuZNM6f2cQYOTKhDxauPHw4Tr2uf846fmsI.uUSmBy2', 'helper');
INSERT INTO user_account (mobile_no, name, hashed_password, role) VALUES ('22', 'Alex', '$2y$10$itbYpztg33cU3Rf8FN7Iee5MRWFJ8RANHCfVqgSYKq7NjHkD2se6i', 'admin');

-- --------------------------------------------------------

-- Table structure for table helper_post

CREATE TABLE IF NOT EXISTS helper_post (
  mobile_no varchar(128) NOT NULL,
  name varchar(128) NOT NULL,
  main_skills varchar(128) NOT NULL,
  languages varchar(128) NOT NULL,
  cooking_skills varchar(128) NOT NULL,
  about_you varchar(512) NOT NULL,
  PRIMARY KEY (mobile_no)
) ;

--
-- Load data for table helper_post 
--

INSERT INTO helper_post (mobile_no, name, main_skills, languages, cooking_skills, about_you) VALUES ('00', 'Mary', 'Baby Care, Child Care', 'English, Bahasa', 'Western, Singapore', 'My Name is Mary and I am 25 years old, married with 1 child. I have been working as a domestic helper for 14 years in Singapore. I am currently working in a family with 4 adults. I will finish my contract on April 2023 and I am looking for new employer. Thank you.');
INSERT INTO helper_post (mobile_no, name, main_skills, languages, cooking_skills, about_you) VALUES ('11', 'Sam', 'Child Care', 'English, Bahasa', 'Western, Singapore', 'I am Sam, 36 years old and have 2 children. I have worked for over 4 years as a domestic helper in Singapore. Household chores and childcare is my primary work. I am highly organised, responsible, and reliable. My contract ends on May 23, 2023. Thank you.');