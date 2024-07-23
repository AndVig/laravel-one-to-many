<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Type::truncate();

        $types=['Frontend','Backend','Fullstack','Temp'];
        foreach($types as $type){
            $new_type=new Type();

            $new_type->name=$type;
            $new_type->slug=Str::of($type)->slug();

            $new_type->save();
        }

        Schema::enableForeignKeyConstraints();
    }
}
