# Voco-test

## 📚 Sissejuhatus
See projekt on proovitöö Tartu Rakendusliku Kolledži programmeerija ametikohale.

## 📋 Proovitöö kirjeldus

Teha sisselogimisega veebileht.

1. registreerimisvorm (nime lahter).

2. luua kasutajanimi ja salvestada andmebaasi.

3. luua sisselogimisaken.

4. kasutajanimega sisse logimine.

5. peale sisse logimist näidata veebilehel andmebaasi salvestatud nime.

6. laadida lähtekood üles git-i.

Kasutada mysqli, javascripti, ajax päringut, php-d, css-i

Peaks olema mobiilisõbralik veebileht.

## 🏃‍♂️ Programmi kasutamine

Loo tabel kasutades järgmist SQL päringut:
`
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
`

## ✏️ Märkmed
The server is written in Go. HTML, CSS and JavaScript are used for frontend. SQLite database is used to store data.

## 🤴 Autor
@kretesaak \
