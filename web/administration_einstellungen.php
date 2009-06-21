<? include ("frame.inc"); ?>
    <h1>Administration: Einstellungen</h1>
    <p>Durch die Einstellungen kann das Verhalten von JVerein beeinflu�t werden.</p>
    <h3>Ansicht</h3>
    <img src='images/Einstellungenansicht.png' class='screenshot'>
    <p class='hervorgehoben'>Nach �nderungen der mit Stern gekennzeichneten Werte ist ein Neustart 
    von Jameica erforderlich.</p>
	<p>Folgende Einstellungen k�nnen vorgenommen werden:</p>
	<ul>
	<li>Geburtsdatum und Eintrittsdatum Pflichtfeld</li>
	<li>Tab Kommunikationsdaten beim Mitglied anzeigen</li>
	<li>Tab Zusatzabbuchungen beim Mitglied anzeigen. Impliziert, dass die �bersicht der 
	Zusatzabbuchungen (nicht) angezeigt wird und die Option bei der Abbuchung (in)aktiv ist.</li>
	<li>Tab Vermerke beim Mitglied anzeigen.</li>
	<li>Tab Wiedervorlage beim Mitglied anzeigen. Impliziert, dass die �bersicht der Wiedervorlagen 
	(nicht) angezeigt wird.</li>
	<li>Kursteilnehmer ein-/ausblenden. Auswirkung auf die Abbuchung.</li>
	<li>Juristische Personen erlaubt. Die Eingabe von Firmen, Organisationen und Beh�rden als Mitglieder
		wird erlaubt. Anstatt Name und Vorname werden Name-Zeile1 und Name-Zeile2 erfasst. Geburtsdatum
		und Geschlecht werden nicht erfasst.</li>
	<li>Externe Mitgliedsnummern verwenden. Vereine, die auf Bundes- oder Landesebene organisiert 
	sind und eine durchg�ngige Mitgliedsnummer verwalten m�chten, k�nnen in JVerein eine externe 
	Mitgliedsnummer speichern.</li>
	</ul>
	
	<h2>Beitragsmodell</h2>
    <img src='images/Einstellungenbeitraege.jpg' class='screenshot'>
	<p>Beitragsmodell, siehe auch Beitragsmodelle</</p>
	<h2>Dateinamenmuster</h2>
	<img src='images/Einstellungendateinamen.jpg' class='screenshot'>
	<p>Bei der Ausgabe von Dateien (Abbuchung, Auswertungen...) werden die Dateinamen nach dem 
	vorgegebenen Muster aufgebaut. Es k�nnen zus�tzliche, vom Betriebssystem unterst�tzte Zeichen, 
	in das Muster aufgenommen werden. Bleibt das Muster leer, wird kein Vorschlag f�r den Dateinnamen 
	angezeigt. </p>
	<p>Folgende Variable stehen zur Verf�gung:</p>
	<ul>
	<li>a$ : Aufgabe (z. B. auswertung, abbuchung)</li>
	<li>d$ : Aktuelles Datum</li>
	<li>s$ : Sortierung. Wird nur bei Auswertungen gef�llt. Ansonsten leer.</li>
	<li>z$ : Aktuelle Zeit</li>
	</ul>
	
	<h2>Buchf�hrung</h2>
	<img src='images/Einstellungenbuchfuehrung.jpg' class='screenshot'>
	<p>Beginn des Gesch�ftsjahres in der Form TT.MM. (Ab Version 1.1)</p> 

	<h2>Rechnungen</h2>
	<img src='images/Einstellungenrechnungen.jpg' class='screenshot'>
	<p>Festlegung, f�r welche Zahlungswege Rechnungsinformationen gespeichert werden sollen. (Ab Version 1.1)</p>
	
	<h2>Tabellen</h2>
	<p>Festlegung der Spalten, die in Tabellen angezeigt werden sollen. (Ab Version 1.1) 
	<p>Mit <b>neu</b> kann eine neue Beitragsgruppe eingerichtet werden.</p>
	<p>Durch einen Doppelklick wird die Bearbeitung einer Beitragsgruppe eingeleitet.</p>
	<p>Durch die Markierung einer Beitragsgruppe und l�schen wir die L�schung eingeleitet. 
	Alternativ kann mit einem rechten Mausklick auf eine Beitragsgruppe �ffnet sich ein 
	Kontext-Men�. Damit kann eine Beitragsgruppe, die keinem Mitglied zugeordnet ist, gel�scht 
	werden. Bei zugeordneten Beitragsgruppen erscheint eine Fehlermeldung.</p> 
	
	<!-- 
    $Log$
    Revision 1.3  2009/05/05 17:28:50  jost
    Neu: Juristische Personen als Mitglieder

    Revision 1.2  2009/05/03 15:33:30  jost
    Neue Homepage

    -->
	
	
 <? include ("footer.inc"); ?>
