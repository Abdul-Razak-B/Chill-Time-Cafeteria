-- Check if the database already exists
IF NOT EXISTS (SELECT * FROM sys.databases WHERE name = 'create_db')
BEGIN
  -- Create the database create_db
  CREATE DATABASE create_db;
  -- Print a success message
  PRINT 'Database created successfully';
END
ELSE
BEGIN
  -- Print an error message
  PRINT 'Database already exists';
END
BEGIN
CREATE TABLE users (
  date DATETIME NOT NULL,
  dob DATE NOT NULL,
  id INT(11) NOT NULL PRIMARY KEY,
  img VARCHAR(255) NOT NULL, 
  name VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  city VARCHAR(255) NOT NULL,
  country VARCHAR(255) NOT NULL
);
PRINT 'Table "users" created successfully';
END
BEGIN
  -- If the table already exists, print an error message and do nothing
  PRINT 'Error: Table "users" already exists';
END

-- Create the table admins
BEGIN
CREATE TABLE admins (
  date DATETIME NOT NULL,
  dob DATE NOT NULL,
  id INT(11) NOT NULL PRIMARY KEY,
  img VARCHAR(255) NOT NULL, 
  name VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  city VARCHAR(255) NOT NULL,
  country VARCHAR(255) NOT NULL
);
PRINT 'Table "admins" created successfully';
END
BEGIN
  -- If the table already exists, print an error message and do nothing
  PRINT 'Error: Table "admins" already exists';
END

-- Create the table cheifs
BEGIN
CREATE TABLE cheifs (
  date DATETIME NOT NULL,
  dob DATE NOT NULL,
  id INT(11) NOT NULL PRIMARY KEY,
  bg_img VARCHAR(255) NOT NULL, 
  img VARCHAR(255) NOT NULL, 
  n_title VARCHAR(255) NOT NULL,
  name VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  roll VARCHAR(255) NOT NULL,
  title VARCHAR(255) NOT NULL,
  team VARCHAR(255) NOT NULL,
  desig VARCHAR(255) NOT NULL,
  gender VARCHAR(255) NOT NULL,
  fb_link VARCHAR(255) NOT NULL,
  insta_link VARCHAR(255) NOT NULL,
  twitter_link VARCHAR(255) NOT NULL
);
PRINT 'Table "cheifs" created successfully';
END
BEGIN
  -- If the table already exists, print an error message and do nothing
  PRINT 'Error: Table "cheifs" already exists';
END

-- Create the table add_items
BEGIN
CREATE TABLE add_items (
  date DATETIME NOT NULL,
  product_id INT(11) NOT NULL PRIMARY KEY, 
  product_name VARCHAR(255) NOT NULL, 
  product_price INT(11) NOT NULL,
  i_p INT(11) NOT NULL,
  product_category VARCHAR(255) 
);
PRINT 'Table "add_items" created successfully';
END
BEGIN
  -- If the table already exists, print an error message and do nothing
  PRINT 'Error: Table "add_items" already exists';
END

-- Create the table cart
BEGIN
CREATE TABLE cart (
  date DATETIME NOT NULL,
  c_id INT(11) NOT NULL PRIMARY KEY,
  p_id INT(11) NOT NULL, 
  u_id INT(11) NOT NULL,
  c_qnt INT(11) NOT NULL
);
PRINT 'Table "cart" created successfully';
END
BEGIN
  -- If the table already exists, print an error message and do nothing
  PRINT 'Error: Table "cart" already exists';
END
BEGIN
ALTER TABLE cart ADD FOREIGN KEY (p_id) REFERENCES add_items(product_id);
PRINT 'Table "add_items" updated successfully';
END
BEGIN
  -- If the table already exists, print an error message and do nothing
  PRINT 'Error: Table "add_items" cannot be updated';
END
BEGIN
ALTER TABLE cart ADD FOREIGN KEY (u_id) REFERENCES users(id);
PRINT 'Table "add_items" updated successfully';
END
BEGIN
  -- If the table already exists, print an error message and do nothing
  PRINT 'Error: Table "add_items" cannot be updated';
END

-- Create the table query
BEGIN
CREATE TABLE query (
  q_date DATETIME NOT NULL,
  q_id INT(11) NOT NULL PRIMARY KEY, 
  q_name VARCHAR(255) NOT NULL, 
  q_email VARCHAR(255) NOT NULL,
  q_msg VARCHAR(255) NOT NULL
);
PRINT 'Table "query" created successfully';
END
BEGIN
  -- If the table already exists, print an error message and do nothing
  PRINT 'Error: Table "query" already exists';
END

