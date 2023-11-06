# Voco-test

## 📚 Sissejuhatus
See projekt on proovitöö Tartu Rakendusliku Kolledži programmeerija ametikohale.

Töö tegemiseks kulus kokku 4 tundi. See oli minu esimene kokkupuude PHP-ga. Otsustasin mitte kasutada JavaScript, kuigi see on kindlasti minu tugevam külg ja olen sellega palju töötanud, kuid selle rakenduse puhul tundus, et see lisab üleliigset keerukust, mis ei ole vajalik. Kõik vajaliku, mille puhul tavaliselt kaaluksin JavaScripti kasutamist, sai siin lihtsalt lahendada PHP abil. Kui oleks vaja näiteks dünaamiliselt lisada midagi juba laetud lehele, siis oleks kindlasti JavaScript selle jaoks parim (näiteks olukorras, kus kasutaja valiku tagajärjel tekib uus input väli). Veetsin aega ka stiilile keskendudes, kuna CSS-iga toimetamine ja pikslite sättimine on üks minu lemmikuid tegevusi JavaScriptiga lehtede dünaamiliseks tegemise kõrval.

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
