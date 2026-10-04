# Learning Goals – PHP Online-Shop

## Zweck dieser Datei

Diese Datei beschreibt, welche Kenntnisse und Fähigkeiten beim Bau des Online-Shops gelernt und geübt werden sollen.

Die Roadmap beschreibt, wann große Themen behandelt werden. Diese Datei beschreibt, was Emanuel anschließend verstehen und erklären können soll.

Ein Lernziel gilt nicht allein deshalb als erreicht, weil der Code funktioniert. Die wesentlichen Zusammenhänge müssen auch verständlich erklärt werden können.

## PHP-Grundlagen

Emanuel soll verstehen und anwenden können:

- Variablen
- grundlegende Datentypen
- Strings
- Zahlen
- Booleans
- `null`
- Bedingungen
- Vergleichsoperatoren
- logische Operatoren
- Schleifen
- Funktionen
- Parameter
- Rückgabewerte
- Arrays
- assoziative Arrays
- Zugriff auf Arraywerte
- Arbeiten mit mehreren zusammengehörigen Daten
- Einbinden von PHP-Dateien
- Fehlerausgabe während der Entwicklung

## Formulare und Eingaben

Emanuel soll verstehen und erklären können:

- wie ein HTML-Formular Daten sendet
- den Unterschied zwischen `GET` und `POST`
- wie PHP auf Formulardaten zugreift
- warum Browserdaten nicht automatisch vertrauenswürdig sind
- wie Pflichtfelder geprüft werden
- wie Zahlenbereiche validiert werden
- wie ungültige Eingaben behandelt werden
- wie Formularwerte nach einem Fehler erhalten bleiben
- warum Validierung serverseitig stattfinden muss

## Objektorientiertes PHP

Emanuel soll verstehen und anwenden können:

- Klassen
- Objekte
- Properties
- Methoden
- Konstruktoren
- Parameter und Rückgabewerte von Methoden
- `public`, `protected` und `private`
- Objektzustand
- Verantwortlichkeiten von Klassen
- Komposition
- Abhängigkeiten zwischen Objekten

Später können bei einem konkreten Bedarf ergänzt werden:

- Namespaces
- Autoloading
- Vererbung
- Interfaces
- abstrakte Klassen

Diese Konzepte werden nicht allein deshalb eingesetzt, weil sie existieren.

## HTTP und Webentwicklung

Emanuel soll erklären können:

- was ein Browser an den Server sendet
- was ein HTTP Request ist
- was eine HTTP Response ist
- wie PHP eine Response erzeugt
- wie URL, Methode und Formulardaten zusammenhängen
- warum ein Redirect eine neue Anfrage auslöst
- was das Post/Redirect/Get-Prinzip bewirkt
- welche Daten der Browser manipulieren kann
- welche Verantwortung der Server besitzt

## Sessions und Zustand

Emanuel soll verstehen und anwenden können:

- warum HTTP grundsätzlich zustandslos ist
- wofür Sessions verwendet werden
- wie eine Session gestartet wird
- wie Werte in `$_SESSION` gespeichert werden
- wie Sessionwerte gelesen und verändert werden
- wie ein Warenkorb in einer Session dargestellt werden kann
- wie ein angemeldeter Benutzer in einer Session erkannt wird
- wie Sessiondaten beim Logout beendet werden
- welche Sicherheitsprobleme bei Sessions entstehen können

## MVC

Emanuel soll die Aufgaben von Model, View und Controller unterscheiden können.

### Model

Emanuel soll erklären können:

- welche fachlichen Daten ein Model bearbeitet
- wo fachliche Regeln hingehören
- wie Models mit gespeicherten Daten arbeiten
- warum ein Model kein HTML ausgeben soll

### View

Emanuel soll erklären können:

- warum eine View für die Darstellung zuständig ist
- wie Daten in HTML ausgegeben werden
- warum SQL-Abfragen nicht in Views gehören
- warum dynamische Ausgaben escaped werden müssen

### Controller

Emanuel soll erklären können:

- wie ein Controller einen Request verarbeitet
- wie Eingaben gelesen und geprüft werden
- wie Models aufgerufen werden
- wie eine View oder Weiterleitung ausgewählt wird
- warum große Geschäftslogik nicht in Controller gehört

### Request Flow

Emanuel soll den Weg einer Anfrage erklären können:

```text
Browser
→ Request
→ Controller
→ Model oder Geschäftslogik
→ Datenbank
→ Controller
→ View
→ Response
→ Browser

```

## SQL und relationale Datenbanken

Emanuel soll verstehen und anwenden können:

- Datenbanken und Tabellen
- Spalten und Zeilen
- passende SQL-Datentypen
- Primärschlüssel
- Fremdschlüssel
- Beziehungen zwischen Tabellen
- `NOT NULL`
- `UNIQUE`
- Standardwerte
- Datenintegrität
- grundlegende Normalisierung
- Indizes auf grundlegender Ebene

Emanuel soll folgende SQL-Befehle verwenden und erklären können:

- `SELECT`
- `INSERT`
- `UPDATE`
- `DELETE`
- `WHERE`
- `ORDER BY`
- `GROUP BY`
- `JOIN`

## Shop-Datenmodell

Emanuel soll erklären können:

- welche Daten ein Produkt benötigt
- welche Daten ein Benutzerkonto benötigt
- warum eine Bestellung zu einem Benutzer gehört
- warum eine Bestellung mehrere Bestellpositionen besitzt
- warum eine Bestellposition Produkt, Menge und Kaufpreis benötigt
- warum der damalige Kaufpreis gespeichert wird
- wie Primär- und Fremdschlüssel diese Beziehungen abbilden
- warum Bestellung und Bestellpositionen gemeinsam gespeichert werden müssen

## PDO

