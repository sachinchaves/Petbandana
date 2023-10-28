<?php
    class PagesController extends Controller{
        public function default(){
            $this->state["browserTitle"] = "Wiggles | Home";
            $this->state["content"] .= $this->loadView("home");

            $this->state["html"] = $this->loadView("template");
        }


        public function login(){
            $this->state["browserTitle"] = "Wiggles | Login";

            $this->state["content"] = $this->loadView("login");

            $this->state["html"] = $this->loadView("template");
        }

        public function register(){
            $this->state["browserTitle"] = "Wiggles | Register";

            $this->state["content"] = $this->loadView("register");

            $this->state["html"] = $this->loadView("template");
        }

        public function dashboard(){
            $this->state["browserTitle"] = "Wiggles | Dashboard";
            $this->state["details"] = memberModel::getAll();
            $this->state["content"] = $this->loadView("dashboard");
            $this->state["html"] = $this->loadView("template");
        }

        public function processLogin(){
            UserModel::login($_POST["username"], $_POST["password"]);
    
        }

        public function processRegister(){
            UserModel::register($_POST["username"], $_POST["password"]);
    
        }

        public function saveContact(){
            UserModel::saveInfo($_POST["firstName"], $_POST["lastName"], $_POST["instaUsername"], $_POST["email"]);
    
        }

        public function thankyou(){
            $this->state["browserTitle"] = "Thank you";

            $this->state["content"] = $this->loadView("thankyou");

            $this->state["html"] = $this->loadView("template");
        }

        public function error(){
            $this->state["errorMsg"] = "Action not found";
            $this->state["content"] = $this->loadView("error");
            $this->state["html"] = $this->loadView("template");
        }

        public function postTrip(){
            echo $this->state["html"];
        }
    }
?>