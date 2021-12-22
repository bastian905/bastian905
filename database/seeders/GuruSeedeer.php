<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;
use DB;
use App\Models\guru;
class GuruSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('gurus')->insert([
            'nip' => 122394889298,
            'nama_guru' => "ngatimin",
            'mapel' => "BINDO",
            // 'created_at' => \Carbon\Carbon::now(),
            // 'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
