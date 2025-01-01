<?php 


function cars(){

    $cars = [
        [
            "url"=>"lexus-es-300h",
            "name"=>"Lexus ES 300H",
            "image"=>"lexsus.webp",
            "rate"=>"350",
            "model"=>"Sedan",
            "seats"=>"5",
            "doors"=>"4",
            "luggage"=>"Luggage",
            "detailImages"=>["Lexus_1.jpg","Lexus_2.jpg","Lexus_3.jpg","Lexus_4.jpg"],
            "showHome"=>true
        ],
        [
            "url"=>"audi-a6",
            "name"=>"Audi A6",
            "image"=>"2024_24-1024x464-1-1.webp",
            "rate"=>"400",
            "model"=>"Sedan",
            "seats"=>"5",
            "doors"=>"4",
            "luggage"=>"Luggage",
            "detailImages"=>["audi_1.jpg","audi_2.jpg","audi_3.jpg","audi_4.jpg"],
            "showHome"=>true
        ],
        [
            "url"=>"bmw-7-serious",
            "name"=>"BMW 7 Serious",
            "image"=>"bmw_7.png",
            "rate"=>"500",
            "model"=>"Sedan",
            "seats"=>"5",
            "doors"=>"4",
            "luggage"=>"Luggage",
            "detailImages"=>["bmw7_1.jpg","bmw7_2.jpg","bmw7_3.jpg","bmw7_4.jpg"],
            "showHome"=>true
        ],
        [
            "url"=>"tesla",
            "name"=>"Tesla",
            "image"=>"tesla-1536x875-1-e1701091008713-1024x540-1.png",
            "rate"=>"800",
            "model"=>"Sedan",
            "seats"=>"5",
            "doors"=>"4",
            "luggage"=>"Luggage",
            "detailImages"=>["tesla_1.jpg","tesla_2.jpg","tesla_3.jpg","tesla_4.jpg"],
            "showHome"=>false
        ],
        [
            "url"=>"audi-a8",
            "name"=>"Audi A8",
            "image"=>"e82858ad-dbad-4d06-b69a-c2ad944961d9-qgnqa6rp7ak2ad07rh99ujqlaff57xfze73grcm9sg.webp",
            "rate"=>"800",
            "model"=>"Sedan",
            "seats"=>"5",
            "doors"=>"4",
            "luggage"=>"Luggage",
            "detailImages"=>["audi_a8_1.jpg","audi_a8_2.jpg","audi_a8_3.jpg","audi_a8_4.jpg"],
            "showHome"=>false
        ],
        [
            "url"=>"mercedes-s-class-500",
            "name"=>"Mercedes S Class 500",
            "image"=>"s-class.png",
            "rate"=>"1000",
            "model"=>"Sedan",
            "seats"=>"5",
            "doors"=>"4",
            "luggage"=>"Luggage",
            "detailImages"=>["Benz_sclass_1.jpg","Benz_sclass_2.jpg","Benz_sclass_3.jpg","Benz_sclass_4.jpg"],
            "showHome"=>true
        ],
        [
            "url"=>"toyota-highlander",
            "name"=>"Toyato HighLander",
            "image"=>"highlander-2048x878-1.webp",
            "rate"=>"350",
            "model"=>"SUV",
            "seats"=>"7",
            "doors"=>"4",
            "luggage"=>"Luggage",
            "detailImages"=>["highlander_1.jpg","highlander_2.jpg","highlander_3.jpg","highlander_4.jpg"],
            "showHome"=>false
        ],
        [
            "url"=>"kia-carnival",
            "name"=>"KIA Carnival",
            "image"=>"2947881-L2hvbWUvZGVhbGVycy9hc3NldHMvNjMyL2ltYWdlcy8yOTQ3ODgxLTIwMjNraWFjYXJuaXZhbG1wdmV4LnBuZw.png",
            "rate"=>"380",
            "model"=>"SUV",
            "seats"=>"8",
            "doors"=>"4",
            "luggage"=>"Luggage",
            "detailImages"=>["kiacarnival_1.jpg","kiacarnival_2.jpg","kiacarnival_3.jpg","kiacarnival_4.jpg"],
            "showHome"=>false
        ],
        [
            "url"=>"mercedes-v250",
            "name"=>"Mercedes v250",
            "image"=>"viano.png",
            "rate"=>"550",
            "model"=>"SUV",
            "seats"=>"8",
            "doors"=>"4",
            "luggage"=>"Luggage",
            "detailImages"=>["Benz_v250_1.jpg","Benz_v250_2.jpg","Benz_v250_3.jpg","Benz_v250_4.jpg"],
            "showHome"=>true
        ],
        [
            "url"=>"gmc-yukon-xl",
            "name"=>"GMC Yukon XL",
            "image"=>"mlp-img-top-2023-yukon-temp-1.png",
            "rate"=>"500",
            "model"=>"SUV",
            "seats"=>"7",
            "doors"=>"4",
            "luggage"=>"Luggage",
            "detailImages"=>["GMC_yukon_1.jpg","GMC_yukon_2.jpg","GMC_yukon_3.jpg","GMC_yukon_4.jpg"],
            "showHome"=>true
        ],
        [
            "url"=>"suburban-chevrolet",
            "name"=>"Suburban Chevrolet",
            "image"=>"2023_24-1-1.webp",
            "rate"=>"1200",
            "model"=>"SUV",
            "seats"=>"8",
            "doors"=>"4",
            "luggage"=>"Luggage",
            "detailImages"=>["suburban_1.jpg","suburban_2.jpg","suburban_3.jpg","suburban_4.jpg"],
            "showHome"=>true
        ],
        [
            "url"=>"gmc-denali-20-passenger",
            "name"=>"GMC Denali 20 Passenger",
            "image"=>"gmc_denali.png",
            "rate"=>"500",
            "model"=>"Super Stretch",
            "seats"=>"20",
            "doors"=>"3",
            "luggage"=>"Luggage",
            "detailImages"=>["GMC_deneli20_1.jpg","GMC_deneli20_2.jpg","GMC_deneli20_3.jpg","GMC_deneli20_4.jpg"],
            "showHome"=>true
        ],
        [
            "url"=>"mercedes-sprinter-executive",
            "name"=>"Mercedes Sprinter Executive",
            "image"=>"sprinter.png",
            "rate"=>"1500",
            "model"=>"SUV",
            "seats"=>"14",
            "doors"=>"4",
            "luggage"=>"Luggage",
            "detailImages"=>["benz_van_1.jpg","benz_van_2.jpg","benz_van_3.jpg","benz_van_4.jpg"],
            "showHome"=>false
        ],
        [
            "url"=>"king-long-bus",
            "name"=>"King Long Bus",
            "image"=>"bus-mercedes-benz-sprinter-car-luxury-vehicle-png-favpng-Kd7Y6VpPpvk4x1Sv6PY5gXJXi-removebg.png",
            "rate"=>"1000",
            "model"=>"Bus",
            "seats"=>"30",
            "doors"=>"4",
            "luggage"=>"Luggage",
            "detailImages"=>["kinglong_1.jpg","kinglong_2.jpg","kinglong_3.jpg","kinglong_4.jpg"],
            "showHome"=>false
        ],
        
    ];
    return $cars;
}