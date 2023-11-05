/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  alexm
 * Created: 31 oct. 2023
 */

CREATE DATABASE rolegame;

USE rolegame;

CREATE TABLE creature (
    idCreature Int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name varchar(150),
    descripcion varchar(255),
    avatar varchar(255),
    attackPower int(11),
    lifeLevel int(11),
    weapon varchar(45)

);
INSERT INTO creature (name, descripcion, avatar, attackPower, lifeLevel, weapon)
VALUES
    ('Centinela', 'Una criatura protectora', 'https://th.bing.com/th/id/OIP.juSmyQKRVAP-4AWShHogfAHaKL?pid=ImgDet&rs=1', 120, 600, 'Escudo'),
    ('Gloria Radiante', 'Una criatura divina', 'https://th.bing.com/th/id/OIP.n5PFpqPJcXJXYoaXpGXtTgHaIf?w=177&h=203&c=7&r=0&o=5&dpr=1.3&pid=1.7', 150, 800, 'Espada Luminosa'),
    ('Minotauro', 'Una criatura mitológica', 'https://th.bing.com/th/id/OIP.wdHCXWBZRb_ukNDEa93iiAHaLI?w=202&h=304&c=7&r=0&o=5&dpr=1.3&pid=1.7', 130, 700, 'Hacha de Guerra');

