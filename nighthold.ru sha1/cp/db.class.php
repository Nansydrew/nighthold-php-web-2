<?php

class DB
{
	private $dbh = null;
	
	public function __construct( $config )
	{
		$dbhost = $config['dbhost']; 
		$dbport = $config['dbport']; 
		$dbuser = $config['dbuser']; 
		$dbpass = $config['dbpass']; 
		$dbname = $config['dbname'];
		
		$dsn = "mysql:host=$dbhost;port=$dbport;dbname=$dbname;charset=utf8";
		$options = [
			\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
			\PDO::ATTR_ERRMODE 			  => \PDO::ERRMODE_EXCEPTION
		];
		
		try 
		{
			$this->dbh = new \PDO( $dsn, $dbuser, $dbpass, $options );
		}
		catch ( \PDOException $e )
		{
			die( $e->getMessage() );
		}
	}
	
	public function prepareAndExecute( $sql, array $parameters = null, $bind = true, $bindValue = true )
	{
		try 
		{
			if ( $stmt = $this->dbh->prepare( $sql ) ) 
			{
				if ( $bind && is_array( $parameters ) ) 
				{
					foreach ( $parameters as $key => $value ) 
					{
						$parameter = is_numeric( $key ) ? $key + 1 : $key;
						$bindValue 
							? $stmt->bindValue( $parameter, $value )
							: $stmt->bindParam( $parameter, $value );
					}
				}
		
				if ( $stmt->execute( $bind ? null : $parameters ) ) 
				{
					return $stmt;
				}
			}
		} 
		catch ( \PDOException $e ) 
		{
			die( $e->getMessage() );
		}
		
		return false;
	}
	
	public function fetch( $sql, array $parameters = null, $bind = true, $bindValue = true )
	{
		if ( $stmt = $this->prepareAndExecute( $sql, $parameters, $bind, $bindValue ) ) 
		{
			try 
			{
				if ( $result = $stmt->fetch() )
				{
					return $result;
				}
			} 
			catch ( \PDOException $e ) 
			{
				die( $e->getMessage() );
			}
		}

		return false;
	}
	
	public function fetchAll( $sql, array $parameters = null, $bind = true, $bindValue = true )
	{
		if ( $stmt = $this->prepareAndExecute( $sql, $parameters, $bind, $bindValue ) ) 
		{
			try 
			{
				if ( $results = $stmt->fetchAll() )
				{
					return $results;
				}
			} 
			catch ( \PDOException $e ) 
			{
				die( $e->getMessage() );
			}
		}
	
		return false;
	}
}

?>