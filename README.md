# Calculator symfony(framework PHP)
	--Routes--
		unica route /calcolatrice che richiama la funzione formCalc in FormCalcolatriceController

	--FormCalcolatriceController--
	
	-controller che renderizza una form (per calcolare 2 input scegliendo l'operazione con una select) in form-calcolatrice.html.twig
	-completo di sessioni per Rendere persistente le operazioni inserite dall’utente visualizzando lo storico delle operazioni (con un bottone per Popolare automaticamente il form ritornando a quel determinato storico)
	-possibilità di svuotare lo storico (cancellando i dati inseriti nella sessione) tramite l'apposito bottone "cancella storico"
	

	--CalcolatriceForm--
	-aggiunto un semplice vincolo sugli input [vincolo not blank] per far si che essi non vengano lasciati vuoti al momento del submit della form per calcolare 
	
	--calcolatrice entity--
	inserito controllo per la divisione per 0 che restituisce "calcolo impossibile" invece di far crashare il programma

	--form-calcolatrice.html.twig--
	-inserito dello stile css per rendere bello esteticamente la form e lo storico
	-inseriti controlli di validità sugli input (al momento del submit se un input contiene lettere oltre a numeri, restituisce un alert rosso di seguito all input interessato) con stile css
	-inserito controllo se c'è qualche storico da mostrare o meno, altrimenti restituisce un h3 "storico vuoto"
	-possibilità di svuotare i valori inseriti nella form cliccando l'apposito tasto "nuovo calcolo"
