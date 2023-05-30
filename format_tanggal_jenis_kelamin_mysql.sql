SELECT IdMhs,Nama,
CASE JenisKelamin
WHEN 'P' THEN 'Laki-Laki'
WHEN 'W' THEN 'Wanita'
END as JenisKelamin,
DATE_FORMAT(Tgl_lahir,'%d-%m-%Y') as Tgl_lahir,
Alamat
FROM mahasiswa
