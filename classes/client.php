<?php
	class client {
		private $_db,
				$_data,
				$_sessionName;

		public function __construct($client = null) {
			$this->_db 			= Database::getInstance();
			$this->_sessionName = Config::get('session/sessionName');
			$this->_cookieName 	= Config::get('remember/cookieName');

			$client = Session::get($this->_sessionName);

					$this->find($client);
						$this->_isLoggedIn = true;

			
		}

	

		public function update($fields = array(), $id) {	
				if (!$this->_db->update('clients', $id, $fields)) {
				throw new Exception("There was a problem");
			}
		}

		public function create($fields = array()) {
			if (!$this->_db->insert('clients', $fields)) {
				throw new Exception("There was a problem");
			}
		}

		public function find($client = null) {
			if ($client) {
				$fields = $client ;
				$data 	= $this->_db->get('clients', array($fields, '=', $client));

					$this->_results = $data->results();
					$this->_data = $data->first();
					return true;
				
			}
			return false;
		}

		public function hasPermission($key) {
			$group = $this->_db->get('groups', array('ID', '=', $this->data()->clientGroup));
			if ($group->count()) {
				$permissions = json_decode($group->first()->permissions,true);

				if ($permissions[$key] == true) {
					return true;
				}
			}
			return false;
		}
		public function delete($ida) {
			$this->_db->delete('address', array('id_client', '=', $ida));
			$this->_db->delete('clients', array('ID', '=', $ida));
		
			var_dump($ida);
		}
		public function data() {
			return $this->_data;
		}

		public function get() {
			return $this->_results;
		}
		public function getid() {
			$this->_db->getbyid();
			return true;
		}
	
	}
?>