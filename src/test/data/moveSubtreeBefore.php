<?php
$data=array(
  "moveSubtreeBefore"=>array(
    
    array(
        "desc"=>"move a node as first child of a node in his own subtree",
        "from"=>array(
            array(1,1,28),
                array(2,2,7),
                    array(5,3,4),
                    array(6,5,6),
                array(3,8,15),
                    array(7,9,12),
                        array(11,10,11),
                    array(8,13,14),
                array(12,16,21),
                    array(13,17,20),
                        array(14,18,19),
                array(4,22,27),
                    array(9,23,24),
                    array(10,25,26)
        ),
        "params"=>array(3,11),
        "to"=>array(
            array(1,1,28),
                array(2,2,7),
                    array(5,3,4),
                    array(6,5,6),
                array(3,8,15),
                    array(7,9,12),
                        array(11,10,11),
                    array(8,13,14),
                array(12,16,21),
                    array(13,17,20),
                        array(14,18,19),
                array(4,22,27),
                    array(9,23,24),
                    array(10,25,26)
        ),
        "error"=>1200
    ),
    
    array(
        "desc"=>"move a node before his leftmost sibling",
        "from"=>array(
            array(1,1,28),
                array(3,2,9),
                    array(7,3,6),
                        array(11,4,5),
                    array(8,7,8),
                array(12,10,15),
                    array(13,11,14),
                        array(14,12,13),
                array(2,16,21),
                    array(5,17,18),
                    array(6,19,20),
                array(4,22,27),
                    array(9,23,24),
                    array(10,25,26)
        ),
        "params"=>array(2,3),
        "to"=>array(
            array(1,1,28),
                array(2,2,7),
                    array(5,3,4),
                    array(6,5,6),
                array(3,8,15),
                    array(7,9,12),
                        array(11,10,11),
                    array(8,13,14),
                array(12,16,21),
                    array(13,17,20),
                        array(14,18,19),
                array(4,22,27),
                    array(9,23,24),
                    array(10,25,26)
        )
    ),
    
    
    array(
        "desc"=>"move a node before root",
        "from"=>array(
            array(1,1,22),
                array(2,2,7),
                    array(5,3,4),
                    array(6,5,6),
                array(3,8,15),
                    array(7,9,12),
                        array(11,10,11),
                    array(8,13,14),
                array(4,16,21),
                    array(9,17,18),
                    array(10,19,20)
        ),
        "params"=>array(2,1),
        "to"=>array(
            array(1,1,22),
                array(2,2,7),
                    array(5,3,4),
                    array(6,5,6),
                array(3,8,15),
                    array(7,9,12),
                        array(11,10,11),
                    array(8,13,14),
                array(4,16,21),
                    array(9,17,18),
                    array(10,19,20)
        ),
        "error"=>1100
    ),
    
    array(
        "desc"=>"move a node before a single leaf (not in his subtree)",
        "from"=>array(
            array(1,1,22),
                array(2,2,7),
                    array(5,3,4),
                    array(6,5,6),
                array(3,8,15),
                    array(7,9,12),
                        array(11,10,11),
                    array(8,13,14),
                array(4,16,21),
                    array(9,17,18),
                    array(10,19,20)
        ),
        "params"=>array(2,11),
        "to"=>array(
            array(1,1,22),
                array(3,2,15),
                    array(7,3,12),
                        array(2,4,9),
                            array(5,5,6),
                            array(6,7,8),
                        array(11,10,11),
                    array(8,13,14),
                array(4,16,21),
                    array(9,17,18),
                    array(10,19,20)
        )
    ),
    
    
    array(
        "desc"=> "move a node before a single leaf in his subtree",
        "from"=>array(
            array(1,1,22),
                array(2,2,7),
                    array(5,3,4),
                    array(6,5,6),
                array(3,8,15),
                    array(7,9,12),
                        array(11,10,11),
                    array(8,13,14),
                array(4,16,21),
                    array(9,17,18),
                    array(10,19,20)
        ),
        "params"=>array(2,6),
        "to"=>array(
            array(1,1,22),
                array(2,2,7),
                    array(5,3,4),
                    array(6,5,6),
                array(3,8,15),
                    array(7,9,12),
                        array(11,10,11),
                    array(8,13,14),
                array(4,16,21),
                    array(9,17,18),
                    array(10,19,20)
        ),
        "error"=>1200
    ),
    
    
    array(
        "desc"=>"move a node before his rightmost sibling",
        "from"=>array(
            array(1,1,28),
                array(2,2,7),
                    array(5,3,4),
                    array(6,5,6),
                array(3,8,15),
                    array(7,9,12),
                        array(11,10,11),
                    array(8,13,14),
                array(12,16,21),
                    array(13,17,20),
                        array(14,18,19),
                array(4,22,27),
                    array(9,23,24),
                    array(10,25,26)
        ),
        "params"=>array(2,4),
        "to"=>array(
            array(1,1,28),
                array(3,2,9),
                    array(7,3,6),
                        array(11,4,5),
                    array(8,7,8),
                array(12,10,15),
                    array(13,11,14),
                        array(14,12,13),
                array(2,16,21),
                    array(5,17,18),
                    array(6,19,20),
                array(4,22,27),
                    array(9,23,24),
                    array(10,25,26)
        )
    ),
    
    
    array(
        "desc"=>"move a node before an ancestor",
        "from"=>array(
            array(1,1,32),
                array(2,2,7),
                    array(5,3,4),
                    array(6,5,6),
                array(3,8,19),
                    array(7,9,16),
                        array(11,10,15),
                            array(15,11,12),
                            array(16,13,14),
                    array(8,17,18),
                array(12,20,25),
                    array(13,21,24),
                        array(14,22,23),
                array(4,26,31),
                    array(9,27,28),
                    array(10,29,30)
        ),
        "params"=>array(11,3),
        "to"=>array(
            array(1,1,32),
                array(2,2,7),
                    array(5,3,4),
                    array(6,5,6),
                array(11,8,13),
                    array(15,9,10),
                    array(16,11,12),
                array(3,14,19),
                    array(7,15,16),
                    array(8,17,18),
                array(12,20,25),
                    array(13,21,24),
                        array(14,22,23),
                array(4,26,31),
                    array(9,27,28),
                    array(10,29,30)
        )
    ),
    
    array(
        "desc"=>"move a node before his parent",
        "from"=>array(
            array(1,1,32),
                array(2,2,7),
                    array(5,3,4),
                    array(6,5,6),
                array(3,8,19),
                    array(7,9,16),
                        array(11,10,15),
                            array(15,11,12),
                            array(16,13,14),
                    array(8,17,18),
                array(12,20,25),
                    array(13,21,24),
                        array(14,22,23),
                array(4,26,31),
                    array(9,27,28),
                    array(10,29,30)
        ),
        "params"=>array(15,11),
        "to"=>array(
            array(1,1,32),
                array(2,2,7),
                    array(5,3,4),
                    array(6,5,6),
                array(3,8,19),
                    array(7,9,16),
                        array(15,10,11),
                        array(11,12,15),
                            array(16,13,14),
                    array(8,17,18),
                array(12,20,25),
                    array(13,21,24),
                        array(14,22,23),
                array(4,26,31),
                    array(9,27,28),
                    array(10,29,30)
        )
    )
  )
);

?>