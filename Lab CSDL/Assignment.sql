#GIAI ĐOẠN 1 ( GIAI ĐOẠN 2 BÊN DƯỚI )
create database thuvien;
use thuvien;
create table loaisach(
maLoai	Varchar(10) not null primary key,
tenLoai	Varchar(50) not null
);
create table sach(
masach	Varchar(10) not null primary key,
tensach	Varchar(50) not null,
nhaXuatBan	Varchar(50) not null,
tacGia	Varchar(50) not null,
soTrang	int not null,
soLuongBansao int,
gia	Decimal(10,2) not null,
ngayNhap	Date not null,
viTri	Varchar(50) not null,
maLoai	Varchar(10) not null,
foreign key fk_sach_loaisach (maLoai) references loaisach(maLoai)
);
create table sinhvien(
masv	Varchar(10) not null primary key,
tensv	Varchar(50) not null,
maLop	Varchar(10) not null,
chuyenNganh	Varchar(50) not null,
sDT	Varchar(10) not null,
email	Varchar(50)
);
create table THEsinhvien(
masv	Varchar(10) not null primary key,
ngayHetHan	Date not null,
foreign key fk_thesinhvien_sv (masv) references sinhvien(masv)
);
create table phieumuon(
soPhieu	int auto_increment primary key,
ngayMuon	Date not null,
masv	Varchar(10) not null,
foreign key fk_pm_sv (masv) references sinhvien(masv)
);
create table chitietphieumuon(
soPhieu int not null,
ngayTra date not null,
ghiChu varchar(200) not null,
masach varchar(10),
primary key (soPhieu, masach),
    foreign key fk_ctpm_pm (soPhieu) references phieumuon(soPhieu),
    foreign key fk_ctpm_sach (masach) references sach(masach)
);

#GIAI ĐOẠN 2
insert into loaisach (maLoai, tenLoai) values
('L1', 'Khoa Học'),
('L2', 'Văn Học'),
('L3', 'Lịch sử'),
('L4', 'Toán Học'),
('L5', 'Nghệ Thuật');

insert into sach (masach, tensach, nhaXuatBan, tacGia, soTrang, soLuongBansao, gia, ngayNhap, viTri, maLoai) values
('s1', 'sách 1', 'NXB A', 'Tác Giả A', 200, 10, 25.50, '2024-02-04', 'Vị Trí 1', 'L1'),
('s2', 'sách 2', 'NXB B', 'Tác Giả B', 150, 8, 18.75, '2024-02-04', 'Vị Trí 2', 'L2'),
('s3', 'sách 3', 'NXB C', 'Tác Giả C', 300, 15, 35.00, '2024-02-04', 'Vị Trí 3', 'L3'),
('s4', 'sách 4', 'NXB D', 'Tác Giả D', 180, 12, 22.50, '2024-02-04', 'Vị Trí 4', 'L4'),
('s5', 'sách 5', 'NXB E', 'Tác Giả E', 250, 20, 40.00, '2024-02-04', 'Vị Trí 5', 'L5');

insert into sinhvien (masv, tensv, maLop, chuyenNganh, sDT, email) values
('sv1', 'Nguyen Van A', 'L1', 'CNTT', '123456789', 'sv1@example.com'),
('sv2', 'Tran Thi B', 'L2', 'Kinh Doanh', '987654321', 'sv2@example.com'),
('sv3', 'Le Van C', 'L3', 'Ngon ngu', '456123789', 'sv3@example.com'),
('sv4', 'Pham Thi D', 'L4', 'Du Lich', '789123456', 'sv4@example.com'),
('sv5', 'Hoang Van E', 'L5', 'Y Hoc', '321654987', 'sv5@example.com');

insert into THEsinhvien (masv, ngayHetHan) values
('sv1', '2025-02-04'),
('sv2', '2025-02-04'),
('sv3', '2025-02-04'),
('sv4', '2025-02-04'),
('sv5', '2025-02-04');

insert into phieumuon (ngayMuon, masv) values
('2024-02-04', 'sv1'),
('2024-02-04', 'sv2'),
('2024-02-04', 'sv3'),
('2024-02-04', 'sv4'),
('2024-02-04', 'sv5');

insert into chitietphieumuon (soPhieu, ngayTra, ghiChu, masach) values
(1, '2024-02-11', 'Ghi chú 1', 's1'),
(2, '2024-02-11', 'Ghi chú 2', 's2'),
(3, '2024-02-11', 'Ghi chú 3', 's3'),
(4, '2024-02-11', 'Ghi chú 4', 's4'),
(5, '2024-02-11', 'Ghi chú 5', 's5');

select tensach, masach, gia, tacGia from sach where maLoai = 'IT';
select pm.soPhieu, ctpm.masach, pm.ngayMuon, pm.masv from phieumuon pm join chitietphieumuon ctpm on pm.soPhieu = ctpm.soPhieu where month(pm.ngayMuon) = 1 and year(pm.ngayMuon) = 2017;
select pm.soPhieu, pm.ngayMuon, pm.masv, ctpm.masach from phieumuon pm left join chitietphieumuon ctpm on pm.soPhieu = ctpm.soPhieu where ctpm.ngayTra is null order by pm.ngayMuon asc;
select ls.maLoai, ls.tenLoai, count(s.masach) as TongsoLuongsach from loaisach ls left join sach s on ls.maLoai = s.maLoai group by ls.maLoai, ls.tenLoai;
select count(distinct masv) as soLuotMuonsach from phieumuon;
select masach, tensach, nhaXuatBan, tacGia from sach where tensach like '%sQL%';
select sv.masv, sv.tensv, pm.soPhieu, s.tensach, pm.ngayMuon, ctpm.ngayTra from sinhvien sv join phieumuon pm on sv.masv = pm.masv join chitietphieumuon ctpm on pm.soPhieu = ctpm.soPhieu join sach s on ctpm.masach = s.masach order by pm.ngayMuon desc;
select s.masach, s.tensach, count(ctpm.soPhieu) as soLanMuon from sach s join chitietphieumuon ctpm on s.masach = ctpm.masach group by s.masach, s.tensach having count(ctpm.soPhieu) > 20 order by soLanMuon desc;
update sach set gia = gia * 0.7 where year(ngayNhap) < 2014;
update chitietphieumuon set ghiChu = 'Đã trả sách' where soPhieu in (select soPhieu from phieumuon where masv = 'sv1');
select pm.soPhieu, sv.tensv, sv.email, group_concat(s.tensach order by ctpm.ngayTra desc separator ', ') as DanhsachsachMuon, pm.ngayMuon from phieumuon pm join sinhvien sv on pm.masv = sv.masv join chitietphieumuon ctpm on pm.soPhieu = ctpm.soPhieu join sach s on ctpm.masach = s.masach where ctpm.ngayTra is null and pm.ngayMuon < curdate() - interval 7 day  group by pm.soPhieu, sv.tensv, sv.email, pm.ngayMuon order by pm.ngayMuon;
update sach set soLuongBansao = soLuongBansao + 5 where masach in (select masach from (select s.masach from sach s join chitietphieumuon ctpm on s.masach = ctpm.masach group by s.masach having count(ctpm.soPhieu) > 10) as subquery);
delete from phieumuon where ngayMuon < '2010-01-01' and soPhieu in (select soPhieu from chitietphieumuon where ngayTra < '2010-01-01');