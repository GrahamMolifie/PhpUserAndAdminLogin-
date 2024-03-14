<!-- To insert dummy data into your database, you can use SQL INSERT statements. Here's how you can insert some dummy data into your users and admins tables: -->

-- Insert dummy data into the users table
INSERT INTO users (username, password) VALUES
('user1', '$2y$10$61oTxw1h9a3Qs4t8.hmsKu5dS1U8g9QnL04iI8LQMAJg6VOo6lmmK'), -- Password: password1
('user2', '$2y$10$v8Zw1w1cw/RkN.Tbc2NzE.yD5FjL98hx53DyWVw4r2R0e15T5jVyK'); -- Password: password2

-- Insert dummy data into the admins table
INSERT INTO admins (username, password) VALUES
('admin', '$2y$10$xYSNctMQNB3dVoLJiGv9auuHMWO5O8fcB7EPhfchpZs.VJNZnAmBq'); -- Password: adminpassword
