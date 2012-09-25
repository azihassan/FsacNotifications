<?php

class Model
{
	private $_db;

	public function __construct(PDO $db)
	{
		$this->_db = $db;
	}

	public function save($email, $filiere)
	{
		$query = $this->_db->prepare('INSERT INTO emails (email, filiere_id) VALUES (:email, :filiere)');
		$query->execute(array(
			':filiere' => $filiere,
			':email' => $email
		));
	}

	public function retrieve_all()
	{
		$query = $this->_db->query('SELECT id, niveau, filiere, url, statut FROM filieres ORDER BY niveau');
		return $query->fetchAll();
	}
	
	public function filiere_exists($id)
	{
		$query = $this->_db->prepare('SELECT COUNT(id) FROM filieres WHERE id = :id');
		$query->execute(array(':id' => $id));
		
		return $query->fetchColumn() == 1;
	}

	public function retrieve_subscribers($fid)
	{
		$query = $this->_db->prepare('SELECT email FROM emails WHERE filiere_id = :fid');
		$query->execute(array(':fid' => $fid));
		
		return $query->fetchAll();
	}
	
	public function update_status($fid, $statut)
	{
		$this->_db->exec('UPDATE filieres SET statut = "'.$statut.'" WHERE id = '.$fid);
	}
}