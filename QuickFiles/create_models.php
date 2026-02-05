Expense::create([
   'name' => 'Home',
   'amount' => 2950,
   'cadence' => 'Monthly',
   'category' => 'Housing',
]);

Expense::create([
   'name' => 'Groceries',
   'amount' => 800,
   'cadence' => 'Monthly',
   'category' => 'Food',
]);

Expense::create([
   'name' => 'Gas',
   'amount' => 200,
   'cadence' => 'Weekly',
   'category' => 'Transportation',
]);

Expense::create([
   'name' => 'Taylor Swift Concert',
   'amount' => 5000,
   'cadence' => '',
   'category' => 'Fun',
   'effect_date' => '2025-03-22',
]);

Expense::create([
   'name' => 'Empty Charge',
   'amount' => 0,
   'cadence' => '',
   'effect_date' => '2025-03-18',
]);

// Categories
Category::create([
   'name' => 'Housing',
]);

Category::create([
   'name' => 'Transportation',
]);

Category::create([
   'name' => 'Food',
]);

Category::create([
   'name' => 'Fun',
]);