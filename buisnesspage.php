<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        /*Should insert valudation*/
        $sql = "SELECT id, buisnessname, password FROM buisness WHERE buisnessname = ?";
    
        $_SESSION["loggedin"] = true;
    
    
        /*retrieve info on buisness*/
        $servername = "localhost";
        $username = "username";
        $password = "password";
    
        $conn = new mysqli($servername, $username, $password);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "SELECT Buisness, loan, loantype, band FROM Loan WHERE buisnessname == Buisness";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Buisness: " . $row["Buisness"]. " - Loan: " . $row["loan"]. " - Loan Type: " . $row["loantype"]. " - Band: " . $row["band"]."<br>";
        }
        } else {
        echo "0 results";
        }
    
?>
