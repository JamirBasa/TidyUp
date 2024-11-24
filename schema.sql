CREATE TABLE accounts (
    account_id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each account
    username VARCHAR(50) NOT NULL UNIQUE,      -- Unique username for the account
    email VARCHAR(100) NOT NULL UNIQUE,        -- Unique email for the account
    password VARCHAR(255) NOT NULL,            -- Encrypted password for the account
    first_name VARCHAR(50) NOT NULL,           -- User's first name
    last_name VARCHAR(50) NOT NULL,            -- User's last name
    gender ENUM('Male', 'Female', 'Other') DEFAULT 'Other', -- Gender with default value
    contact_number VARCHAR(20) NOT NULL,       -- Contact number of the user
    region VARCHAR(100) NOT NULL,              -- Region where the user resides
    province VARCHAR(100) NOT NULL,            -- Province of the user
    city VARCHAR(100) NOT NULL,                -- City of the user
    barangay VARCHAR(100) NOT NULL,            -- Barangay of the user
    detailed_address TEXT,                     -- Detailed address (optional for flexibility)
    profile_photo_path VARCHAR(255),           -- Path to the user's profile photo
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Timestamp of account creation
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Timestamp of last update
);

CREATE TABLE account_roles (
    account_role_id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each record
    account_id INT NOT NULL,                        -- Foreign key referencing accounts table
    role_id INT NOT NULL,                           -- Foreign key referencing roles table
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Timestamp for record creation
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Timestamp for updates
    CONSTRAINT fk_account_roles_account FOREIGN KEY (account_id) REFERENCES accounts(account_id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_account_roles_role FOREIGN KEY (role_id) REFERENCES roles(role_id) ON DELETE CASCADE ON UPDATE CASCADE,
    UNIQUE(account_id, role_id)                     -- Prevent duplicate combinations of account_id and role_id
); 

CREATE TABLE roles (
    role_id INT AUTO_INCREMENT PRIMARY KEY,    -- Unique identifier for each role
    role_name VARCHAR(50) NOT NULL UNIQUE,     -- Name of the role (e.g., Customer, Shop Admin)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Timestamp for record creation
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Timestamp for updates
); 

CREATE TABLE shop (
    shop_id INT AUTO_INCREMENT PRIMARY KEY,       -- Unique identifier for each shop
    shop_name VARCHAR(100) NOT NULL UNIQUE,       -- Name of the shop
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Timestamp for record creation
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Timestamp for updates
); 

CREATE TABLE shop_account (
    shop_account_id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each record
    account_id INT NOT NULL,                        -- Foreign key referencing accounts table
    shop_id INT NOT NULL,                           -- Foreign key referencing shop table
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Timestamp for record creation
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Timestamp for updates
    CONSTRAINT fk_shop_account_account FOREIGN KEY (account_id) REFERENCES accounts(account_id) 
        ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_shop_account_shop FOREIGN KEY (shop_id) REFERENCES shop(shop_id) 
        ON DELETE CASCADE ON UPDATE CASCADE,
    UNIQUE KEY unique_account_shop (account_id, shop_id) -- Prevent duplicate combinations of account_id and shop_id
); 

CREATE TABLE shop_branch (
    branch_id INT AUTO_INCREMENT PRIMARY KEY,           -- Unique identifier for each branch
    shop_id INT NOT NULL,                               -- Foreign key referencing shop table
    branch_name VARCHAR(100) NOT NULL,                 -- Name of the branch
    contact_number VARCHAR(15),                        -- Contact number of the branch
    region VARCHAR(100) NOT NULL,                      -- Region of the branch
    province VARCHAR(100) NOT NULL,                    -- Province of the branch
    city VARCHAR(100) NOT NULL,                        -- City of the branch
    barangay VARCHAR(100),                             -- Barangay of the branch
    detailed_address TEXT,                             -- Detailed address of the branch
    availability ENUM('Available', 'Unavailable') DEFAULT 'Available', -- Availability status
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,    -- Record creation timestamp
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Record update timestamp
    CONSTRAINT fk_shop_branch_shop FOREIGN KEY (shop_id) REFERENCES shop(shop_id)
        ON DELETE CASCADE ON UPDATE CASCADE
); 

CREATE TABLE shop_gallery (
    shop_gallery_id INT AUTO_INCREMENT PRIMARY KEY,    -- Unique identifier for each gallery entry
    branch_id INT NOT NULL,                            -- Foreign key referencing shop_branch table
    img_url TEXT NOT NULL,                             -- URL of the image
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,    -- Record creation timestamp
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Record update timestamp
    CONSTRAINT fk_shop_gallery_branch FOREIGN KEY (branch_id) REFERENCES shop_branch(branch_id)
        ON DELETE CASCADE ON UPDATE CASCADE
); 

CREATE TABLE operation_hours (
    operation_hours_id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each record
    branch_id INT NOT NULL,                            -- Foreign key referencing shop_branch table
    day ENUM('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday') NOT NULL, -- Day of the week
    opening_time TIME NOT NULL,                        -- Opening time of the branch
    closing_time TIME NOT NULL,                        -- Closing time of the branch
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,    -- Record creation timestamp
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Record update timestamp
    CONSTRAINT fk_operation_hours_branch FOREIGN KEY (branch_id) REFERENCES shop_branch(branch_id)
        ON DELETE CASCADE ON UPDATE CASCADE
); 

CREATE TABLE branch_categories (
    branch_category_id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each record
    branch_id INT NOT NULL,                              -- Foreign key referencing shop_branch table
    category_id INT NOT NULL,                            -- Foreign key referencing appointment_categories table
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,      -- Record creation timestamp
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Record update timestamp
    CONSTRAINT fk_branch_categories_branch FOREIGN KEY (branch_id) REFERENCES shop_branch(branch_id)
        ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_branch_categories_category FOREIGN KEY (category_id) REFERENCES appointment_categories(category_id)
        ON DELETE CASCADE ON UPDATE CASCADE,
    UNIQUE KEY unique_branch_category (branch_id, category_id) -- Prevent duplicate combinations
);

CREATE TABLE appointment_categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,        -- Unique identifier for each category
    category_name VARCHAR(100) NOT NULL UNIQUE,        -- Name of the category
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,    -- Record creation timestamp
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Record update timestamp
); 

