INSERT INTO Critico (Nome, Cognome, DataN, Curriculum, Foto, LinkTwitter)  
VALUES  
("Luca", "Rossi", "1980-05-12", "Esperto di cinema e teatro, con oltre 20 anni di esperienza.", "luca_rossi.jpg", "https://twitter.com/luca_rossi"),  
("Giulia", "Bianchi", "1985-09-25", "Critica d'arte contemporanea, autrice di numerosi saggi.", "giulia_bianchi.jpg", "https://twitter.com/giulia_bianchi"),  
("Marco", "Verdi", "1978-03-15", "Giornalista e critico letterario, collabora con diverse riviste.", "marco_verdi.jpg", "https://twitter.com/marco_verdi"),  
("Elena", "Ferrari", "1992-07-08", "Critica gastronomica, appassionata di cucina e cultura culinaria.", "elena_ferrari.jpg", "https://twitter.com/elena_ferrari"),  
("Alessandro", "Moretti", "1975-11-30", "Critico musicale, specializzato in jazz e musica classica.", "alessandro_moretti.jpg", "https://twitter.com/alessandro_moretti");  

INSERT INTO Ristorante (Nome, Tipologia, Via, Civico, Prenotazione, Parcheggio, Animali, NStelleM)  
VALUES  
("Rosy", "Pizzeria", "Via Roma", "12", TRUE, FALSE, FALSE, NULL),  
("La Pergola", "Gourmet", "Via Milano", "45", TRUE, TRUE, FALSE, 3),  
("Trattoria da Gino", "Trattoria", "Piazza Garibaldi", "8", FALSE, FALSE, TRUE, 1),  
("Sakura", "Sushi", "Corso Vittorio", "22", TRUE, TRUE, TRUE, 2),  
("El Gaucho", "Steakhouse", "Viale Italia", "30", TRUE, TRUE, FALSE, 2);

INSERT INTO Recensione (Titolo, Testo, DataP, VotoL, VotoS, VotoM, VotoC, CodCritico, CodRistorante)  
VALUES  
("Recensione Ristorante Rosy", "Ottima pizza e servizio veloce.", "2025-02-18", 3.5, 4, 7, 6, 1, 1),  
("Esperienza Gourmet La Pergola", "Alta cucina, ma porzioni piccole.", "2025-01-12", 4.5, 5, 9, 8, 2, 2),  
("Trattoria da Gino: cucina casalinga", "Semplice ma gustoso, ambiente familiare.", "2025-03-05", 3, 3.5, 7, 7, 3, 3),  
("Cena sushi da Sakura", "Pesce fresco, ottima esperienza.", "2025-02-22", 4, 4, 8, 9, 4, 4),  
("Carne spettacolare a El Gaucho", "Cottura perfetta e vasta scelta di tagli.", "2025-02-28", 5, 4.5, 9, 8, 5, 5);  
