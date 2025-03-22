CREATE DATABASE DiamantiDB;

USE DATABASE DiamantiDB;

CREATE TABLE Diamante (
	Id INT AUTO_INCREMENT PRIMARY KEY,
	NrCertificato CHAR(13) NOT NULL,
	Carati DECIMAL(6, 2) NOT NULL,
	Taglio VARCHAR(100) NOT NULL,
	Colore CHAR(1) NOT NULL,
	Purezza INT NOT NULL,
	Brillantezza VARCHAR(10) NOT NULL,
	DataRilascioCF DATE NOT NULL,
	CHECK(Carati >= 0.02),
	CHECK(Purezza >= 0 AND Purezza <= 10),
);

CREATE TABLE Anello (
	CodDiamante INT NOT NULL,
	Nome VARCHAR(20) NOT NULL,
	Peso DECIMAL(5, 3) NOT NULL,
	Misura DECIMAL(5, 3) NOT NULL,
	Modello VARCHAR(20) NOT NULL,
	Costo DECIMAL(10, 2) NOT NULL,
	Colore VARCHAR(20) NOT NULL,
	Montatura ENUM('Quattro griffe', 'Sei griffe') NOT NULL,
	CHECK(Costo > 0),
	CHECK(Peso > 0),
	FOREIGN KEY (CodDiamante) REFERENCES Diamante(Id)
);

CREATE TABLE IstitutoGemmologico (
	Id INT AUTO_INCREMENT PRIMARY KEY,
	Nome VARCHAR(20) NOT NULL,
	Citta VARCHAR(20) NOT NULL,
	CodAnello INT NOT NULL,
	FOREIGN KEY (CodAnello) REFERENCES Anello(CodDiamante)
);