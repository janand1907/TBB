-- SEO control panel, version 001. Import once into the existing blog MySQL database.
-- No existing blog tables or records are changed.
CREATE TABLE IF NOT EXISTS seo_keywords (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 keyword VARCHAR(300) COLLATE utf8mb4_bin NOT NULL,
 category VARCHAR(120) NOT NULL DEFAULT '',
 intent VARCHAR(80) NOT NULL DEFAULT '',
 priority ENUM('High','Medium','Low') NOT NULL DEFAULT 'Low',
 is_primary TINYINT(1) NOT NULL DEFAULT 0,
 country VARCHAR(80) NOT NULL DEFAULT 'All',
 target_city VARCHAR(120) NOT NULL DEFAULT '',
 device VARCHAR(30) NOT NULL DEFAULT 'All',
 target_page VARCHAR(500) NOT NULL DEFAULT '',
 mapped_page VARCHAR(500) NOT NULL DEFAULT '',
 mapping_intent VARCHAR(80) NOT NULL DEFAULT '',
 mapping_market VARCHAR(80) NOT NULL DEFAULT '',
 mapping_confidence VARCHAR(255) NOT NULL DEFAULT '',
 mapping_notes TEXT NULL,
 assigned_user_id BIGINT UNSIGNED NULL,
 active TINYINT(1) NOT NULL DEFAULT 1,
 recommended_action TEXT NULL,
 source VARCHAR(120) NOT NULL DEFAULT 'manual',
 source_detail VARCHAR(255) NOT NULL DEFAULT '',
 source_notes TEXT NULL,
 original_assignee VARCHAR(120) NOT NULL DEFAULT '',
 original_latest_date DATE NULL,
 source_snapshot_json LONGTEXT NULL,
 source_row_hash CHAR(64) NULL,
 created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 UNIQUE KEY uq_seo_keyword_text (keyword),
 UNIQUE KEY uq_seo_keyword_source (source_row_hash),
 KEY idx_seo_keywords_priority (is_primary,priority),
 KEY idx_seo_keywords_assignee (assigned_user_id),
 CONSTRAINT fk_seo_keyword_assignee FOREIGN KEY (assigned_user_id) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS seo_observations (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 observation_key CHAR(64) NOT NULL,
 property_id VARCHAR(255) NOT NULL,
 data_date DATE NULL,
 period_start DATE NOT NULL,
 period_end DATE NOT NULL,
 search_type VARCHAR(20) NOT NULL DEFAULT 'web',
 grain ENUM('property','query','page','query_page','country','device') NOT NULL,
 query_text VARCHAR(1000) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
 page_url VARCHAR(2048) NOT NULL DEFAULT '',
 country VARCHAR(80) NOT NULL DEFAULT 'all',
 device VARCHAR(30) NOT NULL DEFAULT 'all',
 clicks DOUBLE NOT NULL DEFAULT 0,
 impressions DOUBLE NOT NULL DEFAULT 0,
 ctr DOUBLE NULL,
 position DOUBLE NULL,
 source VARCHAR(120) NOT NULL,
 source_batch CHAR(64) NULL,
 imported_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 UNIQUE KEY uq_seo_observation (observation_key),
 KEY idx_seo_obs_date (data_date,grain),
 KEY idx_seo_obs_query (query_text(191),data_date),
 KEY idx_seo_obs_page (page_url(191),data_date),
 KEY idx_seo_obs_period (period_start,period_end,grain)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS seo_import_batches (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 source_name VARCHAR(180) NOT NULL,
 file_hash CHAR(64) NOT NULL,
 rows_seen INT NOT NULL DEFAULT 0,
 rows_added INT NOT NULL DEFAULT 0,
 imported_by BIGINT UNSIGNED NULL,
 imported_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 UNIQUE KEY uq_seo_batch_file (source_name,file_hash),
 CONSTRAINT fk_seo_import_user FOREIGN KEY (imported_by) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS seo_google_connections (
 id TINYINT UNSIGNED PRIMARY KEY,
 property_id VARCHAR(255) NOT NULL,
 refresh_token_enc TEXT NOT NULL,
 access_token_enc TEXT NULL,
 expires_at DATETIME NULL,
 connected_by BIGINT UNSIGNED NOT NULL,
 connected_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 CONSTRAINT fk_seo_google_user FOREIGN KEY (connected_by) REFERENCES users(id) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS seo_refresh_runs (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 user_id BIGINT UNSIGNED NOT NULL,
 property_id VARCHAR(255) NOT NULL DEFAULT '',
 started_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 finished_at DATETIME NULL,
 status ENUM('running','partial','success','error') NOT NULL DEFAULT 'running',
 data_date DATE NULL,
 grain VARCHAR(30) NOT NULL DEFAULT 'property',
 start_row INT UNSIGNED NOT NULL DEFAULT 0,
 rows_processed INT UNSIGNED NOT NULL DEFAULT 0,
 rows_added INT UNSIGNED NOT NULL DEFAULT 0,
 rows_updated INT UNSIGNED NOT NULL DEFAULT 0,
 message VARCHAR(500) NOT NULL DEFAULT '',
 KEY idx_seo_refresh_started (started_at),
 CONSTRAINT fk_seo_refresh_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS seo_tasks (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 title VARCHAR(200) NOT NULL,
 description TEXT NULL,
 keyword_id BIGINT UNSIGNED NULL,
 page_url VARCHAR(500) NOT NULL DEFAULT '',
 assigned_user_id BIGINT UNSIGNED NULL,
 priority ENUM('High','Medium','Low') NOT NULL DEFAULT 'Medium',
 status ENUM('To Do','In Progress','Review','Completed','Blocked') NOT NULL DEFAULT 'To Do',
 due_date DATE NULL,
 completion_notes TEXT NULL,
 completed_at DATETIME NULL,
 created_by BIGINT UNSIGNED NOT NULL,
 created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 KEY idx_seo_tasks_assignee (assigned_user_id,status),
 KEY idx_seo_tasks_due (due_date),
 CONSTRAINT fk_seo_task_keyword FOREIGN KEY (keyword_id) REFERENCES seo_keywords(id) ON DELETE SET NULL,
 CONSTRAINT fk_seo_task_assignee FOREIGN KEY (assigned_user_id) REFERENCES users(id) ON DELETE SET NULL,
 CONSTRAINT fk_seo_task_creator FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS seo_dashboard_cache (
 cache_key VARCHAR(120) PRIMARY KEY,
 payload_json LONGTEXT NOT NULL,
 expires_at DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS seo_settings (
 setting_key VARCHAR(80) PRIMARY KEY,
 setting_value VARCHAR(255) NOT NULL,
 updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS seo_weekly_summaries (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 source_key CHAR(64) NOT NULL,
 week_start DATE NOT NULL,
 period_end DATE NOT NULL,
 clicks DOUBLE NULL,
 impressions DOUBLE NULL,
 ctr DOUBLE NULL,
 position DOUBLE NULL,
 source VARCHAR(120) NOT NULL,
 UNIQUE KEY uq_seo_weekly_source (source_key)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
