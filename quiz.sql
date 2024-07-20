-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 11:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cppquestions`
--

CREATE TABLE `cppquestions` (
  `question` text NOT NULL,
  `opt1` text NOT NULL,
  `opt2` text NOT NULL,
  `opt3` text NOT NULL,
  `opt4` text NOT NULL,
  `copt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cppquestions`
--

INSERT INTO `cppquestions` (`question`, `opt1`, `opt2`, `opt3`, `opt4`, `copt`) VALUES
('What is the output of the following code snippet?\n\n#include <iostream>\nint main() {\n    int x = 5;\n    std::cout << x++ << \" \" << ++x;\n    return 0;\n}', '5 7', '6 6', '6 7', '5 6', '6 7'),
('Which of the following is not a valid C++ keyword?', 'class', 'mutable', 'unsigned', 'constant', 'constant'),
('What is the correct way to declare a pointer in C++?', 'int* ptr;', 'int ptr;', 'ptr* int;', 'int ptr;', 'int* ptr;'),
('What is the output of the following code snippet?\n\n#include <iostream>\nint main() {\n    int x = 10;\n    if (x == 10) {\n        int x = 20;\n        std::cout << x;\n    }\n    return 0;\n}', '10', '20', 'Compilation error', 'Undefined behavior', '20'),
('Which operator is used to dynamically allocate memory in C++?', 'alloc', 'malloc', 'alloc', 'new', 'new'),
('What is the correct way to initialize a reference in C++?', 'int &ref = x;', 'int &ref;', 'int ref = x;', 'int ref;', 'int &ref = x;'),
('What is the output of the following code snippet?\n\n#include <iostream>\nint main() {\n    int arr[5] = {1, 2, 3};\n    std::cout << arr[4];\n    return 0;\n}', '0', '3', 'Garbage value', 'Compilation error', 'Garbage value'),
('What is the correct syntax for a constructor in C++?', 'void constructor()', 'constructor()', 'void constructor', 'No need of a constructor', 'No need of a constructor'),
('What is the output of the following code snippet?\n\n#include <iostream>\nint main() {\n    int x = 10;\n    int& ref = x;\n    ref = 20;\n    std::cout << x;\n    return 0;\n}', '10', '20', 'Compilation error', 'Undefined behavior', '20'),
('Which of the following is an invalid identifier in C++?', '_myVar', 'my_Var', 'MyVar', '123var', '123var');

-- --------------------------------------------------------

--
-- Table structure for table `cquestions`
--

CREATE TABLE `cquestions` (
  `question` text DEFAULT NULL,
  `opt1` text DEFAULT NULL,
  `opt2` text DEFAULT NULL,
  `opt3` text DEFAULT NULL,
  `opt4` text DEFAULT NULL,
  `copt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cquestions`
--

INSERT INTO `cquestions` (`question`, `opt1`, `opt2`, `opt3`, `opt4`, `copt`) VALUES
('What does CPU stand for?', 'Central Process Unit', 'Central Processor Un', 'Computer Personal Un', 'Central Processing U', 'd'),
('Which of the following is not a keyword in C?', 'continue', 'class', 'goto', 'sizeof', 'b'),
('Which of the following correctly declares an array', 'int arr[10];', 'arr[10];', 'int arr;', 'array arr[10];', 'a'),
('What is the size of int data type in C?', '2 bytes', '4 bytes', '8 bytes', 'Depends on the syste', 'b'),
('Which of the following is the correct way to comme', '/* comment */', '// comment //', '# comment', '\\\\ comment \\\\', 'a'),
('Which operator is used to access structure members', '.', '-', '->', '::', 'c'),
('What is the output of the following code snippet?\n', '30', '35', '40', '25', 'b'),
('Which of the following is the correct syntax for d', 'void function() {}', 'function void() {}', 'void() function {}', '()void function {}', 'a'),
('What is the output of the following code snippet?\n', '12', '6', '8', '4', 'c'),
('What is the purpose of the sizeof() operator in C?', 'To return the size o', 'To allocate memory f', 'To convert variables', 'To define the size o', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `pythonquestions`
--

CREATE TABLE `pythonquestions` (
  `question` varchar(255) DEFAULT NULL,
  `opt1` varchar(255) DEFAULT NULL,
  `opt2` varchar(255) DEFAULT NULL,
  `opt3` varchar(255) DEFAULT NULL,
  `opt4` varchar(255) DEFAULT NULL,
  `copt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pythonquestions`
--

INSERT INTO `pythonquestions` (`question`, `opt1`, `opt2`, `opt3`, `opt4`, `copt`) VALUES
('What is the capital of France?', 'London', 'Paris', 'Berlin', 'Madrid', 'b'),
('Which of the following is a programming language?', 'HTML', 'CSS', 'Python', 'XML', 'c'),
('What is 10 * 5?', '20', '25', '50', '100', 'c'),
('What is the output of 2 + 2?', '3', '4', '5', '6', 'b'),
('Which symbol is used for comments in Python?', '//', '/*', '#', '--', 'c'),
('What does the method append() do in Python?', 'Adds an element to the beginning of a list', 'Adds an element to the end of a list', 'Removes an element from a list', 'Reverses a list', 'b'),
('What is the result of 5 % 2 in Python?', '2', '2.5', '1', '0', 'c'),
('What does the function len() do in Python?', 'Returns the length of a string', 'Returns the length of a list', 'Returns the length of a tuple', 'All of the above', 'd'),
('Which keyword is used to define a function in Python?', 'func', 'def', 'function', 'define', 'b'),
('What is the output of print(3 * 3)?', '9', '6', '33', '27', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `lname`, `email`, `password`) VALUES
('MUTHUSAMY', 'A', 'rajuamuthusamy@gmail.com', 'raju2003'),
('Vignesh', 'A', 'vikki@gmail.com', 'vikki123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
