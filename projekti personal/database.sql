CREATE TABLE `users`(
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `emri` varchar(255) NOT NULL,
	`username` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,   
	`password` varchar(255) NOT NULL,
	`confirm_password` varchar(255) NOT NULL,
    `is_admin` varchar(255) NOT NULL
	)
    CREATE TABLE `races`(
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `race_name` varchar(255) NOT NULL,
	`race_time` int(255) NOT NULL,
    `race_date` varchar(255) NOT NULL,   
	`race_price` int(255) NOT NULL,
	`race_image` varchar(255) NOT NULL
	)

    CREATE TABLE `bookings`(
     `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     `user_id` int(11) NOT NULL,
     `race_id` int(11) NOT NULL,
     `nr_tickets` varchar(255) NOT NULL 
    );

    INSERT INTO `users` (`emri`,`username`,`email`,`password`,`confirm_password`) VALUES('Bled','BledH1','Bledh1234@gmail.com','123456','123456'),
	('Bled','BledH','bledh4352@gmail.com','123456','123456');
