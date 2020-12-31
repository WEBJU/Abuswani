<?php
  require_once(__dir__ . '/Controller.php');
  require_once('./Model/DashboardModel.php');
  class Dashboard extends Controller {

    public $active = 'dashboard'; //for highlighting the active link...
    private $dashboardModel;


    /**

      * @param null|void
      * @return null|void
      * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
    **/
    public function __construct()
    {
      if (!isset($_SESSION['auth_status'])) header("Location: index.php");
      $this->dashboardModel = new DashboardModel();
    }

    /**
      * @param null|void
      * @return array
      * @desc Returns an array of news by calling the DashboardModel fetchNews method...
    **/
    public function getCategory() :array
    {
      return $this->dashboardModel->fetchCategory();
    }
    public function getSubCategory($id)
    {
      return $this->dashboardModel->fetchSubCategory($id);
    }



    /**
      * @param array
      * @return array|boolean
      * @desc Verifies, Creates, and returns a user by calling the register method on the RegisterModel...
    **/
    public function addProduct()
    {

      $this->category_id = stripcslashes(strip_tags($this->category_id));
      $this->subcategory_id = stripcslashes(strip_tags($this->subcategory_id));
      $this->name = stripcslashes(strip_tags($this->name));
      $this->description = stripcslashes(strip_tags($this->description));
      $this->quantity = stripcslashes(strip_tags($this->quantity));
      $this->price = stripcslashes(strip_tags($this->price));
      $this->img = stripcslashes(strip_tags($this->img));


      $Response = $this->dashboardModel->createProduct();
      echo "<script>document.location='dashboard.php'</script>";

    }
  }
 ?>
