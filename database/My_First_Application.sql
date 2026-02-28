-- --------------------------------------------------------
-- Host:                         C:\Users\Earl Brian\Herd\my-first-application\database\database.sqlite
-- Server version:               3.50.1
-- Server OS:                    
-- HeidiSQL Version:             12.11.0.7065
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES  */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table database.cache
CREATE TABLE IF NOT EXISTS "cache" ("key" varchar not null, "value" text not null, "expiration" integer not null, primary key ("key"));
;

-- Dumping data for table database.cache: -1 rows
/*!40000 ALTER TABLE "cache" DISABLE KEYS */;
/*!40000 ALTER TABLE "cache" ENABLE KEYS */;

-- Dumping structure for table database.cache_locks
CREATE TABLE IF NOT EXISTS "cache_locks" ("key" varchar not null, "owner" varchar not null, "expiration" integer not null, primary key ("key"));
;

-- Dumping data for table database.cache_locks: -1 rows
/*!40000 ALTER TABLE "cache_locks" DISABLE KEYS */;
/*!40000 ALTER TABLE "cache_locks" ENABLE KEYS */;

-- Dumping structure for table database.employers
CREATE TABLE IF NOT EXISTS "employers" ("id" integer primary key autoincrement not null, "name" varchar not null, "created_at" datetime, "updated_at" datetime);

