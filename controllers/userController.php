<?php
class UserController {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }

    // Benutzer einloggen
    public function loginUser($username, $password) {
        // Benutzer aus der Datenbank holen
        $stmt = $this->db->prepare("SELECT id, username, password FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Wenn der Benutzer existiert und das Passwort übereinstimmt
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        
        return false; // Falsche Anmeldedaten
    }
}
?>
