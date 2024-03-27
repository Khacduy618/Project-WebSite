#1 tao va su dung db
create database COM2012_Final_3;
use COM2012_Final_3;

#2 tao bang
create table loaisach(
	maLoai varchar(10) not null primary key,
    tenLoai varchar(50) not null,
    mota longtext
);
create table sach(
	maSach varchar(10) not null primary key,
    tenSach varchar(50) not null,
    nhaXuatban varchar(50) not null,
    thoigianXB date not null,
    trangThai varchar(50) not null,
    maLoai varchar(10),
    foreign key fk_sach_loaisach (maLoai) references loaisach(maLoai) #3 tao quan he giua 2 ban
    );
    
#4 tao rang buoc
alter table sach
	add constraint check (trangThai = 'Đã xuất bản' or trangThai = 'Chưa xuất bản');
    
#5 Them vao bang
insert into loaisach (maLoai, tenLoai, mota) values
('LS01' , 'Math', 'toanhoc'),
('LS02' , 'English','tienganh');
insert into sach (maSach, tenSach, nhaXuatBan, thoiGianXB, trangThai, maLoai) values
('S01','Math1','KimDong', '2020-10-11', 'Đã xuất bản', 'LS01'),
('S02','Math2','KimDong', '2020-10-11', 'Đã xuất bản', 'LS01'),
('S03','Math3','KimDong', '2020-10-11', 'Đã xuất bản', 'LS01'),
('S04','English1','KimDong', '2020-10-11', 'Đã xuất bản', 'LS02'),
('S05','English1','KimDong', '2020-10-11', 'Đã xuất bản', 'LS02');

#6 hien thi tat ca
select maSach, tenSach, nhaXuatBan, tenLoai from sach s inner join loaisach ls on s.maloai = ls.maloai; 

#7 cap nhat thoi gian
update sach set thoiGianXB = current_date() where trangThai ='Đã xuất bản'; 

#8 dem so luong sach voi moi danh muc
select ls.tenLoai, count(*) as soLuongSach from sach s inner join loaisach ls on s.maLoai=ls.maLoai group by tenLoai;

#9 hien thi 3 sach
insert into sach (maSach, tenSach, nhaXuatBan, thoiGianXB, trangThai, maLoai) values
('S06','Math2','Fpoly', '2022-10-12', 'Đã xuất bản', 'LS01'),
('S07','Math2','Fpoly', '2022-10-13', 'Đã xuất bản', 'LS01'),
('S08','Math2','Fpoly', '2022-10-14', 'Đã xuất bản', 'LS01');
select tenSach, nhaXuatBan, thoigianXB from sach where nhaXuatBan = 'Fpoly' order by thoiGianXB desc limit 3;

#10 xoa cac sach
delete from sach where year(thoiGianXB) = '2020';

# bo sung test
insert into sach (maSach, tenSach, nhaXuatBan, thoiGianXB, trangThai, maLoai) values
('S09','Math2','Fpoly', '2022-10-12', 'Chưa xuất bản', 'LS01'),
('S010','Math2','Fpoly', '2022-10-13', 'Đã xuất bản', 'LS01'),
('S011','Math2','Fpoly', '2022-10-14', 'Đã xuất bản', 'LS01');