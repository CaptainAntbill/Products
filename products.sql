create database products;

  use products;

  create table product(
    id int primary key not null auto_increment,
    product_name VARCHAR(99) not null,
    price decimal(12,2) not null,
    is_active tinyint not null
  );
