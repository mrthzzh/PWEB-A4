CREATE TABLE `individuals` (
  `id` integer PRIMARY KEY NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat_id` integer NOT NULL,
  `email` varchar(255) UNIQUE,
  `password` varchar(255) NOT NULL,
  `roles_id` integer NOT NULL
);

CREATE TABLE `roles` (
  `id` integer PRIMARY KEY NOT NULL,
  `role_name` varchar(255) NOT NULL
);

CREATE TABLE `kecamatan` (
  `id` integer PRIMARY KEY NOT NULL,
  `kecamatan` varchar(255) NOT NULL
);

CREATE TABLE `kabupaten` (
  `id` integer PRIMARY KEY NOT NULL,
  `kabupaten` varchar(255) NOT NULL
);

CREATE TABLE `alamat` (
  `id` integer PRIMARY KEY NOT NULL,
  `kabupaten_id` integer NOT NULL,
  `kecamatan_id` integer NOT NULL,
  `detail` varchar(255) 
);

CREATE TABLE `kamar` (
  `id` integer PRIMARY KEY NOT NULL,
  `jenis_kamar_id` integer NOT NULL,
  `no_kamar` integer NOT NULL,
  `status` varchar(255) DEFAULT 'enable' NOT NULL
);

CREATE TABLE `jenis_kamar` (
  `id` integer PRIMARY KEY NOT NULL,
  `jenis_kamar` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `deskripsi` text 
);

CREATE TABLE `laporan` (
  `id` integer PRIMARY KEY,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `penitipan_id` integer NOT NULL
);

CREATE TABLE `penitipan` (
  `id` integer PRIMARY KEY,
  `individuals_id` integer NOT NULL,
  `tanggal_masuk` datetime NOT NULL,
  `tanggal_keluar` datetime NOT NULL,
  `kamar_id` integer NOT NULL,
  `nama_kucing` varchar(255) NOT NULL,
  `status_id` integer DEFAULT '1' NOT NULL
);

CREATE TABLE `status` (
  `id` integer PRIMARY KEY NOT NULL,
  `status` varchar(255) NOT NULL
);

ALTER TABLE `alamat` ADD FOREIGN KEY (`kabupaten_id`) REFERENCES `kabupaten` (`id`);

ALTER TABLE `alamat` ADD FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`);

ALTER TABLE `kamar` ADD FOREIGN KEY (`jenis_kamar_id`) REFERENCES `jenis_kamar` (`id`);

ALTER TABLE `laporan` ADD FOREIGN KEY (`penitipan_id`) REFERENCES `penitipan` (`id`);

ALTER TABLE `penitipan` ADD FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

ALTER TABLE `individuals` ADD FOREIGN KEY (`alamat_id`) REFERENCES `alamat` (`id`);

ALTER TABLE `penitipan` ADD FOREIGN KEY (`kamar_id`) REFERENCES `kamar` (`id`);

ALTER TABLE `penitipan` ADD FOREIGN KEY (`individuals_id`) REFERENCES `individuals` (`id`);

ALTER TABLE `individuals` ADD FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`);


-- CREATE TABLE `individuals` (
--   `id` integer PRIMARY KEY,
--   `name` varchar(255) NOT NULL,
--   `no_telp` varchar(255) NOT NULL,
--   `alamat_id` integer NOT NULL,
--   `email` varchar(255) UNIQUE,
--   `password` varchar(255) NOT NULL,
--   `roles_id` integer NOT NULL
-- );

-- CREATE TABLE `roles` (
--   `id` integer PRIMARY KEY,
--   `role_name` varchar(255) NOT NULL
-- );

-- CREATE TABLE `kecamatan` (
--   `id` integer PRIMARY KEY,
--   `kecamatan` varchar(255) NOT NULL
-- );

-- CREATE TABLE `kabupaten` (
--   `id` integer PRIMARY KEY,
--   `kabupaten` varchar(255) NOT NULL
-- );

-- CREATE TABLE `alamat` (
--   `id` integer PRIMARY KEY,
--   `kabupaten_id` integer NOT NULL,
--   `kecamatan_id` integer NOT NULL,
--   `detail` varchar(255) NOT NULL
-- );

-- CREATE TABLE `kamar` (
--   `id` integer PRIMARY KEY,
--   `jenis_kamar_id` integer NOT NULL,
--   `no_kamar` integer NOT NULL,
--   `status` varchar(255) DEFAULT 'enable'
-- );

-- CREATE TABLE `jenis_kamar` (
--   `id` integer PRIMARY KEY,
--   `jenis_kamar` varchar(255) NOT NULL,
--   `harga` varchar(255) NOT NULL,
--   `deskripsi` text NOT NULL
-- );

-- CREATE TABLE `laporan` (
--   `id` integer PRIMARY KEY,
--   `gambar` varchar(255) NOT NULL,
--   `deskripsi` text NOT NULL,
--   `tanggal` datetime NOT NULL,
--   `penitipan_id` integer NOT NULL
-- );

-- CREATE TABLE `penitipan` (
--   `id` integer PRIMARY KEY,
--   `individuals_id` integer NOT NULL,
--   `tanggal_masuk` datetime NOT NULL,
--   `tanggal_keluar` datetime NOT NULL,
--   `kamar_id` integer NOT NULL,
--   `nama_kucing` varchar(255) NOT NULL,
--   `status_id` integer DEFAULT '1'
-- );

-- CREATE TABLE `status` (
--   `id` integer PRIMARY KEY,
--   `status` varchar(255) NOT NULL
-- );

-- ALTER TABLE `alamat` ADD FOREIGN KEY (`kabupaten_id`) REFERENCES `kabupaten` (`id`);

-- ALTER TABLE `alamat` ADD FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`);

-- ALTER TABLE `kamar` ADD FOREIGN KEY (`jenis_kamar_id`) REFERENCES `jenis_kamar` (`id`);

-- ALTER TABLE `laporan` ADD FOREIGN KEY (`penitipan_id`) REFERENCES `penitipan` (`id`);

-- ALTER TABLE `penitipan` ADD FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

-- ALTER TABLE `individuals` ADD FOREIGN KEY (`alamat_id`) REFERENCES `alamat` (`id`);

-- ALTER TABLE `penitipan` ADD FOREIGN KEY (`kamar_id`) REFERENCES `kamar` (`id`);

-- ALTER TABLE `penitipan` ADD FOREIGN KEY (`individuals_id`) REFERENCES `individuals` (`id`);

-- ALTER TABLE `individuals` ADD FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`);
