<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-04 00:06:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 00:06:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='18' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 00:41:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 00:41:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 00:53:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 00:53:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 00:53:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 00:53:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 01:08:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '27'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 01:08:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='27' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 01:28:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 01:28:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='10' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 02:19:41 --> 404 Page Not Found: /index
ERROR - 2019-09-04 02:23:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '33'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 02:24:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='33' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 03:19:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 03:19:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='20' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 03:43:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 03:43:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 03:50:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '32'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 03:50:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='32' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 04:17:18 --> 404 Page Not Found: /index
ERROR - 2019-09-04 04:17:36 --> Severity: Notice --> Undefined variable: result /mnt/1/var/www/html/yudistira/application/models/Maindata_model.php 292
ERROR - 2019-09-04 04:17:36 --> Severity: Warning --> Invalid argument supplied for foreach() /mnt/1/var/www/html/yudistira/application/views/breadcrumb/area_chart.php 59
ERROR - 2019-09-04 04:19:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '11'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 04:19:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='11' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 04:22:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '17'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 04:22:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='17' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 04:22:55 --> 404 Page Not Found: /index
ERROR - 2019-09-04 04:24:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 04:24:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 04:38:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 04:38:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='10' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 04:50:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 04:50:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='36' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 05:04:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '21'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 05:04:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='21' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 05:19:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '33'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 05:19:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='33' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 05:44:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '14'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 05:44:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='14' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 05:49:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 05:49:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='36' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 06:20:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 06:20:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='20' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 06:22:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 06:22:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='20' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 07:46:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '38'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 07:46:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='38' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:26:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:26:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:26:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:26:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:26:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:26:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:41:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '14'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:41:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='14' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:41:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:41:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='18' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:41:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '31'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:41:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='31' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:41:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:41:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='36' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:42:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:42:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='10' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:42:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '32'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:42:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='32' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:42:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:42:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:42:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '24'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:42:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='24' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:42:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '28'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:42:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='28' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:42:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '33'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:42:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='33' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:42:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '15'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:42:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='15' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:42:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:42:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:42:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '27'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:42:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='27' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:45:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '11'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:45:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='11' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:49:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 08:49:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 08:54:51 --> 404 Page Not Found: /index
ERROR - 2019-09-04 09:15:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '24'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 09:15:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='24' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 09:23:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 09:23:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='36' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 09:27:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 09:27:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 09:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 09:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 09:28:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 09:28:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 09:30:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 09:30:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='20' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 10:04:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '23'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 10:04:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='23' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 10:11:24 --> 404 Page Not Found: /index
ERROR - 2019-09-04 10:23:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '26'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 10:23:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='26' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 10:25:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '25'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 10:25:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='25' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 10:27:24 --> 404 Page Not Found: /index
ERROR - 2019-09-04 10:29:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 10:29:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='10' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 10:30:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 10:30:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='36' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 10:32:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 10:32:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='36' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 10:32:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 10:32:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='36' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 10:34:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 10:34:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='36' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 10:35:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 10:35:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='36' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 10:35:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 10:35:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='36' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 10:58:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '17'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 10:58:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='17' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 11:15:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '24'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 11:15:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='24' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 12:04:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 12:04:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='20' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 12:12:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 12:12:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 12:12:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '31'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 12:12:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='31' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 12:43:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 12:43:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 12:43:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 12:43:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 12:43:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 12:43:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 12:55:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '22'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 12:55:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='22' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 12:55:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '26'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 12:55:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='26' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 13:03:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 13:03:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='18' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 13:03:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 13:03:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='18' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 13:03:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '11'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 13:03:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='11' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 13:25:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 13:25:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='18' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 13:50:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '14'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 13:50:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='14' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 13:57:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 13:57:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='18' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 14:02:30 --> 404 Page Not Found: /index
ERROR - 2019-09-04 14:25:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '16'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 14:25:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='16' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 14:40:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 14:40:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='18' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 14:49:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '13'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 14:49:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='13' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 15:09:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 15:09:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='18' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 15:26:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '31'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 15:26:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='31' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 15:29:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '31'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 15:29:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='31' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 15:38:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '24'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 15:38:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='24' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 16:00:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 16:00:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='10' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 16:00:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 16:00:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='10' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 16:00:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 16:00:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='10' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 16:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '32'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 16:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='32' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 16:35:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 16:35:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='20' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 16:37:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 16:37:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='18' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 17:20:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 17:20:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='20' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 17:26:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '17'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 17:26:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='17' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 17:30:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 17:30:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 18:17:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 18:17:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='18' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 18:32:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '32'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 18:32:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='32' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 18:54:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 18:54:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 18:54:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 18:54:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 18:54:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 18:54:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 18:54:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 18:54:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 18:54:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 18:54:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 18:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 18:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 19:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 19:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '32'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 19:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '31'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 19:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='20' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 19:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='31' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 19:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='32' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 19:04:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '23'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 19:04:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '29'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 19:04:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='23' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 19:04:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='29' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 19:04:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 19:04:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='36' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 19:04:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '33'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 19:04:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='33' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 19:04:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 19:04:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='20' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 19:16:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '31'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 19:16:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='31' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 19:18:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 19:18:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 19:18:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 19:18:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 19:18:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 19:18:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 19:43:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '16'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 19:43:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='16' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 20:22:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 20:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 20:22:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 20:22:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 20:22:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 20:22:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 20:30:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '29'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 20:30:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='29' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 20:52:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '29'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 20:52:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='29' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 21:22:13 --> 404 Page Not Found: /index
ERROR - 2019-09-04 22:37:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 22:37:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='18' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 22:40:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '26'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 22:40:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='26' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 22:51:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 22:51:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 22:51:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 22:51:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 22:51:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 22:51:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='35' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-04 23:15:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-04 23:15:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id='20' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
