# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 178.128.231.4 (MySQL 5.7.32-0ubuntu0.18.04.1)
# Database: gitea
# Generation Time: 2021-01-03 14:55:24 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table access
# ------------------------------------------------------------

DROP TABLE IF EXISTS `access`;

CREATE TABLE `access` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `repo_id` bigint(20) DEFAULT NULL,
  `mode` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_access_s` (`user_id`,`repo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table access_token
# ------------------------------------------------------------

DROP TABLE IF EXISTS `access_token`;

CREATE TABLE `access_token` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `token_hash` varchar(255) DEFAULT NULL,
  `token_salt` varchar(255) DEFAULT NULL,
  `token_last_eight` varchar(255) DEFAULT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_access_token_token_hash` (`token_hash`),
  KEY `IDX_access_token_uid` (`uid`),
  KEY `IDX_access_token_created_unix` (`created_unix`),
  KEY `IDX_access_token_updated_unix` (`updated_unix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table action
# ------------------------------------------------------------

DROP TABLE IF EXISTS `action`;

CREATE TABLE `action` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `op_type` int(11) DEFAULT NULL,
  `act_user_id` bigint(20) DEFAULT NULL,
  `repo_id` bigint(20) DEFAULT NULL,
  `comment_id` bigint(20) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `ref_name` varchar(255) DEFAULT NULL,
  `is_private` tinyint(1) NOT NULL DEFAULT '0',
  `content` text,
  `created_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_action_created_unix` (`created_unix`),
  KEY `IDX_action_user_id` (`user_id`),
  KEY `IDX_action_act_user_id` (`act_user_id`),
  KEY `IDX_action_repo_id` (`repo_id`),
  KEY `IDX_action_comment_id` (`comment_id`),
  KEY `IDX_action_is_deleted` (`is_deleted`),
  KEY `IDX_action_is_private` (`is_private`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table attachment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `attachment`;

CREATE TABLE `attachment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(40) DEFAULT NULL,
  `issue_id` bigint(20) DEFAULT NULL,
  `release_id` bigint(20) DEFAULT NULL,
  `uploader_id` bigint(20) DEFAULT '0',
  `comment_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `download_count` bigint(20) DEFAULT '0',
  `size` bigint(20) DEFAULT '0',
  `created_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_attachment_uuid` (`uuid`),
  KEY `IDX_attachment_issue_id` (`issue_id`),
  KEY `IDX_attachment_release_id` (`release_id`),
  KEY `IDX_attachment_uploader_id` (`uploader_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table collaboration
# ------------------------------------------------------------

DROP TABLE IF EXISTS `collaboration`;

CREATE TABLE `collaboration` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `repo_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `mode` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_collaboration_s` (`repo_id`,`user_id`),
  KEY `IDX_collaboration_repo_id` (`repo_id`),
  KEY `IDX_collaboration_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table comment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `poster_id` bigint(20) DEFAULT NULL,
  `original_author` varchar(255) DEFAULT NULL,
  `original_author_id` bigint(20) DEFAULT NULL,
  `issue_id` bigint(20) DEFAULT NULL,
  `label_id` bigint(20) DEFAULT NULL,
  `old_milestone_id` bigint(20) DEFAULT NULL,
  `milestone_id` bigint(20) DEFAULT NULL,
  `assignee_id` bigint(20) DEFAULT NULL,
  `removed_assignee` tinyint(1) DEFAULT NULL,
  `resolve_doer_id` bigint(20) DEFAULT NULL,
  `old_title` varchar(255) DEFAULT NULL,
  `new_title` varchar(255) DEFAULT NULL,
  `old_ref` varchar(255) DEFAULT NULL,
  `new_ref` varchar(255) DEFAULT NULL,
  `dependent_issue_id` bigint(20) DEFAULT NULL,
  `commit_id` bigint(20) DEFAULT NULL,
  `line` bigint(20) DEFAULT NULL,
  `tree_path` varchar(255) DEFAULT NULL,
  `content` text,
  `patch` text,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  `commit_sha` varchar(40) DEFAULT NULL,
  `review_id` bigint(20) DEFAULT NULL,
  `invalidated` tinyint(1) DEFAULT NULL,
  `ref_repo_id` bigint(20) DEFAULT NULL,
  `ref_issue_id` bigint(20) DEFAULT NULL,
  `ref_comment_id` bigint(20) DEFAULT NULL,
  `ref_action` smallint(6) DEFAULT NULL,
  `ref_is_pull` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_comment_poster_id` (`poster_id`),
  KEY `IDX_comment_updated_unix` (`updated_unix`),
  KEY `IDX_comment_review_id` (`review_id`),
  KEY `IDX_comment_ref_issue_id` (`ref_issue_id`),
  KEY `IDX_comment_ref_comment_id` (`ref_comment_id`),
  KEY `IDX_comment_type` (`type`),
  KEY `IDX_comment_issue_id` (`issue_id`),
  KEY `IDX_comment_created_unix` (`created_unix`),
  KEY `IDX_comment_ref_repo_id` (`ref_repo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table commit_status
# ------------------------------------------------------------

DROP TABLE IF EXISTS `commit_status`;

CREATE TABLE `commit_status` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `index` bigint(20) DEFAULT NULL,
  `repo_id` bigint(20) DEFAULT NULL,
  `state` varchar(7) NOT NULL,
  `sha` varchar(64) NOT NULL,
  `target_url` text,
  `description` text,
  `context_hash` char(40) DEFAULT NULL,
  `context` text,
  `creator_id` bigint(20) DEFAULT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_commit_status_repo_sha_index` (`index`,`repo_id`,`sha`),
  KEY `IDX_commit_status_updated_unix` (`updated_unix`),
  KEY `IDX_commit_status_index` (`index`),
  KEY `IDX_commit_status_repo_id` (`repo_id`),
  KEY `IDX_commit_status_sha` (`sha`),
  KEY `IDX_commit_status_context_hash` (`context_hash`),
  KEY `IDX_commit_status_created_unix` (`created_unix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table deleted_branch
# ------------------------------------------------------------

DROP TABLE IF EXISTS `deleted_branch`;

CREATE TABLE `deleted_branch` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `repo_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `commit` varchar(255) NOT NULL,
  `deleted_by_id` bigint(20) DEFAULT NULL,
  `deleted_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_deleted_branch_s` (`repo_id`,`name`,`commit`),
  KEY `IDX_deleted_branch_repo_id` (`repo_id`),
  KEY `IDX_deleted_branch_deleted_by_id` (`deleted_by_id`),
  KEY `IDX_deleted_branch_deleted_unix` (`deleted_unix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table deploy_key
# ------------------------------------------------------------

DROP TABLE IF EXISTS `deploy_key`;

CREATE TABLE `deploy_key` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `key_id` bigint(20) DEFAULT NULL,
  `repo_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fingerprint` varchar(255) DEFAULT NULL,
  `mode` int(11) NOT NULL DEFAULT '1',
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_deploy_key_s` (`key_id`,`repo_id`),
  KEY `IDX_deploy_key_key_id` (`key_id`),
  KEY `IDX_deploy_key_repo_id` (`repo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table email_address
# ------------------------------------------------------------

DROP TABLE IF EXISTS `email_address`;

CREATE TABLE `email_address` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_activated` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_email_address_email` (`email`),
  KEY `IDX_email_address_uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table email_hash
# ------------------------------------------------------------

DROP TABLE IF EXISTS `email_hash`;

CREATE TABLE `email_hash` (
  `hash` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`hash`),
  UNIQUE KEY `UQE_email_hash_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table external_login_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `external_login_user`;

CREATE TABLE `external_login_user` (
  `external_id` varchar(255) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `login_source_id` bigint(20) NOT NULL,
  `raw_data` text,
  `provider` varchar(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `nick_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `avatar_url` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `access_token` text,
  `access_token_secret` text,
  `refresh_token` text,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`external_id`,`login_source_id`),
  KEY `IDX_external_login_user_provider` (`provider`),
  KEY `IDX_external_login_user_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table follow
# ------------------------------------------------------------

DROP TABLE IF EXISTS `follow`;

CREATE TABLE `follow` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `follow_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_follow_follow` (`user_id`,`follow_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table gpg_key
# ------------------------------------------------------------

DROP TABLE IF EXISTS `gpg_key`;

CREATE TABLE `gpg_key` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `owner_id` bigint(20) NOT NULL,
  `key_id` char(16) NOT NULL,
  `primary_key_id` char(16) DEFAULT NULL,
  `content` text NOT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  `expired_unix` bigint(20) DEFAULT NULL,
  `added_unix` bigint(20) DEFAULT NULL,
  `emails` text,
  `can_sign` tinyint(1) DEFAULT NULL,
  `can_encrypt_comms` tinyint(1) DEFAULT NULL,
  `can_encrypt_storage` tinyint(1) DEFAULT NULL,
  `can_certify` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_gpg_key_owner_id` (`owner_id`),
  KEY `IDX_gpg_key_key_id` (`key_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table gpg_key_import
# ------------------------------------------------------------

DROP TABLE IF EXISTS `gpg_key_import`;

CREATE TABLE `gpg_key_import` (
  `key_id` char(16) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`key_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table hook_task
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hook_task`;

CREATE TABLE `hook_task` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `repo_id` bigint(20) DEFAULT NULL,
  `hook_id` bigint(20) DEFAULT NULL,
  `uuid` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `url` text,
  `signature` text,
  `payload_content` text,
  `http_method` varchar(255) DEFAULT NULL,
  `content_type` int(11) DEFAULT NULL,
  `event_type` varchar(255) DEFAULT NULL,
  `is_ssl` tinyint(1) DEFAULT NULL,
  `is_delivered` tinyint(1) DEFAULT NULL,
  `delivered` bigint(20) DEFAULT NULL,
  `is_succeed` tinyint(1) DEFAULT NULL,
  `request_content` text,
  `response_content` text,
  PRIMARY KEY (`id`),
  KEY `IDX_hook_task_repo_id` (`repo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table issue
# ------------------------------------------------------------

DROP TABLE IF EXISTS `issue`;

CREATE TABLE `issue` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `repo_id` bigint(20) DEFAULT NULL,
  `index` bigint(20) DEFAULT NULL,
  `poster_id` bigint(20) DEFAULT NULL,
  `original_author` varchar(255) DEFAULT NULL,
  `original_author_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `milestone_id` bigint(20) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `is_closed` tinyint(1) DEFAULT NULL,
  `is_pull` tinyint(1) DEFAULT NULL,
  `num_comments` int(11) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `deadline_unix` bigint(20) DEFAULT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  `closed_unix` bigint(20) DEFAULT NULL,
  `is_locked` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_issue_repo_index` (`repo_id`,`index`),
  KEY `IDX_issue_original_author_id` (`original_author_id`),
  KEY `IDX_issue_updated_unix` (`updated_unix`),
  KEY `IDX_issue_closed_unix` (`closed_unix`),
  KEY `IDX_issue_is_pull` (`is_pull`),
  KEY `IDX_issue_deadline_unix` (`deadline_unix`),
  KEY `IDX_issue_created_unix` (`created_unix`),
  KEY `IDX_issue_repo_id` (`repo_id`),
  KEY `IDX_issue_poster_id` (`poster_id`),
  KEY `IDX_issue_milestone_id` (`milestone_id`),
  KEY `IDX_issue_is_closed` (`is_closed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table issue_assignees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `issue_assignees`;

CREATE TABLE `issue_assignees` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `assignee_id` bigint(20) DEFAULT NULL,
  `issue_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_issue_assignees_issue_id` (`issue_id`),
  KEY `IDX_issue_assignees_assignee_id` (`assignee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table issue_dependency
# ------------------------------------------------------------

DROP TABLE IF EXISTS `issue_dependency`;

CREATE TABLE `issue_dependency` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `issue_id` bigint(20) NOT NULL,
  `dependency_id` bigint(20) NOT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_issue_dependency_issue_dependency` (`issue_id`,`dependency_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table issue_label
# ------------------------------------------------------------

DROP TABLE IF EXISTS `issue_label`;

CREATE TABLE `issue_label` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `issue_id` bigint(20) DEFAULT NULL,
  `label_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_issue_label_s` (`issue_id`,`label_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table issue_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `issue_user`;

CREATE TABLE `issue_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) DEFAULT NULL,
  `issue_id` bigint(20) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `is_mentioned` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_issue_user_uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table issue_watch
# ------------------------------------------------------------

DROP TABLE IF EXISTS `issue_watch`;

CREATE TABLE `issue_watch` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `issue_id` bigint(20) NOT NULL,
  `is_watching` tinyint(1) NOT NULL,
  `created_unix` bigint(20) NOT NULL,
  `updated_unix` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_issue_watch_watch` (`user_id`,`issue_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table label
# ------------------------------------------------------------

DROP TABLE IF EXISTS `label`;

CREATE TABLE `label` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `repo_id` bigint(20) DEFAULT NULL,
  `org_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `color` varchar(7) DEFAULT NULL,
  `num_issues` int(11) DEFAULT NULL,
  `num_closed_issues` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_label_repo_id` (`repo_id`),
  KEY `IDX_label_org_id` (`org_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table language_stat
# ------------------------------------------------------------

DROP TABLE IF EXISTS `language_stat`;

CREATE TABLE `language_stat` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `repo_id` bigint(20) NOT NULL,
  `commit_id` varchar(255) DEFAULT NULL,
  `is_primary` tinyint(1) DEFAULT NULL,
  `language` varchar(30) NOT NULL,
  `size` bigint(20) NOT NULL DEFAULT '0',
  `created_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_language_stat_s` (`repo_id`,`language`),
  KEY `IDX_language_stat_created_unix` (`created_unix`),
  KEY `IDX_language_stat_repo_id` (`repo_id`),
  KEY `IDX_language_stat_language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table lfs_lock
# ------------------------------------------------------------

DROP TABLE IF EXISTS `lfs_lock`;

CREATE TABLE `lfs_lock` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `repo_id` bigint(20) NOT NULL,
  `owner_id` bigint(20) NOT NULL,
  `path` text,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_lfs_lock_repo_id` (`repo_id`),
  KEY `IDX_lfs_lock_owner_id` (`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table lfs_meta_object
# ------------------------------------------------------------

DROP TABLE IF EXISTS `lfs_meta_object`;

CREATE TABLE `lfs_meta_object` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `oid` varchar(255) NOT NULL,
  `size` bigint(20) NOT NULL,
  `repository_id` bigint(20) NOT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_lfs_meta_object_s` (`oid`,`repository_id`),
  KEY `IDX_lfs_meta_object_oid` (`oid`),
  KEY `IDX_lfs_meta_object_repository_id` (`repository_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table login_source
# ------------------------------------------------------------

DROP TABLE IF EXISTS `login_source`;

CREATE TABLE `login_source` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_actived` tinyint(1) NOT NULL DEFAULT '0',
  `is_sync_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `cfg` text,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_login_source_name` (`name`),
  KEY `IDX_login_source_created_unix` (`created_unix`),
  KEY `IDX_login_source_updated_unix` (`updated_unix`),
  KEY `IDX_login_source_is_actived` (`is_actived`),
  KEY `IDX_login_source_is_sync_enabled` (`is_sync_enabled`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table milestone
# ------------------------------------------------------------

DROP TABLE IF EXISTS `milestone`;

CREATE TABLE `milestone` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `repo_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `is_closed` tinyint(1) DEFAULT NULL,
  `num_issues` int(11) DEFAULT NULL,
  `num_closed_issues` int(11) DEFAULT NULL,
  `completeness` int(11) DEFAULT NULL,
  `deadline_unix` bigint(20) DEFAULT NULL,
  `closed_date_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_milestone_repo_id` (`repo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table mirror
# ------------------------------------------------------------

DROP TABLE IF EXISTS `mirror`;

CREATE TABLE `mirror` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `repo_id` bigint(20) DEFAULT NULL,
  `interval` bigint(20) DEFAULT NULL,
  `enable_prune` tinyint(1) NOT NULL DEFAULT '1',
  `updated_unix` bigint(20) DEFAULT NULL,
  `next_update_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_mirror_repo_id` (`repo_id`),
  KEY `IDX_mirror_updated_unix` (`updated_unix`),
  KEY `IDX_mirror_next_update_unix` (`next_update_unix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table notice
# ------------------------------------------------------------

DROP TABLE IF EXISTS `notice`;

CREATE TABLE `notice` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `description` text,
  `created_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_notice_created_unix` (`created_unix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

LOCK TABLES `notice` WRITE;
/*!40000 ALTER TABLE `notice` DISABLE KEYS */;

INSERT INTO `notice` (`id`, `type`, `description`, `created_unix`)
VALUES
	(1,2,'Cron: Check all repository statistics has finished',1595299369),
	(2,2,'Cron: Delete old repository archives has finished',1595299369),
	(3,2,'Cron: Update migration poster IDs has finished',1595299369),
	(4,2,'Cron: Clean-up deleted branches has finished',1595299369),
	(5,2,'Cron: Update Mirrors has finished',1595299969),
	(6,2,'Cron: Update Mirrors has finished',1595300569),
	(7,2,'Cron: Update Mirrors has finished',1595301169),
	(8,2,'Cron: Update Mirrors has finished',1595301769),
	(9,2,'Cron: Update Mirrors has finished',1595302369),
	(10,2,'Cron: Clean-up deleted branches has finished',1595302650),
	(11,2,'Cron: Delete old repository archives has finished',1595302650),
	(12,2,'Cron: Update migration poster IDs has finished',1595302650),
	(13,2,'Cron: Check all repository statistics has finished',1595302650),
	(14,2,'Cron: Update Mirrors has finished',1595303250),
	(15,2,'Cron: Update Mirrors has finished',1595303850),
	(16,2,'Cron: Update Mirrors has finished',1595304450),
	(17,2,'Cron: Update Mirrors has finished',1595305050),
	(18,2,'Cron: Update Mirrors has finished',1595305650),
	(19,2,'Cron: Update Mirrors has finished',1595306250),
	(20,2,'Cron: Update Mirrors has finished',1595306850),
	(21,2,'Cron: Update Mirrors has finished',1595307450),
	(22,2,'Cron: Update Mirrors has finished',1595308050),
	(23,2,'Cron: Update Mirrors has finished',1595308650),
	(24,2,'Cron: Update Mirrors has finished',1595309250),
	(25,2,'Cron: Update Mirrors has finished',1595309850),
	(26,2,'Cron: Update Mirrors has finished',1595310450),
	(27,2,'Cron: Update Mirrors has finished',1595311050),
	(28,2,'Cron: Update Mirrors has finished',1595311650),
	(29,2,'Cron: Update Mirrors has finished',1595312250),
	(30,2,'Cron: Update Mirrors has finished',1595312850),
	(31,2,'Cron: Update Mirrors has finished',1595313450),
	(32,2,'Cron: Update Mirrors has finished',1595314050),
	(33,2,'Cron: Update Mirrors has finished',1595314650),
	(34,2,'Cron: Update Mirrors has finished',1595315250),
	(35,2,'Cron: Update Mirrors has finished',1595315850),
	(36,2,'Cron: Update Mirrors has finished',1595316450),
	(37,2,'Cron: Update Mirrors has finished',1595317050),
	(38,2,'Cron: Update Mirrors has finished',1595317650),
	(39,2,'Cron: Update Mirrors has finished',1595318250),
	(40,2,'Cron: Update Mirrors has finished',1595318850),
	(41,2,'Cron: Update Mirrors has finished',1595319450),
	(42,2,'Cron: Update Mirrors has finished',1595320050),
	(43,2,'Cron: Update Mirrors has finished',1595320650),
	(44,2,'Cron: Update Mirrors has finished',1595321250),
	(45,2,'Cron: Update Mirrors has finished',1595321850),
	(46,2,'Cron: Update Mirrors has finished',1595322450),
	(47,2,'Cron: Update Mirrors has finished',1595323050),
	(48,2,'Cron: Update Mirrors has finished',1595323650),
	(49,2,'Cron: Update Mirrors has finished',1595324250),
	(50,2,'Cron: Update Mirrors has finished',1595324850),
	(51,2,'Cron: Update Mirrors has finished',1595325450),
	(52,2,'Cron: Update Mirrors has finished',1595326050),
	(53,2,'Cron: Update Mirrors has finished',1595326650),
	(54,2,'Cron: Update Mirrors has finished',1595327250),
	(55,2,'Cron: Update Mirrors has finished',1595327850),
	(56,2,'Cron: Update Mirrors has finished',1595328450),
	(57,2,'Cron: Update Mirrors has finished',1595329050),
	(58,2,'Cron: Update Mirrors has finished',1595329650),
	(59,2,'Cron: Update Mirrors has finished',1595330250),
	(60,2,'Cron: Update Mirrors has finished',1595330850),
	(61,2,'Cron: Update Mirrors has finished',1595331450),
	(62,2,'Cron: Update Mirrors has finished',1595332050),
	(63,2,'Cron: Update Mirrors has finished',1595332650),
	(64,2,'Cron: Update Mirrors has finished',1595333250),
	(65,2,'Cron: Update Mirrors has finished',1595333850),
	(66,2,'Cron: Update Mirrors has finished',1595334450),
	(67,2,'Cron: Update Mirrors has finished',1595335050),
	(68,2,'Cron: Update Mirrors has finished',1595335650),
	(69,2,'Cron: Update Mirrors has finished',1595336250),
	(70,2,'Cron: Update Mirrors has finished',1595336850),
	(71,2,'Cron: Update Mirrors has finished',1595337450),
	(72,2,'Cron: Update Mirrors has finished',1595338050),
	(73,2,'Cron: Update Mirrors has finished',1595338650),
	(74,2,'Cron: Update Mirrors has finished',1595339250),
	(75,2,'Cron: Update Mirrors has finished',1595339850),
	(76,2,'Cron: Update Mirrors has finished',1595340450),
	(77,2,'Cron: Update Mirrors has finished',1595341050),
	(78,2,'Cron: Update Mirrors has finished',1595341650),
	(79,2,'Cron: Update Mirrors has finished',1595342250),
	(80,2,'Cron: Update Mirrors has finished',1595342850),
	(81,2,'Cron: Update Mirrors has finished',1595343450),
	(82,2,'Cron: Update Mirrors has finished',1595344050),
	(83,2,'Cron: Update Mirrors has finished',1595344650),
	(84,2,'Cron: Update Mirrors has finished',1595345250),
	(85,2,'Cron: Update Mirrors has finished',1595345850),
	(86,2,'Cron: Update Mirrors has finished',1595346450),
	(87,2,'Cron: Update Mirrors has finished',1595347050),
	(88,2,'Cron: Update Mirrors has finished',1595347650),
	(89,2,'Cron: Update Mirrors has finished',1595348250),
	(90,2,'Cron: Update Mirrors has finished',1595348850),
	(91,2,'Cron: Update Mirrors has finished',1595349450),
	(92,2,'Cron: Update Mirrors has finished',1595350050),
	(93,2,'Cron: Update Mirrors has finished',1595350650),
	(94,2,'Cron: Update Mirrors has finished',1595351250),
	(95,2,'Cron: Update Mirrors has finished',1595351850),
	(96,2,'Cron: Update Mirrors has finished',1595352450),
	(97,2,'Cron: Update Mirrors has finished',1595353050),
	(98,2,'Cron: Update Mirrors has finished',1595353650),
	(99,2,'Cron: Update Mirrors has finished',1595354250),
	(100,2,'Cron: Update Mirrors has finished',1595354850),
	(101,2,'Cron: Update Mirrors has finished',1595355450),
	(102,2,'Cron: Update Mirrors has finished',1595356050),
	(103,2,'Cron: Update Mirrors has finished',1595356650),
	(104,2,'Cron: Update Mirrors has finished',1595357250),
	(105,2,'Cron: Update Mirrors has finished',1595357850),
	(106,2,'Cron: Update Mirrors has finished',1595358450),
	(107,2,'Cron: Update Mirrors has finished',1595359050),
	(108,2,'Cron: Update Mirrors has finished',1595359650),
	(109,2,'Cron: Update Mirrors has finished',1595360250),
	(110,2,'Cron: Update Mirrors has finished',1595360850),
	(111,2,'Cron: Update Mirrors has finished',1595361450),
	(112,2,'Cron: Update Mirrors has finished',1595362050),
	(113,2,'Cron: Update Mirrors has finished',1595362650),
	(114,2,'Cron: Update Mirrors has finished',1595363250),
	(115,2,'Cron: Update Mirrors has finished',1595363850),
	(116,2,'Cron: Update Mirrors has finished',1595364450),
	(117,2,'Cron: Update Mirrors has finished',1595365050),
	(118,2,'Cron: Update Mirrors has finished',1595365650),
	(119,2,'Cron: Update Mirrors has finished',1595366250),
	(120,2,'Cron: Update Mirrors has finished',1595366850),
	(121,2,'Cron: Update Mirrors has finished',1595367450),
	(122,2,'Cron: Update Mirrors has finished',1595368050),
	(123,2,'Cron: Update Mirrors has finished',1595368650),
	(124,2,'Cron: Update Mirrors has finished',1595369250),
	(125,2,'Cron: Update Mirrors has finished',1595369850),
	(126,2,'Cron: Update Mirrors has finished',1595370450),
	(127,2,'Cron: Update Mirrors has finished',1595371050),
	(128,2,'Cron: Update Mirrors has finished',1595371650),
	(129,2,'Cron: Update Mirrors has finished',1595372250),
	(130,2,'Cron: Update Mirrors has finished',1595372850),
	(131,2,'Cron: Update Mirrors has finished',1595373450),
	(132,2,'Cron: Update Mirrors has finished',1595374050),
	(133,2,'Cron: Update Mirrors has finished',1595374650),
	(134,2,'Cron: Update Mirrors has finished',1595375250),
	(135,2,'Cron: Update Mirrors has finished',1595375850),
	(136,2,'Cron: Update Mirrors has finished',1595376450),
	(137,2,'Cron: Update Mirrors has finished',1595377050),
	(138,2,'Cron: Update Mirrors has finished',1595377650),
	(139,2,'Cron: Update Mirrors has finished',1595378250),
	(140,2,'Cron: Update Mirrors has finished',1595378850),
	(141,2,'Cron: Update Mirrors has finished',1595379450),
	(142,2,'Cron: Update Mirrors has finished',1595380050),
	(143,2,'Cron: Update Mirrors has finished',1595380650),
	(144,2,'Cron: Update Mirrors has finished',1595381250),
	(145,2,'Cron: Update Mirrors has finished',1595381850),
	(146,2,'Cron: Update Mirrors has finished',1595382450),
	(147,2,'Cron: Update Mirrors has finished',1595383050),
	(148,2,'Cron: Update Mirrors has finished',1595383650),
	(149,2,'Cron: Update Mirrors has finished',1595384250),
	(150,2,'Cron: Update Mirrors has finished',1595384850),
	(151,2,'Cron: Update Mirrors has finished',1595385450),
	(152,2,'Cron: Update Mirrors has finished',1595386050),
	(153,2,'Cron: Update Mirrors has finished',1595386650),
	(154,2,'Cron: Update Mirrors has finished',1595387250),
	(155,2,'Cron: Update Mirrors has finished',1595387850),
	(156,2,'Cron: Update Mirrors has finished',1595388450),
	(157,2,'Cron: Clean-up deleted branches has finished',1595389050),
	(158,2,'Cron: Synchronize external user data has finished',1595389050),
	(159,2,'Cron: Delete old repository archives has finished',1595389050),
	(160,2,'Cron: Health check all repositories has finished',1595389050),
	(161,2,'Cron: Update Mirrors has finished',1595389050),
	(162,2,'Cron: Update migration poster IDs has finished',1595389050),
	(163,2,'Cron: Check all repository statistics has finished',1595389050),
	(164,2,'Cron: Update Mirrors has finished',1595389650),
	(165,2,'Cron: Update Mirrors has finished',1595390250),
	(166,2,'Cron: Update Mirrors has finished',1595390850),
	(167,2,'Cron: Update Mirrors has finished',1595391450),
	(168,2,'Cron: Update Mirrors has finished',1595392050),
	(169,2,'Cron: Update Mirrors has finished',1595392650),
	(170,2,'Cron: Update Mirrors has finished',1595393250),
	(171,2,'Cron: Update Mirrors has finished',1595393850),
	(172,2,'Cron: Update Mirrors has finished',1595394450);

/*!40000 ALTER TABLE `notice` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table notification
# ------------------------------------------------------------

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `repo_id` bigint(20) NOT NULL,
  `status` smallint(6) NOT NULL,
  `source` smallint(6) NOT NULL,
  `issue_id` bigint(20) NOT NULL,
  `commit_id` varchar(255) DEFAULT NULL,
  `comment_id` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_unix` bigint(20) NOT NULL,
  `updated_unix` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_notification_issue_id` (`issue_id`),
  KEY `IDX_notification_commit_id` (`commit_id`),
  KEY `IDX_notification_user_id` (`user_id`),
  KEY `IDX_notification_source` (`source`),
  KEY `IDX_notification_updated_by` (`updated_by`),
  KEY `IDX_notification_created_unix` (`created_unix`),
  KEY `IDX_notification_updated_unix` (`updated_unix`),
  KEY `IDX_notification_repo_id` (`repo_id`),
  KEY `IDX_notification_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table oauth2_application
# ------------------------------------------------------------

DROP TABLE IF EXISTS `oauth2_application`;

CREATE TABLE `oauth2_application` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `client_id` varchar(255) DEFAULT NULL,
  `client_secret` varchar(255) DEFAULT NULL,
  `redirect_uris` text,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_oauth2_application_client_id` (`client_id`),
  KEY `IDX_oauth2_application_uid` (`uid`),
  KEY `IDX_oauth2_application_created_unix` (`created_unix`),
  KEY `IDX_oauth2_application_updated_unix` (`updated_unix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table oauth2_authorization_code
# ------------------------------------------------------------

DROP TABLE IF EXISTS `oauth2_authorization_code`;

CREATE TABLE `oauth2_authorization_code` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `grant_id` bigint(20) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `code_challenge` varchar(255) DEFAULT NULL,
  `code_challenge_method` varchar(255) DEFAULT NULL,
  `redirect_uri` varchar(255) DEFAULT NULL,
  `valid_until` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_oauth2_authorization_code_code` (`code`),
  KEY `IDX_oauth2_authorization_code_valid_until` (`valid_until`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table oauth2_grant
# ------------------------------------------------------------

DROP TABLE IF EXISTS `oauth2_grant`;

CREATE TABLE `oauth2_grant` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `application_id` bigint(20) DEFAULT NULL,
  `counter` bigint(20) NOT NULL DEFAULT '1',
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_oauth2_grant_user_application` (`user_id`,`application_id`),
  KEY `IDX_oauth2_grant_user_id` (`user_id`),
  KEY `IDX_oauth2_grant_application_id` (`application_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table oauth2_session
# ------------------------------------------------------------

DROP TABLE IF EXISTS `oauth2_session`;

CREATE TABLE `oauth2_session` (
  `id` varchar(100) NOT NULL,
  `data` text,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  `expires_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_oauth2_session_expires_unix` (`expires_unix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table org_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `org_user`;

CREATE TABLE `org_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) DEFAULT NULL,
  `org_id` bigint(20) DEFAULT NULL,
  `is_public` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_org_user_s` (`uid`,`org_id`),
  KEY `IDX_org_user_uid` (`uid`),
  KEY `IDX_org_user_org_id` (`org_id`),
  KEY `IDX_org_user_is_public` (`is_public`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table protected_branch
# ------------------------------------------------------------

DROP TABLE IF EXISTS `protected_branch`;

CREATE TABLE `protected_branch` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `repo_id` bigint(20) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `can_push` tinyint(1) NOT NULL DEFAULT '0',
  `enable_whitelist` tinyint(1) DEFAULT NULL,
  `whitelist_user_i_ds` text,
  `whitelist_team_i_ds` text,
  `enable_merge_whitelist` tinyint(1) NOT NULL DEFAULT '0',
  `whitelist_deploy_keys` tinyint(1) NOT NULL DEFAULT '0',
  `merge_whitelist_user_i_ds` text,
  `merge_whitelist_team_i_ds` text,
  `enable_status_check` tinyint(1) NOT NULL DEFAULT '0',
  `status_check_contexts` text,
  `enable_approvals_whitelist` tinyint(1) NOT NULL DEFAULT '0',
  `approvals_whitelist_user_i_ds` text,
  `approvals_whitelist_team_i_ds` text,
  `required_approvals` bigint(20) NOT NULL DEFAULT '0',
  `block_on_rejected_reviews` tinyint(1) NOT NULL DEFAULT '0',
  `block_on_outdated_branch` tinyint(1) NOT NULL DEFAULT '0',
  `dismiss_stale_approvals` tinyint(1) NOT NULL DEFAULT '0',
  `require_signed_commits` tinyint(1) NOT NULL DEFAULT '0',
  `protected_file_patterns` text,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_protected_branch_s` (`repo_id`,`branch_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table public_key
# ------------------------------------------------------------

DROP TABLE IF EXISTS `public_key`;

CREATE TABLE `public_key` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `owner_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fingerprint` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `mode` int(11) NOT NULL DEFAULT '2',
  `type` int(11) NOT NULL DEFAULT '1',
  `login_source_id` bigint(20) NOT NULL DEFAULT '0',
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_public_key_owner_id` (`owner_id`),
  KEY `IDX_public_key_fingerprint` (`fingerprint`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table pull_request
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pull_request`;

CREATE TABLE `pull_request` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `conflicted_files` text,
  `commits_ahead` int(11) DEFAULT NULL,
  `commits_behind` int(11) DEFAULT NULL,
  `issue_id` bigint(20) DEFAULT NULL,
  `index` bigint(20) DEFAULT NULL,
  `head_repo_id` bigint(20) DEFAULT NULL,
  `base_repo_id` bigint(20) DEFAULT NULL,
  `head_branch` varchar(255) DEFAULT NULL,
  `base_branch` varchar(255) DEFAULT NULL,
  `merge_base` varchar(40) DEFAULT NULL,
  `has_merged` tinyint(1) DEFAULT NULL,
  `merged_commit_id` varchar(40) DEFAULT NULL,
  `merger_id` bigint(20) DEFAULT NULL,
  `merged_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_pull_request_merger_id` (`merger_id`),
  KEY `IDX_pull_request_merged_unix` (`merged_unix`),
  KEY `IDX_pull_request_issue_id` (`issue_id`),
  KEY `IDX_pull_request_head_repo_id` (`head_repo_id`),
  KEY `IDX_pull_request_base_repo_id` (`base_repo_id`),
  KEY `IDX_pull_request_has_merged` (`has_merged`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table reaction
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reaction`;

CREATE TABLE `reaction` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `issue_id` bigint(20) NOT NULL,
  `comment_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `original_author_id` bigint(20) NOT NULL DEFAULT '0',
  `original_author` varchar(255) DEFAULT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_reaction_s` (`type`,`issue_id`,`comment_id`,`user_id`,`original_author_id`),
  KEY `IDX_reaction_type` (`type`),
  KEY `IDX_reaction_issue_id` (`issue_id`),
  KEY `IDX_reaction_comment_id` (`comment_id`),
  KEY `IDX_reaction_user_id` (`user_id`),
  KEY `IDX_reaction_original_author_id` (`original_author_id`),
  KEY `IDX_reaction_created_unix` (`created_unix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table release
# ------------------------------------------------------------

DROP TABLE IF EXISTS `release`;

CREATE TABLE `release` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `repo_id` bigint(20) DEFAULT NULL,
  `publisher_id` bigint(20) DEFAULT NULL,
  `tag_name` varchar(255) DEFAULT NULL,
  `original_author` varchar(255) DEFAULT NULL,
  `original_author_id` bigint(20) DEFAULT NULL,
  `lower_tag_name` varchar(255) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sha1` varchar(40) DEFAULT NULL,
  `num_commits` bigint(20) DEFAULT NULL,
  `note` text,
  `is_draft` tinyint(1) NOT NULL DEFAULT '0',
  `is_prerelease` tinyint(1) NOT NULL DEFAULT '0',
  `is_tag` tinyint(1) NOT NULL DEFAULT '0',
  `created_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_release_n` (`repo_id`,`tag_name`),
  KEY `IDX_release_repo_id` (`repo_id`),
  KEY `IDX_release_publisher_id` (`publisher_id`),
  KEY `IDX_release_tag_name` (`tag_name`),
  KEY `IDX_release_original_author_id` (`original_author_id`),
  KEY `IDX_release_created_unix` (`created_unix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table repo_indexer_status
# ------------------------------------------------------------

DROP TABLE IF EXISTS `repo_indexer_status`;

CREATE TABLE `repo_indexer_status` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `repo_id` bigint(20) DEFAULT NULL,
  `commit_sha` varchar(40) DEFAULT NULL,
  `indexer_type` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_repo_indexer_status_s` (`repo_id`,`indexer_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table repo_redirect
# ------------------------------------------------------------

DROP TABLE IF EXISTS `repo_redirect`;

CREATE TABLE `repo_redirect` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `owner_id` bigint(20) DEFAULT NULL,
  `lower_name` varchar(255) NOT NULL,
  `redirect_repo_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_repo_redirect_s` (`owner_id`,`lower_name`),
  KEY `IDX_repo_redirect_lower_name` (`lower_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table repo_topic
# ------------------------------------------------------------

DROP TABLE IF EXISTS `repo_topic`;

CREATE TABLE `repo_topic` (
  `repo_id` bigint(20) DEFAULT NULL,
  `topic_id` bigint(20) DEFAULT NULL,
  UNIQUE KEY `UQE_repo_topic_s` (`repo_id`,`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table repo_unit
# ------------------------------------------------------------

DROP TABLE IF EXISTS `repo_unit`;

CREATE TABLE `repo_unit` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `repo_id` bigint(20) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `config` text,
  `created_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_repo_unit_created_unix` (`created_unix`),
  KEY `IDX_repo_unit_s` (`repo_id`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table repository
# ------------------------------------------------------------

DROP TABLE IF EXISTS `repository`;

CREATE TABLE `repository` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `owner_id` bigint(20) DEFAULT NULL,
  `owner_name` varchar(255) DEFAULT NULL,
  `lower_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `website` varchar(2048) DEFAULT NULL,
  `original_service_type` int(11) DEFAULT NULL,
  `original_url` varchar(2048) DEFAULT NULL,
  `default_branch` varchar(255) DEFAULT NULL,
  `num_watches` int(11) DEFAULT NULL,
  `num_stars` int(11) DEFAULT NULL,
  `num_forks` int(11) DEFAULT NULL,
  `num_issues` int(11) DEFAULT NULL,
  `num_closed_issues` int(11) DEFAULT NULL,
  `num_pulls` int(11) DEFAULT NULL,
  `num_closed_pulls` int(11) DEFAULT NULL,
  `num_milestones` int(11) NOT NULL DEFAULT '0',
  `num_closed_milestones` int(11) NOT NULL DEFAULT '0',
  `is_private` tinyint(1) DEFAULT NULL,
  `is_empty` tinyint(1) DEFAULT NULL,
  `is_archived` tinyint(1) DEFAULT NULL,
  `is_mirror` tinyint(1) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `is_fork` tinyint(1) NOT NULL DEFAULT '0',
  `fork_id` bigint(20) DEFAULT NULL,
  `is_template` tinyint(1) NOT NULL DEFAULT '0',
  `template_id` bigint(20) DEFAULT NULL,
  `size` bigint(20) NOT NULL DEFAULT '0',
  `is_fsck_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `close_issues_via_commit_in_any_branch` tinyint(1) NOT NULL DEFAULT '0',
  `topics` text,
  `avatar` varchar(64) DEFAULT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_repository_s` (`owner_id`,`lower_name`),
  KEY `IDX_repository_owner_id` (`owner_id`),
  KEY `IDX_repository_lower_name` (`lower_name`),
  KEY `IDX_repository_is_private` (`is_private`),
  KEY `IDX_repository_name` (`name`),
  KEY `IDX_repository_original_service_type` (`original_service_type`),
  KEY `IDX_repository_is_empty` (`is_empty`),
  KEY `IDX_repository_created_unix` (`created_unix`),
  KEY `IDX_repository_is_fork` (`is_fork`),
  KEY `IDX_repository_fork_id` (`fork_id`),
  KEY `IDX_repository_is_template` (`is_template`),
  KEY `IDX_repository_template_id` (`template_id`),
  KEY `IDX_repository_updated_unix` (`updated_unix`),
  KEY `IDX_repository_is_archived` (`is_archived`),
  KEY `IDX_repository_is_mirror` (`is_mirror`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table review
# ------------------------------------------------------------

DROP TABLE IF EXISTS `review`;

CREATE TABLE `review` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `reviewer_id` bigint(20) DEFAULT NULL,
  `original_author` varchar(255) DEFAULT NULL,
  `original_author_id` bigint(20) DEFAULT NULL,
  `issue_id` bigint(20) DEFAULT NULL,
  `content` text,
  `official` tinyint(1) NOT NULL DEFAULT '0',
  `commit_id` varchar(40) DEFAULT NULL,
  `stale` tinyint(1) NOT NULL DEFAULT '0',
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_review_reviewer_id` (`reviewer_id`),
  KEY `IDX_review_issue_id` (`issue_id`),
  KEY `IDX_review_created_unix` (`created_unix`),
  KEY `IDX_review_updated_unix` (`updated_unix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table star
# ------------------------------------------------------------

DROP TABLE IF EXISTS `star`;

CREATE TABLE `star` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) DEFAULT NULL,
  `repo_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_star_s` (`uid`,`repo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table stopwatch
# ------------------------------------------------------------

DROP TABLE IF EXISTS `stopwatch`;

CREATE TABLE `stopwatch` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `issue_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_stopwatch_issue_id` (`issue_id`),
  KEY `IDX_stopwatch_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table task
# ------------------------------------------------------------

DROP TABLE IF EXISTS `task`;

CREATE TABLE `task` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `doer_id` bigint(20) DEFAULT NULL,
  `owner_id` bigint(20) DEFAULT NULL,
  `repo_id` bigint(20) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `start_time` bigint(20) DEFAULT NULL,
  `end_time` bigint(20) DEFAULT NULL,
  `payload_content` text,
  `errors` text,
  `created` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_task_doer_id` (`doer_id`),
  KEY `IDX_task_owner_id` (`owner_id`),
  KEY `IDX_task_repo_id` (`repo_id`),
  KEY `IDX_task_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table team
# ------------------------------------------------------------

DROP TABLE IF EXISTS `team`;

CREATE TABLE `team` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `org_id` bigint(20) DEFAULT NULL,
  `lower_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `authorize` int(11) DEFAULT NULL,
  `num_repos` int(11) DEFAULT NULL,
  `num_members` int(11) DEFAULT NULL,
  `includes_all_repositories` tinyint(1) NOT NULL DEFAULT '0',
  `can_create_org_repo` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_team_org_id` (`org_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table team_repo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `team_repo`;

CREATE TABLE `team_repo` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `org_id` bigint(20) DEFAULT NULL,
  `team_id` bigint(20) DEFAULT NULL,
  `repo_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_team_repo_s` (`team_id`,`repo_id`),
  KEY `IDX_team_repo_org_id` (`org_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table team_unit
# ------------------------------------------------------------

DROP TABLE IF EXISTS `team_unit`;

CREATE TABLE `team_unit` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `org_id` bigint(20) DEFAULT NULL,
  `team_id` bigint(20) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_team_unit_s` (`team_id`,`type`),
  KEY `IDX_team_unit_org_id` (`org_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table team_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `team_user`;

CREATE TABLE `team_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `org_id` bigint(20) DEFAULT NULL,
  `team_id` bigint(20) DEFAULT NULL,
  `uid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_team_user_s` (`team_id`,`uid`),
  KEY `IDX_team_user_org_id` (`org_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table topic
# ------------------------------------------------------------

DROP TABLE IF EXISTS `topic`;

CREATE TABLE `topic` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `repo_count` int(11) DEFAULT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_topic_name` (`name`),
  KEY `IDX_topic_created_unix` (`created_unix`),
  KEY `IDX_topic_updated_unix` (`updated_unix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table tracked_time
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tracked_time`;

CREATE TABLE `tracked_time` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `issue_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  `time` bigint(20) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_tracked_time_issue_id` (`issue_id`),
  KEY `IDX_tracked_time_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table two_factor
# ------------------------------------------------------------

DROP TABLE IF EXISTS `two_factor`;

CREATE TABLE `two_factor` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) DEFAULT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `scratch_salt` varchar(255) DEFAULT NULL,
  `scratch_hash` varchar(255) DEFAULT NULL,
  `last_used_passcode` varchar(10) DEFAULT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_two_factor_uid` (`uid`),
  KEY `IDX_two_factor_created_unix` (`created_unix`),
  KEY `IDX_two_factor_updated_unix` (`updated_unix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table u2f_registration
# ------------------------------------------------------------

DROP TABLE IF EXISTS `u2f_registration`;

CREATE TABLE `u2f_registration` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `raw` blob,
  `counter` bigint(20) DEFAULT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_u2f_registration_user_id` (`user_id`),
  KEY `IDX_u2f_registration_created_unix` (`created_unix`),
  KEY `IDX_u2f_registration_updated_unix` (`updated_unix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table upload
# ------------------------------------------------------------

DROP TABLE IF EXISTS `upload`;

CREATE TABLE `upload` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(40) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_upload_uuid` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `lower_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `keep_email_private` tinyint(1) DEFAULT NULL,
  `email_notifications_preference` varchar(20) NOT NULL DEFAULT 'enabled',
  `passwd` varchar(255) NOT NULL,
  `passwd_hash_algo` varchar(255) NOT NULL DEFAULT 'pbkdf2',
  `must_change_password` tinyint(1) NOT NULL DEFAULT '0',
  `login_type` int(11) DEFAULT NULL,
  `login_source` bigint(20) NOT NULL DEFAULT '0',
  `login_name` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `rands` varchar(10) DEFAULT NULL,
  `salt` varchar(10) DEFAULT NULL,
  `language` varchar(5) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  `last_login_unix` bigint(20) DEFAULT NULL,
  `last_repo_visibility` tinyint(1) DEFAULT NULL,
  `max_repo_creation` int(11) NOT NULL DEFAULT '-1',
  `is_active` tinyint(1) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `is_restricted` tinyint(1) NOT NULL DEFAULT '0',
  `allow_git_hook` tinyint(1) DEFAULT NULL,
  `allow_import_local` tinyint(1) DEFAULT NULL,
  `allow_create_organization` tinyint(1) DEFAULT '1',
  `prohibit_login` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(2048) NOT NULL,
  `avatar_email` varchar(255) NOT NULL,
  `use_custom_avatar` tinyint(1) DEFAULT NULL,
  `num_followers` int(11) DEFAULT NULL,
  `num_following` int(11) NOT NULL DEFAULT '0',
  `num_stars` int(11) DEFAULT NULL,
  `num_repos` int(11) DEFAULT NULL,
  `num_teams` int(11) DEFAULT NULL,
  `num_members` int(11) DEFAULT NULL,
  `visibility` int(11) NOT NULL DEFAULT '0',
  `repo_admin_change_team_access` tinyint(1) NOT NULL DEFAULT '0',
  `diff_view_style` varchar(255) NOT NULL DEFAULT '',
  `theme` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_user_lower_name` (`lower_name`),
  UNIQUE KEY `UQE_user_name` (`name`),
  KEY `IDX_user_is_active` (`is_active`),
  KEY `IDX_user_created_unix` (`created_unix`),
  KEY `IDX_user_updated_unix` (`updated_unix`),
  KEY `IDX_user_last_login_unix` (`last_login_unix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `lower_name`, `name`, `full_name`, `email`, `keep_email_private`, `email_notifications_preference`, `passwd`, `passwd_hash_algo`, `must_change_password`, `login_type`, `login_source`, `login_name`, `type`, `location`, `website`, `rands`, `salt`, `language`, `description`, `created_unix`, `updated_unix`, `last_login_unix`, `last_repo_visibility`, `max_repo_creation`, `is_active`, `is_admin`, `is_restricted`, `allow_git_hook`, `allow_import_local`, `allow_create_organization`, `prohibit_login`, `avatar`, `avatar_email`, `use_custom_avatar`, `num_followers`, `num_following`, `num_stars`, `num_repos`, `num_teams`, `num_members`, `visibility`, `repo_admin_change_team_access`, `diff_view_style`, `theme`)
VALUES
	(1,'donaldzou','donaldzou','','donaldzou@live.hk',0,'enabled','a5ee8d38f9ebb8e461b5d934a8f4574ad57e5edf2613187f1034d19568c5455504a8dbbf59aa62625bec0059e8ca22fa6275','pbkdf2',0,0,0,'',0,'','','GBKEDOV6LP','kCAWa4IQ8j','en-US','',1595299518,1595300835,1595300835,0,-1,1,1,0,0,0,1,0,'13e1835d83f79c11e52b58b978fd1197','donaldzou@live.hk',0,0,0,0,0,0,0,0,0,'','gitea'),
	(2,'yimingsu','yimingsu','','bgysym@126.com',0,'enabled','345080875eca38ecac8f49a5ebca3dfc384988f3cb1180bc32efbb006f8a234ec787c85c089564685190c85c5d73853cc0b3','pbkdf2',0,0,0,'',0,'','','rFdsoGrPpH','j362BnEY1a','en-US','',1595303680,1595304880,1595303680,0,-1,1,0,0,0,0,1,0,'00ad6fc5a356158a94da2636c321e2ca','bgysym@126.com',1,0,0,0,0,0,0,0,0,'','gitea');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_open_id
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_open_id`;

CREATE TABLE `user_open_id` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `show` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_user_open_id_uri` (`uri`),
  KEY `IDX_user_open_id_uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table version
# ------------------------------------------------------------

DROP TABLE IF EXISTS `version`;

CREATE TABLE `version` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `version` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

LOCK TABLES `version` WRITE;
/*!40000 ALTER TABLE `version` DISABLE KEYS */;

INSERT INTO `version` (`id`, `version`)
VALUES
	(1,141);

/*!40000 ALTER TABLE `version` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table watch
# ------------------------------------------------------------

DROP TABLE IF EXISTS `watch`;

CREATE TABLE `watch` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `repo_id` bigint(20) DEFAULT NULL,
  `mode` smallint(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQE_watch_watch` (`user_id`,`repo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table webhook
# ------------------------------------------------------------

DROP TABLE IF EXISTS `webhook`;

CREATE TABLE `webhook` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `repo_id` bigint(20) DEFAULT NULL,
  `org_id` bigint(20) DEFAULT NULL,
  `is_system_webhook` tinyint(1) DEFAULT NULL,
  `url` text,
  `signature` text,
  `http_method` varchar(255) DEFAULT NULL,
  `content_type` int(11) DEFAULT NULL,
  `secret` text,
  `events` text,
  `is_ssl` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `hook_task_type` int(11) DEFAULT NULL,
  `meta` text,
  `last_status` int(11) DEFAULT NULL,
  `created_unix` bigint(20) DEFAULT NULL,
  `updated_unix` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_webhook_org_id` (`org_id`),
  KEY `IDX_webhook_is_active` (`is_active`),
  KEY `IDX_webhook_created_unix` (`created_unix`),
  KEY `IDX_webhook_updated_unix` (`updated_unix`),
  KEY `IDX_webhook_repo_id` (`repo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
