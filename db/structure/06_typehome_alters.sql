SET @preparedStatement = (SELECT IF(
    (SELECT COUNT(*)
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE table_name = 'persons'
             AND table_schema = 'hogardexto'
             AND column_name = 'typehomeid'
    ) > 0,
    "SELECT 1",
    "ALTER TABLE persons ADD COLUMN typehomeid int(11) DEFAULT 0;"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;

SET @preparedStatement = (SELECT IF(
    (SELECT COUNT(*)
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE table_name = 'persons'
             AND table_schema = 'hogardexto'
             AND column_name = 'typehomeoptionid'
    ) > 0,
    "SELECT 1",
    "ALTER TABLE persons ADD COLUMN typehomeoptionid int(11) default 0;"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;


SET @preparedStatement = (SELECT IF(
    (SELECT COUNT(*)
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE table_name = 'persons'
             AND table_schema = 'hogardexto'
             AND column_name = 'address'
    ) > 0,
    "SELECT 1",
    "ALTER TABLE persons ADD COLUMN address varchar(255) ;"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;
