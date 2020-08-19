<?php

var name = $_POST['name'];
var loan = $_POST['loan'];
var loantype = $_POST['type'];
var band;

if (loan < 25000):
    band = 1;
elseif (loan < 50000):
    band = 2;
elseif (loan < 100000):
    band = 3;
elseif (loan < 200000):
    band = 4;
elseif (loan < 500000):
    band = 5;
elseif (loan < 750000):
    band = 6;
elseif (loan < 1000000):
    band = 7;
elseif (loan < 2000000):
    band = 8;
else:
    band = 9;

/*Add to database*/
$servername = "localhost";
$username = "username";
$password = "password";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
/* Insert Information*/
$sql = "INSERT INTO Loan (Buisness, loan, loantype, band) VALUES (name, loan, loantype, band)";



/*List all*/
$sql = "SELECT Buisness, loan, loantype, band FROM Loan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Buisness: " . $row["Buisness"]. " - Loan: " . $row["loan"]. " - Loan Type: " . $row["loantype"]. " - Band: " . $row["band"]."<br>";
  }
} else {
  echo "0 results";
}

/*Average*/
$sql = "SELECT AVG(loan) FROM Loan WHERE loantype='vechicle' ";
$result = $conn->query($sql);

echo "Vechicle". $result;

/*The amount of each loan type*/
$sql = "SELECT COUNT(loantype) FROM Loan WHERE loantype='vechicle' ";
$result = $conn->query($sql);

echo "Vechicle". $result;

/*The amount of each loan type*/
$sql = "SELECT COUNT(band) FROM Loan WHERE band='1' ";
$result = $conn->query($sql);

echo "Band 1: ". $result;



$conn->close();

echo
?>
