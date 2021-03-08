CREATE DATABASE IF NOT EXISTS wordpress;

CREATE USER 'mano'@'localhost' IDENTIFIED BY 'mano';

GRANT ALL PRIVILEGES ON wordpress.* TO "mano"@"localhost" IDENTIFIED BY 'mano';
GRANT ALL PRIVILEGES ON phpmyadmin.* TO "mano"@"localhost" IDENTIFIED BY 'mano';

FLUSH PRIVILEGES;
