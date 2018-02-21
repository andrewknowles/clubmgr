
<?PHP

	class MyConfig
	{
		public $hostname;
		public $username;
		public $password;
		public $database;
		public $prefix;
		public $connector;
	
		function __construct(
		$hostname = null,
		$username = null,
		$password = null,
		$database = null,
		$prefix = null,
		$connector = null)
	
		{
			$this->hostname = !empty($hostname) ? $hostname : "";
			$this->username = !empty($username) ? $username : "";
			$this->password = !empty($password) ? $password : "";
			$this->database = !empty($database) ? $database : "";
			$this->prefix = !empty($prefix) ? $prefix : "";
			$this->connector = !empty($connector) ? $connector : "mysqli";
		}
	
		function __destruct()
		{
	
		}
	}

	class MyDb
	{
		private $connection;
		private $selectdb;
		private $lastQuery;
		private $config;
	
		function __construct($config)
		{
			$this->config = $config;
		}
	
		function __destruct()
		{
	
		}
		
		function __tostring()
		{
		return $this->query;
		}
		
		public function openConnection()
		{
			try
			{
				$this->connection = mysqli_connect($this->config->hostname, $this->config->username, $this->config->password);
				$this->selectdb = mysqli_select_db($this->connection, $this->config->database);	
			}			
			catch(exception $e)
			{
				return $e;
			}
		}

		public function closeConnection()
		{
			try
				{
					mysqli_close($this->connection);
				}
			catch(exception $e)
				{
					return $e;
				}
		}

		public function escapeString($string)
		{
//			return addslashes($string);
			return mysqli_real_escape_string($this->connection, $string);
		}

//-------------------------------------------------------------------------------------------------------
		public function query($enteredquery)
		{
			$enteredquery = str_replace("}", "", $enteredquery);
			$enteredquery = str_replace("{", $this->config->prefix, $enteredquery);

			try
			{
				if(empty($this->connection))
				{
					$this->openConnection();					
					$this->lastQuery = mysqli_query($this->connection, $this->ecapeString($enteredquery));
					return $this->lastQuery;
				}
				else
				{
					$this->lastQuery = mysqli_query($this->connection, $enteredquery);
					return $this->lastQuery;
				}
			}
			catch(exception $e)
			{
				return $e;
				echo "failed";
			}
		}

		public function lastQuery()
		{
			return $this->lastQuery;
		}

		public function pingServer()
		{
			try
			{
				if($this->config->connector == "mysql")
				{
					if(!mysql_ping($this->connection))
					{
						return false;
					}
					else
					{
						return true;
					}
				}
				elseif($this->config->connector == "mysqli")
				{
					if(!mysqli_ping($this->connection))
					{
						return false;
					}
					else
					{
						return true;
					}
				}
			}
			catch(exception $e)
			{
				return $e;
			}
		}

		public function hasRows($result)
		{
			try
			{
				if(mysqli_num_rows($result)>0)
					{
						return true;
					}
				else
					{
						return false;
					}
			}	
		
			catch(exception $e)
			{
				return $e;
			}
		}

		public function rowsUpdated($result)
		{
				try
			{
					return mysqli_affected_rows($this->connection);
			}
			catch(exception $e)
			{
				return $e;
			}
		}
		
 
		public function countRows($result)
		{
			try
			{
					return mysqli_num_rows($result);
			}
			catch(exception $e)
			{
				return $e;
			}
		}
 
		public function fetchAssoc($result)
		{
			try
			{
				if($this->config->connector == "mysql")
				{
					return mysql_fetch_assoc($result);
				}
				elseif($this->config->connector == "mysqli")
				{
					return mysqli_fetch_assoc($result);
				}
			}
			catch(exception $e)
			{
				return $e;
			}
		}
 
		public function fetchArray($result)
		{
			try
			{
				if($this->config->connector == "mysql")
				{
					return mysql_fetch_array($result);
				}
				elseif($this->config->connector == "mysqli")
				{
					return mysqli_fetch_array($result);
				}
			}
			catch(exception $e)
			{
				return $e;
			}
		}
		
		public function print_array($sql)
		{
			try
			{
			echo "<br />";
				foreach($sql as $row)
				{
					foreach($row as $detail)
					{
						echo " ".$detail;
					}
				echo "<br />";
				}
			}
			catch(exception $e)
			{
				return $e;
			}
		}
			
			
	}
	
?>