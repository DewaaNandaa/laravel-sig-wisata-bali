# 🌍 API Sistem Informasi Geografis (SIG) — Lokasi Wisata Bali

Proyek ini merupakan sistem **API berbasis Laravel** yang digunakan untuk menampilkan data lokasi wisata di Bali.  
Data disimpan menggunakan **SQLite**, dengan fitur:
- Menampilkan daftar wisata  
- Menampilkan detail wisata berdasarkan ID  
- Filter wisata berdasarkan kategori  
- Pencarian wisata berdasarkan nama  
- Pagination data  

---

##  Cara Menjalankan Proyek

### 1️. Clone Repository (jika dari GitHub)
```bash
git clone https://github.com/USERNAME/REPO-NAME.git
cd REPO-NAME
```

### 2️. Install Dependency
```bash
composer install
```

### 3️. Konfigurasi Database
Edit file `.env` dan pastikan bagian database seperti ini:
```bash
DB_CONNECTION=sqlite
```

Lalu buat file database SQLite:

**Jika di Windows (PowerShell):**
```bash
New-Item -Path "database/database.sqlite" -ItemType File
```

**Jika di Linux/Mac:**
```bash
touch database/database.sqlite
```

### 4️. Generate App Key
```bash
php artisan key:generate
```

### 5️. Jalankan Migrasi dan Seeder (membuat tabel dan isi data contoh)
```bash
php artisan migrate --seed
```

### 6️. Jalankan Server
```bash
php artisan serve
```

Buka di browser:  
[http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## Endpoint API
| Method | Endpoint | Deskripsi |
|--------|-----------|-----------|
| GET | `/api/wisata` | Menampilkan semua data wisata |
| GET | `/api/wisata/{id}` | Menampilkan detail wisata berdasarkan ID |
| GET | `/api/wisata?kategori=alam` | Menampilkan wisata dengan kategori “alam” |
| GET | `/api/wisata?q=Pantai` | Mencari wisata berdasarkan nama |
| GET | `/api/wisata?per_page=5` | Menampilkan data dengan pagination |


---

##  Contoh Response

```json
{
  "data": [
    {
      "id": 1,
      "nama": "Pantai Sanur",
      "alamat": "Sanur, Denpasar",
      "lat": -8.691,
      "lng": 115.2644,
      "kategori": "alam"
    },
    {
      "id": 2,
      "nama": "Pura Besakih",
      "alamat": "Karangasem",
      "lat": -8.3599,
      "lng": 115.4524,
      "kategori": "budaya"
    }
  ]
}
```




