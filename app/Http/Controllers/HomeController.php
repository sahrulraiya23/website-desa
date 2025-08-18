<?php
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use App\Models\VillageHistory;
use App\Models\VisionMission;
use App\Models\VillageStructure;
use App\Models\VillageMap;
use App\Models\VillagePotential;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $histories = VillageHistory::active()->latest()->take(3)->get();
        $visionMission = VisionMission::active()->first();
        $structures = VillageStructure::active()->orderBy('order')->take(6)->get();
        $potentials = VillagePotential::active()->where('is_featured', true)->take(4)->get();

        return view('home', compact('histories', 'visionMission', 'structures', 'potentials'));
    }

    public function sejarah()
    {
        $histories = VillageHistory::active()->orderBy('year', 'desc')->paginate(10);
        return view('sejarah', compact('histories'));
    }

    public function visiMisi()
    {
        $visionMission = VisionMission::active()->first();
        return view('visi-misi', compact('visionMission'));
    }

    public function peta()
    {
        $maps = VillageMap::latest()->get();
        return view('peta', compact('maps'));
    }

    public function struktur()
    {
        $structures = VillageStructure::active()->orderBy('order')->get();
        return view('struktur', compact('structures'));
    }

    public function potensi()
    {
        $potentials = VillagePotential::active()->paginate(12);
        $categories = VillagePotential::active()->distinct()->pluck('category');
        return view('potensi', compact('potentials', 'categories'));
    }
}
