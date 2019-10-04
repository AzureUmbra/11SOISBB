<?php exit; ?>
1570132593
SELECT agr.*, agt.autogroups_type_name FROM (phpbb_autogroups_rules agr CROSS JOIN phpbb_autogroups_types agt) WHERE agr.autogroups_type_id = agt.autogroups_type_id
6
a:0:{}