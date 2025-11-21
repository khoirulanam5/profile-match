# 🏆 Sistem Pendukung Keputusan (SPK) Pemilihan Siswa Terbaik

Sistem ini dibuat untuk membantu sekolah dalam menentukan **siswa terbaik** secara objektif menggunakan **Metode Profile Matching**. Sistem dilengkapi dengan fitur lengkap, multi-role, serta tampilan landing page yang modern.

---

## 🚀 Teknologi yang Digunakan

* **Framework Backend:** CodeIgniter 3
* **Database:** MySQL
* **Frontend:** HTML, CSS, JavaScript, Bootstrap
* **Metode SPK:** Profile Matching
* **Tampilan:** Landing Page Modern & Responsif

---

## 👥 Role Pengguna

### 1. **Admin**

* Mengelola data siswa
* Mengelola kriteria & subkriteria
* Mengelola bobot GAP profile matching
* Mengolah penilaian
* Melihat dan mencetak laporan hasil SPK

### 2. **Wali Kelas**

* Input nilai atau penilaian siswa berdasarkan kriteria
* Melihat ranking sementara

### 3. **Siswa**

* Melihat hasil ranking (jika diizinkan)
* Melihat profil dan informasi penilaian pribadi

---

## 🧩 Fitur Utama

### 🎯 **Metode Profile Matching Lengkap**

* Penentuan kriteria dan subkriteria
* Pembobotan core factor & secondary factor
* Perhitungan GAP otomatis
* Perangkingan siswa terbaik

### 👨‍🏫 **Manajemen Data Siswa**

* Tambah, edit, hapus data siswa
* Pembagian per kelas

### 📊 **Penilaian oleh Wali Kelas**

* Form input nilai lengkap berdasarkan kriteria
* Validasi input

### 📝 **Laporan Hasil SPK**

* Ranking siswa terbaik
* Nilai total & detail perhitungan
* Cetak PDF (opsional)

### 🎨 **Landing Page Modern**

* Profil sekolah
* Informasi sistem
* Highlight fitur unggulan
* CTA untuk login

---

## 📦 Struktur Direktori (Umum)

```
spk-siswa-terbaik/
├── application/
│   ├── controllers/
│   ├── models/
│   ├── views/
│   ├── config/
│   └── libraries/
├── assets/
│   ├── css/
│   ├── js/
│   └── img/
├── system/
└── database.sql
```

---

## 🛠️ Instalasi & Setup

### 1. Clone atau Download Project

```
git clone https://github.com/username/spk-profile-matching.git
```

### 2. Import Database

* Buat database MySQL
* Import file `database.sql`

### 3. Konfigurasi CodeIgniter

Edit `application/config/config.php`:

```
$config['base_url'] = 'http://localhost/spk-profile-matching/';
```

Edit `application/config/database.php`:

```
'hostname' => 'localhost',
'username' => 'root',
'password' => '',
'database' => 'nama_database',
```

### 4. Jalankan Project

Akses melalui browser:

```
http://localhost/spk-profile-matching/
```

---

## 📊 Contoh Alur Perhitungan Profile Matching (Ringkas)

1. Menentukan kriteria & subkriteria
2. Menentukan bobot & tipe faktor (Core / Secondary)
3. Input nilai siswa
4. Hitung GAP antara nilai siswa & nilai ideal
5. Konversi GAP ke bobot
6. Hitung nilai CF dan SF
7. Hitung nilai akhir
8. Hasil ranking siswa terbaik

---

## 📄 Lisensi

Private / Open Source — sesuai kebutuhan.

---

## 💬 Kontak Developer

Untuk pengembangan lebih lanjut, hubungi developer sistem.

---
