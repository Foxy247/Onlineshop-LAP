# Architecture – PHP Online-Shop

## Zweck dieser Datei

Diese Datei beschreibt die aktuelle technische Struktur des Online-Shops.

Sie beginnt bewusst klein und wird nur erweitert, wenn im Projekt eine technische Entscheidung tatsächlich getroffen und umgesetzt wurde.

Fachliche Shopregeln gehören in `SHOP_DESIGN.md`. Lernziele gehören in `LEARNING_GOALS.md`.

## Aktuelle technische Struktur

`index.php` ist der Einstiegspunkt. Die Datei enthält derzeit HTML und eingebettetes PHP. Klassen und eine MVC-Aufteilung werden in späteren Quests eingeführt.

Die lokale Ausführung erfolgt über Apache und PHP aus XAMPP. Die Startanleitung steht in `README.md`.

Der aktuelle Ablauf ist:

```text
Browser → HTTP Request → Apache / PHP → index.php → HTTP Response mit HTML → Browser
```

PHP wird auf dem Server ausgeführt. Der Browser erhält das erzeugte HTML. Lernfortschritt und Quest-Status stehen in `PROGRESS.md`.

## Technologie-Stack

Für den Kernshop sind vorgesehen:

- PHP
- objektorientiertes PHP
- HTML
- CSS
- MySQL
- SQL
- PDO
- Sessions
- Git und GitHub

JavaScript und große PHP-Frameworks gehören nicht zum notwendigen Kernshop.

## Architekturziel

Der Shop soll schrittweise eine einfache MVC-Struktur erhalten.

MVC steht für:

- Model
- View
- Controller

Die Trennung soll verständlich und praktisch bleiben. Zusätzliche Architekturmuster werden nur eingeführt, wenn sie ein konkretes Problem im aktuellen Shop lösen.

## Geplanter Request Flow

Der grundsätzliche Ablauf einer Anfrage soll später so aussehen:

```text
Browser
→ HTTP Request
→ Controller
→ Model oder Geschäftslogik
→ Datenbank
→ Controller
→ View
→ HTTP Response
→ Browser
```

Dieser Ablauf ist ein Zielbild. Die tatsächlich vorhandenen Schritte werden erst dokumentiert, wenn sie implementiert wurden.

## Controller

Ein Controller ist verantwortlich für:

- Requests entgegennehmen
- Eingaben lesen
- Eingaben validieren oder eine Validierung anstoßen
- Models beziehungsweise Geschäftslogik aufrufen
- die nächste View oder Response auswählen
- Weiterleitungen koordinieren

Ein Controller soll keine umfangreiche Geschäftslogik und keine HTML-Darstellung enthalten.

## Model

Ein Model ist verantwortlich für:

- fachliche Daten
- fachliche Regeln
- benötigte Datenbankzugriffe
- Zustandsänderungen der Anwendung

Models sollen keine HTML-Ausgabe erzeugen.

Wie Models und Datenbankzugriffe im Detail getrennt werden, wird erst entschieden, wenn der vorhandene Code ein konkretes Problem zeigt.

## View

Eine View ist verantwortlich für:

- HTML-Struktur
- Darstellung übergebener Daten
- Formulare
- verständliche Rückmeldungen für Benutzer
- sichere Ausgabe dynamischer Werte

Views enthalten keine SQL-Abfragen.

## Datenbankzugriff

Der geplante Datenbankzugriff erfolgt mit PDO. Eine Datenbankanbindung ist noch nicht implementiert.

Dabei gelten folgende Grundsätze:

- Zugangsdaten werden nicht unnötig im Code wiederholt.
- SQL-Abfragen verwenden Prepared Statements.
- Datenbankfehler werden während der Entwicklung nachvollziehbar untersucht.
- Verbindungen und Abfragen werden an einer klar erkennbaren Stelle organisiert.
- Tabellenbeziehungen werden mit geeigneten Schlüsseln und Constraints abgesichert.
- Zusammengehörige Bestellvorgänge verwenden später eine Transaktion.

Die konkrete PDO-Klasse oder Verbindungsstruktur wird erst während der entsprechenden Quest festgelegt.

## Sessions

Sessions werden für zustandsbezogene Funktionen verwendet, insbesondere für:

- Warenkorb
- angemeldeten Benutzer
- gegebenenfalls kurzlebige Rückmeldungen

Eine Session muss ausdrücklich gestartet werden, bevor Sessiondaten gelesen oder verändert werden.

## Vertrauensgrenze

Der Browser ist keine vertrauenswürdige Datenquelle.

Der Browser darf beispielsweise anfordern:

```text
product_id = 42
quantity = 2
```

Der Browser darf jedoch nicht verbindlich bestimmen:

```text
price = 1.00
total = 2.00
discount = 90%
```

Preise, Summen, Verfügbarkeit, Bestand, Benutzerrechte und Bestellzugehörigkeit werden von der Anwendung anhand vertrauenswürdiger Daten bestimmt.

## Sicherheitsgrundsätze

Von Beginn an gelten:

- Eingaben validieren
- dynamische HTML-Ausgaben escapen
- Prepared Statements verwenden
- Passwörter sicher hashen und prüfen
- Benutzer authentifizieren
- Berechtigungen und Eigentum serverseitig prüfen
- zustandsverändernde Formulare gegen CSRF absichern
- keine vertraulichen Daten im Repository speichern

Sicherheit wird nicht erst am Projektende ergänzt, sondern in den jeweils relevanten Quests berücksichtigt.

## Fehlerbehandlung

Während der Entwicklung werden Fehler sichtbar und systematisch untersucht.

Dabei werden unterschieden:

- Syntaxfehler
- Laufzeitfehler
- Validierungsfehler
- Datenbankfehler
- fachliche Fehler
- Berechtigungsfehler

Benutzer erhalten verständliche Fehlermeldungen. Interne technische Details sollen später nicht öffentlich ausgegeben werden.

## Sechs-Stunden-Grenze

Die Architektur muss einfach genug bleiben, damit der Kernshop nach ausreichender Übung innerhalb von sechs Stunden programmiert werden kann.

Deshalb werden nicht automatisch eingeführt:

- große Frameworks
- komplexes Routing
- Dependency-Injection-Container
- Repository Pattern
- Service Layer
- Event-Systeme
- unnötige Interfaces oder Vererbungshierarchien

Vor jeder neuen Abstraktion wird gefragt:

> Welches konkrete Problem im aktuellen Shop löst dieses Konzept?

## Aktuelle Projektstruktur

```text
Onlineshop-LAP/
├── AGENTS.md
├── README.md
├── ROADMAP.md
├── PROGRESS.md
├── index.php
└── docs/
    ├── SHOP_DESIGN.md
    ├── ARCHITECTURE.md
    └── LEARNING_GOALS.md
```

Die Übersicht zeigt die Anwendungs- und Harness-Dateien. Sie wird bei tatsächlichen Strukturänderungen aktualisiert.

## Noch nicht entschieden

Folgende technische Entscheidungen sind bewusst noch offen:

- genaue Ordnerstruktur des Shopcodes
- konkretes Routing
- Composer-Autoloading
- Namespaces
- genaue PDO-Verbindungsklasse
- weiterführender Testablauf
- CSS-Struktur

Diese Entscheidungen werden schrittweise anhand des tatsächlichen Projektstands getroffen.
