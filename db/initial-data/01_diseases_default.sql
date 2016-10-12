
INSERT INTO diseases (disease_name, created_at)
SELECT * FROM (SELECT 'Tuberculosis', current_timestamp) AS tmp
WHERE NOT EXISTS (
    SELECT disease_name FROM diseases WHERE disease_name = 'Tuberculosis'
) LIMIT 1;


INSERT INTO diseases (disease_name, created_at)
SELECT * FROM (SELECT 'HIV', current_timestamp) AS tmp
WHERE NOT EXISTS (
    SELECT disease_name FROM diseases WHERE disease_name = 'HIV'
) LIMIT 1;