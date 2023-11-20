<!DOCTYPE html>
<html>
  <head>
    <title>Części komputerowe</title>
    <style>
      /* stylizacja */
      body {
        background-color: white;
        color: black;
        font-family: Arial, sans-serif;
      }
      h1 {
        color: red;
      }
      table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
      }
      th, td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
      }
      th {
        background-color: red;
        color: white;
      }
      tr:hover {
        background-color: #f5f5f5;
      }
    </style>
  </head>
  <body>
    <h1>Części komputerowe</h1>
    <a href="login.php">Login</a>
    <table>
      <thead>
        <tr>
          <th>Nazwa</th>
          <th>Cena</th>
          <th>Opis</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Procesor Intel Core i7-11700K</td>
          <td>1699 zł</td>
          <td>Szybki procesor dla graczy i profesjonalistów.</td>
        </tr>
        <tr>
          <td>Karta graficzna NVIDIA GeForce RTX 3080</td>
          <td>5499 zł</td>
          <td>Najwydajniejsza karta graficzna na rynku.</td>
        </tr>
        <tr>
          <td>Płyta główna MSI MPG Z590 GAMING EDGE WIFI</td>
          <td>1099 zł</td>
          <td>Wysokiej klasy płyta główna z obsługą WiFi 6.</td>
        </tr>
        <tr>
          <td>Dysk SSD Samsung 970 EVO Plus 1TB</td>
          <td>899 zł</td>
          <td>Szybki dysk SSD z dużą pojemnością.</td>
        </tr>
      </tbody>
    </table>
  </body>
</html>