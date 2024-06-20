<?php
//indexed/numeric array
$colors = ["Black","Green","Blue"];
print "<br>";
print_r($colors);

?>
<br>
<?php
$user = array ("Alex", "Peter", "Ann");
print $user[0];
?>
<pre>
    <?php print_r($user);?>
</pre>
<?php
//associiative arrays
$user_data = ["Fullname"=>"Alex Okama" , "email" => "AOKama@yahoo.com","Phone" =>"+25458430067"];
?>
<pre>
    <?php print_r ($user_data);
    print $user_data["email"];
    ?>
</pre>
<?php
//Multidimentional arrays

$user_details=[
    "Director" => array(
        "Fullname"=>"Alex Okama" , "email" => "AOKama@yahoo.com","Phone" =>[
            "Home"=>"+25458430067",
            "Work"=>"+2543839490",
            "Mobile"=>"+2548939330",
        ]

        ),
        "Secretary" => array(
            "Fullname"=>""
        )
        ];
        print $user_details
        ["Director"]["Phone"]["Work"];
        ?>
    <pre>
        <?php print_r($user_details);

    
        ?>
        </pre>
      