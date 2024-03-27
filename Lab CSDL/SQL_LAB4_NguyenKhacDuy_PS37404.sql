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
ALTER TABLE nhanvien
ADD CONSTRAINT fk_nhanvien_vanphong
FOREIGN KEY (maVP)
REFERENCES vanphong(maVP);

ALTER TABLE thannhan
ADD CONSTRAINT fk_thannhan_nhanvien
FOREIGN KEY (maNV)
REFERENCES nhanvien(maNV);

ALTER TABLE thannhan
ADD CONSTRAINT fk_thannhan_vanphong
FOREIGN KEY (maVP)
REFERENCES vanphong(maVP);

ALTER TABLE chitietthannhan
ADD CONSTRAINT fk_chitietthannhan_thannhan
FOREIGN KEY (SCCCNguoiThan)
REFERENCES thannhan(SCCCNguoiThan);

ALTER TABLE chusohuu
ADD CONSTRAINT fk_chusohuu_bds
FOREIGN KEY (maBDS)
REFERENCES BDS(maBDS);

ALTER TABLE BDS
ADD COLUMN maVP varchar(11);

alter table bds
Drop column maVP;

ALTER TABLE BDS
ADD COLUMN maVP varchar(11) not null;

ALTER TABLE bds
ADD CONSTRAINT fk_bds_vanphong
FOREIGN KEY (maVP)
REFERENCES vanphong(maVP);

ALTER TABLE BDS
ADD CONSTRAINT uq_maBDS UNIQUE (maBDS);

