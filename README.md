# ⛵ Boat Reservation Website 
In this project, you will create a dynamic responsive boat website developed using Object Oriented PHP Programming Language.

# ⚙️ Technology Used
- HTML5
- CSS3
- OOP PHP Programming Language
- MYSql Realational Database

# 💿 Features
* Visitors can view the tourism island
* Admin region which is a safe and secure region
* Data Tables to filter boat list

## 📖 How to Download the Project and Run on your PC?
### Pre-Requisites
1. Download and Install XAMPP   [Apache Download](https://www.apachefriends.org/download.html)
2. Install any Text Editor (Sublime text or Visual Studio Code )
3. Download as a yip or clone this project
4. Move this project to the project directory

> Local Disc C: --> xampp --> htdocs --> 'clone_folder'

N:B - Local Disk is the location where the xampp is installed

5.  Open XAMPP Control Panel and start 'Apachae' and 'MYSQL'
6.  Import the database in the extracted folder
7.  Make and apply changes to settings

Goto the dbconfig file and edit the necessary settings

> <?php 
class connection{

	protected $isConn;
	protected $datab;
	protected $transaction;

	public function __construct($username="root", $password="", $host="localhost", $dbname="boat", $options = []){
		
		$this->isConn = TRUE;
		try{
			$this->datab = new PDO("mysql:host={$host};  dbname={$dbname}; charset=utf8", $username, $password, $options);
			$this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->transaction = $this->datab;
			$this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		}catch(PDOException $e){
			throw new Exception($e->getMessage());			
		}

	}
 
	public function Disconnect(){
		$this->datab = NULL;//close connection in PDO
		$this->isConn = FALSE;
	}
}
 ?>
