<?php

function biodata(){
  $data=[
    "name"=>"mustofa kamal",
    "age"=>20,
    "address"=>"Kediri Jawa Timur Indonesia",
    "hobbies"=>[
      "gamming","ngopi","kelayapan"
    ],
    "is_married"=>false,
    "list_school"=>[
      [
        "name"=>"SDN Ngronggo v",
        "year_in"=>2006,
        "year_out"=>2012
      ],
      [
        "name"=>"Mts Hidayatus Sholihinn",
        "year_in"=>2012,
        "year_out"=>2016
      ],
      [
        "name"=>"SMK Al Huda",
        "year_in"=>2016,
        "year_out"=>2019,
        "major"=>"Teknik Komputer dan Jaringan"
      ]
    ],
    "skills"=>[
      [
        "skill_name"=>"service Komputer",
        "level"=>"expert"
      ],
      [
        "skill_name"=>"networking",
        "level"=>"advanced"
      ],
      [
        "skill_name"=>"php",
        "level"=>"beginer"
      ]
    ],
    "interest_in_coding"=>true
  ];
  $json=json_encode($data);
  print_r($json);
}

biodata();

?>
