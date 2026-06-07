<h1 align="center">
  UTS Pemrograman Web CR002 <br>
  Portofolio & Progress Project Akhir
</h1>

<p align="center">
  Website portofolio personal dan showcase progress project akhir berbasis Laravel 12 + Filament Admin Panel.
</p>

---

<p align="center">

<img src="https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
<img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white" />
<img src="https://img.shields.io/badge/Filament-Admin%20Panel-F59E0B?style=for-the-badge" />
<img src="https://img.shields.io/badge/Docker-Container-2496ED?style=for-the-badge&logo=docker&logoColor=white" />
<img src="https://img.shields.io/badge/MariaDB-Database-003545?style=for-the-badge&logo=mariadb&logoColor=white" />
<img src="https://img.shields.io/github/actions/workflow/status/illhammf/uts-2026/laravel.yml?style=for-the-badge&label=Laravel%20CI&logo=githubactions&logoColor=white" />

</p>

<p align="center">

<img src="https://img.shields.io/github/last-commit/illhammf/uts-2026?style=for-the-badge" />
<img src="https://img.shields.io/github/repo-size/illhammf/uts-2026?style=for-the-badge" />
<img src="https://komarev.com/ghpvc/?username=illhammf&repo=uts-2026&style=for-the-badge&color=blue" />

</p>

---

# Tentang Project

Repository ini merupakan project **Ujian Tengah Semester (UTS) Mata Kuliah Pemrograman Web** yang dibuat menggunakan framework Laravel 12.

Aplikasi ini berfungsi sebagai:

- Website Portofolio Personal
- Showcase Progress Project Akhir
- Dashboard Admin Dinamis
- Sistem CRUD Project
- Contact Form Integration
- Monitoring Progress Project

---

# Fitur Utama

## Frontend Website

- Landing page modern
- Responsive design
- Dynamic showcase project
- Dynamic kategori project
- About & Tech Stack
- Detail project page
- Contact form
- Social media integration

---

## Dashboard Admin Filament

Admin panel digunakan untuk mengelola:

- CRUD Project
- CRUD Progress Project
- CRUD Pesan Kontak
- Upload ERD & Flowchart
- Upload PDF laporan
- Dynamic Tech Stack
- Dynamic kategori project
- Progress monitoring

---

## Progress Project System

Menampilkan:

- Persentase progress
- Status pengerjaan
- Progress bar dinamis
- Dashboard chart
- Timeline pengerjaan project

---

## Detail Project

Setiap project memiliki halaman detail berisi:

- Judul project
- Deskripsi lengkap
- Analisis masalah
- Kebutuhan sistem
- Tech stack
- ERD
- Flowchart
- Progress project
- File laporan PDF

---

# Konsep yang Digunakan

Project ini menerapkan beberapa konsep pengembangan web modern:

- MVC (Model View Controller)
- CRUD System
- Relational Database
- Dynamic Content
- Admin Panel
- File Upload Management
- REST Concept
- Responsive Web Design

---

# Tech Stack

| Teknologi | Keterangan |
|---|---|
| Laravel 12 | Backend Framework |
| PHP 8 | Bahasa Pemrograman |
| Blade | Template Engine |
| Filament | Admin Panel |
| Docker | Container Development |
| MariaDB | Database |
| Nginx | Web Server |
| Bootstrap | Frontend UI |
| GitHub | Version Control |
| VS Code | Code Editor |

---

# Struktur Database

Tabel utama yang digunakan:

```text
projects
project_progress
profiles
contact_messages
users
roles
```

---

# Diagram Sistem

Project ini dilengkapi dengan dokumentasi diagram sistem:
```text
✅ Use Case Diagram
✅ Activity Diagram
✅ Entity Relationship Diagram (ERD)
✅ DFD Level 0
✅ DFD Level 1
✅ Flowchart Sistem
```

---

# Dokumentasi Laporan

Repository ini juga menyertakan laporan project akhir dalam format PDF.

Isi laporan meliputi:
```text
BAB I Pendahuluan
BAB II Studi Teoritis
BAB III Metodologi Penelitian
BAB IV Hasil dan Pembahasan
BAB V Penutup
```

---

# Screenshot Aplikasi

## Landing Page

### Home
![Home 1](public/screenshots/home.png)
### Areas of Expertise
![Home 2](public/screenshots/home2.png)
### Showcase Project
![Home 3](public/screenshots/home3.png)
### Profile and Tech Stack
![Home 4](public/screenshots/home4.png)
### About and social media
![Home 5](public/screenshots/home5.png)
### Contact Me
![Home 6](public/screenshots/home6.png)


## Detail Project Page

### Detail Project Header
![Detail Project 1](public/screenshots/detailproject1.png)
### Analisis Sistem
![Detail Project 2](public/screenshots/detailproject2.png)
### Tech Stack and Progress Project
![Detail Project 3](public/screenshots/detailproject3.png)
### Progress Project
![Detail Project 4](public/screenshots/detailproject4.png)
### ERD
![Detail Project 5](public/screenshots/detailproject5.png)
### Flowchart
![Detail Project 6](public/screenshots/detailproject6.png)
### Laporan
![Detail Project 7](public/screenshots/detailproject7.png)

---

# Dashboard Admin

![Dashboard Admin](public/screenshots/admin.png)

---

# Cara Menjalankan Project
1. Clone Repository
```sh
git clone https://github.com/illhammf/uts-2026.git
```
2. Masuk ke Folder Project
```sh
cd root/perkuliahan/uts-2026
```
3. Jalankan Docker
```sh
docker compose up -d
```
atau menggunakan helper command:
```sh
dcu
```
4. Install Dependency
```sh
composer install
npm install
```
5. Konfigurasi Environment
```sh
cp .env.example .env
php artisan key:generate
```
6. Jalankan Migration & Seeder
```sh
php artisan migrate:fresh --seed
```
atau:
```sh
dca project:init
```
7. Jalankan Development Server
```sh
npm run dev
```

## Admin Panel
```sh
https://uts.test/admin
```
username:
```sh
admin@admin@.com
```
password:
```sh
password
```
dan jika ingin mematikannya
```sh
dcd
```

---

# Informasi Mahasiswa
| Data |	Keterangan |
|---|---|
| Nama |	Ilham Firmansyah |
| NIM |	20240801102 |
| Program | Studi	Teknik Informatika |
| Fakultas |	Ilmu Komputer |
| Universitas |	Universitas Esa Unggul |
| Angkatan |	2024 |

---

# License

Project ini menggunakan lisensi MIT.

---