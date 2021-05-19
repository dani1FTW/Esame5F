# Esame5F
/model
	/sql
		immobili.sql	# Database usato 
	/menu
		  menu.php	# menù utilizzato 
	/database
		  config.php    # connessione al database 
	/Query
		q1.txt      # Quanti garage sono presenti nel database.
		q2.txt      # Quante ville hanno a disposizione un dato accessorio
		q3.txt      # Quanti mq di superficie dispone uno specifico proprietario.
		q4.txt      # Elencare tutti i possessori di un immobile specificato.
		q5.txt     	#	Elencare tutti i possessori di un dato tipo di immobile che abbia anche una cantina  
		q6.txt     	#	Elencare tutti i possessori di immobili la cui data di costruzione è successiva ad un dato anno
		q7.txt			# Lista dei proprietari di appartamenti con il numero di vani complessivi disponibili.
		q8.txt			# Lista dei proprietari la cui somma dei mq degli immobili posseduti sia superiore ad una data
									superficie.
		q9.txt			#	Elencare tutti gli immobili che non hanno annessi.
		
/view									
	/DettagliAnnessi
			/ins_dettannesso.php        	# Form  inserimento dettagli  annessi
			/Lista_dettannessi.php      	# Elenco dettagli annessi
			/mod_dettannessi_form.php   	# Form per modifica dettagli annessi
		 /Immobili
     	 /ins_immobile.php            # Form inserimento immobili
      	/lista_immobili.php         # Elenco di immobili
      	/mod_immobili_form.php      # Form per modifica immobili
     /Proprietari
      /inser_proprietari.html     	# Form per inserimento di proprietari
      /lista_proprietari.php      	# Elenco dei proprietari
      /mod_proprietari_form.php   	# Form per modifica proprietari
     /TipoAnnesso
      /inser_tipoannesso.html				# Form per inserimento Tipo annesso
      /lista_tipoannesso.php				# Elenco tipo annesso
      /mod_tipoannesso_form.php			# Form per modifica tipo annesso
     /TipoImmobile
      /inser_tipoimmobile.html			# Form per inserimento tipo immobile
      /lista_tipoimmobile.php				#	Elenco Tipo Immobile
      /mod_tipoimmobile_form.php		#	Form per modifica tipo immobile
			
/controller
	/DettagliAnnessi
			/canc_dettannessi.php					#
			/ins_dettannessi.php  				#        
			/mod_dettannessi_.php   			# 
		 /Immobili
		 	 /canc_proprietari.php				#
     	 /ins_immobile.php            # 
			 /mod_immobili.php						#
     /Proprietari
		  /canc_proprietari.php					#
      /inser_proprietari.php     		# 
      /mod_proprietari.php   				# 
     /TipoAnnesso
	    /canc_tipoannesso.php					#	
      /inser_tipoannesso.php				#	
      /mod_tipoannesso.php					#
     /TipoImmobile
      /canc_tipoimmobile.php				#
			/inser_tipoimmobile.php				#
      /mod_tipoimmobile.php         #
  
/src
	/css			#Stili di default di Bootstrap
		/bootstrap.min.css
		/bootstrap.min.css.map
	/img
		/js			# Librerie di default di Bootstrap per Javascript
			/bootstrap.bundle.min.js
			/bootstrap.bundle.min.js.map

index.php								# Pagina principale si ridirige verso le altre pagine
readme.md								# questo file
