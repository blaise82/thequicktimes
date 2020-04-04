     CREATE TABLE IF NOT EXISTS users(
        id VARCHAR(250) PRIMARY KEY,
        username VARCHAR(250) NOT NULL,
        email VARCHAR(250)  UNIQUE NOT NULL, 
        type VARCHAR(250)  NOT NULL, 
        created_date VARCHAR(250) NOT NULL,
        password VARCHAR(250) NOT NULL
    );

INSERT INTO `users`(`id`, `username`, `email`, `type`, `created_date`, `password`)
 VALUES ('15e57c6a1213d6','Ntaremba Leonce','izabayoblaise82@gmail.com','admin','Thursday, February 27, 2020','$2y$10$rexbKiv0FUr0vKGWuvehyeqoQOPn3jfG0I6QBsn9JaNYMfXI6sB5K')