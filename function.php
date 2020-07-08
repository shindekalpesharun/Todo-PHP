<?php
class Main
{
    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "todo");
    }
}
$main = new Main();

class User extends Main
{
    public function userLogin()
    {
        $username = $_POST['login'][0]['username'];
        $password = $_POST['login'][0]['password'];

        $sql = "SELECT username, password FROM user WHERE username='$username'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $hash_password = $row["password"];
            }
            if (password_verify($password, $hash_password)) {
                $_SESSION["id"] = $username;
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo "Password Not Match";
            }
        } else {
            // TODO: Include not match username and password then show message
        }
    }

    public function userSignup()
    {
        // TODO: Add already database added username and password and
        $email = $_POST['signup'][0]['email'];
        $username = $_POST['signup'][0]['username'];
        $password = $_POST['signup'][0]['password'];

        $password = password_hash("$password", PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (email, username, password) VALUES ('$email', '$username', '$password')";

        $this->conn->query($sql);
        $_SESSION["id"] = $username;
    }

    public function userLogout()
    {
        // remove all session variables
        session_unset();

        // destroy the session
        // session_destroy();

        echo "<meta http-equiv='refresh' content='0'>";
    }
}
$user = new User();

class Todo extends Main
{
    public function addTodo()
    {
        $addTodo = $_POST['todo'];
        $sessionId = $_SESSION["id"];
        $sql = "INSERT INTO todos (todo, userId) VALUES ('$addTodo', '$sessionId')";
        $this->conn->query($sql);
        echo "<meta http-equiv='refresh' content='0'>";
    }

    public function getTodos()
    {
        $sessionId = $_SESSION["id"];
        $sql = "SELECT * FROM todos WHERE userId='$sessionId'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}
$todo = new Todo();
