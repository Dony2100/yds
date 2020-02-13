<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-08-01 02:32:17 --> 404 Page Not Found: /index
ERROR - 2019-08-01 03:09:37 --> Severity: Warning --> Error while sending QUERY packet. PID=18514 /mnt/1/var/www/html/yudistira/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-08-01 03:09:37 --> Query error: MySQL server has gone away - Invalid query: SELECT `antihoax`.`id`, `user_id`, `authors`, `status`, `classification`, `title`, `content`, `fact`, `references`, `source_issue`, `source_link`, `picture1`, `picture2`, `picture3`, `picture4`, `tanggal`, `tags`, `updated_at`, `updated_id`, `created_at`, `region_id`, `region_level`, `conclusion`
FROM `antihoax`
LEFT JOIN `antihoax_content` ON `antihoax`.`id`=`antihoax_content`.`antihoax_id`
WHERE   (
`status` LIKE '%aj%' ESCAPE '!'
OR  `classification` LIKE '%aj%' ESCAPE '!'
OR  `title` LIKE '%aj%' ESCAPE '!'
OR  `content` LIKE '%aj%' ESCAPE '!'
OR  `fact` LIKE '%aj%' ESCAPE '!'
OR  `source_issue` LIKE '%aj%' ESCAPE '!'
OR  `tanggal` LIKE '%aj%' ESCAPE '!'
OR  `tags` LIKE '%aj%' ESCAPE '!'
OR  `conclusion` LIKE '%aj%' ESCAPE '!'
 )
ORDER BY `antihoax`.`id` DESC
 LIMIT 100
ERROR - 2019-08-01 03:09:37 --> Severity: Warning --> Error while sending QUERY packet. PID=18871 /mnt/1/var/www/html/yudistira/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-08-01 03:09:37 --> Query error: MySQL server has gone away - Invalid query: SELECT `antihoax`.`id`, `user_id`, `authors`, `status`, `classification`, `title`, `content`, `fact`, `references`, `source_issue`, `source_link`, `picture1`, `picture2`, `picture3`, `picture4`, `tanggal`, `tags`, `updated_at`, `updated_id`, `created_at`, `region_id`, `region_level`, `conclusion`
FROM `antihoax`
LEFT JOIN `antihoax_content` ON `antihoax`.`id`=`antihoax_content`.`antihoax_id`
ORDER BY `antihoax`.`id` DESC
 LIMIT 100
ERROR - 2019-08-01 03:09:38 --> Severity: Warning --> Error while sending QUERY packet. PID=18872 /mnt/1/var/www/html/yudistira/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-08-01 03:09:38 --> Query error: MySQL server has gone away - Invalid query: SELECT `antihoax`.`id`, `user_id`, `authors`, `status`, `classification`, `title`, `content`, `fact`, `references`, `source_issue`, `source_link`, `picture1`, `picture2`, `picture3`, `picture4`, `tanggal`, `tags`, `updated_at`, `updated_id`, `created_at`, `region_id`, `region_level`, `conclusion`
FROM `antihoax`
LEFT JOIN `antihoax_content` ON `antihoax`.`id`=`antihoax_content`.`antihoax_id`
WHERE `antihoax`.`id` = '2893'
ERROR - 2019-08-01 03:09:38 --> Severity: Warning --> Error while sending QUERY packet. PID=19364 /mnt/1/var/www/html/yudistira/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-08-01 03:09:38 --> Query error: MySQL server has gone away - Invalid query: SELECT `antihoax`.`id`, `user_id`, `authors`, `status`, `classification`, `title`, `content`, `fact`, `references`, `source_issue`, `source_link`, `picture1`, `picture2`, `picture3`, `picture4`, `tanggal`, `tags`, `updated_at`, `updated_id`, `created_at`, `region_id`, `region_level`, `conclusion`
FROM `antihoax`
LEFT JOIN `antihoax_content` ON `antihoax`.`id`=`antihoax_content`.`antihoax_id`
WHERE `antihoax`.`id` = '2893'
ERROR - 2019-08-01 03:14:05 --> Severity: Warning --> Error while sending QUERY packet. PID=19181 /mnt/1/var/www/html/yudistira/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-08-01 03:14:05 --> Query error: MySQL server has gone away - Invalid query: SELECT `antihoax`.`id`, `user_id`, `authors`, `status`, `classification`, `title`, `content`, `fact`, `references`, `source_issue`, `source_link`, `picture1`, `picture2`, `picture3`, `picture4`, `tanggal`, `tags`, `updated_at`, `updated_id`, `created_at`, `region_id`, `region_level`, `conclusion`
FROM `antihoax`
LEFT JOIN `antihoax_content` ON `antihoax`.`id`=`antihoax_content`.`antihoax_id`
WHERE   (
`status` LIKE '%referendum%' ESCAPE '!'
OR  `classification` LIKE '%referendum%' ESCAPE '!'
OR  `title` LIKE '%referendum%' ESCAPE '!'
OR  `content` LIKE '%referendum%' ESCAPE '!'
OR  `fact` LIKE '%referendum%' ESCAPE '!'
OR  `source_issue` LIKE '%referendum%' ESCAPE '!'
OR  `tanggal` LIKE '%referendum%' ESCAPE '!'
OR  `tags` LIKE '%referendum%' ESCAPE '!'
OR  `conclusion` LIKE '%referendum%' ESCAPE '!'
 )
ORDER BY `antihoax`.`id` DESC
 LIMIT 10
ERROR - 2019-08-01 03:14:05 --> Severity: Warning --> Error while sending QUERY packet. PID=19330 /mnt/1/var/www/html/yudistira/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-08-01 03:14:05 --> Query error: MySQL server has gone away - Invalid query: SELECT `antihoax`.`id`, `user_id`, `authors`, `status`, `classification`, `title`, `content`, `fact`, `references`, `source_issue`, `source_link`, `picture1`, `picture2`, `picture3`, `picture4`, `tanggal`, `tags`, `updated_at`, `updated_id`, `created_at`, `region_id`, `region_level`, `conclusion`
FROM `antihoax`
LEFT JOIN `antihoax_content` ON `antihoax`.`id`=`antihoax_content`.`antihoax_id`
WHERE   (
`status` LIKE '%referendum a%' ESCAPE '!'
OR  `classification` LIKE '%referendum a%' ESCAPE '!'
OR  `title` LIKE '%referendum a%' ESCAPE '!'
OR  `content` LIKE '%referendum a%' ESCAPE '!'
OR  `fact` LIKE '%referendum a%' ESCAPE '!'
OR  `source_issue` LIKE '%referendum a%' ESCAPE '!'
OR  `tanggal` LIKE '%referendum a%' ESCAPE '!'
OR  `tags` LIKE '%referendum a%' ESCAPE '!'
OR  `conclusion` LIKE '%referendum a%' ESCAPE '!'
 )
ORDER BY `antihoax`.`id` DESC
 LIMIT 10
ERROR - 2019-08-01 04:03:26 --> 404 Page Not Found: /index
ERROR - 2019-08-01 07:14:13 --> 404 Page Not Found: /index
ERROR - 2019-08-01 08:04:29 --> 404 Page Not Found: /index
ERROR - 2019-08-01 11:38:17 --> 404 Page Not Found: /index
ERROR - 2019-08-01 17:38:39 --> 404 Page Not Found: /index
ERROR - 2019-08-01 21:41:07 --> 404 Page Not Found: /index
ERROR - 2019-08-01 22:40:20 --> 404 Page Not Found: /index
