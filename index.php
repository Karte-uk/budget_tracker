<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Tracker</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">
</head>
<body>
          <section class="section">
          <div class="container">
                    <h1 class="title">Budget Tracker</h1>
                    
                    <?php
                    $income = $conn->query("SELECT SUM(amount) AS total FROM transaction WHERE type='income'")->fetch_assoc()['total'] ?? 0;
                    $expense = $conn->query("SELECT SUM(amount) AS total FROM transaction WHERE type='expense'")->fetch_assoc()['total'] ?? 0;
                    $balance = $income - $expense;
                    ?>

                    <div class="box">
                    <h2 class="subtitle">Total Balance: <strong>£<?= number_format($balance, 2) ?></strong></h2>
                    <p>Income: <strong class="has-text-success">£<?= number_format($income, 2) ?></strong></p>
                    <p>Expenses: <strong class="has-text-danger">£<?= number_format($expense, 2) ?></strong></p>
                    </div>

                    <h2 class="subtitle">Transaction History</h2>
                    <table class="table is-striped is-fullwidth">
                    <thead>
                              <tr>
                              <th>Type</th>
                              <th>Category</th>
                              <th>Amount</th>
                              <th>Date</th>
                              <th>Action</th>
                              </tr>
                    </thead>
                    <tbody>
                              <?php
                              $result = $conn->query("SELECT * FROM transaction ORDER BY date DESC");
                              while ($row = $result->fetch_assoc()):
                              ?>
                              <tr>
                              <td><?= ucfirst($row['type']) ?></td>
                              <td><?= $row['category'] ?></td>
                              <td>£<?= number_format($row['amount'], 2) ?></td>
                              <td><?= $row['date'] ?></td>
                              <td><a href="delete_transaction.php?id=<?= $row['id'] ?>" class="button is-danger is-small">Delete</a></td>
                              </tr>
                              <?php endwhile; ?>
                    </tbody>
                    </table>

                    <a href="add_transaction.php" class="button is-primary">Add New Transaction</a>
          </div>
          </section>
</body>
</html>
