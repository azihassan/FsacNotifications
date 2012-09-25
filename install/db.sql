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
	('Licence professionnelle', 'Electronique, �lectrotechnique, automatique et informatique industrielle (EAI)', 'http://www.fsac.ac.ma/licences/2012/EAI.pdf'),
	('Licence professionnelle', 'G�nie des proc�d�s (GP)', 'http://www.fsac.ac.ma/licences/2012/GP.pdf'),
	('Licence professionnelle', 'Technologie et management du b�timent et des traveaux publiques (TMBTP)', 'http://www.fsac.ac.ma/licences/2012/TMBTP.pdf'),
	('Licence professionnelle', "Gestion de l'assainissement en milieu urbain (GAMU)", 'http://www.fsac.ac.ma/licences/2012/GAMU.pdf'),
	('Licence professionnelle', 'Syst�mes, bases de donn�es et r�seaux (SBDR)', 'http://www.fsac.ac.ma/licences/2012/SBDR.pdf'),
	('Licence professionnelle', 'D�veloppement informatique (DI)', 'http://www.fsac.ac.ma/licences/2012/DI.pdf'),
	('Licence professionnelle', 'Energie solaire et �olienne (ESE)', 'http://www.fsac.ac.ma/licences/2012/ESE.pdf'),
	
	('Master', 'Chimie et valorisation (CV)', 'http://www.fsac.ac.ma/masters/2012/test/CV.pdf'),
	('Master', 'Gestion et Valorisation des Ressources Marines (GVRM)', 'http://www.fsac.ac.ma/masters/2012/test/GVRM.pdf'),
	('Master', 'Informatique et Instrumentation Scientifique en Physique des Hautes Energies (IISPHE)', 'http://www.fsac.ac.ma/masters/2012/test/IISPHE.pdf'),
	('Master', 'M�canique et Ing�nierie (MI)', 'http://www.fsac.ac.ma/masters/2012/test/MI.pdf'),
	('Master', 'Physiologie, biologie cellulaire et mol�culaire (PBCM)', 'http://www.fsac.ac.ma/masters/2012/test/PBCM.pdf'),
	
	('Master sp�cialis�', 'Eau et developpement durable (EDD)', 'http://www.fsac.ac.ma/masters/2012/test/EDD.pdf'),
	('Master sp�cialis�', 'Electronique, �lectrotechnique, automatique et informatique industrielle (EEAII)', 'http://www.fsac.ac.ma/masters/2012/test/EEAII.pdf'),
	('Master sp�cialis�', 'Energies renouvelables et syst�mes �nergetiques (ERSE)', 'http://www.fsac.ac.ma/masters/2012/test/ERSE.pdf'),
	('Master sp�cialis�', 'G�nie des proc�d�s et ma�trise de la qualit� (GPMQ)', 'http://www.fsac.ac.ma/masters/2012/test/GPMQ.pdf'),
	('Master sp�cialis�', 'G�nie logistique (GL)', 'http://www.fsac.ac.ma/masters/2012/test/GL.pdf'),
	('Master sp�cialis�', 'Gestion et valorisation des g�oressources (GVG)', 'http://www.fsac.ac.ma/masters/2012/test/GVG.pdf'),
	('Master sp�cialis�', 'Ing�nierie et optimisation des syst�mes de transport et logistique (IOSTL)', 'http://www.fsac.ac.ma/masters/2012/test/IOSTL.pdf'),
	('Master sp�cialis�', 'Ing�nierie informatique et internet (3I)', 'http://www.fsac.ac.ma/masters/2012/test/3I.pdf'),
	('Master sp�cialis�', 'Management et valorisation des rejets (MVR)', 'http://www.fsac.ac.ma/masters/2012/test/MVR.pdf'),
	('Master sp�cialis�', "Syst�mes d'information g�ographique et gestion du territoire (SIGGT)", 'http://www.fsac.ac.ma/masters/2012/test/SIGGT.pdf'),
	('Master sp�cialis�', 'Assurance et contr�le de la qualit� du medicament (ACQM)', 'http://www.fsac.ac.ma/masters/2012/test/ACQM.pdf')
;