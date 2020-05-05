<?php
	class address {
		private $_db,
				$_data,
				$_sessionName;

		public function __construct($address = null) {
			$this->_db 			= Database::getInstance();
			$this->_sessionName = Config::get('session/sessionName');
			$this->_cookieName 	= Config::get('remember/cookieName');
			$address = Session::get($this->_sessionName);
			$this->_isLoggedIn = true;			
			$this->find($address);
			
		}

		public function create($fields = array()) {
			if (!$this->_db->insert('address', $fields)) {
				var_dump($fields);
				throw new Exception("There was a problem");
			}
		}


		public function find($address = null) {
			if ($address) {
				$fields = $address ;
				$data 	= $this->_db->get('address', array($fields, '=',$address));

					$this->_results = $data->results();
					$this->_data = $data->first();
					return true;
				
			}
			return false;
		}
		public function update($fields = array(), $id) {	
			if (!$this->_db->update('address', $id, $fields)) {				
			throw new Exception("There was a problem ");
		}
	}
	public function delete($ida) {
		$this->_db->delete('address', array('id', '=', $ida));
	}

		public function data() {
			return $this->_data;
		}


		public function get() {
			return $this->_results;
		}
	
	}
?>