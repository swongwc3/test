<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/18/2015
 * Time: 11:57 AM
 */

include_once('itemdb.php');


/* AD */

update_item(insert_piece(2, 1, 2, 1), "ACharge", 2);
update_item(insert_piece(2, 1, 4, 1), "ACharge", 2);
update_item(insert_piece(2, 2, 6, 1), "HP", 2);
update_item(insert_piece(2, 3, 7, 1), "HP", 2);
update_item(insert_piece(2, 4, 8, 1), "Acc", 2);
update_item($item = insert_piece(2, 5, 9, 1), "MSpd", 2);
update_item($item, "JSpd", 2);
update_item($item = insert_piece(2, 6, 10, 1), "Crit", 2);
update_item($item, "Acc", 1);
update_item($item = insert_piece(2, 8, 32, 1), "PA", 23);
update_item($item, "MA", 23);
update_item($item, "Crit", 1);
update_item($item = insert_piece(2, 10, 41, 1), "PA", 27);
update_item($item, "MA", 27);
update_item($item, "PD", 5);
update_item($item, "MD", 5);
update_item($item, "ASpd", 1);
update_item($item, "MSpd", 3);
update_item($item, "JSpd", 3);
update_item($item = insert_piece(2, 11, 49, 1), "PA", 25);
update_item($item, "MA", 25);
update_item($item, "Crit", 2);
update_item($item, "MSpd", 3);
update_item($item, "JSpd", 3);
update_item(insert_piece(2, 13, 56, 2), "Acc", 4);
update_item(insert_piece(2, 15, 56, 2), "ARes", 40);
update_item($item = insert_piece(2, 16, 56, 2), "PA", 125);
update_item($item, "MA", 125);
update_item($item, "PD", 75);
update_item($item, "MD", 75);
update_item(insert_piece(2, 17, 56, 2), "ATime", 30);
update_item($item = insert_piece(2, 18, 56, 2), "PA", 50);
update_item($item, "MA", 50);
update_item(insert_piece(2, 19, 56, 2), "ASpd", 2.5);

/* ignition caligo = set 6*/

update_item($item = insert_piece(6, 1, 2, 1), "Acc", 6);
update_item($item, "PA", 25);
update_item($item, "MA", 25);
update_item($item, "PD", 15);
update_item($item, "MD", 15);
update_item($item, "SRes", 50);
update_item($item, "ElemID", 1);
update_item($item = insert_piece(6, 2, 6, 1), "HP", 2);
update_item($item, "PA", 25);
update_item($item, "MA", 25);
update_item($item, "PD", 10);
update_item($item, "MD", 10);
update_item($item = insert_piece(6, 3, 7, 1), "HP", 2);
update_item($item, "PA", 25);
update_item($item, "MA", 25);
update_item($item, "PD", 10);
update_item($item, "MD", 10);
update_item($item = insert_piece(6, 4, 8, 1), "ATime", 1);
update_item($item, "PA", 20);
update_item($item, "MA", 20);
update_item($item, "PD", 5);
update_item($item, "MD", 5);
update_item($item = insert_piece(6, 5, 9, 1), "MSpd", 3);
update_item($item, "JSpd", 3);
update_item($item, "PA", 20);
update_item($item, "MA", 20);
update_item($item, "PD", 5);
update_item($item, "MD", 5);
update_item($item = insert_piece(6, 6, 10, 1), "Crit", 2);
update_item($item, "PA", 60);
update_item($item, "MA", 60);
update_item($item, "SRes", 100);
update_item($item, "ElemID", 1);
update_item($item = insert_piece(6, 7, 26, 1), "ATime", 1);
update_item($item, "PA", 15);
update_item($item, "MA", 15);
update_item($item, "PD", 15);
update_item($item, "MD", 15);
update_item($item, "SRes", 75);
update_item($item, "elemID", 1);
update_item($item = insert_piece(6, 10, 41, 1), "ATime", 3);
update_item($item, "PA", 25);
update_item($item, "MA", 25);
update_item($item, "PD", 20);
update_item($item, "MD", 20);
update_item($item, "MSpd", 3);
update_item($item, "JSpd", 3);
update_item($item = insert_piece(6, 11, 55, 1), "ADmg", 1);
update_item($item, "ATime", 3);
update_item($item, "JSpd", 3);
update_item(insert_piece(6, 14, 56, 2), "ARes", 45);
update_item(insert_piece(6, 15, 56, 2), "ATime", 5);
update_item($item = insert_piece(6, 16, 56, 2), "Crit", 5);
update_item($item, "SpEff", "+2% Fire Proc");
update_item($item = insert_piece(6, 17, 56, 2), "ARes", 25);
update_item($item = insert_piece(6, 18, 56, 2), "HP", 15);
update_item($item, "Crit", 3);
update_item($item = insert_piece(6, 19, 56, 2), "ASpd", 2);