-- Inserting Into Cheifs
BEGIN
INSERT INTO cheifs (date, bg_img, img, n_title, NAME, phone, roll, title, team, desig, gender)
VALUES
(NOW(), 'cover 1.jpg', 'intro 1.jpg', 'mr', 'Abdul Razak', '+92 309 0609391', 'GC20-BSCS-003', 'Leader', 'Hawk-Eye', 'Student', 'm'),
(NOW(), 'cover 2.jpg', 'intro 2.jpg', 'mr', 'Muhammad Tahir', '+92 316 3702580', 'GC20-BSCS-047', 'Member', 'Hawk-Eye', 'Student', 'm'),
(NOW(), 'cover 3.jpeg', 'intro 3.jpg', 'mr', 'Ameer Ali', '+92 300 4836310', 'GC20-BSCS-009', 'Member', 'Hawk-Eye', 'Student', 'm'),
(NOW(), 'cover 4.jpg', 'intro 4.jpg', 'mr', 'Mujeeb Ali', '+92 306 8317589', 'GC20-BSCS-023', 'Member', 'Hawk-Eye', 'Student', 'm'),
(NOW(), 'ccm_001.jpg', 'pcm_001.jpg', 'mr', 'Abdul Basit', '', 'GC20-BSCS-001', 'Leader', 'Eagle', 'Student', 'm'),
(NOW(), 'ccm_004.jpg', 'pcm_004.jpg', 'mr', 'Abdul Samad', '', 'GC20-BSCS-004', 'Member', 'Sparrow', 'Student', 'm'),
(NOW(), 'ccm_006.jpg', 'pcm_006.jpg', 'mr', 'Ali Hassan', '', 'GC20-BSCS-006', 'Member', 'Eagle', 'Student', 'm'),
(NOW(), 'ccm_011.jpg', 'pcm_011.jpg', 'mr', 'Ghulam Muhammad', '', 'GC20-BSCS-011', 'Member', 'Sparrow', 'Student', 'm'),
(NOW(), 'ccm_015.jpg', '', 'ms', 'Kainat', '', 'GC20-BSCS-015', 'Member', 'Wolf', 'Student', 'f'),
(NOW(), 'ccm_018.jpg', '', 'ms', 'Maniza', '', 'GC20-BSCS-018', 'Leader', 'Rose', 'Student', 'f'),
(NOW(), 'ccm_020.jpg', 'pcm_020.jpg', 'mr', 'Mazhar Ali', '', 'GC20-BSCS-020', 'Leader', 'Sparrow', 'Student', 'm'),
(NOW(), 'ccm_021.jpg', 'pcm_021.jpg', 'mr', 'Muhammad Manghan', '', 'GC20-BSCS-021', 'Member', 'Rebels', 'Student', 'm'),
(NOW(), 'ccm_024.jpg', '', 'mr', 'Rao Muhammad Ibrar', '', 'GC20-BSCS-024', 'Member', 'Eagle', 'Student', 'm'),
(NOW(), 'ccm_025.jpg', 'pcm_025.jpg', 'mr', 'Rashid Ali', '', 'GC20-BSCS-025', 'Leader', 'Rebels', 'Student', 'm'),
(NOW(), 'ccm_026.jpg', 'pcm_026.jpg', 'mr', 'Saeed Ahmed', '', 'GC20-BSCS-026', 'Member', 'Sparrow', 'Student', 'm'),
(NOW(), 'ccm_029.jpg', 'pcm_029.jpg', 'mr', 'Sajjad Hussain', '', 'GC20-BSCS-029', 'Member', 'Rebels', 'Student', 'm'),
(NOW(), 'ccm_030.jpg', 'pcm_030.jpg', 'mr', 'Shahid Hussain', '', 'GC20-BSCS-030', 'Member', 'Rebels', 'Student', 'm'),
(NOW(), 'ccm_031.jpg', 'pcm_031.jpg', 'mr', 'Shahzaib ALi', '+92 306 2818181', 'GC20-BSCS-031', 'Member', 'Rebels', 'Student', 'm'),
(NOW(), 'ccm_033.jpg', '', 'ms', 'Tanzeela', '', 'GC20-BSCS-033', 'Leader', 'Wolf', 'Student', 'f'),
(NOW(), 'ccm_034.jpg', '', 'mr', 'Tayaba', '', 'GC20-BSCS-034', 'Member', 'Rose', 'Student', 'f'),
(NOW(), 'ccm_035.jpg', 'pcm_035.jpg', 'mr', 'Usama', '', 'GC20-BSCS-035', 'Member', 'Rose', 'Student', 'm'),
(NOW(), 'ccm_037.jpg', 'pcm_037.jpg', 'mr', 'Waqar Ahmed', '', 'GC20-BSCS-037', 'Member', 'Sparrow', 'Student', 'm'),
(NOW(), 'ccm_041.jpg', '', 'ms', 'Hina Khatoon', '', 'GC20-BSCS-041', 'Member', 'Wolf', 'Student', 'f'),
(NOW(), 'ccm_043.jpg', 'pcm_043.jpg', 'mr', 'Jaleel Ahmed', '', 'GC20-BSCS-043', 'Member', 'Eagle', 'Student', 'm'),
(NOW(), 'ccm_046.jpg', 'pcm_046.jpg', 'mr', 'Nasir Hassan', '+92 300 5340816', 'GC20-BSCS-046', 'Member', 'Rose', 'Student', 'm'),
(NOW(), 'chod.jpg', 'phod.jpg', 'Sir', 'Shahid Hussain Mahar', '', '', 'HOD', 'CS', 'Teacher', 'm'),
(NOW(), 'cco.jpg', 'pco.jpg', 'Sir', 'Imran Mushtaque', '', '', 'Co-Ordinator', 'CS', 'Teacher', 'm'),
(NOW(), 'cco-2.jpg', 'pco-2.jpg', 'Sir', 'Kashif Arain', '', '', 'Co-Ordinator-2', 'CS', 'Teacher', 'm'),
(NOW(), 'cspr.jpg', 'pspr.jpg', 'ms', 'Saima Shoro', '', '', 'Supervisor', 'CS', 'Teacher', 'f')
END

