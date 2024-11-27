INSERT INTO roles (role_name)
VALUES 
    ('Platform Admin'),
    ('Shop Owner'),
    ('Shop Staff'),
    ('Customer');

INSERT INTO shop_roles (role_name)
VALUES 
    ('Manager'),
    ('Stylist'),
    ('Staff');

INSERT INTO branch_categories (category_name) VALUES
('Barbershop'),
('Beauty Salon'),
('Nail Salon'),
('Hair Salon');

INSERT INTO appointment_categories (category_name)
VALUES 
    ('Haircut'),
    ('Hairstyle'),
    ('Manicure'),
    ('Pedicure'),
    ('Grooming'),
    ('Others');

INSERT INTO appointment_types (appointment_type)
VALUES 
    ('Solo Appointment'),
    ('Multiple People Appointment'),
    ('Bulk Appointment');
