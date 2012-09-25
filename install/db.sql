CREATE TABLE IF NOT EXISTS emails (
	id INT NOT NULL AUTO_INCREMENT,
	email VARCHAR(255) NOT NULL,
	filiere_id INT NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS filieres (
	id INT NOT NULL AUTO_INCREMENT,
	niveau VARCHAR(255) NOT NULL,
	filiere TEXT NOT NULL,
	url VARCHAR(255) NOT NULL,
	statut enum('Indisponibles', 'Disponibles') NOT NULL,
	PRIMARY KEY(id)
);

INSERT INTO filieres (niveau, filiere, url) VALUES
	('Licence professionnelle', 'Electronique, électrotechnique, automatique et informatique industrielle (EAI)', 'http://www.fsac.ac.ma/licences/2012/EAI.pdf'),
	('Licence professionnelle', 'Génie des procédés (GP)', 'http://www.fsac.ac.ma/licences/2012/GP.pdf'),
	('Licence professionnelle', 'Technologie et management du bâtiment et des traveaux publiques (TMBTP)', 'http://www.fsac.ac.ma/licences/2012/TMBTP.pdf'),
	('Licence professionnelle', "Gestion de l'assainissement en milieu urbain (GAMU)", 'http://www.fsac.ac.ma/licences/2012/GAMU.pdf'),
	('Licence professionnelle', 'Systèmes, bases de données et réseaux (SBDR)', 'http://www.fsac.ac.ma/licences/2012/SBDR.pdf'),
	('Licence professionnelle', 'Développement informatique (DI)', 'http://www.fsac.ac.ma/licences/2012/DI.pdf'),
	('Licence professionnelle', 'Energie solaire et éolienne (ESE)', 'http://www.fsac.ac.ma/licences/2012/ESE.pdf'),
	
	('Master', 'Chimie et valorisation (CV)', 'http://www.fsac.ac.ma/masters/2012/test/CV.pdf'),
	('Master', 'Gestion et Valorisation des Ressources Marines (GVRM)', 'http://www.fsac.ac.ma/masters/2012/test/GVRM.pdf'),
	('Master', 'Informatique et Instrumentation Scientifique en Physique des Hautes Energies (IISPHE)', 'http://www.fsac.ac.ma/masters/2012/test/IISPHE.pdf'),
	('Master', 'Mécanique et Ingénierie (MI)', 'http://www.fsac.ac.ma/masters/2012/test/MI.pdf'),
	('Master', 'Physiologie, biologie cellulaire et moléculaire (PBCM)', 'http://www.fsac.ac.ma/masters/2012/test/PBCM.pdf'),
	
	('Master spécialisé', 'Eau et developpement durable (EDD)', 'http://www.fsac.ac.ma/masters/2012/test/EDD.pdf'),
	('Master spécialisé', 'Electronique, électrotechnique, automatique et informatique industrielle (EEAII)', 'http://www.fsac.ac.ma/masters/2012/test/EEAII.pdf'),
	('Master spécialisé', 'Energies renouvelables et systèmes énergetiques (ERSE)', 'http://www.fsac.ac.ma/masters/2012/test/ERSE.pdf'),
	('Master spécialisé', 'Génie des procédés et maîtrise de la qualité (GPMQ)', 'http://www.fsac.ac.ma/masters/2012/test/GPMQ.pdf'),
	('Master spécialisé', 'Génie logistique (GL)', 'http://www.fsac.ac.ma/masters/2012/test/GL.pdf'),
	('Master spécialisé', 'Gestion et valorisation des géoressources (GVG)', 'http://www.fsac.ac.ma/masters/2012/test/GVG.pdf'),
	('Master spécialisé', 'Ingénierie et optimisation des systèmes de transport et logistique (IOSTL)', 'http://www.fsac.ac.ma/masters/2012/test/IOSTL.pdf'),
	('Master spécialisé', 'Ingénierie informatique et internet (3I)', 'http://www.fsac.ac.ma/masters/2012/test/3I.pdf'),
	('Master spécialisé', 'Management et valorisation des rejets (MVR)', 'http://www.fsac.ac.ma/masters/2012/test/MVR.pdf'),
	('Master spécialisé', "Systèmes d'information géographique et gestion du territoire (SIGGT)", 'http://www.fsac.ac.ma/masters/2012/test/SIGGT.pdf'),
	('Master spécialisé', 'Assurance et contrôle de la qualité du medicament (ACQM)', 'http://www.fsac.ac.ma/masters/2012/test/ACQM.pdf')
;