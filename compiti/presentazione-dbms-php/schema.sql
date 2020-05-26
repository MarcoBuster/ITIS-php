USE articles;

CREATE TABLE IF NOT EXISTS articles.article (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(20) NOT NULL,
    subtitle VARCHAR(30) NOT NULL,
    body VARCHAR(4096) NOT NULL,
    creation_date DATE NOT NULL,
    author_id INT NOT NULL,
    FOREIGN KEY (author_id) REFERENCES author(id)
);

CREATE TABLE IF NOT EXISTS articles.author (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    surname VARCHAR(30) NOT NULL
);

CREATE TABLE IF NOT EXISTS articles.image (
    id INT AUTO_INCREMENT PRIMARY KEY,
    path VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS articles.contains (
    id_articles INT NOT NULL,
    id_image INT NOT NULL,
    PRIMARY KEY (id_articles, id_image)
);