--Inserting Into add_items
BEGIN
INSERT INTO add_items (date, product_img, product_name, i_p, product_price, product_cetegory)
VALUES
(NOW(), 'menu-1.jpg', 'fast food', 550, 450, 'breakfast'),
(NOW(), 'menu-2.jpg', 'egg dish', 370, 350, 'breakfast'),
(NOW(), 'menu-3.jpg', 'egg soup', 300, 250, 'dinner'),
(NOW(), 'menu-4.jpg', 'beef', 1800, 1400, 'lunch'),
(NOW(), 'menu-5.jpg', 'Paratha & Vegetables', 700, 300, 'breakfast'),
(NOW(), 'menu-6.jpg', 'fries & shods', 280, 150, 'dinner'),
(NOW(), 'menu-7.jpg', 'pizza', 1900, 1600, 'breakfast'),
(NOW(), 'menu-8.jpg', 'meet', 2800, 2200, 'lunch')
END

--Inserting Into users
BEGIN
INSERT INTO users (date, dob, img, name, username, email, password, phone, city, country)
VALUES
(NOW(), '2001-04-01', 'team-1.jpg', 'Abdul Razak', 'arazak786', 'qwe123', '+92 300 0000000', 'Daharki', 'Pakistan'),
(NOW(), '2001-04-01', 'team-2.jpg', 'Muhammad Tahir', 'arazak786', 'qwe123', '+92 300 0000000', 'Ghotki', 'Pakistan'),
(NOW(), '2001-04-01', 'team-3.jpg', 'Mujeeb Ali', 'arazak786', 'qwe123', '+92 300 0000000', 'Ghotki', 'Pakistan'),
(NOW(), '2001-04-01', 'team-4.jpg', 'Ameer Ali', 'arazak786', 'qwe123', '+92 300 0000000', 'Ghotki', 'Pakistan'),
(NOW(), '2001-04-01', 'team-1.jpg', 'Abdul Razak', 'arazak786', 'qwe123', '+92 300 0000000', 'Daharki', 'Pakistan'),
(NOW(), '2001-04-01', 'team-2.jpg', 'Muhammad Tahir', 'arazak786', 'qwe123', '+92 300 0000000', 'Ghotki', 'Pakistan'),
(NOW(), '2001-04-01', 'team-3.jpg', 'Mujeeb Ali', 'arazak786', 'qwe123', '+92 300 0000000', 'Ghotki', 'Pakistan'),
(NOW(), '2001-04-01', 'team-4.jpg', 'Ameer Ali', 'arazak786', 'qwe123', '+92 300 0000000', 'Ghotki', 'Pakistan')
END

--Inserting Into admins
BEGIN
INSERT INTO admins (date, dob, img, name, username, email, password, phone, city, country)
VALUES
(NOW(), '2001-04-01', 'team-1.jpg', 'Abdul Razak', 'arazak786', 'qwe123', '+92 300 0000000', 'Daharki', 'Pakistan'),
(NOW(), '2001-04-01', 'team-2.jpg', 'Muhammad Tahir', 'arazak786', 'qwe123', '+92 300 0000000', 'Ghotki', 'Pakistan'),
(NOW(), '2001-04-01', 'team-3.jpg', 'Mujeeb Ali', 'arazak786', 'qwe123', '+92 300 0000000', 'Ghotki', 'Pakistan'),
(NOW(), '2001-04-01', 'team-4.jpg', 'Ameer Ali', 'arazak786', 'qwe123', '+92 300 0000000', 'Ghotki', 'Pakistan'),
(NOW(), '2001-04-01', 'team-1.jpg', 'Abdul Razak', 'arazak786', 'qwe123', '+92 300 0000000', 'Daharki', 'Pakistan'),
(NOW(), '2001-04-01', 'team-2.jpg', 'Muhammad Tahir', 'arazak786', 'qwe123', '+92 300 0000000', 'Ghotki', 'Pakistan'),
(NOW(), '2001-04-01', 'team-3.jpg', 'Mujeeb Ali', 'arazak786', 'qwe123', '+92 300 0000000', 'Ghotki', 'Pakistan'),
(NOW(), '2001-04-01', 'team-4.jpg', 'Ameer Ali', 'arazak786', 'qwe123', '+92 300 0000000', 'Ghotki', 'Pakistan')
END