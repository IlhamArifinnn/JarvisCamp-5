<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'task';

    protected $fillable = [
        'name',
        'deadline',
        'status',
        'description'
    ];

    // Mendefinisikan data tugas sebagai properti statis
    // protected static $tasks = [
    //     [
    //         'id' => 1,
    //         'name' => 'Bahasa Inggris',
    //         'deadline' => '2024-04-29',
    //         'status' => 'Belum selesai',
    //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure deserunt aliquam beatae blanditiis asperiores corrupti tempora magnam, rem ratione voluptatem, dicta odit nulla error voluptates, doloribus dolor optio! Expedita soluta aut et quia ducimus animi laboriosam dolorem qui, at delectus. Quisquam numquam iure delectus, accusamus sapiente quas ducimus. Officiis distinctio, illum nulla reprehenderit quisquam placeat autem nisi at amet quibusdam incidunt temporibus accusantium cumque nihil id obcaecati cupiditate vel asperiores?
    //         '
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Matematika',
    //         'deadline' => '2024-04-29',
    //         'status' => 'Belum selesai',
    //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure deserunt aliquam beatae blanditiis asperiores corrupti tempora magnam, rem ratione voluptatem, dicta odit nulla error voluptates, doloribus dolor optio! Expedita soluta aut et quia ducimus animi laboriosam dolorem qui, at delectus. Quisquam numquam iure delectus, accusamus sapiente quas ducimus. Officiis distinctio, illum nulla reprehenderit quisquam placeat autem nisi at amet quibusdam incidunt temporibus accusantium cumque nihil id obcaecati cupiditate vel asperiores?
    //         '
    //     ],
    //     [
    //         'id' => 3,
    //         'name' => 'Fisika',
    //         'deadline' => '2024-04-29',
    //         'status' => 'Belum selesai',
    //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure deserunt aliquam beatae blanditiis asperiores corrupti tempora magnam, rem ratione voluptatem, dicta odit nulla error voluptates, doloribus dolor optio! Expedita soluta aut et quia ducimus animi laboriosam dolorem qui, at delectus. Quisquam numquam iure delectus, accusamus sapiente quas ducimus. Officiis distinctio, illum nulla reprehenderit quisquam placeat autem nisi at amet quibusdam incidunt temporibus accusantium cumque nihil id obcaecati cupiditate vel asperiores?
    //         '
    //     ],
    //     [
    //         'id' => 4,
    //         'name' => 'Kimia',
    //         'deadline' => '2024-04-29',
    //         'status' => 'Belum selesai',
    //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure deserunt aliquam beatae blanditiis asperiores corrupti tempora magnam, rem ratione voluptatem, dicta odit nulla error voluptates, doloribus dolor optio! Expedita soluta aut et quia ducimus animi laboriosam dolorem qui, at delectus. Quisquam numquam iure delectus, accusamus sapiente quas ducimus. Officiis distinctio, illum nulla reprehenderit quisquam placeat autem nisi at amet quibusdam incidunt temporibus accusantium cumque nihil id obcaecati cupiditate vel asperiores?            '
    //     ]
    // ];

    // // Method untuk mendapatkan data
    // public static function getAll()
    // {
    //     return self::$tasks;
    // }
}
