<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-03 00:42:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 00:42:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 00:53:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '32'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 00:53:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 00:56:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '37'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 00:56:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='37' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-03 01:05:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 01:05:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 01:18:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '17'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 01:18:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 01:19:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '17'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 01:19:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 01:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 01:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 01:36:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 01:36:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 01:36:59 --> 404 Page Not Found: /index
ERROR - 2019-09-03 01:50:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '21'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 01:50:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 02:37:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '29'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 02:37:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 02:39:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '31'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 02:39:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 02:40:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '32'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 02:40:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 02:48:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '29'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 02:48:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 02:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '16'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 02:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 02:57:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '24'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 02:57:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 03:07:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 03:07:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 03:07:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 03:07:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 03:20:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 03:20:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 03:21:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '15'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 03:21:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 03:30:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 03:30:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 03:45:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '38'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 03:45:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 04:15:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '29'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 04:15:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 04:21:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 04:21:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 04:28:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '31'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 04:28:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 04:59:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '14'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 04:59:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 05:08:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '17'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:08:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 05:18:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:18:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 05:20:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '32'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:20:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 05:21:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '11'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:21:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 05:21:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '38'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:21:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 05:22:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:22:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 05:23:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '38'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:23:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 05:27:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '14'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:27:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 05:28:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '17'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:28:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 05:29:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '37'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:29:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='37' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-03 05:31:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:31:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 05:35:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '22'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:35:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 05:37:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '29'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:37:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 05:58:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '27'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:58:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 05:59:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 05:59:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 06:04:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '28'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 06:04:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 06:08:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '26'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 06:08:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 06:28:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '22'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 06:28:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 06:32:11 --> 404 Page Not Found: /index
ERROR - 2019-09-03 06:40:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '31'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 06:40:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 06:44:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 06:44:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 07:05:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '32'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 07:05:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 07:05:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 07:05:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 07:05:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 07:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 07:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '11'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 07:05:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 07:06:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '37'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 07:06:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='37' and a.id is not null  WHERE a.tags LIKE '%cekfakta%'  order by a.id desc
ERROR - 2019-09-03 07:42:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '33'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 07:42:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 07:55:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 07:55:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 08:14:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '33'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 08:14:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 08:43:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '23'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 08:43:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 08:50:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 08:50:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 09:52:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '22'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 09:52:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 09:58:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 09:58:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 10:19:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 10:19:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 10:27:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 10:27:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 10:29:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '27'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 10:29:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 10:42:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '11'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 10:42:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 10:44:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '11'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 10:44:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 10:53:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 10:53:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 11:11:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 11:11:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 11:23:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 11:23:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 11:24:07 --> 404 Page Not Found: /index
ERROR - 2019-09-03 11:24:12 --> 404 Page Not Found: /index
ERROR - 2019-09-03 11:24:12 --> 404 Page Not Found: /index
ERROR - 2019-09-03 11:24:13 --> 404 Page Not Found: /index
ERROR - 2019-09-03 11:24:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '29'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 11:24:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 11:26:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '17'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 11:26:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 11:26:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '32'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 11:26:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 11:34:24 --> 404 Page Not Found: /index
ERROR - 2019-09-03 11:35:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '11'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 11:35:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 11:43:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '28'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 11:43:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 12:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 12:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 12:07:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '25'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 12:07:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 12:32:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '29'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 12:32:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 12:50:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '14'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 12:50:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 13:33:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 13:33:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 14:15:10 --> 404 Page Not Found: /index
ERROR - 2019-09-03 14:55:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '13'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 14:55:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 15:01:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '14'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 15:01:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 15:42:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '13'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 15:42:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 15:53:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 15:53:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 15:53:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 15:53:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 16:47:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 16:47:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 17:06:38 --> 404 Page Not Found: /index
ERROR - 2019-09-03 17:18:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '16'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 17:18:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 17:27:40 --> 404 Page Not Found: /index
ERROR - 2019-09-03 17:38:40 --> 404 Page Not Found: /index
ERROR - 2019-09-03 17:46:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '11'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 17:46:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 17:50:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '14'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 17:50:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 18:14:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '16'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 18:14:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 18:42:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '27'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 18:42:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 18:52:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '31'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 18:52:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 19:09:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 19:09:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 19:21:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 19:21:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 19:31:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '24'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 19:31:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 19:58:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '33'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 19:58:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 20:06:41 --> 404 Page Not Found: /index
ERROR - 2019-09-03 20:40:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '31'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 20:40:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 20:47:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 20:47:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 22:00:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 22:00:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 22:19:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '16'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 22:19:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 22:30:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '26'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 22:30:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 22:40:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 22:40:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 22:54:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '38'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 22:54:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 22:54:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '32'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 22:54:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 22:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '26'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 22:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 22:57:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '26'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 22:57:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 23:40:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 23:40:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-03 23:54:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-03 23:54:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
