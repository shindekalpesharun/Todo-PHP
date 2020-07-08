<?php
session_start();
if (!isset($_SESSION["id"])) {
  header("Location: login.php");
}
?>
<?php include_once 'style/header.php' ?>
<title>Index Page</title>
</head>

<body>

  <link href="https://fonts.googleapis.com/css?family=Hind:700" rel="stylesheet">


  <h1 style=" font-family: 'Hind', sans-serif;
  font-size:50px;
  line-height:60px;
  font-weight:700;
  margin: 5px;
  padding: 40px 30px;">Todo</h1>

  <!-- TODO: Add Model And Edit and del function -->

  <!-- Table -->
  <table>
    <thead>
      <tr>
        <th scope="col">Todos</th>
        <th scope="col">Date</th>
        <th scope="col">Option</th>
        <!-- <th scope="col">Amount</th>
        <th scope="col">Period</th> -->
      </tr>
    </thead>
    <tbody>
      <?php
      $data = $todo->getTodos();
      if (isset($data)) {
        for ($i = 0; $i < sizeof($data); $i++) { ?>
          <tr>
            <td data-label="Todos"><?php echo $data[$i]['todo']; ?></td>
            <td data-label="Date"><?php echo $data[$i]['date'] ?></td>
            <td data-label="Option">
              <span class="material-icons" style="color: purple;">
                edit
              </span>
              <span class="material-icons" style="color: red;">
                delete
              </span>
            </td>
          </tr>
      <?php }
      } ?>
    </tbody>
  </table>
  <!-- Table End -->

  <!-- FAB -->
  <div class="ba-we-love-subscribers-wrap">
    <div class="ba-we-love-subscribers popup-ani">
      <header>
        <h1>We<i class="img love"></i>subscribers</h1>
      </header>
      <form action="" method="post">
        <input name="todo" placeholder="Add Something " type="text" value=""><br>
        <input class="logo-ani" name="btnsub" type="submit"> <input name="uri" type="hidden" value="barreldotim">
      </form>
      <div class="img ba-logo logo-ani"></div>
    </div>
    <div class="ba-we-love-subscribers-fab">
      <div class="wrap">
        <div class="img-fab img"></div>
      </div>
    </div>
  </div>
  <!-- FAB End -->

  <?php include_once 'style/fotter.php'; ?>

  <?php
  if (isset($_POST['btnsub'])) {
    $todo->addTodo();
  }
  ?>