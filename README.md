# Esame5F
/model
	/sql
		immobili.sql	# Database usato 
	/menu
		  menu.php					# menù utilizzato 
	/database
		  config.php        # connessione al database 
/view									
    /DettagliAnnessi
      /ins_dettannesso.php        # Form  inserimento dettagli  annessi
      /Lista_dettannessi.php      # Elenco dettagli annessi
      /mod_dettannessi_form.php   # Form per modifica dettagli annessi
    /Immobili
      /ins_immobile.php           # Form inserimento immobili
      /lista_immobili.php         # Elenco di immobili
      /mod_immobili_form.php      # Form per modifica immobili
     /Proprietari
      /inser_proprietari.html     # Form per inserimento di proprietari
      /lista_proprietari.php      # Elenco dei proprietari
      /mod_proprietari_form.php   # Form per modifica proprietari
     /TipoAnnesso
      /inser_tipoannesso.html
      /lista_tipoannesso.php
      /mod_tipoannesso_form.php
     /TipoImmobile
      /inser_tipoimmobile.html
      /lista_tipoimmobile.php
      /mod_tipoimmobile_form.php
  /src
	/css
		menustyle.css					# stili per il menu superiore
		tabstyle.css					# stili tella tabella
	/img
	/script
		loadPage.js						# fetch json pagina, contiene funzioni per la modifica e cancellazione righe
/OLD_contabilita						# versione vecchia con correzioni
/ORIGINAL								# versione originale prof Panza

index.php								# Pagina principale si ridirige verso le altre pagine
readme.md								# questo file
