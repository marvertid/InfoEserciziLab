INSERT INTO IstitutoGemmologico (Nome, Citta) VALUES
('International Gemological Institute', 'Roma'),
('International Gemological Institute', 'Milano'),
('GIA', 'Firenze'),
('HRD Antwerp', 'Napoli'),
('IGI', 'Torino');

INSERT INTO Diamante (NrCertificato, Carati, Taglio, Colore, Purezza, Brillantezza, DataRilascioCF, CodIstituto) VALUES
('1234567890123', 1.20, 'Round', 'D', 1, 'Excellent', '2023-05-10', 1),
('9876543210987', 0.90, 'Princess', 'H', 2, 'Very Good', '2022-07-15', 2),
('4567890123456', 1.50, 'Round', 'F', 3, 'Excellent', '2021-09-20', 3),
('5678901234567', 2.00, 'Oval', 'G', 1, 'Good', '2024-02-10', 4),
('6789012345678', 1.10, 'Cushion', 'D', 2, 'Excellent', '2023-03-25', 5);

INSERT INTO Anello (CodDiamante, Nome, Peso, Misura, Modello, Costo, Colore, Montatura) VALUES
(1, 'Solitario Elegance', 3.500, 16.500, 'Classico', 5000.00, 'Oro Bianco', 'Quattro griffe'),
(2, 'Ypsilon Shine', 2.800, 15.000, 'Ypsilon', 4500.00, 'Oro Giallo', 'Sei griffe'),
(3, 'Solitario Prestige', 4.000, 17.000, 'Classico', 7000.00, 'Oro Bianco', 'Quattro griffe'),
(4, 'Ypsilon Classic', 3.200, 14.800, 'Ypsilon', 6000.00, 'Oro Bianco', 'Sei griffe'),
(5, 'Solitario Light', 2.900, 16.000, 'Classico', 4800.00, 'Oro Bianco', 'Quattro griffe');