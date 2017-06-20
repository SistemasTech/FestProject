<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class UsuarioModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='UsuarioModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='usuario';
	const SQL_INSERT='INSERT INTO `usuario` (`codigoUsuario`,`usuario`,`password`,`codigoFuncionario`,`codigoTipoUtilizador`) VALUES (?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `usuario` (`usuario`,`password`,`codigoFuncionario`,`codigoTipoUtilizador`) VALUES (?,?,?,?)';
	const SQL_UPDATE='UPDATE `usuario` SET `codigoUsuario`=?,`usuario`=?,`password`=?,`codigoFuncionario`=?,`codigoTipoUtilizador`=? WHERE `codigoUsuario`=?';
	const SQL_SELECT_PK='SELECT * FROM `usuario` WHERE `codigoUsuario`=?';
	const SQL_DELETE_PK='DELETE FROM `usuario` WHERE `codigoUsuario`=?';
	const FIELD_CODIGOUSUARIO=1104617365;
	const FIELD_USUARIO=-532092818;
	const FIELD_PASSWORD=1725197659;
	const FIELD_CODIGOFUNCIONARIO=1521991362;
	const FIELD_CODIGOTIPOUTILIZADOR=576663686;
	private static $PRIMARY_KEYS=array(self::FIELD_CODIGOUSUARIO);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_CODIGOUSUARIO);
	private static $FIELD_NAMES=array(
		self::FIELD_CODIGOUSUARIO=>'codigoUsuario',
		self::FIELD_USUARIO=>'usuario',
		self::FIELD_PASSWORD=>'password',
		self::FIELD_CODIGOFUNCIONARIO=>'codigoFuncionario',
		self::FIELD_CODIGOTIPOUTILIZADOR=>'codigoTipoUtilizador');
	private static $PROPERTY_NAMES=array(
		self::FIELD_CODIGOUSUARIO=>'codigoUsuario',
		self::FIELD_USUARIO=>'usuario',
		self::FIELD_PASSWORD=>'password',
		self::FIELD_CODIGOFUNCIONARIO=>'codigoFuncionario',
		self::FIELD_CODIGOTIPOUTILIZADOR=>'codigoTipoUtilizador');
	private static $PROPERTY_TYPES=array(
		self::FIELD_CODIGOUSUARIO=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_USUARIO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PASSWORD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CODIGOFUNCIONARIO=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CODIGOTIPOUTILIZADOR=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_CODIGOUSUARIO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_USUARIO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,false),
		self::FIELD_PASSWORD=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,false),
		self::FIELD_CODIGOFUNCIONARIO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_CODIGOTIPOUTILIZADOR=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_CODIGOUSUARIO=>null,
		self::FIELD_USUARIO=>'',
		self::FIELD_PASSWORD=>'',
		self::FIELD_CODIGOFUNCIONARIO=>0,
		self::FIELD_CODIGOTIPOUTILIZADOR=>0);
	private $codigoUsuario;
	private $usuario;
	private $password;
	private $codigoFuncionario;
	private $codigoTipoUtilizador;

	/**
	 * set value for codigoUsuario 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $codigoUsuario
	 * @return UsuarioModel
	 */
	public function &setCodigoUsuario($codigoUsuario) {
		$this->notifyChanged(self::FIELD_CODIGOUSUARIO,$this->codigoUsuario,$codigoUsuario);
		$this->codigoUsuario=$codigoUsuario;
		return $this;
	}

	/**
	 * get value for codigoUsuario 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getCodigoUsuario() {
		return $this->codigoUsuario;
	}

	/**
	 * set value for usuario 
	 *
	 * type:VARCHAR,size:25,default:null
	 *
	 * @param mixed $usuario
	 * @return UsuarioModel
	 */
	public function &setUsuario($usuario) {
		$this->notifyChanged(self::FIELD_USUARIO,$this->usuario,$usuario);
		$this->usuario=$usuario;
		return $this;
	}

	/**
	 * get value for usuario 
	 *
	 * type:VARCHAR,size:25,default:null
	 *
	 * @return mixed
	 */
	public function getUsuario() {
		return $this->usuario;
	}

	/**
	 * set value for password 
	 *
	 * type:VARCHAR,size:25,default:null
	 *
	 * @param mixed $password
	 * @return UsuarioModel
	 */
	public function &setPassword($password) {
		$this->notifyChanged(self::FIELD_PASSWORD,$this->password,$password);
		$this->password=$password;
		return $this;
	}

	/**
	 * get value for password 
	 *
	 * type:VARCHAR,size:25,default:null
	 *
	 * @return mixed
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * set value for codigoFuncionario 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $codigoFuncionario
	 * @return UsuarioModel
	 */
	public function &setCodigoFuncionario($codigoFuncionario) {
		$this->notifyChanged(self::FIELD_CODIGOFUNCIONARIO,$this->codigoFuncionario,$codigoFuncionario);
		$this->codigoFuncionario=$codigoFuncionario;
		return $this;
	}

	/**
	 * get value for codigoFuncionario 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getCodigoFuncionario() {
		return $this->codigoFuncionario;
	}

	/**
	 * set value for codigoTipoUtilizador 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $codigoTipoUtilizador
	 * @return UsuarioModel
	 */
	public function &setCodigoTipoUtilizador($codigoTipoUtilizador) {
		$this->notifyChanged(self::FIELD_CODIGOTIPOUTILIZADOR,$this->codigoTipoUtilizador,$codigoTipoUtilizador);
		$this->codigoTipoUtilizador=$codigoTipoUtilizador;
		return $this;
	}

	/**
	 * get value for codigoTipoUtilizador 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getCodigoTipoUtilizador() {
		return $this->codigoTipoUtilizador;
	}

	/**
	 * Get table name
	 *
	 * @return string
	 */
	public static function getTableName() {
		return self::SQL_TABLE_NAME;
	}

	/**
	 * Get array with field id as index and field name as value
	 *
	 * @return array
	 */
	public static function getFieldNames() {
		return self::$FIELD_NAMES;
	}

	/**
	 * Get array with field id as index and property name as value
	 *
	 * @return array
	 */
	public static function getPropertyNames() {
		return self::$PROPERTY_NAMES;
	}

	/**
	 * get the field name for the passed field id.
	 *
	 * @param int $fieldId
	 * @param bool $fullyQualifiedName true if field name should be qualified by table name
	 * @return string field name for the passed field id, null if the field doesn't exist
	 */
	public static function getFieldNameByFieldId($fieldId, $fullyQualifiedName=true) {
		if (!array_key_exists($fieldId, self::$FIELD_NAMES)) {
			return null;
		}
		$fieldName=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$fieldId] . self::SQL_IDENTIFIER_QUOTE;
		if ($fullyQualifiedName) {
			return self::SQL_IDENTIFIER_QUOTE . self::SQL_TABLE_NAME . self::SQL_IDENTIFIER_QUOTE . '.' . $fieldName;
		}
		return $fieldName;
	}

	/**
	 * Get array with field ids of identifiers
	 *
	 * @return array
	 */
	public static function getIdentifierFields() {
		return self::$PRIMARY_KEYS;
	}

	/**
	 * Get array with field ids of autoincrement fields
	 *
	 * @return array
	 */
	public static function getAutoincrementFields() {
		return self::$AUTOINCREMENT_FIELDS;
	}

	/**
	 * Get array with field id as index and property type as value
	 *
	 * @return array
	 */
	public static function getPropertyTypes() {
		return self::$PROPERTY_TYPES;
	}

	/**
	 * Get array with field id as index and field type as value
	 *
	 * @return array
	 */
	public static function getFieldTypes() {
		return self::$FIELD_TYPES;
	}

	/**
	 * Assign default values according to table
	 * 
	 */
	public function assignDefaultValues() {
		$this->assignByArray(self::$DEFAULT_VALUES);
	}


	/**
	 * return hash with the field name as index and the field value as value.
	 *
	 * @return array
	 */
	public function toHash() {
		$array=$this->toArray();
		$hash=array();
		foreach ($array as $fieldId=>$value) {
			$hash[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		return $hash;
	}

	/**
	 * return array with the field id as index and the field value as value.
	 *
	 * @return array
	 */
	public function toArray() {
		return array(
			self::FIELD_CODIGOUSUARIO=>$this->getCodigoUsuario(),
			self::FIELD_USUARIO=>$this->getUsuario(),
			self::FIELD_PASSWORD=>$this->getPassword(),
			self::FIELD_CODIGOFUNCIONARIO=>$this->getCodigoFuncionario(),
			self::FIELD_CODIGOTIPOUTILIZADOR=>$this->getCodigoTipoUtilizador());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_CODIGOUSUARIO=>$this->getCodigoUsuario());
	}

	/**
	 * cached statements
	 *
	 * @var array<string,array<string,PDOStatement>>
	 */
	private static $stmts=array();
	private static $cacheStatements=true;
	
	/**
	 * prepare passed string as statement or return cached if enabled and available
	 *
	 * @param PDO $db
	 * @param string $statement
	 * @return PDOStatement
	 */
	protected static function prepareStatement(PDO $db, $statement) {
		if(self::isCacheStatements()) {
			if (in_array($statement, array(self::SQL_INSERT, self::SQL_INSERT_AUTOINCREMENT, self::SQL_UPDATE, self::SQL_SELECT_PK, self::SQL_DELETE_PK))) {
				$dbInstanceId=spl_object_hash($db);
				if (empty(self::$stmts[$statement][$dbInstanceId])) {
					self::$stmts[$statement][$dbInstanceId]=$db->prepare($statement);
				}
				return self::$stmts[$statement][$dbInstanceId];
			}
		}
		return $db->prepare($statement);
	}

	/**
	 * Enable statement cache
	 *
	 * @param bool $cache
	 */
	public static function setCacheStatements($cache) {
		self::$cacheStatements=true==$cache;
	}

	/**
	 * Check if statement cache is enabled
	 *
	 * @return bool
	 */
	public static function isCacheStatements() {
		return self::$cacheStatements;
	}
	
	/**
	 * check if this instance exists in the database
	 *
	 * @param PDO $db
	 * @return bool
	 */
	public function existsInDatabase(PDO $db) {
		$filter=array();
		foreach ($this->getPrimaryKeyValues() as $fieldId=>$value) {
			$filter[]=new DFC($fieldId, $value, DFC::EXACT_NULLSAFE);
		}
		return 0!=count(self::findByFilter($db, $filter, true));
	}
	
	/**
	 * Update to database if exists, otherwise insert
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateInsertToDatabase(PDO $db) {
		if ($this->existsInDatabase($db)) {
			return $this->updateToDatabase($db);
		} else {
			return $this->insertIntoDatabase($db);
		}
	}

	/**
	 * Query by Example.
	 *
	 * Match by attributes of passed example instance and return matched rows as an array of UsuarioModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param UsuarioModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return UsuarioModel[]
	 */
	public static function findByExample(PDO $db,UsuarioModel $example, $and=true, $sort=null) {
		$exampleValues=$example->toArray();
		$filter=array();
		foreach ($exampleValues as $fieldId=>$value) {
			if (null!==$value) {
				$filter[$fieldId]=$value;
			}
		}
		return self::findByFilter($db, $filter, $and, $sort);
	}

	/**
	 * Query by filter.
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * Will return matched rows as an array of UsuarioModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return UsuarioModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `usuario`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of UsuarioModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return UsuarioModel[]
	 */
	public static function fromStatement(PDOStatement $stmt) {
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * returns the result as an array of UsuarioModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return UsuarioModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new UsuarioModel();
			$o->assignByHash($result);
			$o->notifyPristine();
			$resultInstances[]=$o;
		}
		$stmt->closeCursor();
		return $resultInstances;
	}

	/**
	 * Get sql WHERE part from filter.
	 *
	 * @param array $filter
	 * @param bool $and
	 * @param bool $fullyQualifiedNames true if field names should be qualified by table name
	 * @param bool $prependWhere true if WHERE should be prepended to conditions
	 * @return string
	 */
	public static function buildSqlWhere($filter, $and, $fullyQualifiedNames=true, $prependWhere=false) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		return $filter->buildSqlWhere(new self::$CLASS_NAME, $fullyQualifiedNames, $prependWhere);
	}

	/**
	 * get sql ORDER BY part from DSCs
	 *
	 * @param array $sort array of DSC instances
	 * @return string
	 */
	protected static function buildSqlOrderBy($sort) {
		return DSC::buildSqlOrderBy(new self::$CLASS_NAME, $sort);
	}

	/**
	 * bind values from filter to statement
	 *
	 * @param PDOStatement $stmt
	 * @param DFCInterface $filter
	 */
	public static function bindValuesForFilter(PDOStatement &$stmt, DFCInterface $filter) {
		$filter->bindValuesForFilter(new self::$CLASS_NAME, $stmt);
	}

	/**
	 * Execute select query and return matched rows as an array of UsuarioModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return UsuarioModel[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * Delete rows matching the filter
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * @param PDO $db
	 * @param array $filter
	 * @param bool $and
	 * @return mixed
	 */
	public static function deleteByFilter(PDO $db, $filter, $and=true) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		if (0==count($filter)) {
			throw new InvalidArgumentException('refusing to delete without filter'); // just comment out this line if you are brave
		}
		$sql='DELETE FROM `usuario`'
		. self::buildSqlWhere($filter, $and, false, true);
		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Assign values from array with the field id as index and the value as value
	 *
	 * @param array $array
	 */
	public function assignByArray($array) {
		$result=array();
		foreach ($array as $fieldId=>$value) {
			$result[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		$this->assignByHash($result);
	}

	/**
	 * Assign values from hash where the indexes match the tables field names
	 *
	 * @param array $result
	 */
	public function assignByHash($result) {
		$this->setCodigoUsuario($result['codigoUsuario']);
		$this->setUsuario($result['usuario']);
		$this->setPassword($result['password']);
		$this->setCodigoFuncionario($result['codigoFuncionario']);
		$this->setCodigoTipoUtilizador($result['codigoTipoUtilizador']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return UsuarioModel
	 */
	public static function findById(PDO $db,$codigoUsuario) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$codigoUsuario);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$result=$stmt->fetch(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		if(!$result) {
			return null;
		}
		$o=new UsuarioModel();
		$o->assignByHash($result);
		$o->notifyPristine();
		return $o;
	}

	/**
	 * Bind all values to statement
	 *
	 * @param PDOStatement $stmt
	 */
	protected function bindValues(PDOStatement &$stmt) {
		$stmt->bindValue(1,$this->getCodigoUsuario());
		$stmt->bindValue(2,$this->getUsuario());
		$stmt->bindValue(3,$this->getPassword());
		$stmt->bindValue(4,$this->getCodigoFuncionario());
		$stmt->bindValue(5,$this->getCodigoTipoUtilizador());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getCodigoUsuario()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getUsuario());
			$stmt->bindValue(2,$this->getPassword());
			$stmt->bindValue(3,$this->getCodigoFuncionario());
			$stmt->bindValue(4,$this->getCodigoTipoUtilizador());
		} else {
			$stmt=self::prepareStatement($db,self::SQL_INSERT);
			$this->bindValues($stmt);
		}
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$lastInsertId=$db->lastInsertId();
		if (false!==$lastInsertId) {
			$this->setCodigoUsuario($lastInsertId);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(6,$this->getCodigoUsuario());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Delete this instance from the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function deleteFromDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_DELETE_PK);
		$stmt->bindValue(1,$this->getCodigoUsuario());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch AluguerModel's which this UsuarioModel references.
	 * `usuario`.`codigoUsuario` -> `aluguer`.`codigoUsuario`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return AluguerModel[]
	 */
	public function fetchAluguerModelCollection(PDO $db, $sort=null) {
		$filter=array(AluguerModel::FIELD_CODIGOUSUARIO=>$this->getCodigoUsuario());
		return AluguerModel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch TipoutilizadorModel which references this UsuarioModel. Will return null in case reference is invalid.
	 * `usuario`.`codigoTipoUtilizador` -> `tipoutilizador`.`codigoTipoUtilizador`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return TipoutilizadorModel
	 */
	public function fetchTipoutilizadorModel(PDO $db, $sort=null) {
		$filter=array(TipoutilizadorModel::FIELD_CODIGOTIPOUTILIZADOR=>$this->getCodigoTipoUtilizador());
		$result=TipoutilizadorModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch FuncionarioModel which references this UsuarioModel. Will return null in case reference is invalid.
	 * `usuario`.`codigoFuncionario` -> `funcionario`.`CodigoFuncionario`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return FuncionarioModel
	 */
	public function fetchFuncionarioModel(PDO $db, $sort=null) {
		$filter=array(FuncionarioModel::FIELD_CODIGOFUNCIONARIO=>$this->getCodigoFuncionario());
		$result=FuncionarioModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'UsuarioModel');
	}

	/**
	 * get single UsuarioModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return UsuarioModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new UsuarioModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of UsuarioModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return UsuarioModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('UsuarioModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>