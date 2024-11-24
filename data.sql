INSERT INTO roles (role_name)
VALUES 
    ('Platform Admin'),
    ('Shop Admin'),
    ('Shop Staff'),
    ('Customer');

INSERT INTO shop_roles (role_name)
VALUES 
    ('Manager'),
    ('Stylist'),
    ('Staff');

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
