<?php 

class Controller
{
	/**
	 * [$db description]
	 * @var null database connection
	 */
	public $db = null;

	/**
	 * [$model description]
	 * @var null Model
	 */
	public $model = null;

	public function __construct()
	{
		$this->connection();
		$this->loadModel();
	}

	private function connection()
    {
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
    }

	public function loadModel()
	{
		require_once APP . '/models/model.php';
		$this->model = new Model($this->db);
	}
}
?>