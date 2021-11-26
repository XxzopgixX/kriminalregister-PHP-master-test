# kriminalregister


## Jeg gør opmærksom på, at dette script er ret gammelt det vil sige at billeder mm, kan være taget ned fra nettet eller skiftet URL og dermed bliver de ikke vist på hjemmeside, i bør derfor gå ind og skift dem til nye URL'er
Guide til kriminalregister 

Dette er et kriminalregister jeg har oversat om i det er altså ikke mig der har lavet der, der der credits i bunden af selve hjemmesiden.

##HUSK AT HAVE JERES XAMPP KLAR

Der vil komme en update hvor jeg forklare hvordan du sætter det op i xampp. ELLERS BRUG GOOGLE IKKE SÅ SVÆRT.


Du skal have MySql og apache startet i din xampp

## Sådan downloader du det...
- download via github, hvis du har "git clone" kan du med forddel bruge det.
Derefter åbner du config.cpp hvor du skal sætte DINE database oplysninger ind!

```
$username = "police-portal"; // Brugernavn
$password = "your password"; // Kodeord
$hostname = "localhost"; // host ip 
$namebase = "police"; // Navnet på databasen.
```
- Importer `databse.sql` filen til din database! jeg bruger selv heidisql som program.
- Upload filerne til dit website og gå ind på  `localhost/signup.php` der kan du oprette en account.bemærk dette er hvis du kører localhost. Hvis du kører det på en Dedicated, og vil connecter fra din egen computer, så skriver du: jeresip/signup.php, når det er første gang du skal logge ind.
- Når du har lavet en account så omdøb  `signup.php`  Til noget der er hemmeligt, så kan andre ikke gå ind og oprette kontoer. 
- FÆRDIG!

- Kontakt mig på discord Valdemar#1732 hvis du evt har brug for hjælp.