Emanuel soll verstehen und anwenden können:

- eine PDO-Verbindung herstellen
- Verbindungsfehler erkennen
- SQL-Abfragen vorbereiten
- Prepared Statements verwenden
- Parameter binden
- einzelne Datensätze laden
- mehrere Datensätze laden
- Änderungen speichern
- die ID eines neu angelegten Datensatzes erhalten
- PDO-Fehler während der Entwicklung untersuchen
- Datenbanktransaktionen beginnen, bestätigen und zurückrollen

## Warenkorb

Emanuel soll erklären und umsetzen können:

- welche Daten ein Warenkorb benötigt
- warum Produkt-ID und Menge ausreichen können
- wie ein Warenkorb in der Session gespeichert wird
- wie Produktdaten anhand ihrer IDs geladen werden
- wie ungültige oder nicht mehr verfügbare Produkte behandelt werden
- wie Mengen validiert werden
- wie Produkte entfernt werden
- wie die Gesamtsumme aus vertrauenswürdigen Preisen berechnet wird
- warum ein vom Browser übermittelter Gesamtpreis nicht verwendet werden darf

## Registrierung und Login

Emanuel soll verstehen und anwenden können:

- Registrierungsdaten validieren
- doppelte E-Mail-Adressen verhindern
- Passwörter mit `password_hash()` speichern
- Passwörter mit `password_verify()` prüfen
- erfolgreiche und fehlgeschlagene Logins behandeln
- einen Benutzer in der Session speichern
- einen Benutzer abmelden
- Authentifizierung und Autorisierung unterscheiden

## Bestellung und Checkout

Emanuel soll erklären und umsetzen können:

- warum der Warenkorb vor dem Kauf erneut geprüft wird
- wie Produktpreise erneut aus der Datenbank geladen werden
- wie eine Bestellung angelegt wird
- wie Bestellpositionen angelegt werden
- wie historische Preise gespeichert werden
- wie zusammengehörige Schreibvorgänge mit einer Transaktion geschützt werden
- wann eine Transaktion zurückgerollt werden muss
- warum Benutzer nur ihre eigenen Bestellungen sehen dürfen
- warum der Warenkorb erst nach erfolgreicher Bestellung geleert wird

## Sicherheit

Emanuel soll die folgenden Risiken verstehen und passende Schutzmaßnahmen anwenden können:

### SQL Injection

- unsichere SQL-Zusammensetzung erkennen
- Prepared Statements verwenden
- Werte nicht direkt in SQL einsetzen

### Cross-Site Scripting

- dynamische Browserausgaben erkennen
- Ausgaben mit `htmlspecialchars()` schützen
- Eingabevalidierung und Ausgabe-Escaping unterscheiden

### Authentifizierung und Autorisierung

- feststellen, ob ein Benutzer angemeldet ist
- Benutzerrechte prüfen
- Eigentum an Bestellungen prüfen
- fremde IDs in manipulierten Requests berücksichtigen

### CSRF

- zustandsverändernde Aktionen erkennen
- CSRF-Tokens erzeugen
- CSRF-Tokens in Formularen mitsenden
- Tokens vor einer Aktion prüfen

### Manipulierte Shopdaten

- Produktpreise nicht aus dem Browser übernehmen
- Gesamtsummen serverseitig berechnen
- Produktverfügbarkeit erneut prüfen
- Mengen und Lagerbestand erneut prüfen
- Benutzer- und Bestellzugehörigkeit kontrollieren

## Fehlerbehandlung und Debugging

Emanuel soll Fehler systematisch untersuchen können:

1. Fehlermeldung vollständig lesen
2. Datei und Zeile bestimmen
3. Fehlermeldung in eigenen Worten erklären
4. mögliche Ursachen formulieren
5. Hypothesen einzeln testen
6. geeignete Debugging-Ausgaben verwenden
7. nur eine Änderung gleichzeitig vornehmen
8. Ergebnis erneut prüfen

Dafür sollen unter anderem verwendet werden:

- PHP-Fehlerausgabe
- `var_dump()`
- `print_r()`
- Browser Developer Tools
- Network Tab
- Datenbankabfragen
- Logs

## Testen und Code-Review

Emanuel soll unterscheiden können zwischen:

- Syntaxprüfung
- funktionalem Test
- Logikprüfung
- Sicherheitsprüfung
- Verständnisprüfung

Emanuel soll vor Abschluss einer Quest:

- den betroffenen Ablauf selbst testen
- gültige Eingaben prüfen
- ungültige Eingaben prüfen
- Grenzfälle berücksichtigen
- Veränderungen im Code nachvollziehen
- die wichtigsten Entscheidungen erklären

## Git und GitHub

Emanuel soll anwenden können:

- Repository initialisieren
- Änderungen mit `git status` prüfen
- Diffs lesen
- Dateien gezielt zum Commit vormerken
- sinnvolle Commits erstellen
- konkrete Commit-Messages formulieren
- Unterschiede zwischen Commit und Push erklären
- den aktuellen Projektstand sichern

Ein Commit wird erst erstellt, wenn die Änderung geprüft, getestet und verstanden wurde.

## Sechs-Stunden-Kompetenz

Nach der Lernphase soll Emanuel den Kernshop innerhalb von sechs Stunden erneut umsetzen können.

Dazu soll er:

- die notwendige Reihenfolge selbst planen
- die Datenbankbeziehungen erklären
- die grundlegende Projektstruktur selbst aufbauen
- typische Fehler selbstständig eingrenzen
- unnötige Funktionen weglassen
- den Kernshop vollständig testen
- wichtige Sicherheitsregeln auch unter Zeitdruck anwenden

Die sechs Stunden messen nicht die erste Lernphase. Sie bilden einen späteren, vorbereiteten Abschlussdurchlauf.