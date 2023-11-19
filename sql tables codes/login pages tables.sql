/* databasename: placement_website */

/* Teacher table creation */
create table teacherlogin (
  teacher_id varchar(20),
  uname varchar(25),
  password varchar(20),
  primary key(teacher_id)
);

/* insert values into teacher table */
insert into teacherlogin values ('11111','krishna','ksks123');

/* student table creation */
create table studentlogin (
  student_id varchar(20),
  uname varchar(25),
  password varchar(20),
  primary key(student_id)
);

/* insert values into student table */
insert into studentlogin values ('y20cs096','y20cs096','y20cs096');

/* po table creation */
create table pologin (
  po_id varchar(20),
  uname varchar(25),
  password varchar(20),
  primary key(po_id)
);

/* insert values into po table */
insert into pologin values ('po111','po111','po111');

/* admin table creation */
create table adminlogin (
  admin_id varchar(20),
  uname varchar(25),
  password varchar(20),
  primary key(admin_id)
);

/* insert values into admin table */
insert into adminlogin values ('rvr','admin','admin');
