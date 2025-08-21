Repo: laravel-migration-seeder
Creiamo un piccolo gestionale per una biblioteca.

Svolgimento

Crea una tabella principale e la relativa migration, definendo i campi necessari per descrivere ogni libro.

Ogni libro dovrà avere:

Titolo

Autore

Casa editrice

Anno di pubblicazione

Genere

ISBN (codice univoco)

Numero di pagine

Disponibilità (sì/no)

Stato del libro (es. nuovo, usato, danneggiato)

👉 Potrebbero servirti altre colonne di servizio (booleani, note, timestamps).

Inventati dei dati finti e inseriscili tramite PhpMyAdmin.

Crea un modello e un controller.

Nella home mostra tutti i libri disponibili ordinati alfabeticamente per titolo.

Bonus (facoltativi)

Evidenzia i libri non disponibili.

Calcola e mostra quanti libri appartengono ad ogni genere.

Aggiungi un campo “prestato a” (nome lettore) che si compila solo se il libro non è disponibile.