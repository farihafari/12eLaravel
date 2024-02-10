<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function userData(){
        $data =[
            ["name"=>"ali",
            "email"=>"ali@gmailo.com",
            "phone"=>"562432847"
        ],
        ["name"=>"alisha",
        "email"=>"ali@gmailo.com",
        "phone"=>"562432847"
    ],
    ["name"=>"ali",
    "email"=>"alishba@gmailo.com",
    "phone"=>"562432847"
],
["name"=>"ali",
"email"=>"aliyar@gmailo.com",
"phone"=>"562432847"
]
];
return view('index',compact('data'));
    }
}
