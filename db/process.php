<?php

    session_start();

    include_once("connection.php");
    // include_once("../../config/url.php");
    $printMsg = "";
    $data = $_POST;

    if(!empty($data)){

        if($data["type"] == "create"){
            
            $name = $data["name"];
            $email = $data["email"];
            $plan = $data["plan_id"];

            $query = "INSERT INTO clients (name, email, plan_id) VALUES (:name, :email, :plan_id)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":plan_id", $plan);

            try {

                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso!";
            
            } catch(PDOException $e) {
              $error = $e->getMessage();
              echo "Erro: $error";
            }
        }

        if($data["type"] == "edit"){
            print_r($data);
            
            $name = $data["name"];
            $email = $data["email"];
            $plan_id = $data["plan_id"];
            $id = $data["id"];

            $query = "UPDATE clients
                      SET name = :name , email = :email, plan_id = :plan_id
                      WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":plan_id", $plan_id);
            $stmt->bindParam(":id", $id);

            try {
            
                $stmt->execute();
                $_SESSION["msg"] = "Client updated!";
            
            } catch(PDOException $e) {
              $error = $e->getMessage();
              echo "Erro: $error";
            }
        }

        if($data["type"] == "delete"){
            
            $id = $data["id"];

            $query = "DELETE FROM clients
                      WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Client deleted!";
            
            } catch(PDOException $e) {
              $error = $e->getMessage();
              echo "Erro: $error";
            }
        }

        header("Location:" . $BASE_URL . "../clients.php");

    }



    $id;

    if (isset($_GET['id'])) {
        $id = $_GET["id"];
    }

    if(!empty($id)){
        
        $query = "SELECT clients.*, 
                  plans.name AS plan_name FROM clients
                  INNER JOIN plans ON clients.plan_id = plans.id
                  WHERE clients.id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $client = $stmt->fetch(); 

    }else{

        $clients = [];
        
        $query = "SELECT clients.*, 
                  plans.name AS plan_name FROM clients
                  INNER JOIN plans ON clients.plan_id = plans.id";
        
        $stmt = $conn->prepare($query);
        
        $stmt->execute();
        
        $clients = $stmt->fetchAll(); 
    }

    $plans = [];
        
    $query = "SELECT * From plans";
    
    $stmt = $conn->prepare($query);
    
    $stmt->execute();
    
    $plans = $stmt->fetchAll();

