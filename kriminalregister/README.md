**Guide til kriminalregister** 

**Dette er et kriminalregister jeg har oversat om i det er altså ikke mig der har lavet der, der der credits i bunden af selve hjemmesiden.**


Jeg bruger xaaamp som program til at åbne mine porter. Dvs jeg kan kun guide jer hvis i bruger det samme. I skal smide min mappe ind i C:\xampp\htdocs

Default bliver jeres domain jeres ip.

## Sådan downloader/ sætter du det op
- download via github, hvis du har "git" kan du med forddel bruge det.
Derefter åbner du config.php hvor du skal sætte **DINE** database oplysninger ind!

```
$username = "police-portal"; // Brugernavn
$password = "your password"; // Kodeord
$hostname = "localhost"; // host ip 
$namebase = "police"; // Navnet på databasen.
```
- Importer `databse.sql` filen til din database! jeg bruger selv heidisql som program.
- Upload filerne til dit website og gå ind på  `http://yoursite.com/signup.php` der kan du oprette en account.
- Når du har lavet en account så omdøb eller slet  `signup.php`  til noget andet som andre ikke skal have afvide så folk ikke kan lave flere kontoer
- FÆRDIG!

- Kontakt mig på discord Valdemar#1732 hvis du evt har brug for hjælp.
