<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class Livro extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Livro';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='livro';
	const SQL_INSERT='INSERT INTO `livro` (`codigoLivro`,`tituloLivro`,`edicao`,`anolancamento`,`quantidade`,`codigoAutor`,`codigoCategoria`,`capa`) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `livro` (`tituloLivro`,`edicao`,`anolancamento`,`quantidade`,`codigoAutor`,`codigoCategoria`,`capa`) VALUES (?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `livro` SET `codigoLivro`=?,`tituloLivro`=?,`edicao`=?,`anolancamento`=?,`quantidade`=?,`codigoAutor`=?,`codigoCategoria`=?,`capa`=? WHERE `codigoLivro`=?';
	const SQL_SELECT_PK='SELECT * FROM `livro` WHERE `codigoLivro`=?';
	const SQL_DELETE_PK='DELETE FROM `livro` WHERE `codigoLivro`=?';
	const FIELD_CODIGOLIVRO=1777084453;
	const FIELD_TITULOLIVRO=-1095265531;
	const FIELD_EDICAO=790602303;
	const FIELD_ANOLANCAMENTO=-830269564;
	const FIELD_QUANTIDADE=-384520036;
	const FIELD_CODIGOAUTOR=1767281202;
	const FIELD_CODIGOCATEGORIA=-738706622;
	const FIELD_CAPA=259978023;
	private static $PRIMARY_KEYS=array(self::FIELD_CODIGOLIVRO);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_CODIGOLIVRO);
	private static $FIELD_NAMES=array(
		self::FIELD_CODIGOLIVRO=>'codigoLivro',
		self::FIELD_TITULOLIVRO=>'tituloLivro',
		self::FIELD_EDICAO=>'edicao',
		self::FIELD_ANOLANCAMENTO=>'anolancamento',
		self::FIELD_QUANTIDADE=>'quantidade',
		self::FIELD_CODIGOAUTOR=>'codigoAutor',
		self::FIELD_CODIGOCATEGORIA=>'codigoCategoria',
		self::FIELD_CAPA=>'capa');
	private static $PROPERTY_NAMES=array(
		self::FIELD_CODIGOLIVRO=>'codigoLivro',
		self::FIELD_TITULOLIVRO=>'tituloLivro',
		self::FIELD_EDICAO=>'edicao',
		self::FIELD_ANOLANCAMENTO=>'anolancamento',
		self::FIELD_QUANTIDADE=>'quantidade',
		self::FIELD_CODIGOAUTOR=>'codigoAutor',
		self::FIELD_CODIGOCATEGORIA=>'codigoCategoria',
		self::FIELD_CAPA=>'capa');
	private static $PROPERTY_TYPES=array(
		self::FIELD_CODIGOLIVRO=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TITULOLIVRO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EDICAO=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ANOLANCAMENTO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_QUANTIDADE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CODIGOAUTOR=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CODIGOCATEGORIA=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CAPA=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_CODIGOLIVRO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_TITULOLIVRO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,false),
		self::FIELD_EDICAO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_ANOLANCAMENTO=>array(Db2PhpEntity::JDBC_TYPE_DATE,10,0,false),
		self::FIELD_QUANTIDADE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_CODIGOAUTOR=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_CODIGOCATEGORIA=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_CAPA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_CODIGOLIVRO=>null,
		self::FIELD_TITULOLIVRO=>'',
		self::FIELD_EDICAO=>0,
		self::FIELD_ANOLANCAMENTO=>'',
		self::FIELD_QUANTIDADE=>0,
		self::FIELD_CODIGOAUTOR=>0,
		self::FIELD_CODIGOCATEGORIA=>0,
		self::FIELD_CAPA=>'');
	private $codigoLivro;
	private $tituloLivro;
	private $edicao;
	private $anolancamento;
	private $quantidade;
	private $codigoAutor;
	private $codigoCategoria;
	private $capa;

	/**
	 * set value for codigoLivro 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $codigoLivro
	 * @return Livro
	 */
	public function &setCodigoLivro($codigoLivro) {
		$this->notifyChanged(self::FIELD_CODIGOLIVRO,$this->codigoLivro,$codigoLivro);
		$this->codigoLivro=$codigoLivro;
		return $this;
	}

	/**
	 * get value for codigoLivro 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getCodigoLivro() {
		return $this->codigoLivro;
	}

	/**
	 * set value for tituloLivro 
	 *
	 * type:VARCHAR,size:50,default:null
	 *
	 * @param mixed $tituloLivro
	 * @return Livro
	 */
	public function &setTituloLivro($tituloLivro) {
		$this->notifyChanged(self::FIELD_TITULOLIVRO,$this->tituloLivro,$tituloLivro);
		$this->tituloLivro=$tituloLivro;
		return $this;
	}

	/**
	 * get value for tituloLivro 
	 *
	 * type:VARCHAR,size:50,default:null
	 *
	 * @return mixed
	 */
	public function getTituloLivro() {
		return $this->tituloLivro;
	}

	/**
	 * set value for edicao 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $edicao
	 * @return Livro
	 */
	public function &setEdicao($edicao) {
		$this->notifyChanged(self::FIELD_EDICAO,$this->edicao,$edicao);
		$this->edicao=$edicao;
		return $this;
	}

	/**
	 * get value for edicao 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getEdicao() {
		return $this->edicao;
	}

	/**
	 * set value for anolancamento 
	 *
	 * type:DATE,size:10,default:null
	 *
	 * @param mixed $anolancamento
	 * @return Livro
	 */
	public function &setAnolancamento($anolancamento) {
		$this->notifyChanged(self::FIELD_ANOLANCAMENTO,$this->anolancamento,$anolancamento);
		$this->anolancamento=$anolancamento;
		return $this;
	}

	/**
	 * get value for anolancamento 
	 *
	 * type:DATE,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getAnolancamento() {
		return $this->anolancamento;
	}

	/**
	 * set value for quantidade 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $quantidade
	 * @return Livro
	 */
	public function &setQuantidade($quantidade) {
		$this->notifyChanged(self::FIELD_QUANTIDADE,$this->quantidade,$quantidade);
		$this->quantidade=$quantidade;
		return $this;
	}

	/**
	 * get value for quantidade 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getQuantidade() {
		return $this->quantidade;
	}

	/**
	 * set value for codigoAutor 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $codigoAutor
	 * @return Livro
	 */
	public function &setCodigoAutor($codigoAutor) {
		$this->notifyChanged(self::FIELD_CODIGOAUTOR,$this->codigoAutor,$codigoAutor);
		$this->codigoAutor=$codigoAutor;
		return $this;
	}

	/**
	 * get value for codigoAutor 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getCodigoAutor() {
		return $this->codigoAutor;
	}

	/**
	 * set value for codigoCategoria 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $codigoCategoria
	 * @return Livro
	 */
	public function &setCodigoCategoria($codigoCategoria) {
		$this->notifyChanged(self::FIELD_CODIGOCATEGORIA,$this->codigoCategoria,$codigoCategoria);
		$this->codigoCategoria=$codigoCategoria;
		return $this;
	}

	/**
	 * get value for codigoCategoria 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getCodigoCategoria() {
		return $this->codigoCategoria;
	}

	/**
	 * set value for capa 
	 *
	 * type:VARCHAR,size:100,default:null
	 *
	 * @param mixed $capa
	 * @return Livro
	 */
	public function &setCapa($capa) {
		$this->notifyChanged(self::FIELD_CAPA,$this->capa,$capa);
		$this->capa=$capa;
		return $this;
	}

	/**
	 * get value for capa 
	 *
	 * type:VARCHAR,size:100,default:null
	 *
	 * @return mixed
	 */
	public function getCapa() {
		return $this->capa;
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
			self::FIELD_CODIGOLIVRO=>$this->getCodigoLivro(),
			self::FIELD_TITULOLIVRO=>$this->getTituloLivro(),
			self::FIELD_EDICAO=>$this->getEdicao(),
			self::FIELD_ANOLANCAMENTO=>$this->getAnolancamento(),
			self::FIELD_QUANTIDADE=>$this->getQuantidade(),
			self::FIELD_CODIGOAUTOR=>$this->getCodigoAutor(),
			self::FIELD_CODIGOCATEGORIA=>$this->getCodigoCategoria(),
			self::FIELD_CAPA=>$this->getCapa());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_CODIGOLIVRO=>$this->getCodigoLivro());
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
	 * Match by attributes of passed example instance and return matched rows as an array of Livro instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param Livro $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Livro[]
	 */
	public static function findByExample(PDO $db,Livro $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of Livro instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Livro[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `livro`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of Livro instances
	 *
	 * @param PDOStatement $stmt
	 * @return Livro[]
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
	 * returns the result as an array of Livro instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return Livro[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new Livro();
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
	 * Execute select query and return matched rows as an array of Livro instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return Livro[]
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
		$sql='DELETE FROM `livro`'
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
		$this->setCodigoLivro($result['codigoLivro']);
		$this->setTituloLivro($result['tituloLivro']);
		$this->setEdicao($result['edicao']);
		$this->setAnolancamento($result['anolancamento']);
		$this->setQuantidade($result['quantidade']);
		$this->setCodigoAutor($result['codigoAutor']);
		$this->setCodigoCategoria($result['codigoCategoria']);
		$this->setCapa($result['capa']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return Livro
	 */
	public static function findById(PDO $db,$codigoLivro) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$codigoLivro);
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
		$o=new Livro();
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
		$stmt->bindValue(1,$this->getCodigoLivro());
		$stmt->bindValue(2,$this->getTituloLivro());
		$stmt->bindValue(3,$this->getEdicao());
		$stmt->bindValue(4,$this->getAnolancamento());
		$stmt->bindValue(5,$this->getQuantidade());
		$stmt->bindValue(6,$this->getCodigoAutor());
		$stmt->bindValue(7,$this->getCodigoCategoria());
		$stmt->bindValue(8,$this->getCapa());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getCodigoLivro()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getTituloLivro());
			$stmt->bindValue(2,$this->getEdicao());
			$stmt->bindValue(3,$this->getAnolancamento());
			$stmt->bindValue(4,$this->getQuantidade());
			$stmt->bindValue(5,$this->getCodigoAutor());
			$stmt->bindValue(6,$this->getCodigoCategoria());
			$stmt->bindValue(7,$this->getCapa());
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
			$this->setCodigoLivro($lastInsertId);
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
		$stmt->bindValue(9,$this->getCodigoLivro());
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
		$stmt->bindValue(1,$this->getCodigoLivro());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch Aluguer's which this Livro references.
	 * `livro`.`codigoLivro` -> `aluguer`.`codigoLivro`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Aluguer[]
	 */
	public function fetchAluguerCollection(PDO $db, $sort=null) {
		$filter=array(Aluguer::FIELD_CODIGOLIVRO=>$this->getCodigoLivro());
		return Aluguer::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Autor which references this Livro. Will return null in case reference is invalid.
	 * `livro`.`codigoAutor` -> `autor`.`codigoAutor`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Autor
	 */
	public function fetchAutor(PDO $db, $sort=null) {
		$filter=array(Autor::FIELD_CODIGOAUTOR=>$this->getCodigoAutor());
		$result=Autor::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch Categoria which references this Livro. Will return null in case reference is invalid.
	 * `livro`.`codigoCategoria` -> `categoria`.`codigoCategoria`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Categoria
	 */
	public function fetchCategoria(PDO $db, $sort=null) {
		$filter=array(Categoria::FIELD_CODIGOCATEGORIA=>$this->getCodigoCategoria());
		$result=Categoria::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Livro');
	}

	/**
	 * get single Livro instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Livro
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Livro();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of Livro from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Livro[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Livro') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>