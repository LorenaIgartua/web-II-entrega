
 <?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'db_risotto');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_FILE', 'db_data\db_risotto.sql');
class Model

	{
	protected $db;
	function __construct()
		{
		try
			{
			$this->db = new PDO('mysql:host=' . DB_HOST . ';' . 'dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
			}

		catch(PDOException $e)
			{
			$this->crearbase();
			}
		}

	function crearbase()
		{
		mysql_query("CREATE DATABASE " . DB_NAME, @mysql_connect(DB_HOST, DB_USER, DB_PASS));
		$file = fopen(DB_FILE, "r");
		$file_text = "";
		while (!feof($file))
			{
			$file_text = $file_text . fgets($file);
			}

		fclose($file);
		$this->db = new PDO('mysql:host=' . DB_HOST . ';' . 'dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
		$sentencia = $this->db->prepare($file_text);
		$sentencia->execute();
		}
	}

?>
