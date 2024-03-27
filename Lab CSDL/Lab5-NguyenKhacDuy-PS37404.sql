use quanlybanhang_nkd;
alter table hoadon
add CONSTRAINT fk_hoadon_khachhang FOREIGN KEY (maKhachHang) REFERENCES khachhang(maKhachHang);
alter table hoadonchitiet
add CONSTRAINT fk_hoadonct_hoadon FOREIGN KEY (maHoaDon) REFERENCES hoadon(maHoaDon);
alter table hoadonchitiet
add CONSTRAINT fk_hoadonct_sp FOREIGN KEY (maSanPham) REFERENCES sanpham(maSanPham);
alter table khachhang
add constraint Uq_email	UNIQUE (email);
# BÀI 1 LAB 5
SELECT * FROM khachhang;
SELECT maKhachHang, CONCAT(hoVaTenLot, ' ', Ten) AS hoVaTen , email, dienThoai FROM khachhang limit 10 ;
SELECT maSanPham, tenSP, (donGia*soLuong) AS tongTienTonKho FROM sanpham;
SELECT maKhachHang, CONCAT(hoVaTenLot, ' ', Ten) AS hoVaTen , diaChi FROM khachhang WHERE CONCAT(hoVaTenLot, ' ', Ten) LIKE 'H%';
SELECT * FROM khachhang WHERE diaChi LIKE '%Đà Nẵng%';
SELECT * FROM sanpham WHERE soLuong between 100 and 500;
SELECT * FROM hoadon where TrangThai = 'Chưa thanh toán' AND YEAR(NgayMuaHang) = 2016;
SELECT * FROM khachhang where maKhachHang IN ('KH001', 'KH003', 'KH006');
#Bài 2 LAB 5
SELECT COUNT(*) AS soLuongKhachHang FROM khachhang;
SELECT MAX(donGia) AS donGiaLonNhat	FROM sanpham;
SELECT MIN(soLuong) AS soLuongSPThapNhat FROM sanpham;
SELECT SUM(soLuong) AS tongSoLuongSP FROM sanpham;
SELECT COUNT(*) AS soLuongHoaDonChuaThanhToan FROM hoadon WHERE trangThai = 'Chưa thanh toán' AND YEAR(NgayMuaHang) = 2016 AND MONTH(NgayMuaHang) = 12;
SELECT maHoaDon, COUNT(DISTINCT maSanPham) AS SoLoaiSanPham FROM hoadonchitiet GROUP BY MaHoaDon;
SELECT maHoaDon, COUNT(DISTINCT maSanPham) AS SoLoaiSanPham FROM hoadonchitiet GROUP BY MaHoaDon HAVING COUNT(DISTINCT MaSanPham) >= 5;
SELECT maHoaDon, ngayMuaHang, maKhachHang FROM hoadon ORDER BY ngayMuaHang DESC;