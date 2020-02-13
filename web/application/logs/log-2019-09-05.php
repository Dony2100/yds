<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-05 00:00:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '22'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 00:00:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 00:10:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '38'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 00:10:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 01:27:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '29'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 01:27:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 01:35:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 01:35:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 01:35:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 01:35:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 01:56:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 01:56:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 02:07:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 02:07:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 02:20:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '37'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 02:20:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 02:32:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '27'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 02:32:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 02:40:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '23'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 02:40:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 02:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '22'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 02:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 02:59:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '27'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 02:59:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 03:00:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 03:00:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 03:11:48 --> 404 Page Not Found: /index
ERROR - 2019-09-05 03:17:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '29'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 03:17:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 03:18:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '33'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 03:18:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 03:49:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '26'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 03:49:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 03:53:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '18'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 03:53:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 04:10:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 04:10:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 04:11:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '20'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 04:11:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 04:20:41 --> 404 Page Not Found: /index
ERROR - 2019-09-05 04:36:46 --> 404 Page Not Found: /index
ERROR - 2019-09-05 04:55:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '11'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 04:55:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 06:29:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '24'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 06:29:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 06:42:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '37'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 06:42:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 06:42:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '37'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 06:42:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 06:43:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 06:43:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 06:43:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 06:43:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 06:43:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 06:43:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 06:43:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 06:43:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 06:45:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 06:45:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 06:50:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%ifcn%' 
ERROR - 2019-09-05 06:50:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 06:51:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 06:51:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 06:52:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%ifcn%' 
ERROR - 2019-09-05 06:52:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 06:52:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '16'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 06:52:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 06:53:49 --> 404 Page Not Found: /index
ERROR - 2019-09-05 06:54:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%ifcn%' 
ERROR - 2019-09-05 06:54:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 06:56:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%ifcn%' 
ERROR - 2019-09-05 06:56:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 06:57:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%ifcn%' 
ERROR - 2019-09-05 06:57:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 06:57:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%ifcn%' 
ERROR - 2019-09-05 06:57:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 06:57:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 06:57:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 06:58:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%ifcn%' 
ERROR - 2019-09-05 06:58:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 06:59:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 06:59:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 06:59:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 06:59:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 06:59:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '35'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 06:59:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 06:59:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 06:59:52 --> 404 Page Not Found: /index
ERROR - 2019-09-05 07:00:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 07:00:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '19'  WHERE a.tags LIKE '%ifcn%' 
ERROR - 2019-09-05 07:00:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 07:09:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 07:09:22 --> 404 Page Not Found: /index
ERROR - 2019-09-05 07:10:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 07:10:18 --> 404 Page Not Found: /index
ERROR - 2019-09-05 07:10:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '36'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 07:10:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
ERROR - 2019-09-05 07:14:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 07:14:22 --> 404 Page Not Found: /index
ERROR - 2019-09-05 07:14:22 --> 404 Page Not Found: /index
ERROR - 2019-09-05 07:15:17 --> 404 Page Not Found: /index
ERROR - 2019-09-05 07:15:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 07:15:18 --> 404 Page Not Found: /index
ERROR - 2019-09-05 07:17:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'  order by a.id desc' at line 19 - Invalid query: select al.author_id, al.data_id, a.id, a.authors, 
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
                                where al.author_id='19' and a.id is not null  WHERE a.tags LIKE '%ifcn%'  order by a.id desc
ERROR - 2019-09-05 07:19:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 07:19:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 07:19:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 07:19:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 07:19:54 --> 404 Page Not Found: /index
ERROR - 2019-09-05 07:20:18 --> 404 Page Not Found: /index
ERROR - 2019-09-05 07:20:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '1'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 07:20:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '1'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 07:20:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 07:21:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 07:21:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '1'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 07:21:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 07:21:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 07:23:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '11'  WHERE a.tags LIKE '%ifcn%' 
ERROR - 2019-09-05 07:24:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%ifcn%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '11'  WHERE a.tags LIKE '%ifcn%' 
ERROR - 2019-09-05 07:25:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE a.tags LIKE '%cekfakta%'' at line 1 - Invalid query: select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = '10'  WHERE a.tags LIKE '%cekfakta%' 
ERROR - 2019-09-05 08:31:09 --> 404 Page Not Found: /index
ERROR - 2019-09-05 09:10:32 --> 404 Page Not Found: /index
ERROR - 2019-09-05 11:49:10 --> 404 Page Not Found: /index
ERROR - 2019-09-05 13:30:53 --> 404 Page Not Found: /index
ERROR - 2019-09-05 16:43:09 --> 404 Page Not Found: /index
ERROR - 2019-09-05 16:59:36 --> 404 Page Not Found: /index
ERROR - 2019-09-05 17:10:28 --> 404 Page Not Found: /index
ERROR - 2019-09-05 17:43:47 --> 404 Page Not Found: /index
ERROR - 2019-09-05 17:43:50 --> 404 Page Not Found: /index
ERROR - 2019-09-05 17:43:50 --> 404 Page Not Found: /index
ERROR - 2019-09-05 17:43:51 --> 404 Page Not Found: /index
ERROR - 2019-09-05 17:46:50 --> 404 Page Not Found: /index
ERROR - 2019-09-05 20:49:02 --> 404 Page Not Found: /index
ERROR - 2019-09-05 22:56:03 --> 404 Page Not Found: /index
ERROR - 2019-09-05 23:46:26 --> 404 Page Not Found: /index
