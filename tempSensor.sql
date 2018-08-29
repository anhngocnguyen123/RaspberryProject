CREATE DATABASE tempDatetime; 
ALTER SCHEMA `tempDatetime` DEFAULT COLLATE utf8_unicode_ci;
USE tempDatetime; 

CREATE TABLE date(
id int auto_increment not null primary key,
date date not null,
createdAt datetime not null
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

INSERT INTO date(date, createdAt)
VALUE ('2018-08-29', '2018-08-29 10:02:00');


CREATE TABLE time(
id int auto_increment not null primary key,
time time not null,
createdAt datetime not null
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

INSERT INTO time(time, createdAt)
	  VALUE ('00:00', '2018-08-29 10:02:00'), ('00:30', '2018-08-29 10:02:00'),
            ('01:00', '2018-08-29 10:02:00'), ('01:30', '2018-08-29 10:02:00'),
            ('02:00', '2018-08-29 10:02:00'), ('02:30', '2018-08-29 10:02:00'),
			('03:00', '2018-08-29 10:02:00'), ('03:30', '2018-08-29 10:02:00'),
            ('04:00', '2018-08-29 10:02:00'), ('04:30', '2018-08-29 10:02:00'),
            ('05:00', '2018-08-29 10:02:00'), ('05:30', '2018-08-29 10:02:00'),
            ('06:00', '2018-08-29 10:02:00'), ('06:30', '2018-08-29 10:02:00'),
            ('07:00', '2018-08-29 10:02:00'), ('07:30', '2018-08-29 10:02:00'),
            ('08:00', '2018-08-29 10:02:00'), ('08:30', '2018-08-29 10:02:00'),
            ('09:00', '2018-08-29 10:02:00'), ('09:30', '2018-08-29 10:02:00'),
            ('10:00', '2018-08-29 10:02:00'), ('10:30', '2018-08-29 10:02:00'),
            ('11:00', '2018-08-29 10:02:00'), ('11:30', '2018-08-29 10:02:00'),
            ('12:00', '2018-08-29 10:02:00'), ('12:30', '2018-08-29 10:02:00'),
            ('13:00', '2018-08-29 10:02:00'), ('13:30', '2018-08-29 10:02:00'),
            ('14:00', '2018-08-29 10:02:00'), ('14:30', '2018-08-29 10:02:00'),
            ('15:00', '2018-08-29 10:02:00'), ('15:30', '2018-08-29 10:02:00'),
            ('16:00', '2018-08-29 10:02:00'), ('16:30', '2018-08-29 10:02:00'),
            ('17:00', '2018-08-29 10:02:00'), ('17:30', '2018-08-29 10:02:00'),
            ('18:00', '2018-08-29 10:02:00'), ('18:30', '2018-08-29 10:02:00'),
            ('19:00', '2018-08-29 10:02:00'), ('19:30', '2018-08-29 10:02:00'),
            ('20:00', '2018-08-29 10:02:00'), ('20:30', '2018-08-29 10:02:00'),
            ('21:00', '2018-08-29 10:02:00'), ('21:30', '2018-08-29 10:02:00'),
            ('22:00', '2018-08-29 10:02:00'), ('22:30', '2018-08-29 10:02:00'),
            ('23:00', '2018-08-29 10:02:00'), ('23:30', '2018-08-29 10:02:00');
  
CREATE TABLE temperatureDatetime(
id int auto_increment not null primary key,
dateId int not null,
timeId int not null,
temperature int not null,
humidity int not null,
createdAt datetime not null,
foreign key (dateId) references date(id),
foreign key (timeId) references time(id)
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE tempPeriod(
id int not null auto_increment primary key,
namePeriod enum('Morning','Afternoon'),
minimumTemp int not null,
maximumTemp int not null,
nomalTemp int not null,
createdAt datetime not null,
updatedAt datetime not null
) ENGINE = InnoDB DEFAULT CHARSET = utf8; 