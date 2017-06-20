<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class AluguerModel extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='AluguerModel';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='aluguer';
	const SQL_INSERT='INSERT INTO `aluguer` (`codigoAluguer`,`codigoLivro`,`codigoCliente`,`dataAluguer`,`dataDevolucao`,`codigoUsuario`) VALUES (?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `aluguer` (`codigoLivro`,`codigoCliente`,`dataAluguer`,`dataDevolucao`,`codigoUsuario`) VALUES (?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `aluguer` SET `codigoAluguer`=?,`codigoLivro`=?,`codigoCliente`=?,`dataAluguer`=?,`dataDevolucao`=?,`codigoUsuario`=? WHERE `codigoAluguer`=?';
	const SQL_SELECT_PK='SELECT * FROM `aluguer` WHERE `codigoAluguer`=?';
	const SQL_DELETE_PK='DELETE FROM `aluguer` WHERE `codigoAluguer`=?';
	const FIELD_CODIGOALUGUER=-683738493;
	const FIELD_CODIGOLIVRO=1363547604;
	const FIELD_CODIGOCLIENTE=1080120760;
	const FIELD_DATAALUGUER=-1302748654;
	const FIELD_DATADEVOLUCAO=-1439449349;
	const FIELD_CODIGOUSUARIO=86688492;
	private static $PRIMARY_KEYS=array(self::FIELD_CODIGOALUGUER);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_CODIGOALUGUER);
	private static $FIELD_NAMES=array(
		self::FIELD_CODIGOALUGUER=>'codigoAluguer',
		self::FIELD_CODIGOLIVRO=>'codigoLivro',
		self::FIELD_CODIGOCLIENTE=>'codigoCliente',
		self::FIELD_DATAALUGUER=>'dataAluguer',
		self::FIELD_DATADEVOLUCAO=>'dataDevolucao',
		self::FIELD_CODIGOUSUARIO=>'codigoUsuario');
	private static $PROPERTY_NAMES=array(
		self::FIELD_CODIGOALUGUER=>'codigoAluguer',
		self::FIELD_CODIGOLIVRO=>'codigoLivro',
		self::FIELD_CODIGOCLIENTE=>'codigoCliente',
		self::FIELD_DATAALUGUER=>'dataAluguer',
		self::FIELD_DATADEVOLUCAO=>'dataDevolucao',
		self::FIELD_CODIGOUSUARIO=>'codigoUsuario');
	private static $PROPERTY_TYPES=array(
		self::FIELD_CODIGOALUGUER=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CODIGOLIVRO=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CODIGOCLIENTE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_DATAALUGUER=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DATADEVOLUCAO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CODIGOUSUARIO=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_CODIGOALUGUER=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_CODIGOLIVRO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_CODIGOCLIENTE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_DATAALUGUER=>array(Db2PhpEntity::JDBC_TYPE_DATE,10,0,false),
		self::FIELD_DATADEVOLUCAO=>array(Db2PhpEntity::JDBC_TYPE_DATE,10,0,false),
		self::FIELD_CODIGOUSUARIO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_CODIGOALUGUER=>null,
		self::FIELD_CODIGOLIVRO=>0,
		self::FIELD_CODIGOCLIENTE=>0,
		self::FIELD_DATAALUGUER=>'',
		self::FIELD_DATADEVOLUCAO=>'',
		self::FIELD_CODIGOUSUARIO=>0);
	private $codigoAluguer;
	private $codigoLivro;
	private $codigoCliente;
	private $dataAluguer;
	private $dataDevolucao;
	private $codigoUsuario;

	/**
	 * set value for codigoAluguer 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $codigoAluguer
	 * @return AluguerModel
	 */
	public function &setCodigoAluguer($codigoAluguer) {
		$this->notifyChanged(self::FIELD_CODIGOALUGUER,$this->codigoAluguer,$codigoAluguer);
		$this->codigoAluguer=$codigoAluguer;
		return $this;
	}

	/**
	 * get value for codigoAluguer 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getCodigoAluguer() {
		return $this->codigoAluguer;
	}

	/**
	 * set value for codigoLivro 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $codigoLivro
	 * @return AluguerModel
	 */
	public function &setCodigoLivro($codigoLivro) {
		$this->notifyChanged(self::FIELD_CODIGOLIVRO,$this->codigoLivro,$codigoLivro);
		$this->codigoLivro=$codigoLivro;
		return $this;
	}

	/**
	 * get value for codigoLivro 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getCodigoLivro() {
		return $this->codigoLivro;
	}

	/**
	 * set value for codigoCliente 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $codigoCliente
	 * @return AluguerModel
	 */
	public function &setCodigoCliente($codigoCliente) {
		$this->notifyChanged(self::FIELD_CODIGOCLIENTE,$this->codigoCliente,$codigoCliente);
		$this->codigoCliente=$codigoCliente;
		return $this;
	}

	/**
	 * get value for codigoCliente 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getCodigoCliente() {
		return $this->codigoCliente;
	}

	/**
	 * set value for dataAluguer 
	 *
	 * type:DATE,size:10,default:null
	 *
	 * @param mixed $dataAluguer
	 * @return AluguerModel
	 */
	public function &setDataAluguer($dataAluguer) {
		$this->notifyChanged(self::FIELD_DATAALUGUER,$this->dataAluguer,$dataAluguer);
		$this->dataAluguer=$dataAluguer;
		return $this;
	}

	/**
	 * get value for dataAluguer 
	 *
	 * type:DATE,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getDataAluguer() {
		return $this->dataAluguer;
	}

	/**
	 * set value for dataDevolucao 
	 *
	 * type:DATE,size:10,default:null
	 *
	 * @param mixed $dataDevolucao
	 * @return AluguerModel
	 */
	public function &setDataDevolucao($dataDevolucao) {
		$this->notifyChanged(self::FIELD_DATADEVOLUCAO,$this->dataDevolucao,$dataDevolucao);
		$this->dataDevolucao=$dataDevolucao;
		return $this;
	}

	/**
	 * get value for dataDevolucao 
	 *
	 * type:DATE,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getDataDevolucao() {
		return $this->dataDevolucao;
	}

	/**
	 * set value for codigoUsuario 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $codigoUsuario
	 * @return AluguerModel
	 */
	public function &setCodigoUsuario($codigoUsuario) {
		$this->notifyChanged(self::FIELD_CODIGOUSUARIO,$this->codigoUsuario,$codigoUsuario);
		$this->codigoUsuario=$codigoUsuario;
		return $this;
	}

	/**
	 * get value for codigoUsuario 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getCodigoUsuario() {
		return $this->codigoUsuario;
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
			self::FIELD_CODIGOALUGUER=>$this->getCodigoAluguer(),
			self::FIELD_CODIGOLIVRO=>$this->getCodigoLivro(),
			self::FIELD_CODIGOCLIENTE=>$this->getCodigoCliente(),
			self::FIELD_DATAALUGUER=>$this->getDataAluguer(),
			self::FIELD_DATADEVOLUCAO=>$this->getDataDevolucao(),
			self::FIELD_CODIGOUSUARIO=>$this->getCodigoUsuario());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_CODIGOALUGUER=>$this->getCodigoAluguer());
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
	 * Match by attributes of passed example instance and return matched rows as an array of AluguerModel instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param AluguerModel $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return AluguerModel[]
	 */
	public static function findByExample(PDO $db,AluguerModel $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of AluguerModel instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return AluguerModel[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `aluguer`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of AluguerModel instances
	 *
	 * @param PDOStatement $stmt
	 * @return AluguerModel[]
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
	 * returns the result as an array of AluguerModel instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return AluguerModel[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new AluguerModel();
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
	 * Execute select query and return matched rows as an array of AluguerModel instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return AluguerModel[]
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
		$sql='DELETE FROM `aluguer`'
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
		$this->setCodigoAluguer($result['codigoAluguer']);
		$this->setCodigoLivro($result['codigoLivro']);
		$this->setCodigoCliente($result['codigoCliente']);
		$this->setDataAluguer($result['dataAluguer']);
		$this->setDataDevolucao($result['dataDevolucao']);
		$this->setCodigoUsuario($result['codigoUsuario']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return AluguerModel
	 */
	public static function findById(PDO $db,$codigoAluguer) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$codigoAluguer);
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
		$o=new AluguerModel();
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
		$stmt->bindValue(1,$this->getCodigoAluguer());
		$stmt->bindValue(2,$this->getCodigoLivro());
		$stmt->bindValue(3,$this->getCodigoCliente());
		$stmt->bindValue(4,$this->getDataAluguer());
		$stmt->bindValue(5,$this->getDataDevolucao());
		$stmt->bindValue(6,$this->getCodigoUsuario());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getCodigoAluguer()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getCodigoLivro());
			$stmt->bindValue(2,$this->getCodigoCliente());
			$stmt->bindValue(3,$this->getDataAluguer());
			$stmt->bindValue(4,$this->getDataDevolucao());
			$stmt->bindValue(5,$this->getCodigoUsuario());
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
			$this->setCodigoAluguer($lastInsertId);
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
		$stmt->bindValue(7,$this->getCodigoAluguer());
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
		$stmt->bindValue(1,$this->getCodigoAluguer());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch ClienteModel which references this AluguerModel. Will return null in case reference is invalid.
	 * `aluguer`.`codigoCliente` -> `cliente`.`codigoCliente`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ClienteModel
	 */
	public function fetchClienteModel(PDO $db, $sort=null) {
		$filter=array(ClienteModel::FIELD_CODIGOCLIENTE=>$this->getCodigoCliente());
		$result=ClienteModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch LivroModel which references this AluguerModel. Will return null in case reference is invalid.
	 * `aluguer`.`codigoLivro` -> `livro`.`codigoLivro`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return LivroModel
	 */
	public function fetchLivroModel(PDO $db, $sort=null) {
		$filter=array(LivroModel::FIELD_CODIGOLIVRO=>$this->getCodigoLivro());
		$result=LivroModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch UsuarioModel which references this AluguerModel. Will return null in case reference is invalid.
	 * `aluguer`.`codigoUsuario` -> `usuario`.`codigoUsuario`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return UsuarioModel
	 */
	public function fetchUsuarioModel(PDO $db, $sort=null) {
		$filter=array(UsuarioModel::FIELD_CODIGOUSUARIO=>$this->getCodigoUsuario());
		$result=UsuarioModel::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'AluguerModel');
	}

	/**
	 * get single AluguerModel instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return AluguerModel
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new AluguerModel();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of AluguerModel from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return AluguerModel[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('AluguerModel') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>