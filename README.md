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

Vajalik on serverikeskkonna ja MySQL andmebaasi olemasolu. Kasutasin MAMP-i, mille saab alla laadida [siit](https://www.mamp.info/en/mamp/).

Loo tabel kasutades järgmist SQL päringut:
```sql
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
```

Loo failist `config.php.example` oma comfig fail nimega `config.php` ning asenda seal andmebaasi parameetrid oma andmebaasi omadega.

Seejärel saad minna oma serveri avalehele (nt http://localhost:8888/) ning programmi katsetada.

## ✏️ Märkmed
Töös on kasutatud PHP-d, MySQLi ja CSS-i. Serverikeskkonnana kasutasin MAMP-i.

## 🤴 Autor
@kretesaak
