#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (
  tx_yoastseo_focuskeyword varchar(100) DEFAULT '' NOT NULL,
  og_title varchar(255) DEFAULT '' NOT NULL,
  og_description text,
  og_image int unsigned DEFAULT 0 NOT NULL,
  twitter_title varchar(255) DEFAULT '' NOT NULL,
  twitter_description text,
  twitter_image int unsigned DEFAULT 0 NOT NULL,
  tx_yoastseo_snippetpreview tinyint unsigned DEFAULT 0 NOT NULL,
  tx_yoastseo_readability_analysis tinyint unsigned DEFAULT 0 NOT NULL,
  tx_yoastseo_focuskeyword_analysis tinyint unsigned DEFAULT 0 NOT NULL,
  tx_yoastseo_score_readability varchar(50) DEFAULT '' NOT NULL,
  tx_yoastseo_score_seo varchar(50) DEFAULT '' NOT NULL
);
