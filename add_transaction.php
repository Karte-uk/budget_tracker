<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Transaction</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Add Transaction</h1>
        </div>
    </section>
    <?php include 'add_control.php'; ?>
    <form action="" method="post">
        <div class="field">
            <label for="type" class="label">Type</label>
            <select name="type" required>
                <option value="income">Income</option>
                <option value="expense">Expense</option>
            </select>
        </div>
        <div class="field">
            <label for="category" class="label">Category</label>
            <div class="control">
                <input type="text" name="category" class="input" required>
            </div>
        </div>
        <div class="field">
            <label for="amount" class="label">Amount</label>
            <div class="control">
                <input type="number" name="amount" class="input" step="0.01" required>
            </div>
        </div>
        <div class="control">
            <button type="submit" class="button is-primary">Add Transaction</button>
        </div>
    </form>
</body>
</html>