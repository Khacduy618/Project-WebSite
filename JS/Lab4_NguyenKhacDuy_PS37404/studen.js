//Bài 1
class SinhVien {
    constructor(ho, ten, id, quequan, hocluc) {
        this.ho = ho;
        this.ten = ten;
        this.id = id;
        this.quequan = quequan;
        this.hocluc = hocluc;
    }
}

const dsSinhVien = [
    new SinhVien("Nguyễn Khắc", "Duy", "WEB101", "Hội An", "Giỏi"),
    new SinhVien("Anh", "Duy", "WEB101", "Đà Nẵng", "Khá"),
    new SinhVien("Lê Anh", "Minh", "WEB101", "Sài Gòn", "Trung bình"),
    new SinhVien("Phạm", "Minh", "WEB101", "Đà Lạt", "Giỏi"),
    new SinhVien("Huỳnh Tấn", "Phát", "WEB101", "Đà Nẵng", "Khá"),
];

const dsTen = dsSinhVien.map(sinhvien => sinhvien.ten);
alert(`Danh sách tên của 5 sinh viên: ${dsTen.join(", ")}`);

const dsTenHocLuc = dsSinhVien.map(sinhvien => `${sinhvien.ten} - ${sinhvien.hocluc}`);
alert(`Danh sách tên và học lực của 5 sinh viên:${dsTenHocLuc.join(", ")}`);

const dsSinhVienGioi = dsSinhVien.filter(sinhvien => sinhvien.hocluc === "Giỏi");
const dsTenHocLucGioi = dsSinhVienGioi.map(sinhvien => `${sinhvien.ten} - ${sinhvien.hocluc}`);
alert(`Danh sách tên và học lực sinh viên Giỏi: ${dsTenHocLucGioi.join(", ")}`);

//Bài 2
class ThuCung {
    constructor(ten, chungalow, mausac, tuoi) {
      this.ten = ten;
      this.chungloai = chungalow;
      this.mausac = mausac;
      this.tuoi = tuoi;
    }
  }
  
  const dsThuCung = [
    new ThuCung("Mimi", "Mèo", "Trắng", 2),
    new ThuCung("Bông", "Mèo", "Nâu", 4),
    new ThuCung("Luna", "Mèo", "Đen", 1),
    new ThuCung("Milo", "Chó", "Nâu", 3),
    new ThuCung("Rocky", "Chó", "Trắng", 5),
    new ThuCung("Buddy", "Chó", "Đen", 6),
  ];
  
  
  const dsMeo = dsThuCung.filter(thucung => thucung.chungloai === "Mèo");
  const dsCho = dsThuCung.filter(thucung => thucung.chungloai === "Chó");
  
  console.log("Danh sách mèo:");
  dsMeo.forEach(meo => console.log(meo));
  
  console.log("Danh sách chó:");
  dsCho.forEach(cho => console.log(cho));
  
  
  const dsThuCungMauNau = dsThuCung.filter(thucung => thucung.mausac === "Nâu");
  const dsTenTuoiMauNau = dsThuCungMauNau.map(thucung => `${thucung.ten} - ${thucung.tuoi}`);
  
  console.log("Danh sách tên và tuổi thú cưng màu nâu:", dsTenTuoiMauNau.join(", "));
  
  
  const dsMeoDuoi5Tuoi = dsMeo.filter(meo => meo.tuoi < 5);
  const dsTenvaMauMeoDuoi5Tuoi = dsMeoDuoi5Tuoi.map(meo => `${meo.ten} - ${meo.mausac}`);
  
  console.log("Danh sách tên và màu mèo dưới 5 tuổi:", dsTenvaMauMeoDuoi5Tuoi.join(", "));
  
  
  const dsChoMauDen = dsCho.filter(cho => cho.mausac === "Đen");
  const dsTenvaTuoiChoMauDen = dsChoMauDen.map(cho => `${cho.ten} - ${cho.tuoi}`);
  
  console.log("Danh sách tên và tuổi chó màu đen:", dsTenvaTuoiChoMauDen.join(", "));