CREATE TABLE branch_appointment_types (
    branch_appointment_type_id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each record
    branch_id INT NOT NULL,                                    -- Foreign key referencing shop_branch table
    appointment_type_id INT NOT NULL,                         -- Foreign key referencing appointment_types table
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,            -- Record creation timestamp
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Record update timestamp
    CONSTRAINT fk_branch_appointment_branch FOREIGN KEY (branch_id) REFERENCES shop_branch(branch_id)
        ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_branch_appointment_type FOREIGN KEY (appointment_type_id) REFERENCES appointment_types(appointment_type_id)
        ON DELETE CASCADE ON UPDATE CASCADE,
    UNIQUE KEY unique_branch_appointment_type (branch_id, appointment_type_id) -- Prevent duplicate combinations
); 

CREATE TABLE appointment_types (
    appointment_type_id INT AUTO_INCREMENT PRIMARY KEY,       -- Unique identifier for each appointment type
    appointment_type VARCHAR(50) NOT NULL UNIQUE,             -- Name of the appointment type
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,           -- Record creation timestamp
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Record update timestamp
);

CREATE TABLE shop_reviews (
    review_id INT AUTO_INCREMENT PRIMARY KEY,         -- Unique identifier for each review
    shop_id INT NOT NULL,                             -- Foreign key referencing the shop table
    branch_id INT NOT NULL,                           -- Foreign key referencing the shop_branch table
    account_id INT NOT NULL,                          -- Foreign key referencing the account table
    rating TINYINT NOT NULL CHECK (rating BETWEEN 1 AND 5), -- Rating (1-5 scale)
    review_text TEXT,                                 -- Optional text feedback
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,   -- Record creation timestamp
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Record update timestamp
    CONSTRAINT fk_shop_reviews_shop FOREIGN KEY (shop_id) REFERENCES shop(shop_id)
        ON DELETE CASCADE ON UPDATE CASCADE,         -- Ensures referential integrity for shop
    CONSTRAINT fk_shop_reviews_branch FOREIGN KEY (branch_id) REFERENCES shop_branch(branch_id)
        ON DELETE CASCADE ON UPDATE CASCADE,         -- Ensures referential integrity for branch
    CONSTRAINT fk_shop_reviews_account FOREIGN KEY (account_id) REFERENCES account(account_id)
        ON DELETE CASCADE ON UPDATE CASCADE,         -- Ensures referential integrity for user account
    UNIQUE KEY unique_shop_review (branch_id, account_id) -- Prevent duplicate reviews for the same branch by the same user
); 

CREATE TABLE appointment_services (
    appointment_services_id INT AUTO_INCREMENT PRIMARY KEY,  -- Unique identifier for each entry
    appointment_id INT NOT NULL,                            -- Foreign key referencing the appointment table
    service_id INT NOT NULL,                                -- Foreign key referencing the services table
    quantity INT NOT NULL DEFAULT 1,                         -- The quantity of the service booked for the appointment
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,   -- Record creation timestamp
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Record update timestamp
    CONSTRAINT fk_appointment_services_appointment FOREIGN KEY (appointment_id) REFERENCES appointment(appointment_id)
        ON DELETE CASCADE ON UPDATE CASCADE,                -- Ensures referential integrity for appointment
    CONSTRAINT fk_appointment_services_service FOREIGN KEY (service_id) REFERENCES services(service_id)
        ON DELETE CASCADE ON UPDATE CASCADE                 -- Ensures referential integrity for service
); 

