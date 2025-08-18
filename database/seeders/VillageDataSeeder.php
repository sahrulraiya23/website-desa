<?php
// database/seeders/VillageDataSeeder.php
namespace Database\Seeders;

use App\Models\VillageHistory;
use App\Models\VisionMission;
use App\Models\VillageStructure;
use App\Models\VillagePotential;
use Illuminate\Database\Seeder;

class VillageDataSeeder extends Seeder
{
    public function run()
    {
        // Sejarah Desa
        VillageHistory::create([
            'title' => 'Berdirinya Desa',
            'content' => 'Desa ini didirikan pada tahun 1950 oleh para pendiri yang memiliki visi untuk menciptakan lingkungan yang harmonis...',
            'year' => 1950,
        ]);

        // Visi Misi
        VisionMission::create([
            'vision' => 'Menjadi desa yang maju, sejahtera, dan berkelanjutan',
            'missions' => [
                'Meningkatkan kesejahteraan masyarakat',
                'Mengembangkan potensi ekonomi desa',
                'Melestarikan budaya dan lingkungan',
                'Meningkatkan kualitas pelayanan publik'
            ]
        ]);

        // Struktur Desa
        $structures = [
            ['name' => 'Kepala Desa', 'position' => 'Kepala Desa', 'order' => 1],
            ['name' => 'Sekretaris Desa', 'position' => 'Sekretaris Desa', 'order' => 2],
            ['name' => 'Bendahara Desa', 'position' => 'Bendahara Desa', 'order' => 3],
        ];

        foreach ($structures as $structure) {
            VillageStructure::create($structure);
        }

        // Potensi Desa
        $potentials = [
            [
                'title' => 'Pertanian Padi',
                'description' => 'Desa memiliki lahan pertanian yang luas dengan hasil padi berkualitas tinggi',
                'category' => 'Pertanian',
                'is_featured' => true
            ],
            [
                'title' => 'Wisata Alam',
                'description' => 'Pemandangan alam yang indah cocok untuk wisata eco-tourism',
                'category' => 'Wisata',
                'is_featured' => true
            ]
        ];

        foreach ($potentials as $potential) {
            VillagePotential::create($potential);
        }
    }
}
