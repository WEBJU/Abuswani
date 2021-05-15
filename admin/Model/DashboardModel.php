<?php
    require_once(__dir__ . '/Db.php');
    class DashboardModel extends Db {
      // object properties
      // public $id;
      // public $category_id;
      // public $subcategory_id;
      //object properties
      public $id;
      public $category_id;
      public $subcategory_id;
      public $description;
      public $quantity;
      public $price;
      public $img;
      public $name;
      /**
        * @param null
        * @return array
        * @desc Returns an array of news....
      **/
      public function fetchCategory() :array
      {
        $this->query("SELECT * FROM `categories` ORDER BY `category_name`  ASC");
        $this->execute();
        $Cats = $this->fetchAll();

        if (count($Cats) > 0) {
          $Response = array(
            'status' => true,
            'data' => $Cats
          );
          return $Response;
        }

        $Response = array(
          'status' => false,
          'data' => []
        );
        return $Response;
      }

      /**
        * @param null
        * @return array
        * @desc Returns an array of news....
      **/
      public function fetchSubCategory($category_id)
      {
        $this->query("SELECT * FROM `sub_categories` WHERE `category_id`=:category_id ORDER BY `subcategory_name`  ASC");
        $this->bind("category_id",$category_id);
        $this->execute();
        $subCats = $this->fetchAll();
        // var_dump($subCats).exit;d
        if (count($subCats) > 0) {
          $Response = array(
            'status' => true,
            'data' => $subCats
          );
          return $Response;
        }

        $Response = array(
          'status' => false,
          'data' => []
        );
        return $Response;
      }
      /**
        * @param null
        * @return array
        * @desc Returns an array of news....
      **/
      public function fetchArt()
      {
        $this->query("SELECT * FROM products INNER JOIN categories ON products.category_id=categories.id INNER JOIN sub_categories ON products.subcategory_id=sub_categories.id");
        $this->execute();
        $art = $this->fetchAll();

        if (count($art) > 0) {
          $Response = array(
            'status' => true,
            'data' => $art
          );
          return $Response;
        }

        $Response = array(
          'status' => false,
          'data' => []
        );
        return $Response;
      }

      /**
        * @param null
        * @return array
        * @desc a single record from database....
      **/
      public function readSingle($id)
      {
        $this->query("SELECT * FROM products INNER JOIN categories ON products.category_id=categories.id INNER JOIN sub_categories ON products.subcategory_id=sub_categories.id WHERE products.id=:id");
        $this->bind("id",$id);
        $this->execute();
        $art = $this->fetch();

        // if (count($art) > 0) {
        //   $Response = array(
        //     'status' => true,
        //     'data' => $art
        //   );
        //   return $Response;
        // }
        //
        // $Response = array(
        //   'status' => false,
        //   'data' => []
        // );
        // return $Response;
      }
      /**
        * @param null
        * @return array
        * @desc Returns an array of news....
      **/
      public function deleteArt($id)
      {
        $this->query("DELETE FROM `products` WHERE id=:id");
        $this->bind("id",$id);
        $this->execute();
        $art = $this->rowCount();

        if (count($art) > 0) {
          $Response = array(
            'status' => true,
            'message' => "Product deleted successfully"
          );
          return $Response;
        }

        $Response = array(
          'status' => false,
          'message' => "Could not delete product"
        );
        return $Response;
      }

      /**
        * @param array
        * @return array
        * @desc Creates and returns a user record....;
      **/
      public function createProduct()
      {
        try {
          $this->query("INSERT INTO `products`(category_id, subcategory_id, name, description, price, quantity, img) VALUES (:category_id, :subcategory_id, :name, :description, :price, :quantity, :img)");

          $this->category_id = stripcslashes(strip_tags($this->category_id));
          $this->subcategory_id = stripcslashes(strip_tags($this->subcategory_id));
          $this->name = stripcslashes(strip_tags($this->name));
          $this->description = stripcslashes(strip_tags($this->description));
          $this->quantity = stripcslashes(strip_tags($this->quantity));
          $this->price = stripcslashes(strip_tags($this->price));
          $this->img = stripcslashes(strip_tags($this->img));

          $this->bind('category_id', $this->category_id);
          $this->bind('subcategory_id', $this->subcategory_id);
          $this->bind('name', $this->name);
          $this->bind('description',$this->description);
          $this->bind('price', $this->price);
          $this->bind('quantity',$this->quantity);
          $this->bind('img', $this->img);
          // var_dump($this->execute()).exit;
          if ($this->execute()) {

            return true;
          } else {

            return false;
          }
        } catch (PDOException $e) {
          die($e->getMessage());
        }


      }

      public function edit($id)
      {
        try {
          $this->query("UPDATE  `products` SET category_id=:category_id, subcategory_id=:subcategory_id, name=:name, description=:description, price=:price, quantity=:quantity, img=:img WHERE id=:id");

          $this->category_id = stripcslashes(strip_tags($this->category_id));
          $this->subcategory_id = stripcslashes(strip_tags($this->subcategory_id));
          $this->name = stripcslashes(strip_tags($this->name));
          $this->description = stripcslashes(strip_tags($this->description));
          $this->quantity = stripcslashes(strip_tags($this->quantity));
          $this->price = stripcslashes(strip_tags($this->price));
          $this->img = stripcslashes(strip_tags($this->img));

          $this->bind('category_id', $this->category_id);
          $this->bind('subcategory_id', $this->subcategory_id);
          $this->bind('name', $this->name);
          $this->bind('description',$this->description);
          $this->bind('price', $this->price);
          $this->bind('quantity',$this->quantity);
          $this->bind('img', $this->img);
          $this->execute();
          // var_dump($this->execute()).exit;
          // if ($this->execute()) {
          //
          //   return true;
          // } else {
          ///
          //   return false;
          // }
        } catch (PDOException $e) {
          die($e->getMessage());
        }


      }
    }
 ?>
