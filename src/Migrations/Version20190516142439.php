<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190516142439 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE news CHANGE author_id author_id INT NOT NULL, CHANGE comments_count comments_count INT NOT NULL');
        $this->addSql('ALTER TABLE versions CHANGE project_id project_id INT NOT NULL');
        $this->addSql('ALTER TABLE workflows CHANGE tracker_id tracker_id INT NOT NULL, CHANGE old_status_id old_status_id INT NOT NULL, CHANGE new_status_id new_status_id INT NOT NULL, CHANGE role_id role_id INT NOT NULL, CHANGE assignee assignee TINYINT(1) NOT NULL, CHANGE author author TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE roles CHANGE builtin builtin INT NOT NULL');
        $this->addSql('ALTER TABLE custom_values CHANGE customized_id customized_id INT NOT NULL, CHANGE custom_field_id custom_field_id INT NOT NULL');
        $this->addSql('DROP INDEX index_push_notifications_on_seen_and_user_id_and_url ON push_notifications');
        $this->addSql('ALTER TABLE push_notifications CHANGE seen seen TINYINT(1) DEFAULT NULL');
        $this->addSql('CREATE INDEX index_push_notifications_on_seen_and_user_id_and_url ON push_notifications (seen, user_id, url)');
        $this->addSql('ALTER TABLE tokens CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE issue_categories CHANGE project_id project_id INT NOT NULL');
        $this->addSql('ALTER TABLE projects CHANGE inherit_members inherit_members TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE trackers CHANGE is_in_chlog is_in_chlog TINYINT(1) NOT NULL, CHANGE fields_bits fields_bits INT DEFAULT NULL');
        $this->addSql('ALTER TABLE custom_fields CHANGE is_required is_required TINYINT(1) NOT NULL, CHANGE is_for_all is_for_all TINYINT(1) NOT NULL, CHANGE is_filter is_filter TINYINT(1) NOT NULL, CHANGE searchable searchable TINYINT(1) DEFAULT NULL, CHANGE multiple multiple TINYINT(1) DEFAULT NULL, CHANGE show_in_list show_in_list TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE auth_sources CHANGE onthefly_register onthefly_register TINYINT(1) NOT NULL, CHANGE tls tls TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE crm_templates CHANGE is_for_all is_for_all TINYINT(1) DEFAULT NULL, CHANGE usage_count usage_count INT DEFAULT NULL');
        $this->addSql('ALTER TABLE issues CHANGE lock_version lock_version INT NOT NULL, CHANGE done_ratio done_ratio INT NOT NULL, CHANGE is_private is_private TINYINT(1) NOT NULL, CHANGE visible_by_customer visible_by_customer TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE wiki_pages CHANGE protected protected TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE imports CHANGE finished finished TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE comments CHANGE commented_id commented_id INT NOT NULL, CHANGE author_id author_id INT NOT NULL');
        $this->addSql('ALTER TABLE enumerations CHANGE is_default is_default TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE attachments CHANGE filesize filesize BIGINT NOT NULL, CHANGE downloads downloads INT NOT NULL, CHANGE author_id author_id INT NOT NULL');
        $this->addSql('ALTER TABLE custom_fields_projects CHANGE custom_field_id custom_field_id INT NOT NULL, CHANGE project_id project_id INT NOT NULL');
        $this->addSql('ALTER TABLE boards CHANGE topics_count topics_count INT NOT NULL, CHANGE messages_count messages_count INT NOT NULL');
        $this->addSql('ALTER TABLE members CHANGE user_id user_id INT NOT NULL, CHANGE project_id project_id INT NOT NULL, CHANGE mail_notification mail_notification TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE custom_fields_trackers CHANGE custom_field_id custom_field_id INT NOT NULL, CHANGE tracker_id tracker_id INT NOT NULL');
        $this->addSql('ALTER TABLE watchers CHANGE watchable_id watchable_id INT NOT NULL');
        $this->addSql('ALTER TABLE queries CHANGE user_id user_id INT NOT NULL, CHANGE visibility visibility INT DEFAULT NULL');
        $this->addSql('ALTER TABLE documents CHANGE project_id project_id INT NOT NULL, CHANGE category_id category_id INT NOT NULL');
        $this->addSql('ALTER TABLE journals CHANGE journalized_id journalized_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL, CHANGE visible_by_customer visible_by_customer TINYINT(1) DEFAULT NULL, CHANGE private_notes private_notes TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE user_preferences CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE issue_statuses CHANGE is_closed is_closed TINYINT(1) NOT NULL, CHANGE on_activity_timer_start on_activity_timer_start TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE journal_details CHANGE journal_id journal_id INT NOT NULL');
        $this->addSql('ALTER TABLE users CHANGE admin admin TINYINT(1) NOT NULL, CHANGE must_change_passwd must_change_passwd TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE crm_configurations CHANGE from_mail_active from_mail_active TINYINT(1) DEFAULT NULL, CHANGE reply_by_default reply_by_default TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE projects_trackers CHANGE project_id project_id INT NOT NULL, CHANGE tracker_id tracker_id INT NOT NULL');
        $this->addSql('ALTER TABLE email_addresses CHANGE is_default is_default TINYINT(1) NOT NULL, CHANGE notify notify TINYINT(1) NOT NULL');
        $this->addSql('DROP INDEX index_mru_bookmarks_on_user_id_and_uri_path ON mru_bookmarks');
        $this->addSql('CREATE INDEX index_mru_bookmarks_on_user_id_and_uri_path ON mru_bookmarks (user_id, uri_path)');
        $this->addSql('ALTER TABLE checklist_templates CHANGE is_default is_default TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE messages CHANGE replies_count replies_count INT NOT NULL, CHANGE locked locked TINYINT(1) DEFAULT NULL, CHANGE sticky sticky INT DEFAULT NULL');
        $this->addSql('DROP INDEX index_storage_nodes_lookup ON storage_nodes');
        $this->addSql('ALTER TABLE storage_nodes CHANGE protected protected TINYINT(1) NOT NULL, CHANGE hidden hidden TINYINT(1) DEFAULT NULL');
        $this->addSql('CREATE INDEX index_storage_nodes_lookup ON storage_nodes (parent_id, name)');
        $this->addSql('ALTER TABLE chat_log_entries CHANGE action action TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE checklists CHANGE is_done is_done TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE repositories CHANGE project_id project_id INT NOT NULL, CHANGE is_default is_default TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE attachments CHANGE filesize filesize BIGINT DEFAULT 0 NOT NULL, CHANGE downloads downloads INT DEFAULT 0 NOT NULL, CHANGE author_id author_id INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE auth_sources CHANGE onthefly_register onthefly_register TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE tls tls TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE boards CHANGE topics_count topics_count INT DEFAULT 0 NOT NULL, CHANGE messages_count messages_count INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE chat_log_entries CHANGE action action TINYINT(1) DEFAULT \'0\'');
        $this->addSql('ALTER TABLE checklist_templates CHANGE is_default is_default TINYINT(1) DEFAULT \'0\'');
        $this->addSql('ALTER TABLE checklists CHANGE is_done is_done TINYINT(1) DEFAULT \'0\'');
        $this->addSql('ALTER TABLE comments CHANGE commented_id commented_id INT DEFAULT 0 NOT NULL, CHANGE author_id author_id INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE crm_configurations CHANGE from_mail_active from_mail_active TINYINT(1) DEFAULT \'0\', CHANGE reply_by_default reply_by_default TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE crm_templates CHANGE is_for_all is_for_all TINYINT(1) DEFAULT \'0\', CHANGE usage_count usage_count INT DEFAULT 0');
        $this->addSql('ALTER TABLE custom_fields CHANGE is_required is_required TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE is_for_all is_for_all TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE is_filter is_filter TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE searchable searchable TINYINT(1) DEFAULT \'0\', CHANGE multiple multiple TINYINT(1) DEFAULT \'0\', CHANGE show_in_list show_in_list TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE custom_fields_projects CHANGE custom_field_id custom_field_id INT DEFAULT 0 NOT NULL, CHANGE project_id project_id INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE custom_fields_trackers CHANGE custom_field_id custom_field_id INT DEFAULT 0 NOT NULL, CHANGE tracker_id tracker_id INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE custom_values CHANGE customized_id customized_id INT DEFAULT 0 NOT NULL, CHANGE custom_field_id custom_field_id INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE documents CHANGE project_id project_id INT DEFAULT 0 NOT NULL, CHANGE category_id category_id INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE email_addresses CHANGE is_default is_default TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE notify notify TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE enumerations CHANGE is_default is_default TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE imports CHANGE finished finished TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE issue_categories CHANGE project_id project_id INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE issue_statuses CHANGE is_closed is_closed TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE on_activity_timer_start on_activity_timer_start TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE issues CHANGE lock_version lock_version INT DEFAULT 0 NOT NULL, CHANGE done_ratio done_ratio INT DEFAULT 0 NOT NULL, CHANGE is_private is_private TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE visible_by_customer visible_by_customer TINYINT(1) DEFAULT \'0\'');
        $this->addSql('ALTER TABLE journal_details CHANGE journal_id journal_id INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE journals CHANGE journalized_id journalized_id INT DEFAULT 0 NOT NULL, CHANGE user_id user_id INT DEFAULT 0 NOT NULL, CHANGE visible_by_customer visible_by_customer TINYINT(1) DEFAULT \'0\', CHANGE private_notes private_notes TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE members CHANGE user_id user_id INT DEFAULT 0 NOT NULL, CHANGE project_id project_id INT DEFAULT 0 NOT NULL, CHANGE mail_notification mail_notification TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE messages CHANGE replies_count replies_count INT DEFAULT 0 NOT NULL, CHANGE locked locked TINYINT(1) DEFAULT \'0\', CHANGE sticky sticky INT DEFAULT 0');
        $this->addSql('DROP INDEX index_mru_bookmarks_on_user_id_and_uri_path ON mru_bookmarks');
        $this->addSql('CREATE INDEX index_mru_bookmarks_on_user_id_and_uri_path ON mru_bookmarks (user_id, uri_path(255))');
        $this->addSql('ALTER TABLE news CHANGE author_id author_id INT DEFAULT 0 NOT NULL, CHANGE comments_count comments_count INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE projects CHANGE inherit_members inherit_members TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE projects_trackers CHANGE project_id project_id INT DEFAULT 0 NOT NULL, CHANGE tracker_id tracker_id INT DEFAULT 0 NOT NULL');
        $this->addSql('DROP INDEX index_push_notifications_on_seen_and_user_id_and_url ON push_notifications');
        $this->addSql('ALTER TABLE push_notifications CHANGE seen seen TINYINT(1) DEFAULT \'0\'');
        $this->addSql('CREATE INDEX index_push_notifications_on_seen_and_user_id_and_url ON push_notifications (seen, user_id, url(200))');
        $this->addSql('ALTER TABLE queries CHANGE user_id user_id INT DEFAULT 0 NOT NULL, CHANGE visibility visibility INT DEFAULT 0');
        $this->addSql('ALTER TABLE repositories CHANGE project_id project_id INT DEFAULT 0 NOT NULL, CHANGE is_default is_default TINYINT(1) DEFAULT \'0\'');
        $this->addSql('ALTER TABLE roles CHANGE builtin builtin INT DEFAULT 0 NOT NULL');
        $this->addSql('DROP INDEX index_storage_nodes_lookup ON storage_nodes');
        $this->addSql('ALTER TABLE storage_nodes CHANGE protected protected TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE hidden hidden TINYINT(1) DEFAULT \'0\'');
        $this->addSql('CREATE INDEX index_storage_nodes_lookup ON storage_nodes (parent_id, name(50))');
        $this->addSql('ALTER TABLE tokens CHANGE user_id user_id INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE trackers CHANGE is_in_chlog is_in_chlog TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE fields_bits fields_bits INT DEFAULT 0');
        $this->addSql('ALTER TABLE user_preferences CHANGE user_id user_id INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE users CHANGE admin admin TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE must_change_passwd must_change_passwd TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE versions CHANGE project_id project_id INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE watchers CHANGE watchable_id watchable_id INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE wiki_pages CHANGE protected protected TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE workflows CHANGE tracker_id tracker_id INT DEFAULT 0 NOT NULL, CHANGE old_status_id old_status_id INT DEFAULT 0 NOT NULL, CHANGE new_status_id new_status_id INT DEFAULT 0 NOT NULL, CHANGE role_id role_id INT DEFAULT 0 NOT NULL, CHANGE assignee assignee TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE author author TINYINT(1) DEFAULT \'0\' NOT NULL');
    }
}
