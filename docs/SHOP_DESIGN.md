# Shop Design – PHP Online-Shop

## Zweck des Shops

Der Online-Shop ist ein Lernprojekt.

Er soll die wichtigsten Abläufe eines einfachen Shops verständlich darstellen. Er ist nicht für den echten Verkauf, ein Unternehmen oder reale Zahlungen vorgesehen.

Der Kernshop soll nach ausreichender Übung innerhalb von sechs Stunden programmiert werden können.

## Benutzerrollen

### Gast

Ein Gast darf:

- Produkte ansehen
- Produkte in den Warenkorb legen
- den Warenkorb ansehen und verändern
- ein Benutzerkonto erstellen
- sich anmelden

Ein Gast darf keine Bestellung abschließen.

### Eingeloggter Kunde

Ein eingeloggter Kunde darf:

- alle Funktionen eines Gasts verwenden
- eine Bestellung aus dem Warenkorb erstellen
- die eigenen Bestellungen ansehen
- sich abmelden

Ein Kunde darf keine fremden Bestellungen ansehen oder verändern.

### Administrator

Ein vollständiger Administrationsbereich gehört nicht automatisch zum Sechs-Stunden-Kern.

Er kann später als Erweiterung ergänzt werden.

## Produktübersicht

Die Produktübersicht zeigt alle verfügbaren Produkte.

Ein Produkt besitzt aus Kundensicht:

- einen Namen
- eine Beschreibung
- einen Preis
- einen verfügbaren Bestand
- einen Status, ob es aktuell angeboten wird

Nicht verfügbare Produkte dürfen nicht in den Warenkorb gelegt werden.

Eine eigene Produktdetailseite ist eine spätere Erweiterung.

## Warenkorb

Produkte können mit einer gewünschten Menge in den Warenkorb gelegt werden.

Im Warenkorb kann ein Benutzer:

- ausgewählte Produkte sehen
- die Menge eines Produkts verändern
- ein Produkt entfernen
- den Gesamtpreis sehen

Der Warenkorb gilt nur für die aktuelle Sitzung im Browser. Eine dauerhafte Speicherung über mehrere Geräte gehört nicht zum Kernshop.

## Fachliche Warenkorbregeln

- Eine Menge muss mindestens `1` betragen.
- Eine Menge darf den verfügbaren Bestand nicht überschreiten.
- Nicht vorhandene Produkte dürfen nicht hinzugefügt werden.
- Nicht mehr verfügbare Produkte dürfen nicht bestellt werden.
- Für die Berechnung gilt immer der aktuell gültige Produktpreis.
- Übermittelte oder manipulierte Preisangaben des Browsers werden nicht übernommen.

## Registrierung

Ein Gast kann ein einfaches Kundenkonto erstellen.

Für den Kernshop werden benötigt:

- E-Mail-Adresse
- Passwort

Die E-Mail-Adresse muss gültig sein und darf nicht bereits verwendet werden.

Das Passwort muss sicher gespeichert werden und darf später nicht im Klartext angezeigt werden.

Weitere Profildaten sind optionale Erweiterungen.

## Login und Logout

Ein registrierter Kunde kann sich mit E-Mail-Adresse und Passwort anmelden.

Bei ungültigen Zugangsdaten wird keine Anmeldung durchgeführt.

Ein angemeldeter Kunde kann sich wieder abmelden.

## Checkout

Nur ein angemeldeter Kunde kann den Checkout durchführen.

Vor dem Abschluss werden noch einmal geprüft:

- ob der Warenkorb Produkte enthält
- ob die Produkte noch verfügbar sind
- ob die Mengen gültig sind
- ob ausreichend Bestand vorhanden ist
- welche Preise aktuell gelten

Der Kernshop verwendet keinen echten Zahlungsanbieter.

Der Checkout bestätigt lediglich eine Bestellung innerhalb des Lernprojekts.

## Bestellung

Eine Bestellung gehört genau zu dem Kunden, der sie erstellt hat.

Eine Bestellung enthält:

- den Zeitpunkt der Bestellung
- die bestellten Produkte
- die jeweilige Menge
- den beim Kauf gültigen Preis
- den Gesamtbetrag

Der beim Kauf gültige Preis bleibt Teil der Bestellung, auch wenn sich der Produktpreis später ändert.

Nach einer erfolgreichen Bestellung wird der Warenkorb geleert.

Ein Kunde darf ausschließlich seine eigenen Bestellungen ansehen.

## Bestellstatus

Für den Kernshop genügt ein einfacher Status:

- `pending` – die Bestellung wurde angelegt

Weitere Zustände wie bezahlt, versendet, storniert oder abgeschlossen können später ergänzt werden.

## Verhalten bei Fehlern

Wenn eine Aktion nicht durchgeführt werden kann, erhält der Benutzer eine verständliche Rückmeldung.

Beispiele:

- Produkt wurde nicht gefunden
- Produkt ist nicht verfügbar
- Menge ist ungültig
- Bestand reicht nicht aus
- E-Mail-Adresse wird bereits verwendet
- Zugangsdaten sind ungültig
- Warenkorb ist leer

Fehler dürfen keine Bestellung mit ungültigen oder unvollständigen Daten erzeugen.

## Nicht Teil des Kernshops

Folgende Funktionen sind mögliche spätere Erweiterungen:

- Produktdetailseiten
- Produktbilder und Datei-Uploads
- Kategorien
- Produktsuche
- Liefer- und Rechnungsadressen
- mehrere Adressen pro Kunde
- Passwortänderung
- Administrationsbereich
- Gutscheine und Rabatte
- Versandkosten
- Steuern
- Zahlungsanbieter
- E-Mail-Bestätigungen
- dauerhafter Warenkorb
- Bewertungen und Wunschlisten
- JavaScript-Aktualisierungen ohne Seitenreload

## Erfolgskriterien des Kernshops

Der Kernshop ist fachlich vollständig, wenn ein Benutzer:

1. verfügbare Produkte ansehen kann,
2. Produkte mit gültiger Menge in den Warenkorb legen kann,
3. den Warenkorb verändern kann,
4. eine serverseitig bestimmte Gesamtsumme sieht,
5. sich registrieren und anmelden kann,
6. als angemeldeter Kunde eine Bestellung erstellen kann,
7. anschließend nur die eigenen Bestellungen ansehen kann.