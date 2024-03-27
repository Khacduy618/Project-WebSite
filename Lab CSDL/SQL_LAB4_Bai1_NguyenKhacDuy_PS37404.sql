create table vanphong(
	maVP varchar(11) not null,
    diaDiem varchar(100) not null,
    truongPh varchar(20) not null,
    primary key (maVP)
);
create table nhanvien(
	maNV varchar(20) not null,
    tenNV varchar(50) not null,
    ngaySinh date not null,
    chucVu varchar(20) not null,
    soLuongNguoiThan bigint,
    maVP varchar(11) not null,
    primary key (maNV)
    );
create table thannhan(
	SCCCNguoiThan varchar(12) not null,
	maNV varchar(20) not null,
    maVP varchar(11) not null,
    primary key (SCCCNguoiThan)
    );
create table chitietthannhan(
	SCCCNguoiThan varchar(12) not null,
	tenNguoiThan varchar(50) not null,
    ngaySinh date,
    moiLienHe varchar(10) not null,
	primary key (SCCCNguoiThan)
    );
create table BDS(
	maBDS varchar(20) not null,
    diaChi varchar(100) not null,
    chuSoHuu varchar(12) not null,
    primary key (maBDS)
    );
create table chusohuu(
	SCCCDChuSoHuu varchar(12) not null,
    tenChuSoHuu varchar(50) not null,
    soDienThoai varchar(10) not null,
    diaChi varchar(100),
    maBDS varchar(20) not null,
    primary key (SCCCDChuSoHuu)
    );
alter table bds
add column sdtcsh varchar(13) not null;
    