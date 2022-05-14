create table contenu(
    id INT PRIMARY KEY auto_increment,
    dateajout timestamp default CURRENT_TIMESTAMP,
    title VARCHAR(255) NOT NULL default 'Nouvel article',
    texte text NOT null
);