-- Dumping data for table database.employers: -1 rows
/*!40000 ALTER TABLE "employers" DISABLE KEYS */;
INSERT INTO "employers" ("id", "name", "created_at", "updated_at") VALUES
	(1, 'Heaney-Rau', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(2, 'Goldner-Torp', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(3, 'Johns, Wolf and Kertzmann', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(4, 'Kulas, Wehner and Dickinson', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(5, 'Sanford, Ullrich and Bartell', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(6, 'Fadel, Stark and Bruen', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(7, 'Quitzon, Bartell and Brakus', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(8, 'Hayes, Conn and Romaguera', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(9, 'Friesen, Gorczany and Medhurst', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(10, 'Schulist Inc', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(11, 'Heaney and Sons', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(12, 'Haley-Schimmel', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(13, 'Borer, Wilderman and Lemke', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(14, 'Quitzon, Brakus and King', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(15, 'Quitzon-Lakin', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(16, 'Ratke-Beier', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(17, 'Hartmann, Davis and Halvorson', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(18, 'DuBuque-Hammes', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(19, 'Nader LLC', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(20, 'Reichel and Sons', '2025-10-01 09:16:55', '2025-10-01 09:16:55');
/*!40000 ALTER TABLE "employers" ENABLE KEYS */;

-- Dumping structure for table database.failed_jobs
CREATE TABLE IF NOT EXISTS "failed_jobs" ("id" integer primary key autoincrement not null, "uuid" varchar not null, "connection" text not null, "queue" text not null, "payload" text not null, "exception" text not null, "failed_at" datetime not null default CURRENT_TIMESTAMP);
CREATE UNIQUE INDEX "failed_jobs_uuid_unique" on "failed_jobs" ("uuid");

-- Dumping data for table database.failed_jobs: -1 rows
/*!40000 ALTER TABLE "failed_jobs" DISABLE KEYS */;
/*!40000 ALTER TABLE "failed_jobs" ENABLE KEYS */;

-- Dumping structure for table database.jobs
CREATE TABLE IF NOT EXISTS "jobs" ("id" integer primary key autoincrement not null, "queue" varchar not null, "payload" text not null, "attempts" integer not null, "reserved_at" integer, "available_at" integer not null, "created_at" integer not null);
CREATE INDEX "jobs_queue_index" on "jobs" ("queue");

-- Dumping data for table database.jobs: -1 rows
/*!40000 ALTER TABLE "jobs" DISABLE KEYS */;
/*!40000 ALTER TABLE "jobs" ENABLE KEYS */;

-- Dumping structure for table database.job_batches
CREATE TABLE IF NOT EXISTS "job_batches" ("id" varchar not null, "name" varchar not null, "total_jobs" integer not null, "pending_jobs" integer not null, "failed_jobs" integer not null, "failed_job_ids" text not null, "options" text, "cancelled_at" integer, "created_at" integer not null, "finished_at" integer, primary key ("id"));
;

-- Dumping data for table database.job_batches: -1 rows
/*!40000 ALTER TABLE "job_batches" DISABLE KEYS */;
/*!40000 ALTER TABLE "job_batches" ENABLE KEYS */;

-- Dumping structure for table database.job_listings
CREATE TABLE IF NOT EXISTS "job_listings" ("id" integer primary key autoincrement not null, "employer_id" integer not null, "title" varchar not null, "salary" varchar not null, "created_at" datetime, "updated_at" datetime);

-- Dumping data for table database.job_listings: -1 rows
/*!40000 ALTER TABLE "job_listings" DISABLE KEYS */;
INSERT INTO "job_listings" ("id", "employer_id", "title", "salary", "created_at", "updated_at") VALUES
	(1, 1, 'Parking Enforcement Worker', '$90,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(2, 2, 'Manicurists', '$50,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(3, 3, 'Information Systems Manager', '$50,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(4, 4, 'Biological Technician', '$90,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(5, 5, 'Gas Compressor Operator', '$90,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(6, 6, 'Court Reporter', '$50,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(7, 7, 'Motor Vehicle Inspector', '$50,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(8, 8, 'Network Systems Analyst', '$90,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(9, 9, 'Hunter and Trapper', '$90,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(10, 10, 'Gaming Supervisor', '$150,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(11, 11, 'Stationary Engineer OR Boiler Operator', '$90,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(12, 12, 'Prosthodontist', '$150,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(13, 13, 'Heaters', '$90,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(14, 14, 'Architectural Drafter', '$150,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(15, 15, 'Special Education Teacher', '$50,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(16, 16, 'Electrical Engineer', '$150,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(17, 17, 'Chemical Engineer', '$150,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(18, 18, 'Dentist', '$150,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(19, 19, 'Insurance Appraiser', '$150,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(20, 20, 'Credit Authorizer', '$50,000 USD', '2025-10-01 09:16:55', '2025-10-01 09:16:55');
/*!40000 ALTER TABLE "job_listings" ENABLE KEYS */;

-- Dumping structure for table database.job_listing_tag
CREATE TABLE IF NOT EXISTS "job_listing_tag" ("id" integer primary key autoincrement not null, "job_listing_id" integer not null, "tag_id" integer not null, "created_at" datetime, "updated_at" datetime, foreign key("job_listing_id") references "job_listings"("id") on delete cascade, foreign key("tag_id") references "tags"("id") on delete cascade);

-- Dumping data for table database.job_listing_tag: -1 rows
/*!40000 ALTER TABLE "job_listing_tag" DISABLE KEYS */;
INSERT INTO "job_listing_tag" ("id", "job_listing_id", "tag_id", "created_at", "updated_at") VALUES
	(1, 1, 6, NULL, NULL),
	(2, 1, 8, NULL, NULL),
	(3, 2, 3, NULL, NULL),
	(4, 2, 5, NULL, NULL),
	(5, 3, 6, NULL, NULL),
	(6, 3, 8, NULL, NULL),
	(7, 4, 1, NULL, NULL),
	(8, 4, 5, NULL, NULL),
	(9, 5, 1, NULL, NULL),
	(10, 5, 3, NULL, NULL),
	(11, 6, 2, NULL, NULL),
	(12, 6, 3, NULL, NULL),
	(13, 7, 4, NULL, NULL),
	(14, 7, 10, NULL, NULL),
	(15, 8, 1, NULL, NULL),
	(16, 8, 9, NULL, NULL),
	(17, 9, 4, NULL, NULL),
	(18, 9, 7, NULL, NULL),
	(19, 10, 3, NULL, NULL),
	(20, 10, 7, NULL, NULL),
	(21, 11, 7, NULL, NULL),
	(22, 11, 10, NULL, NULL),
	(23, 12, 6, NULL, NULL),
	(24, 12, 10, NULL, NULL),
	(25, 13, 5, NULL, NULL),
	(26, 13, 9, NULL, NULL),
	(27, 14, 4, NULL, NULL),
	(28, 14, 5, NULL, NULL),
	(29, 15, 2, NULL, NULL),
	(30, 15, 6, NULL, NULL),
	(31, 16, 1, NULL, NULL),
	(32, 16, 9, NULL, NULL),
	(33, 17, 4, NULL, NULL),
	(34, 17, 5, NULL, NULL),
	(35, 18, 8, NULL, NULL),
	(36, 18, 10, NULL, NULL),
	(37, 19, 5, NULL, NULL),
	(38, 19, 6, NULL, NULL),
	(39, 20, 3, NULL, NULL),
	(40, 20, 6, NULL, NULL);
/*!40000 ALTER TABLE "job_listing_tag" ENABLE KEYS */;

-- Dumping structure for table database.job_tag
CREATE TABLE IF NOT EXISTS "job_tag" ("id" integer primary key autoincrement not null, "job_listing_id" integer not null, "tag_id" integer not null, "created_at" datetime, "updated_at" datetime, foreign key("job_listing_id") references "job_listings"("id") on delete cascade, foreign key("tag_id") references "tags"("id") on delete cascade);
CREATE UNIQUE INDEX "job_tag_job_listing_id_tag_id_unique" on "job_tag" ("job_listing_id", "tag_id");

-- Dumping data for table database.job_tag: -1 rows
/*!40000 ALTER TABLE "job_tag" DISABLE KEYS */;
/*!40000 ALTER TABLE "job_tag" ENABLE KEYS */;

-- Dumping structure for table database.migrations
CREATE TABLE IF NOT EXISTS "migrations" ("id" integer primary key autoincrement not null, "migration" varchar not null, "batch" integer not null);

-- Dumping data for table database.migrations: -1 rows
/*!40000 ALTER TABLE "migrations" DISABLE KEYS */;
INSERT INTO "migrations" ("id", "migration", "batch") VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2025_09_20_041110_create_employers_table', 1),
	(5, '2025_09_20_041931_create_job_listings_table', 1),
	(6, '2025_09_20_050809_create_tags_table', 1),
	(7, '2025_09_20_052108_create_job_tag_table', 1),
	(8, '2025_09_20_052917_create_job_listing_tag_table', 1);
/*!40000 ALTER TABLE "migrations" ENABLE KEYS */;

-- Dumping structure for table database.password_reset_tokens
CREATE TABLE IF NOT EXISTS "password_reset_tokens" ("email" varchar not null, "token" varchar not null, "created_at" datetime, primary key ("email"));
;

-- Dumping data for table database.password_reset_tokens: -1 rows
/*!40000 ALTER TABLE "password_reset_tokens" DISABLE KEYS */;
/*!40000 ALTER TABLE "password_reset_tokens" ENABLE KEYS */;

-- Dumping structure for table database.sessions
CREATE TABLE IF NOT EXISTS "sessions" ("id" varchar not null, "user_id" integer, "ip_address" varchar, "user_agent" text, "payload" text not null, "last_activity" integer not null, primary key ("id"));
;
CREATE INDEX "sessions_user_id_index" on "sessions" ("user_id");
CREATE INDEX "sessions_last_activity_index" on "sessions" ("last_activity");

-- Dumping data for table database.sessions: -1 rows
/*!40000 ALTER TABLE "sessions" DISABLE KEYS */;
INSERT INTO "sessions" ("id", "user_id", "ip_address", "user_agent", "payload", "last_activity") VALUES
	('efQsQKFvhMEXpMjkWYDTeI4BOPS0pQ1P4uGi9cvz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.22.1 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia0p2OHhxWVJ5TWJWSGxPRDRMZkhXdG53bE9lbTlTdHVTdDdRSlhqdSI7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9teS1maXJzdC1hcHBsaWNhdGlvbi50ZXN0Lz9oZXJkPXByZXZpZXciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1760151969),
	('iOC8joPQien1bKB6ki50CntNxB5D8YbPLdFthVYe', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOVFjb0I1S3JqWVY1SVkwWWpudTV4bGRaRDZtWTBMVXk2RkptRHo3VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9teS1maXJzdC1hcHBsaWNhdGlvbi50ZXN0L2pvYnM/cGFnZT0yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9fQ==', 1759310341);
/*!40000 ALTER TABLE "sessions" ENABLE KEYS */;

-- Dumping structure for table database.tags
CREATE TABLE IF NOT EXISTS "tags" ("id" integer primary key autoincrement not null, "name" varchar not null, "created_at" datetime, "updated_at" datetime);

-- Dumping data for table database.tags: -1 rows
/*!40000 ALTER TABLE "tags" DISABLE KEYS */;
INSERT INTO "tags" ("id", "name", "created_at", "updated_at") VALUES
	(1, 'JavaScript', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(2, 'JavaScript', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(3, 'Part-time', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(4, 'Part-time', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(5, 'Full-time', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(6, 'Laravel', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(7, 'PHP', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(8, 'JavaScript', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(9, 'React', '2025-10-01 09:16:55', '2025-10-01 09:16:55'),
	(10, 'React', '2025-10-01 09:16:55', '2025-10-01 09:16:55');
/*!40000 ALTER TABLE "tags" ENABLE KEYS */;

-- Dumping structure for table database.users
CREATE TABLE IF NOT EXISTS "users" ("id" integer primary key autoincrement not null, "name" varchar not null, "email" varchar not null, "email_verified_at" datetime, "password" varchar not null, "remember_token" varchar, "created_at" datetime, "updated_at" datetime);
CREATE UNIQUE INDEX "users_email_unique" on "users" ("email");

-- Dumping data for table database.users: -1 rows
/*!40000 ALTER TABLE "users" DISABLE KEYS */;
INSERT INTO "users" ("id", "name", "email", "email_verified_at", "password", "remember_token", "created_at", "updated_at") VALUES
	(1, 'John Doe', 'test@example.com', '2025-10-01 09:16:54', '$2y$12$N0R0A5WP1Qsco3x5QdCFM.fnbq6c60SdA6cY55XQMMdDinaasNw5m', '1N9ZD3LZC3', '2025-10-01 09:16:55', '2025-10-01 09:16:55');
/*!40000 ALTER TABLE "users" ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
