CREATE TABLE `tbl_icon_index` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `name_phongban`	varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `img`	varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `tbl_nhansu_phongban` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `name_phongban`	varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `nhan_su`	text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_active_newscatelog` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `active` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_slideshow` (
  `id_slideshow` bigint(255) NOT NULL AUTO_INCREMENT,
  `title_slideshow_vi` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `title_slideshow_en` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8_unicode_ci NOT NULL,
  `content_vi` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(255) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id_slideshow`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_diadiemdulich` (
  `id_diadiemdulich` bigint(255) NOT NULL AUTO_INCREMENT,
  `title_diadiemdulich_vi` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `title_diadiemdulich_en` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content_vi` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(255) NOT NULL,
  PRIMARY KEY (`id_diadiemdulich`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `tbl_lichsukien` (
  `id_lichsukien` bigint(255) NOT NULL AUTO_INCREMENT,
  `title_lichsukien_vi` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `title_lichsukien_en` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `introduction_vi` text COLLATE utf8_unicode_ci NOT NULL,
  `introduction_en` text COLLATE utf8_unicode_ci NOT NULL,
  `content_vi` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `datelichsukien` date NOT NULL,
  `active` int(255) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id_lichsukien`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `tbl_category_list` (
  `id_category_list` bigint(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_category_list`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_active` (
  `id_active` bigint(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_active`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `tbl_review_content` (
  `id_review_content` bigint(255) NOT NULL AUTO_INCREMENT,
  `review_content` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_review_content`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_content_gioithieu` (
  `id_content_gioithieu` bigint(255) NOT NULL AUTO_INCREMENT,
  `title_conent` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_content` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img`	varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_menu` int(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_content_gioithieu`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `tbl_travel` (
  `id_travels` bigint(255) NOT NULL AUTO_INCREMENT,
  `title_en` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `title_vi` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_travels`)	
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tbl_codequangcao` (
  `id_codequangcao` bigint(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_codequangcao`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `tbl_maquacao` (
  `id_maquangcao` bigint(255) NOT NULL AUTO_INCREMENT,
  `name_quangcao` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `macode` int(1024) COLLATE utf8_unicode_ci NOT NULL,
  `ma_pub` int(1024) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `code` text COLLATE utf8_unicode_ci NOT NULL,

  PRIMARY KEY (`id_maquangcao`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;