CREATE TABLE `status` (
    `id` int NOT NULL AUTO_INCREMENT,
    `status_name` varchar(50) NOT NULL,
    `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `last_modified` datetime DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);

INSERT INTO status (status_name)
VALUES ('active'),
('inactive'),
('deleted'),
('marked');

CREATE TABLE `list` (
    `id` int NOT NULL AUTO_INCREMENT,
    `list_name` varchar(200) NOT NULL,
    `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `last_modified` datetime DEFAULT CURRENT_TIMESTAMP,
    `status_id` int NOT NULL,
    PRIMARY KEY (`id`),
    KEY `status_id` (`status_id`),
    CONSTRAINT `list_status_id` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`)
);

INSERT INTO list (list_name, status_id)
VALUES ('Easter Shopping List', 1);

CREATE TABLE `list_item` (
    `id` int NOT NULL AUTO_INCREMENT,
    `item_name` varchar(200) NOT NULL,
    `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `last_modified` datetime DEFAULT CURRENT_TIMESTAMP,
    `list_id` int NOT NULL,
    `status_id` int NOT NULL,
    PRIMARY KEY (`id`),
    KEY `list_id` (`list_id`),
    KEY `status_id` (`status_id`),
    CONSTRAINT `list_item_list_id` FOREIGN KEY (`list_id`) REFERENCES `list` (`id`),
    CONSTRAINT `list_item_status_id` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`)
);

INSERT INTO list_item (item_name, list_id, status_id)
VALUES ('Easter Eggs', 1, 1);