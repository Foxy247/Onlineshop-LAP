# Roadmap – PHP Online-Shop

## Ziel

Dieses Projekt dient dazu, einen einfachen browserbasierten Online-Shop selbst zu planen, zu programmieren, zu testen und zu verstehen.

Die Lernphase darf länger dauern. Nach ausreichender Übung soll der definierte Kernshop innerhalb von sechs Stunden erneut programmiert werden können.

Die Roadmap beschreibt große Lern- und Entwicklungsabschnitte. Konkrete Mini-Quests entstehen jeweils aus dem aktuellen Projektstand.

## Kapitel 0 – Agent Harness und Projektgrundlagen

- Arbeitsregeln für Codex festlegen
- Lernziele und Shopumfang dokumentieren
- Fortschrittsdatei vorbereiten
- Entwicklungsumgebung prüfen
- Git-Grundlagen anwenden

## Kapitel 1 – PHP und der erste Request

- erste PHP-Seite im Browser ausführen
- PHP-Ausgabe verstehen
- Variablen und Datentypen verwenden
- Bedingungen, Schleifen und Funktionen einsetzen
- HTTP Request und HTTP Response kennenlernen

## Kapitel 2 – Produkte darstellen

- ein Produkt objektorientiert beschreiben
- mehrere Produkte verwalten
- Produktdaten mit PHP ausgeben
- Produktübersicht darstellen
- dynamische Werte sicher in HTML ausgeben

## Kapitel 3 – MySQL und PDO

- Datenbank und Produkttabelle erstellen
- Primärschlüssel und passende Datentypen verstehen
- PDO-Verbindung herstellen
- Produkte mit SQL speichern und auslesen
- Prepared Statements verwenden
- Datenbankfehler systematisch untersuchen

## Kapitel 4 – Einfache MVC-Struktur

- Request Flow nachvollziehen
- Model, View und Controller unterscheiden
- Darstellung, Steuerung und Datenzugriff trennen
- bestehende Produktdarstellung schrittweise strukturieren
- nur notwendige Abstraktionen einführen

## Kapitel 5 – Warenkorb

- Session starten und verstehen
- Produkt-ID und Menge entgegennehmen
- Eingaben serverseitig validieren
- Produkte zum Warenkorb hinzufügen
- Warenkorb anzeigen
- Mengen verändern
- Produkte entfernen
- Gesamtsumme serverseitig berechnen
- manipulierte Browserwerte erkennen und abwehren

## Kapitel 6 – Registrierung und Login

- Benutzer in der Datenbank speichern
- Registrierungsdaten validieren
- Passwörter mit `password_hash()` speichern
- Login mit `password_verify()` prüfen
- angemeldete Benutzer in der Session verwalten
- Authentifizierung und Autorisierung unterscheiden

## Kapitel 7 – Bestellung und Checkout

- Bestellungen und Bestellpositionen modellieren
- Warenkorbdaten vor dem Kauf erneut prüfen
- Produktpreise serverseitig laden
- historischen Bestellpreis speichern
- Bestellung und Bestellpositionen gemeinsam speichern
- Grundlagen von Datenbanktransaktionen anwenden
- nur eigene Bestellungen anzeigen

## Kapitel 8 – Sicherheit und Qualität

- Eingaben validieren
- Ausgaben gegen XSS absichern
- SQL Injection mit Prepared Statements verhindern
- zustandsverändernde Formulare gegen CSRF schützen
- Sessions sicher verwenden
- Benutzer- und Eigentumsrechte prüfen
- Fehler systematisch debuggen
- wichtige Abläufe manuell testen

## Kapitel 9 – Sechs-Stunden-Abschlussdurchlauf

Der Kernshop wird nach der Lernphase erneut von Grund auf umgesetzt.

Zum Kern gehören:

- Projektgrundlage und PDO-Verbindung
- Produktliste aus MySQL
- Session-Warenkorb
- Mengenänderung und Entfernen
- serverseitige Gesamtsumme
- Registrierung und Login
- einfache Bestellung
- Bestellpositionen mit historischem Preis
- grundlegende Validierung und Sicherheit
- abschließender Funktions- und Verständnischeck

Während des Abschlussdurchlaufs wird dokumentiert:

- welche Bereiche sicher beherrscht werden
- wo Zeit verloren geht
- welche Fehler wiederholt auftreten
- welche Konzepte noch geübt werden müssen

## Spätere Erweiterungen

Diese Funktionen gehören nicht automatisch zum Sechs-Stunden-Kern:

- Produktdetailseite
- Kategorien und Suche
- Produktbilder und Datei-Uploads
- mehrere Liefer- und Rechnungsadressen
- Passwortänderung
- Administrationsbereich
- Lagerverwaltung
- Rabatte und Gutscheine
- E-Mail-Versand
- Zahlungsanbieter
- komplexeres Routing
- JavaScript- und Fetch-Erweiterungen

Erweiterungen werden nur eingeführt, wenn ihr konkreter Nutzen für den aktuellen Shop erklärt werden kann.