CREATE TABLE services (
    service_id INT AUTO_INCREMENT PRIMARY KEY,         -- Unique identifier for each service
    branch_category_id INT NOT NULL,                    -- Foreign key referencing branch_categories table
    name VARCHAR(255) NOT NULL,                          -- The name of the service (e.g., haircut, massage)
    cost DECIMAL(10, 2) NOT NULL,                       -- The cost of the service
    duration INT NOT NULL,                              -- Duration of the service in minutes
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,   -- Record creation timestamp
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Record update timestamp   
    CONSTRAINT fk_services_branch_category FOREIGN KEY (branch_category_id) REFERENCES branch_categories(branch_category_id)
        ON DELETE CASCADE ON UPDATE CASCADE             -- Ensures referential integrity for branch categories
); 

CREATE TABLE appointment_customer (
    appointment_customer_id INT AUTO_INCREMENT PRIMARY KEY,  -- Unique identifier for each entry
    appointment_id INT NOT NULL,                             -- Foreign key referencing the appointment table
    customer_id INT NOT NULL,                                -- Foreign key referencing the account table (specifically customers)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,   -- Record creation timestamp
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Record update timestamp
    CONSTRAINT fk_appointment_customer_appointment FOREIGN KEY (appointment_id) 
        REFERENCES appointment(appointment_id) 
        ON DELETE CASCADE ON UPDATE CASCADE,                 -- Ensures referential integrity for appointments
    CONSTRAINT fk_appointment_customer_customer FOREIGN KEY (customer_id) 
        REFERENCES account(account_id) 
        ON DELETE CASCADE ON UPDATE CASCADE                  -- Ensures referential integrity for customers
);

CREATE TABLE employee_branch (
    employee_branch_id INT AUTO_INCREMENT PRIMARY KEY,    -- Unique identifier for each employee-branch record
    branch_id INT NOT NULL,                                -- Foreign key referencing the branch table
    employee_id INT NOT NULL,                              -- Foreign key referencing the employee table
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,        -- Automatically tracks the creation time
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,  -- Automatically tracks updates
    CONSTRAINT fk_employee_branch_branch FOREIGN KEY (branch_id) 
        REFERENCES shop_branch(branch_id) 
        ON DELETE CASCADE ON UPDATE CASCADE,               -- Ensures referential integrity for branches
    CONSTRAINT fk_employee_branch_employee FOREIGN KEY (employee_id) 
        REFERENCES employee(employee_id) 
        ON DELETE CASCADE ON UPDATE CASCADE                -- Ensures referential integrity for employees
); 

CREATE TABLE employee (
    employee_id INT AUTO_INCREMENT PRIMARY KEY,           -- Unique identifier for each employee
    account_id INT NOT NULL,                               -- Foreign key referencing the account table (user details)
    hire_date DATE NOT NULL,                               -- The date the employee was hired
    status ENUM('active', 'inactive', 'suspended') NOT NULL, -- Current status of the employee
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,        -- Automatically tracks the creation time
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,  -- Automatically tracks updates
    CONSTRAINT fk_employee_account FOREIGN KEY (account_id) 
        REFERENCES account(account_id) 
        ON DELETE CASCADE ON UPDATE CASCADE                 -- Ensures referential integrity for accounts
); 

CREATE TABLE employee_roles (
    employee_roles_id INT AUTO_INCREMENT PRIMARY KEY,     -- Unique identifier for each employee-role record
    employee_id INT NOT NULL,                              -- Foreign key referencing the employee table
    shop_roles_id INT NOT NULL,                            -- Foreign key referencing the shop_roles table
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,        -- Automatically tracks the creation time
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,  -- Automatically tracks updates
    CONSTRAINT fk_employee_roles_employee FOREIGN KEY (employee_id) 
        REFERENCES employee(employee_id) 
        ON DELETE CASCADE ON UPDATE CASCADE,               -- Ensures referential integrity for employees
    CONSTRAINT fk_employee_roles_shop_role FOREIGN KEY (shop_roles_id) 
        REFERENCES shop_roles(shop_roles_id) 
        ON DELETE CASCADE ON UPDATE CASCADE                -- Ensures referential integrity for shop roles
); 

CREATE TABLE shop_roles (
    shop_roles_id INT AUTO_INCREMENT PRIMARY KEY,         -- Unique identifier for each shop role
    role_name VARCHAR(255) NOT NULL,                        -- The name of the role (e.g., Manager, Barber, etc.)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,        -- Automatically tracks the creation time
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  -- Automatically tracks updates
); 

CREATE TABLE appointments (
    appointment_id INT AUTO_INCREMENT PRIMARY KEY,
    branch_appointment_type_id INT,
    appointment_schedule DATETIME,
    status VARCHAR(50),
    total_price DECIMAL(10, 2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (branch_appointment_type_id) REFERENCES branch_appointment_types(branch_appointment_type_id)
);

CREATE TABLE appointment_employee (
    appointment_employee_id INT AUTO_INCREMENT PRIMARY KEY,
    appointment_id INT,
    branch_id INT,
    employee_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (appointment_id) REFERENCES appointments(appointment_id),
    FOREIGN KEY (branch_id) REFERENCES shop_branch(branch_id),
    FOREIGN KEY (employee_id) REFERENCES employee(employee_id)
);
