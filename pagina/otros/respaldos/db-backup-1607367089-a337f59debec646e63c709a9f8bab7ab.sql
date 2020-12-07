DROP TABLE IF EXISTS categoria_gastos;

CREATE TABLE `categoria_gastos` (
  `id_categoria` int(200) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO categoria_gastos VALUES("1","mas tabletas");



DROP TABLE IF EXISTS categoria_gastos_farmacia;

CREATE TABLE `categoria_gastos_farmacia` (
  `id_categoria` int(200) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO categoria_gastos_farmacia VALUES("4","guantes quirurgicos"),
("5","mascarillas");



DROP TABLE IF EXISTS cita;

CREATE TABLE `cita` (
  `id_cita` int(200) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(200) NOT NULL,
  `id_medico` int(200) NOT NULL,
  `fecha` date NOT NULL,
  `estado_cita` varchar(200) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `horario` varchar(200) NOT NULL,
  PRIMARY KEY (`id_cita`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO cita VALUES("1","20","17","2020-08-09","reservado","venir a la hora","20"),
("2","9","12","2020-08-18","reservado","hora exacrta","9"),
("3","20","17","2020-08-18","reservado","rapdio","15"),
("5","24","21","2020-12-23","reservado","fazer gols","1");



DROP TABLE IF EXISTS detalle_preescripcion;

CREATE TABLE `detalle_preescripcion` (
  `id_detalle_preescripcion` int(200) NOT NULL AUTO_INCREMENT,
  `medicina` varchar(200) NOT NULL,
  `dosis` varchar(200) NOT NULL,
  `frecuencia` varchar(200) NOT NULL,
  `dias` int(200) NOT NULL,
  `instruccion` varchar(1000) NOT NULL,
  `id_preescripcion` int(200) NOT NULL,
  PRIMARY KEY (`id_detalle_preescripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO detalle_preescripcion VALUES("1","panadol","50","2 veces al dia","3","despues de cada comida","2");



DROP TABLE IF EXISTS detalles_pedido;

CREATE TABLE `detalles_pedido` (
  `id_detalles` int(200) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(200) NOT NULL,
  `id_producto` int(200) NOT NULL,
  `cantidad` varchar(200) NOT NULL,
  `id_cliente` int(200) NOT NULL,
  PRIMARY KEY (`id_detalles`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS detalles_pedido_medicina;

CREATE TABLE `detalles_pedido_medicina` (
  `id_detalles` int(200) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(200) NOT NULL,
  `id_producto` int(200) NOT NULL,
  `cantidad` int(200) NOT NULL,
  `id_cliente` int(200) NOT NULL,
  PRIMARY KEY (`id_detalles`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO detalles_pedido_medicina VALUES("3","3","4","2","20"),
("4","4","5","1","20"),
("5","5","5","2","20");



DROP TABLE IF EXISTS empresa;

CREATE TABLE `empresa` (
  `id_empresa` int(100) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(200) NOT NULL,
  `ruc` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `imagen` varchar(2000) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `simbolo_moneda` varchar(200) NOT NULL,
  `tipo_moneda` varchar(200) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO empresa VALUES("1","Empresa do samuel","123123","Quixeramobim CE","88993686330","123123","13687-full_aesthetic-anime-laptop-wallpapers-top-free-aesthetic-anime.jpg","samuelcabralmarques@gmail.com","$$$","Real");



DROP TABLE IF EXISTS gastos;

CREATE TABLE `gastos` (
  `id_gastos` int(200) NOT NULL AUTO_INCREMENT,
  `cantidad` float NOT NULL,
  `nota` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `id_categoria` int(200) NOT NULL,
  PRIMARY KEY (`id_gastos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS gastos_farmacia;

CREATE TABLE `gastos_farmacia` (
  `id_gastos` int(200) NOT NULL AUTO_INCREMENT,
  `cantidad` int(200) NOT NULL,
  `nota` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `id_categoria` int(200) NOT NULL,
  PRIMARY KEY (`id_gastos`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO gastos_farmacia VALUES("1","3","solo queda poco","2020-08-08","5");



DROP TABLE IF EXISTS history_log;

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=278 DEFAULT CHARSET=latin1;

INSERT INTO history_log VALUES("1","1","has logged in the system at ","2018-11-27 07:58:26"),
("2","1","has logged out the system at ","2018-11-27 07:59:03"),
("3","1","has logged in the system at ","2018-11-30 22:32:20"),
("4","6","has logged in the system at ","2018-12-01 20:28:15"),
("13","1","has logged out the system at ","2018-11-30 22:42:36"),
("14","1","has logged in the system at ","2018-12-04 11:12:37"),
("15","1","has logged in the system at ","2018-12-19 10:16:00"),
("16","1","has logged in the system at ","2018-12-19 10:21:46"),
("17","1","has logged in the system at ","2018-12-19 10:27:32"),
("18","1","has logged in the system at ","2018-12-19 10:33:11"),
("19","1","se ha desconectado el sistema en ","2018-12-19 10:39:49"),
("20","1","has logged in the system at ","2018-12-19 10:40:01"),
("21","1","se ha desconectado el sistema en ","2018-12-19 10:40:04"),
("22","1","has logged in the system at ","2018-12-19 10:42:35"),
("23","1","se ha desconectado el sistema en ","2018-12-19 10:42:44"),
("24","1","has logged in the system at ","2018-12-19 10:43:07"),
("25","1","se ha desconectado el sistema en ","2018-12-19 10:44:35"),
("26","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-14 10:55:46"),
("27","1","se ha desconectado el sistema en ","2019-01-14 11:02:35"),
("28","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-14 11:02:41"),
("29","1","se ha desconectado el sistema en ","2019-01-14 11:09:15"),
("30","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-16 21:05:23"),
("31","1","se ha desconectado el sistema en ","2019-01-16 21:05:32"),
("32","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-16 21:06:19"),
("33","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-16 21:09:39"),
("34","1","se ha desconectado el sistema en ","2019-01-16 21:12:48"),
("35","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-16 21:12:52"),
("36","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-16 22:33:53"),
("37","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-17 08:50:57"),
("38","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-17 22:37:23"),
("39","1","se ha desconectado el sistema en ","2019-01-18 01:25:04"),
("40","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-18 03:35:56"),
("41","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-18 08:25:58"),
("42","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-18 20:31:12"),
("43","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-19 06:39:38"),
("44","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-20 01:27:24"),
("45","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-20 01:43:21"),
("46","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-20 02:56:46"),
("47","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-20 10:44:05"),
("48","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-20 11:13:20"),
("49","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-21 11:27:47"),
("50","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-23 01:38:33"),
("51","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-23 07:15:31"),
("52","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-23 10:39:09"),
("53","1","ha iniciado sesiÃ³n en el sistema en ","2019-01-23 20:39:13"),
("54","1","se ha desconectado el sistema en ","2019-01-24 01:32:13"),
("55","1","se ha desconectado el sistema en ","2019-01-24 01:46:48"),
("56","1","se ha desconectado el sistema en ","2019-01-24 01:48:41"),
("57","1","se ha desconectado el sistema en ","2019-01-24 01:48:52"),
("58","1","se ha desconectado el sistema en ","2019-01-24 01:49:01"),
("59","1","se ha desconectado el sistema en ","2019-01-24 01:52:37"),
("60","1","se ha desconectado el sistema en ","2019-01-24 01:55:52"),
("61","1","se ha desconectado el sistema en ","2019-01-24 02:50:25"),
("62","1","se ha desconectado el sistema en ","2019-01-25 18:59:42"),
("63","1","se ha desconectado el sistema en ","2019-01-26 12:13:01"),
("64","1","se ha desconectado el sistema en ","2019-01-26 12:39:03"),
("65","1","se ha desconectado el sistema en ","2019-01-26 21:34:43"),
("66","1","se ha desconectado el sistema en ","2019-01-26 21:35:05"),
("67","1","se ha desconectado el sistema en ","2019-01-26 21:36:18"),
("68","1","se ha desconectado el sistema en ","2019-01-26 21:37:19"),
("69","1","se ha desconectado el sistema en ","2019-01-26 21:40:18"),
("70","1","se ha desconectado el sistema en ","2019-01-26 21:42:37"),
("71","2","se ha desconectado el sistema en ","2019-01-26 21:53:27"),
("72","3","se ha desconectado el sistema en ","2019-01-26 23:53:55"),
("73","2","se ha desconectado el sistema en ","2019-01-27 00:02:46"),
("74","3","se ha desconectado el sistema en ","2019-01-27 00:26:04"),
("75","3","se ha desconectado el sistema en ","2019-01-27 00:27:37"),
("76","4","se ha desconectado el sistema en ","2019-01-27 00:28:53"),
("77","0","se ha desconectado el sistema en ","2019-02-01 10:49:35"),
("78","1","se ha desconectado el sistema en ","2019-02-02 01:10:46"),
("79","1","se ha desconectado el sistema en ","2019-02-08 13:27:52"),
("80","1","se ha desconectado el sistema en ","2019-02-08 13:29:04"),
("81","1","se ha desconectado el sistema en ","2019-02-11 12:13:25"),
("82","1","se ha desconectado el sistema en ","2019-02-17 23:59:49"),
("83","1","se ha desconectado el sistema en ","2019-02-19 22:06:23"),
("84","1","se ha desconectado el sistema en ","2019-02-22 23:20:09"),
("85","1","se ha desconectado el sistema en ","2019-03-30 08:37:10"),
("86","1","se ha desconectado el sistema en ","2019-04-19 23:40:42"),
("87","1","se ha desconectado el sistema en ","2019-04-20 00:34:27"),
("88","1","se ha desconectado el sistema en ","2019-04-24 08:25:28"),
("89","1","se ha desconectado el sistema en ","2019-04-24 11:54:04"),
("90","1","se ha desconectado el sistema en ","2019-04-25 10:14:44"),
("91","1","se ha desconectado el sistema en ","2019-04-25 23:41:34"),
("92","1","se ha desconectado el sistema en ","2019-04-26 00:25:33"),
("93","1","se ha desconectado el sistema en ","2019-04-26 04:25:46"),
("94","1","se ha desconectado el sistema en ","2019-04-28 10:09:37"),
("95","1","se ha desconectado el sistema en ","2019-05-29 04:17:06"),
("96","1","se ha desconectado el sistema en ","2019-05-30 11:27:19"),
("97","1","se ha desconectado el sistema en ","2019-06-04 23:14:56"),
("98","1","se ha desconectado el sistema en ","2019-06-27 03:36:33"),
("99","1","se ha desconectado el sistema en ","2019-06-27 07:59:50"),
("100","1","se ha desconectado el sistema en ","2019-08-11 05:41:03"),
("101","1","se ha desconectado el sistema en ","2019-08-29 11:38:25"),
("102","1","se ha desconectado el sistema en ","2019-09-07 11:16:16"),
("103","5","se ha desconectado el sistema en ","2019-09-07 11:52:24"),
("104","5","se ha desconectado el sistema en ","2019-09-07 12:13:49"),
("105","5","se ha desconectado el sistema en ","2019-09-07 12:19:01"),
("106","5","se ha desconectado el sistema en ","2019-09-07 12:27:56"),
("107","5","se ha desconectado el sistema en ","2019-09-08 09:00:40"),
("108","5","se ha desconectado el sistema en ","2019-09-08 09:00:47"),
("109","5","se ha desconectado el sistema en ","2020-01-10 11:04:44"),
("110","5","se ha desconectado el sistema en ","2020-01-10 11:04:54"),
("111","5","se ha desconectado el sistema en ","2020-01-10 11:30:46"),
("112","5","se ha desconectado el sistema en ","2020-01-10 11:38:04"),
("113","5","se ha desconectado el sistema en ","2020-01-11 11:41:09"),
("114","5","se ha desconectado el sistema en ","2020-01-11 11:42:57"),
("115","5","se ha desconectado el sistema en ","2020-01-11 11:58:26"),
("116","5","se ha desconectado el sistema en ","2020-01-11 22:51:04"),
("117","5","se ha desconectado el sistema en ","2020-01-12 00:54:49"),
("118","5","se ha desconectado el sistema en ","2020-01-12 11:04:17"),
("119","5","se ha desconectado el sistema en ","2020-01-12 11:51:05"),
("120","5","se ha desconectado el sistema en ","2020-01-12 11:52:16"),
("121","5","se ha desconectado el sistema en ","2020-01-12 11:52:21"),
("122","5","se ha desconectado el sistema en ","2020-01-12 11:53:48"),
("123","5","se ha desconectado el sistema en ","2020-01-12 11:54:34"),
("124","5","se ha desconectado el sistema en ","2020-01-12 11:55:40"),
("125","5","se ha desconectado el sistema en ","2020-01-12 11:55:44"),
("126","5","se ha desconectado el sistema en ","2020-01-12 11:55:58"),
("127","5","se ha desconectado el sistema en ","2020-01-12 11:56:08"),
("128","5","se ha desconectado el sistema en ","2020-01-13 05:59:34"),
("129","5","se ha desconectado el sistema en ","2020-01-13 09:18:38"),
("130","5","se ha desconectado el sistema en ","2020-01-13 14:12:00"),
("131","5","se ha desconectado el sistema en ","2020-01-13 14:31:57"),
("132","5","se ha desconectado el sistema en ","2020-01-13 14:32:32"),
("133","5","se ha desconectado el sistema en ","2020-01-15 09:29:50"),
("134","5","se ha desconectado el sistema en ","2020-02-08 04:28:27"),
("135","5","se ha desconectado el sistema en ","2020-02-09 07:02:23"),
("136","5","se ha desconectado el sistema en ","2020-02-12 11:12:23"),
("137","5","se ha desconectado el sistema en ","2020-02-12 12:07:49"),
("138","5","se ha desconectado el sistema en ","2020-02-12 13:20:43"),
("139","5","se ha desconectado el sistema en ","2020-02-12 22:28:22"),
("140","5","se ha desconectado el sistema en ","2020-02-12 22:55:52"),
("141","6","se ha desconectado el sistema en ","2020-02-12 22:56:20"),
("142","5","se ha desconectado el sistema en ","2020-02-12 22:57:49"),
("143","5","se ha desconectado el sistema en ","2020-02-13 00:30:01"),
("144","5","se ha desconectado el sistema en ","2020-02-13 01:03:55"),
("145","5","se ha desconectado el sistema en ","2020-02-13 01:51:57"),
("146","5","se ha desconectado el sistema en ","2020-02-13 19:58:42"),
("147","5","se ha desconectado el sistema en ","2020-02-13 20:09:10"),
("148","5","se ha desconectado el sistema en ","2020-04-07 12:44:49"),
("149","5","se ha desconectado el sistema en ","2020-04-08 12:55:31"),
("150","5","se ha desconectado el sistema en ","2020-04-11 07:31:56"),
("151","5","se ha desconectado el sistema en ","2020-04-13 01:03:56"),
("152","5","se ha desconectado el sistema en ","2020-04-13 11:33:15"),
("153","5","se ha desconectado el sistema en ","2020-04-13 11:52:17"),
("154","5","se ha desconectado el sistema en ","2020-04-13 11:52:38"),
("155","5","se ha desconectado el sistema en ","2020-04-14 23:11:11"),
("156","0","se ha desconectado el sistema en ","2020-04-15 10:25:37"),
("157","5","se ha desconectado el sistema en ","2020-04-18 13:27:08"),
("158","5","se ha desconectado el sistema en ","2020-04-18 13:28:59"),
("159","5","se ha desconectado el sistema en ","2020-04-18 13:34:24"),
("160","5","se ha desconectado el sistema en ","2020-04-18 21:21:11"),
("161","5","se ha desconectado el sistema en ","2020-04-19 01:09:14"),
("162","5","se ha desconectado el sistema en ","2020-04-19 06:21:12"),
("163","5","se ha desconectado el sistema en ","2020-04-19 06:21:41"),
("164","5","se ha desconectado el sistema en ","2020-04-19 07:15:13"),
("165","0","se ha desconectado el sistema en ","2020-04-19 07:15:20"),
("166","5","se ha desconectado el sistema en ","2020-04-19 07:17:03"),
("167","5","se ha desconectado el sistema en ","2020-04-22 02:39:26"),
("168","5","se ha desconectado el sistema en ","2020-04-22 07:10:44"),
("169","9","se ha desconectado el sistema en ","2020-04-22 08:11:02"),
("170","5","se ha desconectado el sistema en ","2020-04-22 12:16:51"),
("171","12","se ha desconectado el sistema en ","2020-04-22 12:20:31"),
("172","5","se ha desconectado el sistema en ","2020-04-22 12:21:01"),
("173","5","se ha desconectado el sistema en ","2020-04-22 13:14:41"),
("174","5","se ha desconectado el sistema en ","2020-04-22 21:18:01"),
("175","12","se ha desconectado el sistema en ","2020-04-22 21:20:49"),
("176","5","se ha desconectado el sistema en ","2020-04-22 21:20:59"),
("177","8","se ha desconectado el sistema en ","2020-04-22 21:21:37"),
("178","5","se ha desconectado el sistema en ","2020-04-22 21:23:08"),
("179","5","se ha desconectado el sistema en ","2020-04-22 21:33:31"),
("180","12","se ha desconectado el sistema en ","2020-04-22 21:45:08"),
("181","8","se ha desconectado el sistema en ","2020-04-22 21:52:02"),
("182","5","se ha desconectado el sistema en ","2020-04-22 21:52:13"),
("183","5","se ha desconectado el sistema en ","2020-04-22 22:42:28"),
("184","8","se ha desconectado el sistema en ","2020-04-22 22:42:37"),
("185","5","se ha desconectado el sistema en ","2020-04-22 22:42:52"),
("186","9","se ha desconectado el sistema en ","2020-04-22 22:46:53"),
("187","5","se ha desconectado el sistema en ","2020-04-28 00:50:49"),
("188","5","se ha desconectado el sistema en ","2020-04-28 00:51:52"),
("189","5","se ha desconectado el sistema en ","2020-04-28 00:53:50"),
("190","5","se ha desconectado el sistema en ","2020-04-28 01:10:21"),
("191","5","se ha desconectado el sistema en ","2020-04-28 01:11:24"),
("192","5","se ha desconectado el sistema en ","2020-04-28 01:11:59"),
("193","5","se ha desconectado el sistema en ","2020-04-28 01:12:47"),
("194","5","se ha desconectado el sistema en ","2020-04-28 01:13:15"),
("195","5","se ha desconectado el sistema en ","2020-04-28 01:14:13"),
("196","5","se ha desconectado el sistema en ","2020-04-28 01:14:43"),
("197","5","se ha desconectado el sistema en ","2020-04-28 01:15:05"),
("198","5","se ha desconectado el sistema en ","2020-04-28 01:15:22"),
("199","5","se ha desconectado el sistema en ","2020-04-28 01:15:44"),
("200","5","se ha desconectado el sistema en ","2020-04-28 01:16:10"),
("201","5","se ha desconectado el sistema en ","2020-04-28 01:16:14"),
("202","5","se ha desconectado el sistema en ","2020-04-28 01:18:14"),
("203","5","se ha desconectado el sistema en ","2020-04-28 01:18:41"),
("204","5","se ha desconectado el sistema en ","2020-04-28 01:19:15"),
("205","5","se ha desconectado el sistema en ","2020-04-28 02:07:20"),
("206","5","se ha desconectado el sistema en ","2020-04-28 02:07:41"),
("207","5","se ha desconectado el sistema en ","2020-04-28 02:15:31"),
("208","5","se ha desconectado el sistema en ","2020-04-28 02:17:47"),
("209","5","se ha desconectado el sistema en ","2020-04-29 02:08:56"),
("210","5","se ha desconectado el sistema en ","2020-04-29 02:53:10"),
("211","5","se ha desconectado el sistema en ","2020-04-30 11:11:23"),
("212","5","se ha desconectado el sistema en ","2020-05-01 08:29:00"),
("213","5","se ha desconectado el sistema en ","2020-05-01 08:29:11"),
("214","5","se ha desconectado el sistema en ","2020-05-01 10:50:10"),
("215","5","se ha desconectado el sistema en ","2020-05-02 13:42:35"),
("216","5","se ha desconectado el sistema en ","2020-05-03 05:56:59"),
("217","5","se ha desconectado el sistema en ","2020-05-03 20:13:10"),
("218","5","se ha desconectado el sistema en ","2020-05-04 01:16:57"),
("219","5","se ha desconectado el sistema en ","2020-05-05 01:21:04"),
("220","5","se ha desconectado el sistema en ","2020-05-06 19:32:58"),
("221","5","se ha desconectado el sistema en ","2020-05-07 10:24:12"),
("222","5","se ha desconectado el sistema en ","2020-05-07 10:33:30"),
("223","5","se ha desconectado el sistema en ","2020-05-08 07:36:14"),
("224","5","se ha desconectado el sistema en ","2020-05-08 11:38:57"),
("225","0","se ha desconectado el sistema en ","2020-05-08 11:46:14"),
("226","5","se ha desconectado el sistema en ","2020-05-08 20:53:03"),
("227","5","se ha desconectado el sistema en ","2020-05-09 01:42:28"),
("228","5","se ha desconectado el sistema en ","2020-05-09 10:35:57"),
("229","5","se ha desconectado el sistema en ","2020-05-11 08:21:23"),
("230","5","se ha desconectado el sistema en ","2020-05-11 08:22:39"),
("231","5","se ha desconectado el sistema en ","2020-05-11 08:23:23"),
("232","5","se ha desconectado el sistema en ","2020-05-11 08:24:27"),
("233","5","se ha desconectado el sistema en ","2020-05-11 08:33:03"),
("234","5","se ha desconectado el sistema en ","2020-05-11 08:33:57"),
("235","5","se ha desconectado el sistema en ","2020-05-11 10:26:59"),
("236","14","se ha desconectado el sistema en ","2020-05-11 12:23:40"),
("237","5","se ha desconectado el sistema en ","2020-05-11 12:24:02"),
("238","14","se ha desconectado el sistema en ","2020-05-11 12:25:34"),
("239","5","se ha desconectado el sistema en ","2020-05-11 12:29:41"),
("240","5","se ha desconectado el sistema en ","2020-05-11 12:29:46"),
("241","14","se ha desconectado el sistema en ","2020-05-11 12:41:59"),
("242","5","se ha desconectado el sistema en ","2020-05-11 12:47:04"),
("243","14","se ha desconectado el sistema en ","2020-05-11 12:49:03"),
("244","5","se ha desconectado el sistema en ","2020-05-11 12:54:25"),
("245","7","se ha desconectado el sistema en ","2020-05-11 12:57:31"),
("246","6","se ha desconectado el sistema en ","2020-05-11 12:57:53"),
("247","5","se ha desconectado el sistema en ","2020-05-11 19:17:17"),
("248","6","se ha desconectado el sistema en ","2020-05-12 10:02:15"),
("249","6","se ha desconectado el sistema en ","2020-05-12 10:03:50"),
("250","14","se ha desconectado el sistema en ","2020-05-12 10:20:49"),
("251","12","se ha desconectado el sistema en ","2020-05-12 10:26:42"),
("252","7","se ha desconectado el sistema en ","2020-05-12 10:27:41"),
("253","6","se ha desconectado el sistema en ","2020-05-12 11:16:56"),
("254","5","se ha desconectado el sistema en ","2020-05-12 11:18:01"),
("255","5","se ha desconectado el sistema en ","2020-05-12 11:59:40"),
("256","5","se ha desconectado el sistema en ","2020-08-08 19:57:41"),
("257","5","se ha desconectado el sistema en ","2020-08-08 20:06:58"),
("258","5","se ha desconectado el sistema en ","2020-08-08 20:07:11"),
("259","5","se ha desconectado el sistema en ","2020-08-09 12:01:52"),
("260","5","se ha desconectado el sistema en ","2020-08-09 12:03:13"),
("261","5","se ha desconectado el sistema en ","2020-08-09 12:15:47"),
("262","17","se ha desconectado el sistema en ","2020-08-09 12:17:56"),
("263","5","se ha desconectado el sistema en ","2020-08-09 12:18:09"),
("264","18","se ha desconectado el sistema en ","2020-08-09 12:19:12"),
("265","5","se ha desconectado el sistema en ","2020-08-09 12:19:23"),
("266","19","se ha desconectado el sistema en ","2020-08-09 12:20:31"),
("267","5","se ha desconectado el sistema en ","2020-08-09 12:20:41"),
("268","20","se ha desconectado el sistema en ","2020-08-09 12:21:20"),
("269","5","se ha desconectado el sistema en ","2020-12-07 10:55:37"),
("270","17","se ha desconectado el sistema en ","2020-12-07 11:05:07"),
("271","5","se ha desconectado el sistema en ","2020-12-07 12:31:42"),
("272","5","se ha desconectado el sistema en ","2020-12-07 12:33:32"),
("273","19","se ha desconectado el sistema en ","2020-12-07 12:34:34"),
("274","21","se ha desconectado el sistema en ","2020-12-07 12:35:38"),
("275","24","se ha desconectado el sistema en ","2020-12-07 12:35:57"),
("276","5","se ha desconectado el sistema en ","2020-12-07 13:33:22"),
("277","5","se ha desconectado el sistema en ","2020-12-07 13:33:59");



DROP TABLE IF EXISTS horario;

CREATE TABLE `horario` (
  `id_horario` int(200) NOT NULL AUTO_INCREMENT,
  `nombre_horario` varchar(200) NOT NULL,
  PRIMARY KEY (`id_horario`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO horario VALUES("1","8:30 AM a 08:45 AM"),
("2","8:45 AM a 09:0 AM"),
("3","9:00 AM a 09:15 AM"),
("4","9:15 AM a 09:30 AM"),
("5","9:30 AM a 09:45 AM"),
("6","9:45 AM a 10:00 AM"),
("7","10:00 AM a 10:15 AM"),
("8","10:15 AM a 10:30 AM"),
("9","10:30 AM a 10:45 AM"),
("10","10:45 AM a 11:00 AM"),
("11","11:00 AM a 11:15 AM"),
("12","11:15 AM a 11:30 AM"),
("13","11:30 AM a 11:45 AM"),
("14","11:45 AM a 12:00 AM"),
("15","12:00 AM a 12:15 AM"),
("16","12:15 AM a 12:30 AM"),
("17","12:30 PM a 12:45 PM"),
("18","12:45 PM a 01:00 PM"),
("19","01:00 PM a 01:15 PM"),
("20","01:15 PM a 01:30 PM"),
("21","01:30 PM a 01:45 PM"),
("22","01:45 PM a 02:00 PM"),
("23","02:00 PM a 02:15 PM"),
("24","02:15 PM a 02:30 PM"),
("25","02:30 PM a 02:45 PM"),
("26","02:45 PM a 03:00 PM"),
("27","03:00 PM a 03:15 PM"),
("28","03:15 PM a 03:30 PM"),
("29","03:30 PM a 03:45 PM"),
("30","03:45 PM a 04:00 PM"),
("31","04:00 PM a 04:15 PM"),
("32","04:15 PM a 04:30 PM"),
("33","04:30 PM a 04:45 PM"),
("34","04:45 PM a 05:00 PM"),
("35","05:00 PM a 05:15 PM"),
("36","05:15 PM a 05:30 PM"),
("37","05:30 PM a 05:45 PM"),
("38","05:45 PM a 06:00 PM");



DROP TABLE IF EXISTS horario_medico;

CREATE TABLE `horario_medico` (
  `id_horario_medico` int(200) NOT NULL AUTO_INCREMENT,
  `dia_laborable` varchar(200) NOT NULL,
  `hora_inicio` varchar(200) NOT NULL,
  `hora_fin` varchar(200) NOT NULL,
  `cita_duracion` varchar(200) NOT NULL,
  `id_medico` int(200) NOT NULL,
  PRIMARY KEY (`id_horario_medico`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS pedido_medicina;

CREATE TABLE `pedido_medicina` (
  `id_pedido` int(200) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `id_sesion` int(200) NOT NULL,
  `id_cliente` int(200) NOT NULL,
  `tipo_venta` varchar(200) NOT NULL,
  `monto_pagado` float NOT NULL,
  `total` float NOT NULL,
  `id_medico` int(200) NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO pedido_medicina VALUES("3","2020-08-09","5","20","Contado","10","10","8"),
("4","2020-08-09","5","20","Contado","70","70","8"),
("5","2020-08-09","18","20","Contado","140","140","8");



DROP TABLE IF EXISTS pedidos;

CREATE TABLE `pedidos` (
  `id_pedido` int(200) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `id_sesion` int(100) NOT NULL,
  `id_cliente` int(200) NOT NULL,
  `tipo_venta` varchar(200) NOT NULL,
  `monto_pagado` float NOT NULL,
  `total` float NOT NULL,
  `id_medico` int(200) NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO pedidos VALUES("4","2020-08-09","5","20","Contado","0","0","17"),
("5","2020-08-09","5","20","Contado","0","0","17"),
("6","2020-08-09","5","20","Contado","0","0","17"),
("7","2020-08-09","5","20","Contado","0","0","17"),
("8","2020-08-09","5","20","Contado","0","0","17");



DROP TABLE IF EXISTS preescripcion;

CREATE TABLE `preescripcion` (
  `id_preescripcion` int(200) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(200) NOT NULL,
  `id_medico` int(200) NOT NULL,
  `historia` varchar(1000) NOT NULL,
  `id_sesion` int(200) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_preescripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO preescripcion VALUES("1","20","17","gripe","17","2020-08-09"),
("2","20","8","gripe","17","2020-08-09"),
("3","23","21","fazer algo de util","5","2020-12-07");



DROP TABLE IF EXISTS procedimiento_pago;

CREATE TABLE `procedimiento_pago` (
  `id_procedimiento_pago` int(200) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio_venta` float NOT NULL,
  `estado` varchar(200) NOT NULL,
  PRIMARY KEY (`id_procedimiento_pago`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO procedimiento_pago VALUES("1","ecografia","realizada on exito","34","a");



DROP TABLE IF EXISTS producto;

CREATE TABLE `producto` (
  `id_pro` int(100) NOT NULL AUTO_INCREMENT,
  `nombre_pro` varchar(100) NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `unidad` varchar(100) NOT NULL,
  `precio_venta` float NOT NULL,
  `precio_compra` float NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `stock` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  PRIMARY KEY (`id_pro`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO producto VALUES("4","agua oxigenada","para limpiar heridas","botellas","5","4","","50","a"),
("5","iverctina","para la gripe","pastillas","70","50","","150","a");



DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO usuario VALUES("5","admin","a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3","","administrador","sistemas","en oferta","54345","tusolutionweb@gmail.com"),
("21","samuel","a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70","WhatsApp Image 2020-05-21 at 20.24.50.jpeg","medico","Samuel","sam","88993686330","63800000"),
("22","pedro","a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70","peddro.jpg","paciente","pedro","p","123","123"),
("23","bolsonaro","a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70","bolso.jpg","paciente","bolsonaro","bol","123","123"),
("24","ronaldo","a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70","ronaldo.jpg","paciente","ronaldo","gaucho","13","123"),
("26","ana","a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70","WhatsApp Image 2020-08-05 at 22.32.19.jpeg","paciente","Ana","Clau","123","123");



DROP TABLE IF EXISTS vacaciones;

CREATE TABLE `vacaciones` (
  `id_vacaciones` int(200) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `id_medico` int(200) NOT NULL,
  PRIMARY KEY (`id_vacaciones`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO vacaciones VALUES("1","2020-08-21","17"),
("2","2020-08-28","17"),
("3","2020-08-29","17");



