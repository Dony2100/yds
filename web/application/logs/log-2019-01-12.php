<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-01-12 00:07:30 --> 404 Page Not Found: /index
ERROR - 2019-01-12 06:09:49 --> 404 Page Not Found: Auth/theme
ERROR - 2019-01-12 06:09:57 --> 404 Page Not Found: /index
ERROR - 2019-01-12 06:25:37 --> 404 Page Not Found: /index
ERROR - 2019-01-12 06:25:37 --> 404 Page Not Found: /index
ERROR - 2019-01-12 06:26:47 --> 404 Page Not Found: /index
ERROR - 2019-01-12 06:26:47 --> 404 Page Not Found: /index
ERROR - 2019-01-12 07:25:25 --> Query error: Unknown column 'title' in 'field list' - Invalid query: SELECT `id`, `authors`, `status`, `classification`, `title`, `content`, `fact`, `references`, `source_issue`, `source_link`, `picture1`, `picture2`, `tanggal`, `tags`, `conclusion`
FROM `antihoax`
WHERE `id` = '893'
ERROR - 2019-01-12 07:26:23 --> Query error: Unknown column 'title' in 'field list' - Invalid query: SELECT `id`, `authors`, `status`, `classification`, `title`, `content`, `fact`, `references`, `source_issue`, `source_link`, `picture1`, `picture2`, `tanggal`, `tags`, `conclusion`
FROM `antihoax`
WHERE `id` = '893'
ERROR - 2019-01-12 07:26:24 --> 404 Page Not Found: /index
ERROR - 2019-01-12 07:31:26 --> Query error: Column 'id' in field list is ambiguous - Invalid query: SELECT `id`, `authors`, `status`, `classification`, `title`, `content`, `fact`, `references`, `source_issue`, `source_link`, `picture1`, `picture2`, `tanggal`, `tags`, `conclusion`
FROM `antihoax`
LEFT JOIN `antihoax_content` ON `antihoax`.`id`=`antihoax_content`.`antihoax_id`
WHERE `id` = '893'
ERROR - 2019-01-12 07:32:28 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `antihoax`.`id`, `authors`, `status`, `classification`, `title`, `content`, `fact`, `references`, `source_issue`, `source_link`, `picture1`, `picture2`, `tanggal`, `tags`, `conclusion`
FROM `antihoax`
LEFT JOIN `antihoax_content` ON `antihoax`.`id`=`antihoax_content`.`antihoax_id`
WHERE `id` = '893'
ERROR - 2019-01-12 07:33:12 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `antihoax`.`id`, `authors`, `status`, `classification`, `title`, `content`, `fact`, `references`, `source_issue`, `source_link`, `picture1`, `picture2`, `tanggal`, `tags`, `conclusion`
FROM `antihoax`
LEFT JOIN `antihoax_content` ON `antihoax`.`id`=`antihoax_content`.`antihoax_id`
WHERE `id` = '893'
