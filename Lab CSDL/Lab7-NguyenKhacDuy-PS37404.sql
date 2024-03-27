use quanlybanhang_nkd;
#Bài 1 a
insert into khachhang(maKhachHang, hoVaTenLot,  Ten, diaChi, Email, dienThoai)
values	('KH001', 'Nguyễn Thị', 'Nga', '15 Quang Trung TP Đà Nẵng', 'ngant@gamil.com', '0912345670'),
		('KH002', 'Trần Công', 'Thành', '234 Lê Lợi Quảng Nam', 'thanhtc@gmail.com', '16109423443'),
        ('KH003', 'Lê Hoàng', 'Nam', '23 Trần Phú TP Huế', 'namlt@yahoo.com', '0989354556'),
        ('KH004', 'Vũ Ngọc', 'Hiền', '37 Nguyễn Thị Thập TP Đà Nẵng', 'hienvn@gmail.com', '0894545435');
        
insert into sanpham(maSanPham, moTa, soLuong, donGia, tenSP)
values	(1, 'Samsung Galaxy J7 Pro là một chiếc smartphone phù hợp với những người yêu thích một sản phẩm pin tốt, thích hệ điều hành mới cùng những tính năng đi kèm độc quyền', 800, 6600000, 'Samsung Galaxy J7 Pro'),
		(2, 'iPhone 6 là một trong những smartphone được yêu thích nhất. Lắng nghe nhu cầu về thiết kế, khả năng lưu trữ và giá cả, iPhone 6 32GB được chính thức phân phối chính hãng tại Việt Nam hứa hẹn sẽ là một sản phẩm rất "Hot"', 500, 8990000, 'iPhone 6 32GB'),
        (3, 'Dell Inspiron 3467 i3 7100U/4GB/1TB/Win10/(M20NR21)', 507, 11290000, 'Laptop Dell Inspiron 3467'),
        (4, 'Pin sạc dự phòng Polymer 5.000 mAh eSaver JP85', 600, 200000, 'Pin sạc dự phòng'),
        (5, 'Nokia 3100 phù hợp với SINH VIÊN', 100, 700000, 'Nokia 3100');
        
insert into hoadon(maKhachHang, maHoaDon, ngayMuaHang, trangThai)
values	('KH001', '120954', '2016-03-23', 'Đã thanh toán'),
		('KH002', '120955', '2016-04-02', 'Đã thanh toán'),
        ('KH001', '120956', '2016-07-12', 'chưa thanh toán'),
        ('KH004', '125957', '2016-12-04', 'chưa thanh toán');

insert into hoadonchitiet(maHoaDonChiTiet, maHoaDon, maSanPham, soLuong)
values	(1, '120954', 3, 40),
		(2, '120954', 1, 20),
        (3, '120955', 2, 100),
        (4, '120956', 4, 6),
        (5, '120956', 2, 60),
        (6, '120956', 1, 10),
        (7, '125957', 2, 50);
        
#b)
select * into KhachHang_daNang from khachhang where diaChi like '%Đà Nẵng%';

# Bài 2

#a 
update khachhang set dienThoai = '16267788989' where maKhachHang = 'KH002';
#b
update sanpham set soLuong = soLuong + 200 where maSanPham = '3';
#c
update sanpham set donGia = donGia * 0.95;
#d
update sanpham set soLuong = soLuong + 100 where maSanPham = (select maSanPham from hoadonchitiet hdct join hoadon hd on hdct.maHoaDon = hd.maHoaDon where month(hd.ngayMuaHang) = 12 and year(hd.ngayMuaHang) = 2016 group by maSanPham order by sum(hdct.soLuong) desc limit 1);
#e
update SanPham set donGia = donGia * 0.90 where maSanPham in (select maSanPham from (select maSanPham from hoadonchitiet hdct join hoadon hd on hdct.maHoaDon = hd.maHoaDon where year(hd.ngayMuaHang) = 2016 group by maSanPham order by sum(hdct.soLuong) asc limit 2)as spitban);
#f
update hoadon set trangThai = 'Đã thanh toán' where maHoaDon = '120956';
#g
delete from hoadonchitiet where maHoaDon = '120956' and maSanPham = '2' and maHoaDon in (select maHoaDon from hoadon where trangThai = 'Chưa thanh toán');
#h
delete from khachhang where maKhachHang not in (select distinct maKhachHang from hoadon where ngayMuaHang >= '2016-01-01');