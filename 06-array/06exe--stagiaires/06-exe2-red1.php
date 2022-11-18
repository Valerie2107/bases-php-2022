<?php
// création d'un tableau indexé

$tab = [5,
                                8,
                                "Coucou",
                                false,
                                27.12,
                                    ["coucou",
                                        "vous",
                                         "allez",
                                            "bien",
                                                    [9,
                                                    "Yes",
                                                    "je vais bien!",
                                        
                                            
                                            
                                            
                                            
                                                    ],
                            
                                    ],
                              ];

                    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exe2 Red1</title>
</head>
<body>
                    <code><pre>
                                <?php
                                    print_r($tab);
                    
                                        ?>
                    </pre></code>

                    <?=$tab[2]." ".$tab[5][1]." ".$tab[5][2]." ".$tab[5][3]."? <br>" ; ?>
                    <?=$tab[5][4][1].", ".$tab[5][4][2]." <br>"; ?>
</body>
</html>

